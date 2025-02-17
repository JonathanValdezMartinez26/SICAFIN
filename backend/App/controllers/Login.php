<?php

namespace App\controllers;

defined("APPPATH") or die("Access denied");

use \Core\View;
use \Core\MasterDom;
use \App\models\Login as LoginDao;

class Login
{
    function __construct() {}

    public function index()
    {
        $extraHeader = <<<HTML
         
HTML;

        $extraFooter = <<<HTML
            <script src="/js/jquery.min.js"></script>
            <script src="/js/validate/jquery.validate.js"></script>
            <script>
                document.getElementById("usuario").focus();

                function mayus(e) {
                    e.value = e.value.toUpperCase()
                }

                $(document).ready(function () {
        
                   $("#login").validate({
                    rules: {
                        usuario: {
                            required: true,
                            checkUserName: true
                        },
                        password_: {
                            required: true
                        }
                    },
                    messages: {
                        usuario: {
                            required: "Este campo es requerido"
                        },
                        password: {
                            required: "Este campo es requerido"
                        }
                    },
                    errorPlacement: function(error, element) {
                        if (element.attr("name") == "password") {
                            error.insertAfter(element.closest('.input-group'));
                        } else {
                            error.insertAfter(element);
                        }
                    }
                })
                    
                    $("#btnEntrar").click(function () {
                        $.ajax({
                            type: "POST",
                            url: "/Login/verificarUsuario",
                            data: $("#login").serialize(),
                            success: function (response) {
                                if (response != "") {
                                    var usuario = jQuery.parseJSON(response)
                                    if (usuario.nombre != "") {
                                        $("#login").append(
                                            '<input type="hidden" name="autentication" id="autentication" value="OK"/>'
                                        )
                                        $("#login").append(
                                            '<input type="hidden" name="nombre" id="nombre" value="' +
                                                usuario.nombre +
                                                '"/>'
                                        )
                                        $("#login").submit()
                                    } else {
                                        swal(
                                            "Error de autenticación",
                                            "El usuario o contraseña son incorrectos, consulte al administrador",
                                            "error"
                                        )
                                    }
                                } else {
                                    swal(
                                        "Error de autenticación",
                                        "El usuario o contraseña son incorrectos, consulte al administrador",
                                        "error"
                                    )
                                }
                            }
                        })
                    })
                })
            </script>
        HTML;

        View::set('header', $extraHeader);
        View::set('footer', $extraFooter);
        View::render("login");
    }

    public function isUserValidate()
    {
        echo (count(LoginDao::getUser($_POST['usuario'])) >= 1) ? 'true' : 'false';
    }

    public function verificarUsuario()
    {
        $usuario = new \stdClass();
        $usuario->_usuario = MasterDom::getData("usuario");
        $usuario->_password = MasterDom::getData("password");
        $user = LoginDao::getById($usuario);

        if (count($user) >= 1) {
            $user['NOMBRE'] = utf8_encode($user['NOMBRE']);
            echo json_encode($user);
        }
    }

    public function crearSession()
    {
        $usuario = new \stdClass();
        $usuario->_usuario = MasterDom::getData("usuario");
        $usuario->_password = MasterDom::getData("password");
        $user = LoginDao::getById($usuario);

        if ($user[1]['PERMISO'] == '') {
            $permiso = 0;
            $cdgco_ahorro = 'NULL';
            $inicio_ahorro = 'NULL';
            $fin_ahorro = 'NULL';
        } else {
            $permiso = $user[1]['PERMISO'];
            $cdgco_ahorro = $user[1]['CDGCO_AHORRO'];
            $inicio_ahorro = $user[1]['HORA_APERTURA'];
            $fin_ahorro = $user[1]['HORA_CIERRE'];
        }

        session_start();
        $_SESSION['usuario'] = $user[0]['CODIGO'];
        $_SESSION['nombre'] = $user[0]['NOMBRE'];
        $_SESSION['puesto'] = $user[0]['PUESTO'];
        $_SESSION['cdgco'] = $user[0]['CDGCO'];
        $_SESSION['perfil'] = $user[0]['PERFIL'];
        $_SESSION['ahorro'] = $permiso;
        $_SESSION['cdgco_ahorro'] = $cdgco_ahorro;
        $_SESSION['inicio'] = $inicio_ahorro;
        $_SESSION['fin'] = $fin_ahorro;

        header("location: /Principal/");
    }

    public function cerrarSession()
    {
        unset($_SESSION);
        session_unset();
        session_destroy();
        header("Location: /Login/");
    }
}

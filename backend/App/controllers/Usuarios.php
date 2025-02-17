<?php
namespace App\controllers;
defined("APPPATH") OR die("Access denied");

use \Core\View;
use \Core\MasterDom;
use \Core\Controller;
use \App\models\Pagos AS PagosDao;
use \App\models\Operaciones AS OperacionesDao;

class Usuarios extends Controller
{
    private $_contenedor;

    function __construct()
    {
        parent::__construct();
        $this->_contenedor = new Contenedor;
        View::set('header', $this->_contenedor->header());
        View::set('footer', $this->_contenedor->footer());

    }
    public function getUsuario()
    {
        return $this->__usuario;
    }

    public function index()
    {
        $extraHeader = <<<html
        <title>Principal MCM</title>
        <link rel="shortcut icon" href="/img/logo.png">
html;

        View::set('header', $this->_contenedor->header($extraHeader));
        View::render("Usuarios_All");
    }

    public function TipoUsuarios()
    {
        $extraHeader = <<<html
        <title>Principal MCM</title>
        <link rel="shortcut icon" href="/img/logo.png">
html;

        View::set('header', $this->_contenedor->header($extraHeader));
        View::render("TipoUsuarios_All");
    }

}

<?php

namespace App\controllers;

defined("APPPATH") or die("Access denied");

use \Core\Controller;

require_once dirname(__DIR__) . '/libs/mpdf/mpdf.php';
require_once dirname(__DIR__) . '/libs/phpexcel/Classes/PHPExcel.php';

class Contenedor extends Controller
{


    function __construct()
    {
        parent::__construct();
    }

    public function getUsuario()
    {
        return $this->__usuario;
    }

    public function header($extra = '')
    {
        $usuario = $this->__usuario;
        $nombre = $this->__nombre;
        $sucursal = $this->__cdgco;
        $perfil = $this->__perfil;
        $permiso_ahorro = $this->__ahorro;


        $header = "";

        $header = <<<html
        <html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed layout-compact" dir="ltr"  data-theme="theme-default" data-assets-path="../../assets/" data-template="vertical-menu-template-no-customizer-starter" data-style="light">
        <head>
            <meta charset="utf-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
        
            <title>SICAFIN - Principal</title> 
            <meta name="description" content="" />
        
            <!-- Favicon -->
            <link rel="icon" type="image/x-icon" href="../img/ico.ico" />
        
            <!-- Fonts -->
            <link rel="preconnect" href="https://fonts.googleapis.com" />
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
            <link
              href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
              rel="stylesheet" />
        
            <link rel="stylesheet" href="../../assets/vendor/fonts/boxicons.css" />
            <!-- <link rel="stylesheet" href="../../assets/vendor/fonts/fontawesome.css" /> -->
            <!-- <link rel="stylesheet" href="../../assets/vendor/fonts/flag-icons.css" /> -->
        
            <!-- Core CSS -->
            <link rel="stylesheet" href="../../assets/vendor/css/rtl/core.css" />
            <link rel="stylesheet" href="../../assets/vendor/css/rtl/theme-default.css" />
            <link rel="stylesheet" href="../../assets/css/demo.css" />
        
            <!-- Vendors CSS -->
            <link rel="stylesheet" href="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
        
            <!-- Page CSS -->
        
            <!-- Helpers -->
            <script src="../../assets/vendor/js/helpers.js"></script>
            <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
            <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
            <script src="../../assets/js/config.js"></script>
            
             <!-- Vendors CSS -->
            <link rel="stylesheet" href="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
            <link rel="stylesheet" href="../../assets/vendor/libs/typeahead-js/typeahead.css" />
            <link rel="stylesheet" href="../../assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css" />
            <link rel="stylesheet" href="../../assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css" />
            <link rel="stylesheet" href="../../assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css" />
            <link rel="stylesheet" href="../../assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css" />
            <link rel="stylesheet" href="../../assets/vendor/libs/flatpickr/flatpickr.css" 
            
             <!-- Row Group CSS -->
            <link rel="stylesheet" href="../../assets/vendor/libs/datatables-rowgroup-bs5/rowgroup.bootstrap5.css" />
            <!-- Form Validation -->
            <link rel="stylesheet" href="../../assets/vendor/libs/@form-validation/form-validation.css" />
            
            
      </head>
      <body>
html;

        $menu .= <<<html
         <!-- Layout wrapper -->
        <div class="layout-wrapper layout-content-navbar">
          <div class="layout-container">
            <!-- Menu -->
    
            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
              <div class="app-brand demo">
            
              <span class="app-brand-logo demo">
                   <img src="/img/icon.png" alt="Login" width="60" height="62">
              </span>
              <span class="app-brand-text demo menu-text fw-bold ms-2">
              <img src="/img/sicafin_letra.png" alt="Login" width="145" height="36"></span>
            
            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
              <i class="bx bx-chevron-left bx-sm d-flex align-items-center justify-content-center"></i>
            </a>
          </div>
    
              <div class="menu-inner-shadow"></div>
              <br>
              <ul class="menu-inner py-1" style="padding-top: 25px;">
                <!-- Page -->
                 <!-- Dashboards -->
                 
                 <li class="menu-item">
                  <a href="/Principal/" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-home-smile"></i>
                    <div class="text-truncate" data-i18n="Page 1">Principal</div>
                  </a>
                </li>
                
                <li class="menu-item">
                      <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons bx bx-user"></i>
                        <div class="text-truncate" data-i18n="Dashboards">Usuarios</div>
                      </a>
                      <ul class="menu-sub">
                        <li class="menu-item">
                          <a href="/Usuarios/TipoUsuarios/" class="menu-link">
                            <div class="text-truncate" data-i18n="Analytics">Tipos de Usuarios</div>
                          </a>
                        </li>
                        <li class="menu-item" >
                          <a href="/Usuarios/" class="menu-link">
                            <div class="text-truncate" data-i18n="CRM">Usuarios del Sistema</div>
                          </a>
                        </li>
                      </ul>
                 </li>
                 <li class="menu-item">
                      <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons bx bx-cog"></i>
                        <div class="text-truncate" data-i18n="Authentications">Administración</div>
                      </a>
                      <ul class="menu-sub">
                        <li class="menu-item">
                          <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <div class="text-truncate" data-i18n="Login">Catálogos</div>
                          </a>
                          <ul class="menu-sub">
                            <li class="menu-item">
                              <a href="auth-login-basic.html" class="menu-link" target="_blank" style="padding-left: 50px;">
                                <div class="text-truncate" data-i18n="Basic">Exepciones y Rechazos</div>
                              </a>
                            </li>
                            <li class="menu-item">
                              <a href="auth-login-cover.html" class="menu-link" target="_blank" style="padding-left: 50px;">
                                <div class="text-truncate" data-i18n="Cover">Localidades</div>
                              </a>
                            </li>
                             <li class="menu-item">
                              <a href="auth-login-cover.html" class="menu-link" target="_blank" style="padding-left: 50px;">
                                <div class="text-truncate" data-i18n="Cover">Productos de Crédito</div>
                              </a>
                            </li>
                            
                          </ul>
                           <li class="menu-item">
                          <a href="/RegionesCordinaciones/" class="menu-link">
                            <div class="text-truncate" data-i18n="Analytics">Regionales</div>
                          </a>
                        </li>
                        </li>
                      </ul>
                 </li>
                 <li class="menu-item">
                      <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons bx bx-building-house"></i>
                        <div class="text-truncate" data-i18n="Authentications">Operación Central</div>
                      </a>
                      <ul class="menu-sub">
                        <li class="menu-item">
                          <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <div class="text-truncate" data-i18n="Login">Grupos Comunales</div>
                          </a>
                          <ul class="menu-sub">
                            <li class="menu-item">
                              <a href="auth-login-basic.html" class="menu-link" target="_blank" style="padding-left: 50px;">
                                <div class="text-truncate" data-i18n="Basic">Acreditados</div>
                              </a>
                            </li>
                            <li class="menu-item">
                              <a href="auth-login-cover.html" class="menu-link" target="_blank" style="padding-left: 50px;">
                                <div class="text-truncate" data-i18n="Cover">Solicitud</div>
                              </a>
                            </li>
                            <li class="menu-item">
                              <a href="auth-login-cover.html" class="menu-link" target="_blank" style="padding-left: 50px;">
                                <div class="text-truncate" data-i18n="Cover">Evaluación</div>
                              </a>
                            </li>
                             <li class="menu-item">
                              <a href="auth-login-cover.html" class="menu-link" target="_blank" style="padding-left: 50px;">
                                <div class="text-truncate" data-i18n="Cover">Impresión de Cheques</div>
                              </a>
                            </li>
                             <li class="menu-item">
                              <a href="auth-login-cover.html" class="menu-link" target="_blank" style="padding-left: 50px;">
                                <div class="text-truncate" data-i18n="Cover">Emisión de Documentos</div>
                              </a>
                            </li>
                            
                           
                            
                          </ul>
                          
                        </li>
                      </ul>
                 </li>
                 <li class="menu-item">
                      <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons bx bx-leaf"></i>
                        <div class="text-truncate" data-i18n="Authentications">Operación Campo</div>
                      </a>
                       <ul class="menu-sub">
                        <li class="menu-item">
                          <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <div class="text-truncate" data-i18n="Login">Grupos Comunales</div>
                          </a>
                          <ul class="menu-sub">
                            <li class="menu-item">
                              <a href="auth-login-basic.html" class="menu-link" target="_blank" style="padding-left: 50px;">
                                <div class="text-truncate" data-i18n="Basic">Acreditados</div>
                              </a>
                            </li>
                            <li class="menu-item">
                              <a href="auth-login-cover.html" class="menu-link" target="_blank" style="padding-left: 50px;">
                                <div class="text-truncate" data-i18n="Cover">Solicitud</div>
                              </a>
                            </li>
                            <li class="menu-item">
                              <a href="auth-login-cover.html" class="menu-link" target="_blank" style="padding-left: 50px;">
                                <div class="text-truncate" data-i18n="Cover">Evaluación</div>
                              </a>
                            </li>
                             <li class="menu-item">
                              <a href="auth-login-cover.html" class="menu-link" target="_blank" style="padding-left: 50px;">
                                <div class="text-truncate" data-i18n="Cover">Impresión de Cheques</div>
                              </a>
                            </li>
                             <li class="menu-item">
                              <a href="auth-login-cover.html" class="menu-link" target="_blank" style="padding-left: 50px;">
                                <div class="text-truncate" data-i18n="Cover">Emisión de Documentos</div>
                              </a>
                            </li>
                            
                           
                            
                          </ul>
                          
                        </li>
                      </ul>
                 </li>
                 <li class="menu-item">
                      <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons bx bx-dollar-circle"></i>
                        <div class="text-truncate" data-i18n="Authentications">PLD</div>
                      </a>
                      <ul class="menu-sub">
                        <li class="menu-item">
                          <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <div class="text-truncate" data-i18n="Login">Catálogos</div>
                          </a>
                          <ul class="menu-sub">
                            <li class="menu-item">
                              <a href="auth-login-basic.html" class="menu-link" target="_blank" style="padding-left: 50px;">
                                <div class="text-truncate" data-i18n="Basic">Exepciones y Rechazos</div>
                              </a>
                            </li>
                            <li class="menu-item">
                              <a href="auth-login-cover.html" class="menu-link" target="_blank" style="padding-left: 50px;">
                                <div class="text-truncate" data-i18n="Cover">Localidades</div>
                              </a>
                            </li>
                             <li class="menu-item">
                              <a href="auth-login-cover.html" class="menu-link" target="_blank" style="padding-left: 50px;">
                                <div class="text-truncate" data-i18n="Cover">Productos de Crédito</div>
                              </a>
                            </li>
                            
                          </ul>
                           <li class="menu-item">
                          <a href="/Usuarios/" class="menu-link">
                            <div class="text-truncate" data-i18n="Analytics">Regionales</div>
                          </a>
                        </li>
                        </li>
                      </ul>
                 </li>
                 <li class="menu-item">
                      <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons bx bxs-file-export"></i>
                        <div class="text-truncate" data-i18n="Authentications">Reportes</div>
                      </a>
                      <ul class="menu-sub">
                        <li class="menu-item">
                          <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <div class="text-truncate" data-i18n="Login">Catálogos</div>
                          </a>
                          <ul class="menu-sub">
                            <li class="menu-item">
                              <a href="auth-login-basic.html" class="menu-link" target="_blank" style="padding-left: 50px;">
                                <div class="text-truncate" data-i18n="Basic">Exepciones y Rechazos</div>
                              </a>
                            </li>
                            <li class="menu-item">
                              <a href="auth-login-cover.html" class="menu-link" target="_blank" style="padding-left: 50px;">
                                <div class="text-truncate" data-i18n="Cover">Localidades</div>
                              </a>
                            </li>
                             <li class="menu-item">
                              <a href="auth-login-cover.html" class="menu-link" target="_blank" style="padding-left: 50px;">
                                <div class="text-truncate" data-i18n="Cover">Productos de Crédito</div>
                              </a>
                            </li>
                            
                          </ul>
                           <li class="menu-item">
                          <a href="/Usuarios/" class="menu-link">
                            <div class="text-truncate" data-i18n="Analytics">Regionales</div>
                          </a>
                        </li>
                        </li>
                      </ul>
                 </li>
              </ul>
            </aside>
            <!-- / Menu -->
    
            <!-- Layout container -->
            <div class="layout-page">
              <!-- Navbar -->
    
              <nav
                class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
                id="layout-navbar">
                <div class="layout-menu-toggle navbar-nav align-items-xl-center me-4 me-xl-0 d-xl-none">
                  <a class="nav-item nav-link px-0 me-xl-6" href="javascript:void(0)">
                    <i class="bx bx-menu bx-md"></i>
                  </a>
                </div>
    
                <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                  <ul class="navbar-nav flex-row align-items-center ms-auto">
                    <!-- User -->
                    
                    
                    <li class="nav-item navbar-dropdown dropdown-user dropdown">
                        <a class="nav-link dropdown-toggle hide-arrow p-0 d-flex align-items-center" href="javascript:void(0);" data-bs-toggle="dropdown">
                            <!-- Avatar -->
                            <div class="avatar avatar-online">
                              <img src="../../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                            <!-- Name and Role -->
                            <div class="ms-2 text-start d-flex flex-column justify-content-center">
                              <h6 class="mb-0">Jonathan Valdez Martinez</h6>
                              <small class="text-muted">Administrador de Campo</small>
                            </div>
                          </a>

                        <!-- Dropdown Menu -->
                        <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                          <a class="dropdown-item" href="#">
                            <i class="bx bx-user bx-md me-3"></i><span>My Perfil</span>
                          </a>
                        </li>
                        <li>
                          <div class="dropdown-divider my-1"></div>
                        </li>
                        <li>
                          <a class="dropdown-item" href="javascript:void(0);">
                            <i class="bx bx-power-off bx-md me-3"></i><span>Cerrar Sesión</span>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <!--/ User -->
                  </ul>
                </div>
              </nav>
    
              <!-- / Navbar -->
    
              <!-- Content wrapper -->
              <div class="content-wrapper">
                <!-- Content -->
    
                <div class="container-xxl flex-grow-1 container-p-y">
                 
               
                <!-- / Content -->
    
               
html;

        return $header . $menu;
    }

    public function footer($extra = '')
    {
        $footer = <<<html
                </div>
                <!-- Footer -->
                <footer class="content-footer footer bg-footer-theme">
                    <div class="container-xxl">
                        <div class="footer-container d-flex align-items-center justify-content-between py-4 flex-md-row flex-column">
                            <div class="text-body">
                                        ©
                                <script>
                                     document.write(new Date().getFullYear());
                                </script>, Sistema de Información y Control de Administración Financiera.
                            </div>
                            <div class="d-none d-lg-inline-block">
                                <a href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/documentation/" target="_blank" class="footer-link me-4">Documentation</a>
                            </div>
                        </div>
                    </div>
                </footer>
                    <!-- / Footer -->
        
                <div class="content-backdrop fade"></div>
        </div>
        <!-- Content wrapper -->
         </div>
           <!-- / Layout page -->
         </div>
            
         <!-- Overlay -->
         <div class="layout-overlay layout-menu-toggle"></div>
            
         <!-- Drag Target Area To SlideIn Menu On Small Screens -->
          <div class="drag-target"></div>
          </div>
            <!-- / Layout wrapper -->
            <!-- Core JS -->
            <!-- build:js assets/vendor/js/core.js -->
        
            <script src="../../assets/vendor/libs/jquery/jquery.js"></script>
            <script src="../../assets/vendor/libs/popper/popper.js"></script>
            <script src="../../assets/vendor/js/bootstrap.js"></script>
            <script src="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
            <script src="../../assets/vendor/libs/hammer/hammer.js"></script>
        
            <script src="../../assets/vendor/js/menu.js"></script>
        
            <!-- endbuild -->
        
            <!-- Vendors JS -->
        
            <!-- Main JS -->
            <script src="../../assets/js/main.js"></script>
        
            <script src="../../assets/vendor/libs/i18n/i18n.js"></script>
            <script src="../../assets/vendor/libs/typeahead-js/typeahead.js"></script>
             <!-- Vendors JS -->
            <script src="../../assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>
            <!-- Flat Picker -->
            <script src="../../assets/vendor/libs/moment/moment.js"></script>
            <script src="../../assets/vendor/libs/flatpickr/flatpickr.js"></script>
        
            <!-- Main JS -->
            <script src="../../assets/js/main.js"></script>
        
            <!-- Page JS -->
            <script src="../../assets/js/tables-datatables-advanced.js"></script>
            <script src="../../assets/js/tables-datatables-basic.js"></script>
            <!-- Vendors JS -->
            <script src="../../assets/vendor/libs/@form-validation/popular.js"></script>
            <script src="../../assets/vendor/libs/@form-validation/bootstrap5.js"></script>
            <script src="../../assets/vendor/libs/@form-validation/auto-focus.js"></script>
            
            
        
            <!-- endbuild -->
        
            <!-- Main JS -->
            <script src="../../assets/js/main.js"></script>
        
            <!-- Page JS -->
            <script src="../../assets/js/app-access-roles.js"></script>
            <script src="../../assets/js/modal-add-role.js"></script>
    
    
    <!-- endbuild -->
            <script>
                    document.addEventListener("DOMContentLoaded", function() {
                    // Obtén la URL actual
                    const currentPath = window.location.pathname;
                
                    // Selecciona todos los enlaces del menú
                    const menuLinks = document.querySelectorAll('.menu-link');
            
                    // Itera sobre los enlaces
                    menuLinks.forEach(link => {
                      // Verifica si el enlace coincide con la URL actual
                      if (link.getAttribute('href') === currentPath) {
                        // Encuentra el <li> contenedor del enlace y añade 'active'
                        const currentMenuItem = link.closest('.menu-item');
                        if (currentMenuItem) {
                          currentMenuItem.classList.add('active');
                          
                          // Si el <li> tiene un submenú, añade 'active' y 'open' al <li> padre
                          const parentMenuItem = currentMenuItem.closest('.menu-item.open');
                          if (parentMenuItem) {
                            parentMenuItem.classList.add('active', 'open');
                          } else {
                            // Busca el primer <li> padre y añade 'active' y 'open'
                            const topLevelMenuItem = currentMenuItem.parentElement.closest('li.menu-item');
                            if (topLevelMenuItem) {
                              topLevelMenuItem.classList.add('active', 'open');
                            }
                          }
                        }
                      }
                    });
              });
            </script>
            
        
            <!-- Page JS -->
          </body>
    </html>
html;
        return $footer;
    }
}

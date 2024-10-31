<!doctype html>

<html
    lang="en"
    class="light-style layout-wide customizer-hide"
    dir="ltr"
    data-theme="theme-default"
    data-assets-path="../../assets/"
    data-template="vertical-menu-template"
    data-style="light">
<head>
    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>SICAFIN - Login </title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../../assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    <!-- Icons -->
    <link rel="stylesheet" href="../../assets/vendor/fonts/boxicons.css" />
    <link rel="stylesheet" href="../../assets/vendor/fonts/fontawesome.css" />
    <link rel="stylesheet" href="../../assets/vendor/fonts/flag-icons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../../assets/vendor/css/rtl/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../../assets/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/typeahead-js/typeahead.css" />
    <!-- Vendor -->
    <link rel="stylesheet" href="../../assets/vendor/libs/@form-validation/form-validation.css" />

    <!-- Page CSS -->
    <!-- Page -->
    <link rel="stylesheet" href="../../assets/vendor/css/pages/page-auth.css" />

    <!-- Helpers -->
    <script src="../../assets/vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="../../assets/vendor/js/template-customizer.js"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../../assets/js/config.js"></script>
</head>

<body>
<!-- Content -->

<div class="container-xxl">
    <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
            <!-- Register -->
            <div class="card px-sm-6 px-0">
                <div class="card-body">
                    <!-- Logo -->
                    <div class="app-brand justify-content-center">
                        <img src="../img/logo_sicafin.png" alt="Login" width="260" height="150">
                    </div>
                    <!-- /Logo -->
                    <p class="mb-6">Por favor, inicie sesión en su cuenta para acceder al sistema.</p>

                    <form id="login" action="/Login/crearSession" name="login" class="mb-6" action="index.html" method="POST">
                        <div class="mb-6">
                            <label for="email" class="form-label">USUARIO *</label>
                            <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Ej. ABCD" autofocus required/>
                        </div>

                        <div class="mb-6 form-password-toggle">
                            <div class="mb-6 form-password-toggle">
                                <label class="form-label" for="password">CONTRASEÑA *</label>
                                <div class="input-group input-group-merge">
                                    <input type="password" class="form-control" id="password"   name="password" placeholder="******" aria-describedby="password" required onkeypress="if (event.keyCode == 13)"/>
                                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                </div>
                            </div>


                        </div>
                        <div class="mb-8">
                            <div class="d-flex justify-content-between mt-8">
                                <div class="form-check mb-0 ms-2">
                                    <input class="form-check-input" type="checkbox" id="remember-me" />
                                    <label class="form-check-label" for="remember-me"> Recordar mi usuario </label>
                                </div>
                                <a href="auth-forgot-password-basic.html">
                                    <span>¿Olvidaste tu contraseña?</span>
                                </a>
                            </div>
                        </div>
                        <div class="mb-6">
                            <button class="btn btn-primary d-grid w-100" type="submit" id="btnEntrar" style="background: #818181; border-color: #6f6f6f">INICIAR MI SESIÓN</button>
                        </div>
                    </form>

                </div>
            </div>
            <!-- /Register -->
        </div>
    </div>
</div>

<!-- / Content -->

<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->

<script src="../../assets/vendor/libs/jquery/jquery.js"></script>
<script src="../../assets/vendor/libs/popper/popper.js"></script>
<script src="../../assets/vendor/js/bootstrap.js"></script>
<script src="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="../../assets/vendor/libs/hammer/hammer.js"></script>
<script src="../../assets/vendor/libs/i18n/i18n.js"></script>
<script src="../../assets/vendor/libs/typeahead-js/typeahead.js"></script>
<script src="../../assets/vendor/js/menu.js"></script>

<!-- endbuild -->

<!-- Vendors JS -->
<script src="../../assets/vendor/libs/@form-validation/popular.js"></script>
<script src="../../assets/vendor/libs/@form-validation/bootstrap5.js"></script>
<script src="../../assets/vendor/libs/@form-validation/auto-focus.js"></script>

<!-- Main JS -->
<script src="../../assets/js/main.js"></script>

<!-- Page JS -->
<script src="../../assets/js/pages-auth.js"></script>
</body>
</html>

<?= $footer; ?>


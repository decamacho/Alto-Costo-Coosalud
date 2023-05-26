<!DOCTYPE html>
<html>

    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <title>COOSALUD EPS</title>

        <link rel="icon" href="assets/images/coosalud.png" type="image/x-icon">
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
        <link href="assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
        <link href="assets/css/style.css" rel="stylesheet">
        <link href="assets/css/all-themes.min.css" rel="stylesheet" />
        <link href="assets/plugins/sweetalert/dist/sweetalert2.min.css" rel="stylesheet">

    </head>

    <body class="theme-black">
        <div class="page-loader-wrapper">
            <div class="loader">
                <div class="preloader">
                    <div class="spinner-layer pl-teal">
                        <div class="circle-clipper left">
                            <div class="circle"></div>
                        </div>
                        <div class="circle-clipper right">
                            <div class="circle"></div>
                        </div>
                    </div>
                </div>
                <p>Espera un Momento...</p>
            </div>
        </div>
        <div class="overlay"></div>
        <div class="search-bar">
            <div class="search-icon">
                <i class="material-icons">seach</i>
            </div>
            <input type="text" placeholder="Busca Algo...">
            <div class="close-search">
                <i class="material-icons">close</i>
            </div>
        </div>
        <nav class="navbar">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                    <a href="javascript:void(0);" class="bars"></a>
                    <a class="navbar-brand" href="?controller=homepage">GESALCO - CUENTA DE ALTO COSTO</a>
                </div>
                <div class="collapse navbar-collapse" id="navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li>
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                                <i class="material-icons">flag</i>
                                <span class="label-count"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">Por Realizar</li>
                                <li class="body">
                                    <ul class="menu">
                                        <li>
                                            <a href="javascript:void(0);">
                                                <div class="icon-circle bg-light-green">
                                                    <i class="material-icons">person_add</i>
                                                </div>
                                                <div class="menu-info">
                                                    <h4>Agregar un nuevo afiliado</h4>
                                                    <p>
                                                        <i class="material-icons">access_time</i> hace dos horas
                                                    </p>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer">
                                    <a href="javascript:void(0);">Ver todas las notificaciones</a>
                                </li>
                            </ul>
                        </li>
                        <li class="pull-right"><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="material-icons">more_vert</i></a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <section>
            <aside id="leftsidebar" class="sidebar">
                <div class="user-info">
                    <div class="image">
                        <img src="assets/images/user.png" width="48" height="48" alt="User" />
                    </div>
                    <div class="info-container">
                        <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Nombre de Usuario</div>
                        <div class="email">Correo</div>
                        <div class="btn-group user-helper-dropdown">
                            <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                            <ul class="dropdown-menu pull-right">
                                <li><a href="javascript:void(0);"><i class="material-icons">person</i>Perfil</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="javascript:void(0);"><i class="material-icons">input</i>Cerrar Sesión</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="menu">
                    <ul class="list">
                        <li class="header">Módulos de Navegación</li>
                        <li class="active">
                            <a href="?controller=homepage">
                                <i class="material-icons">home</i>
                                <span>Inicio</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="menu-toggle">
                                <i class="material-icons">view_list</i>
                                <span>Cuenta Alto Costo</span>
                            </a>
                            <ul class="ml-menu">
                                <li>
                                    <a href="?controller=programa">
                                        <span>Programa</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="?controller=paciente">
                                        <span>Tipo de Paciente</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="?controller=actividad">
                                        <span>Procedimiento</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="?controller=diagnostico">
                                        <span>Diagnóstico</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="?controller=semana">
                                <i class="material-icons">date_range</i>
                                <span>Semana</span>
                            </a>
                        </li>
                        <li>
                            <a href="?controller=persona&method=afiliado">
                                <i class="material-icons">people</i>
                                <span>Afiliados</span>
                            </a>
                        </li>
                        <li>
                            <a href="?controller=ips">
                                <i class="material-icons">local_hospital</i>
                                <span>IPS</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="material-icons">assignment</i>
                                <span>Tarea</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="menu-toggle">
                                <i class="material-icons">info</i>
                                <span>Mas Modulos</span>
                            </a>
                            <ul class="ml-menu">
                                <li>
                                    <a href="?controller=departamento">
                                        <span>Departamento</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="?controller=municipio">
                                        <span>Municipio</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="?controller=usuario">
                                        <span>Usuario</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="legal">
                    <div class="copyright">
                        &copy; 2021 <a href="https://coosalud.com/" target="_black" tittle="Página Oficial COOSALDU EPS">COOSALUD EPS</a>.
                    </div>
                    <div class="version">
                        <b>Version: </b> 1.0
                    </div>
                </div>
            </aside>
            <aside id="rightsidebar" class="right-sidebar">
                <ul class="nav nav-tabs tab-nav-right" role="tablist">
                    <li role="presentation" class="active"><a href="#skins" data-toggle="tab">NADA</a></li>
                    <li role="presentation"><a href="#settings" data-toggle="tab">NADA</a></li>
                </ul>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active in active" id="skins">
                        <ul class="demo-choose-skin">
                            <li data-theme="red" class="active">
                                <div class="red"></div>
                                <span>Red</span>
                            </li>
                        </ul>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="settings">
                        <div class="demo-settings">
                            <p>GENERAL SETTINGS</p>
                            <ul class="setting-list">
                                <li>
                                    <span>Report Panel Usage</span>
                                    <div class="switch">
                                        <label><input type="checkbox" checked><span class="lever"></span></label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </aside>
        </section> 
        <section class="content">
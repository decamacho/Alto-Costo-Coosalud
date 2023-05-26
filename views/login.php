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

    <body class="login-page">
        <div class="login-box">
            <div class="logo">
                <!--<img src="assets/images/coosalud.png" width="350" height="80" alt="">-->
                <a href="?controlle=inicio">COOSALUD<b> EPS</b></a>
                <small>Gestión Cuenta de Alto Costo</small>
            </div>
            <div class="card">
                <div class="body">
                    <form action="?controller=inicio&method=login" method="POST">
                        <div class="msg"><h3>Iniciar Sesión</h3></div>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="material-icons">person</i>
                            </span>
                            <div class="form-line">
                                <input type="email" class="form-control" name="email" placeholder="Correo Electronico" required autofocus>
                            </div>
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="material-icons">lock</i>
                            </span>
                            <div class="form-line">
                                <input type="password" class="form-control" name="clave" placeholder="Contraseña" required>
                            </div>
                        </div>
                        <div class="row">
                            
                            <div class="col-xs-7 p-t-5">
                            </div>
                            <div class="col-xs-5">
                                <button class="btn btn-block bg-teal waves-effect" type="submit">Iniciar Sesión</button>
                            </div>
                        </div>
                        <div class="row m-t-15 m-b--20">
                            <div class="col-xs-6">
                                <a href="#">Regístrate</a>
                            </div>
                            <div class="col-xs-6 align-right">
                                <a href="#">¿Olvidaste la Clave?</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script src="assets/plugins/jquery/jquery.min.js"></script>
        <script src="assets/plugins/bootstrap/js/bootstrap.js"></script>
        <script src="assets/js/valid.js"></script>
        <script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
        <script src="assets/plugins/node-waves/waves.js"></script>
        <script src="assets/plugins/sweetalert/dist/sweetalert2.all.min.js"></script>
        <script src="assets/js/admin.js"></script>
        <script src="assets/js/index.js"></script>
        
    </body>

</html>
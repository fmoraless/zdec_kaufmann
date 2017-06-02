<?php
session_start();
error_reporting(1);
    require('library/class.sql.sesion.php'); 
    
    if(isset($_POST['_target_path'])){

        $dataLogueo = new ClassSession();
        $userName = $dataLogueo->userSesion($_POST['username'],$_POST['password']); 
        $numRows = mysql_num_rows($userName);
            
            if($numRows == 1){
                $status = 1;
                $_SESSION['userName'] = $_POST['username'];
            }else{
                $status = 0;
            }
                
    }else{
        $status = 0;
    }

 ?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>
            Reportes ZDEC Kaufmann
        </title>
        <link href="assets/bootstrap/css/bootstrap.min.css" type="text/css" rel="stylesheet" />
        <link href="assets/css/bootstrap.cosmo.min.css" type="text/css" rel="stylesheet" />
        <link href="assets/css/styles.css" type="text/css" rel="stylesheet" />
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="js/zdec_functions.js"></script>
        <script src='js/jquery-1.12.0.min.js'></script>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapse" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Navegación</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.php">
                            <span class="glyphicon glyphicon-cloud" aria-hidden="true"></span>
                            ZDEC Kaufmann
                        </a>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li><a onclick="select_menu(1)" >
                                    <span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>
                                    &nbsp;
                                    Entrar
                                </a>
                            </li>
                            <li><a onclick="select_menu(2)">
                                    <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                                    &nbsp;
                                    Registro
                                </a>
                            </li>
                        </ul>

                            <?php  

                                if($status == 1 ){  
                                        echo " <ul class='nav navbar-nav navbar-right'>
                                                    <li class='dropdown'>
                                                        <a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>
                                                            <div class='avatar'>
                                                                <img src='assets/images/default.png' />
                                                                <img src='uploads/users/' />
                                                            </div>    
                                                            <span class='caret'></span>
                                                        </a>
                                                        <ul class='dropdown-menu'>

                                                            <li>
                                                                <a onclick='select_menu(3)'>
                                                                    <span class='glyphicon glyphicon-cog' aria-hidden='true'></span> &nbsp;
                                                                    Mis datos
                                                                </a>
                                                            </li>
                                                            <li role='separator' class='divider'></li>
                                                            <li>
                                                                <a href='logout.php' >
                                                                    <span class='glyphicon glyphicon-log-out' aria-hidden='true'></span> &nbsp;
                                                                    Salir
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a onclick='select_menu(5)'>
                                                                    <span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span> &nbsp;
                                                                    Ayuda
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>";
                                }                    

                             ?>   
                    </div>
                </div>
            </nav>
        </header>
        <div id="container">
            
        </div>
        <footer class="col-lg-12">
            <hr/>
            <div>
                <p class="text-muted">Sistema Reportes ZDEC - Developed by Estructurados UDLA</p>
            </div>
        </footer>          
    </body>
</html>

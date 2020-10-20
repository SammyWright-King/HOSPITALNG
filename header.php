
<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="description" content="">
            

            <title>Procedural Programming</title>

            <!-- Bootstrap Core CSS -->
            <link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet">
            <!-- <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> -->
            <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        -->
            <!-- Custom CSS -->
            <link href="css/landing-page.css" rel="stylesheet">

            <style>
                html, body {
                    margin:0px;
                    padding:0px;
                    overflow-x:hidden;
                }
                .col .pad-0{
                    margin-left:0px;
                    margin-bottom:20px;
                    padding-left:0px;
                    width:100%;
                }
            </style>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="$">HOSPITAL_NG</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navabar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Services</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Contact us</a>
                        </li>
                    </ul>
                    <?php
                        if (isset($_SESSION['auth_status']))
                        {
                            include "Loggedin.php";
                        }
                        elseif (!isset($_SESSION['auth_status'])){
                            include "NotloggedIn.php";
                        }
                    
                    ?>
                </div>
            </nav>
            <!--  bootstrap core javascript -->
            <script src="bootstrap/js/bootstrap.min.js"></script>
        </header>
    </body>
</html>
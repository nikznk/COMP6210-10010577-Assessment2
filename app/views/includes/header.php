<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo SITENAME; ?>
    </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600">
    <link rel="stylesheet" href="https://unpkg.com/@bootstrapstudio/bootstrap-better-nav/dist/bootstrap-better-nav.min.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>css/style.css">
</head>

<body>
    <section id="main">
        <nav class="navbar navbar-light navbar-expand-md">
            <div class="container-fluid">
                <a class="navbar-brand" href="index"></a>
                <button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav mx-auto">
                        <?php
                        foreach($data["menus"] as $menus) {
                            ?>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" href="/<?php echo $menus["Links"]; ?>">
                                    <?php echo $menus["Name"]; ?>
                                </a>
                            </li>

                            <?php
                        }
                    ?>

                    </ul>
                    <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                        <?php
                            if (isset($_SESSION['User_Name'])){?>
                            <div class="btn-group mr-2" role="group" aria-label="First group">
                                Welcome,
                                <?php echo $_SESSION['User_Name']  ?>
                            </div>
                            <div class="btn-group mr-2" role="group" aria-label="Second group">
                                <a href="<?php echo URLROOT." pages/logout "; ?>" class="btn btn-primary">
                                    Sign Out
                                </a>
                            </div>


                            <?php  } else {?>
                            <div class="btn-group mr-2" role="group" aria-label="First group">

                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#SignUp">
                                    Sign Up
                                </button>
                            </div>
                            <div class="btn-group mr-2" role="group" aria-label="Second group">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#SignIn">
                                    Sign In
                                </button>
                            </div>
                            <?php  }
                            ?>

                    </div>
                </div>
            </div>
        </nav>










        <!-- Modal Singn Up -->

        <div class="modal fade" id="SignIn" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Sign In</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>


                    <div class="modal-body">
                        <?php include(APPROOT . "/views/includes/login.php"); ?>
                    </div>



                </div>
            </div>
        </div>
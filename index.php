<!DOCTYPE html>
<html>
    <head>
        <title>Fuel Station Management System - Demo</title>

        <meta charset="UTF-8">
        <meta name="description" content="Clean and responsive administration panel">
        <meta name="keywords" content="Admin,Panel,HTML,CSS,XML,JavaScript">
        <meta name="author" content="Erik Campobadal">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="css/uikit.min.css" />
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="css/notyf.min.css" />
        <script src="js/uikit.min.js" ></script>
	<script src="js/uikit-icons.min.js" ></script>
    </head>
    <body>
        <div uk-sticky="media: 960" class="uk-navbar-container tm-navbar-container uk-sticky uk-active" style="position: fixed; top: 0px; width: 1903px;">
            <div class="uk-container uk-container-expand">
                <nav uk-navbar>
                    <div class="uk-navbar-left">
                        <a href="#" class="uk-navbar-item uk-logo">
                            Fuel Station Management System Demo
                        </a>
                    </div>
                </nav>
            </div>
        </div>
        <div class="content-background">
            <div class="uk-section-large">
                <div class="uk-container uk-container-large">
                    <div uk-grid class="uk-child-width-1-1@s uk-child-width-2-3@l">
                        <div class="uk-width-1-1@s uk-width-1-5@l uk-width-1-3@xl"></div>
                        <div class="uk-width-1-1@s uk-width-3-5@l uk-width-1-3@xl">
                            <div class="uk-card uk-card-default">
                                
                                <div class="uk-card-body">
                                    <center>
                                        <h2>Welcome User</h2><br />
                                    </center>
                                    <form method="POST" action="login.php">
                                        <fieldset class="uk-fieldset">

                                            <div class="uk-margin">
                                                <div class="uk-position-relative">
                                                    <span class="uk-form-icon ion-android-person"></span>
                                                    <input name="username" class="uk-input" type="text" placeholder="Username">
                                                </div>
                                            </div>

                                            <div class="uk-margin">
                                                <div class="uk-position-relative">
                                                    <span class="uk-form-icon ion-locked"></span>
                                                    <input name="password" class="uk-input" type="password" placeholder="Password">
                                                </div>
                                            </div>

                                            <div class="uk-margin">
                                                <!--<a href="#">Forgot your password?</a>-->
                                            </div>

                                            <div class="uk-margin">
                                                <button name="login" type="submit" class="uk-button uk-button-primary">
                                                    <span class="ion-forward"></span>&nbsp; Login
                                                </button>
                                            </div>

                                            <hr />

                                            <center>
                                                <p>
                                                    Admin Login
                                                </p>
                                                <a href="admin" class="uk-button uk-button-default">
                                                    <span class="ion-android-person-add"></span>&nbsp; Admin
                                                </a>
                                            </center>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="uk-width-1-1@s uk-width-1-5@l uk-width-1-3@xl"></div>
                    </div>
                </div>
            </div>
        </div>
        <script src="js/script.js"></script>
    </body>
</html>

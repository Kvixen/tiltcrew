<!doctype html>
<html lang="en">
    <head>
        <title>Login</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    

        <!-- Bootstrap CSS -->
        <?php
        include 'include/bootstrap_header.php'
        ?>
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/login_old.css">
    </head>
    <body>
        <?php include('include/navbar.php'); ?>
        <div class="container tlt_loginForm">
            <div class="kpx_login">
                <h3 class="kpx_authTitle">Login or <a href="register.php">Sign up</a></h3>
                <div class="row kpx_row-sm-offset-3 kpx_socialButtons">
                    <div class="col-xs-2 col-sm-2">
                        <a href="#" class="btn btn-lg btn-block kpx_btn-facebook" data-toggle="tooltip" data-placement="top" title="Facebook">
                            <i class="fa fa-facebook fa-2x"></i>
                            <span class="hidden-xs"></span>
                        </a>
                    </div>
                    <div class="col-xs-2 col-sm-2">
                        <a href="#" class="btn btn-lg btn-block kpx_btn-twitter" data-toggle="tooltip" data-placement="top" title="Twitter">
                            <i class="fa fa-twitter fa-2x"></i>
                            <span class="hidden-xs"></span>
                        </a>
                    </div>  
                    <div class="col-xs-2 col-sm-2">
                        <a href="#" class="btn btn-lg btn-block kpx_btn-steam" data-toggle="tooltip" data-placement="top" title="Steam">
                            <i class="fa fa-steam fa-2x"></i>
                            <span class="hidden-xs"></span>
                        </a>
                    </div>  
                </div><br>
                <!--Next row of social media buttons-->
                <!--Example row so we can use it
                <div class="row kpx_row-sm-offset-3 kpx_socialButtons">
                    <div class="col-xs-2 col-sm-2">
                        <a href="#" class="btn btn-lg btn-block kpx_btn-github" data-toggle="tooltip" data-placement="top" title="GitHub">
                            <i class="fa fa-github fa-2x"></i>
                            <span class="hidden-xs"></span>
                        </a>
                    </div>
                    <div class="col-xs-2 col-sm-2">
                        <a href="#" class="btn btn-lg btn-block kpx_btn-soundcloud" data-toggle="tooltip" data-placement="top" title="SoundCloud">
                            <i class="fa fa-soundcloud fa-2x"></i>
                            <span class="hidden-xs"></span>
                        </a>
                    </div>  
                    <div class="col-xs-2 col-sm-2">
                        <a href="#" class="btn btn-lg btn-block kpx_btn-steam" data-toggle="tooltip" data-placement="top" title="Steam">
                            <i class="fa fa-steam fa-2x"></i>
                            <span class="hidden-xs"></span>
                        </a>
                    </div> 
                </div><br>

                Login form-->
                <div class="row kpx_row-sm-offset-3 kpx_loginOr">
                    <div class="col-xs-12 col-sm-6">
                        <hr class="kpx_hrOr">
                        <span class="kpx_spanOr">or</span>
                    </div>
                </div>

                <div class="row kpx_row-sm-offset-3">
                    <div class="col-xs-12 col-sm-6">	
                        <form class="kpx_loginForm" action="" autocomplete="off" method="POST">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><span class="fa fa-user"/></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                            <br>
										
                            <div class="input-group">
                                <span class="input-group-addon"><span class="fa fa-key"></span></span>
                                <input  type="password" class="form-control" name="password" placeholder="Password">
                            </div>
                            <hr class="tlt_seperator"/>
                            <button class="btn btn-lg btn-outline-primary btn-block tlt_loginButton" type="submit"><i class="fa fa-sign-in"></i> Login</button>
                        </form>
                    </div>
                </div>
                <div class="row kpx_row-sm-offset-3">
                    <div class="col-xs-12 col-sm-3">
                        <p class="tlt_loginText">
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" value="remember-me">
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Remember me!</span>
                            </label>
                        </p>
                    </div>
                    <div class="col-xs-12 col-sm-3">
                        <p class="kpx_forgotPwd">
                            <a href="#">Forgot password?</a>
                        </p>
                    </div>
                </div>	    	
            </div>
    



        </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <?php
        include 'include/bootstrap_footer.php'
        ?>
  </body>
</html>
<!doctype html>
<html lang="en">
    <head>
        <title>Login</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-grid.min.css">
        <link rel="stylesheet" href="main.css">
        <link rel="stylesheet" href="css/login.css">
    </head>
    <body>
        <div class="container-fluid ">
            <div class="row">
                <div class="col-lg navbarr"></div>
            </div>
        </div>
        <div class="container tlt_loginForm">
            <div class="kpx_login">
                <h3 class="kpx_authTitle">Welcome!</h3>
                <div class="row kpx_row-sm-offset-3 kpx_socialButtons">

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
                        <span class="kpx_spanOr"></span>
                    </div>
                </div>

                <div class="row kpx_row-sm-offset-3">
                    <div class="col-xs-12 col-sm-6">	
                        <form class="kpx_loginForm" action="" autocomplete="off" method="POST">
                            <div class="input-group">
                                <span class="input-group-addon"><span class="fa fa-user"></span></span>
                                <input type="text" class="form-control" name="username" placeholder="Username">
                            </div>
                            <br>		
                            <div class="input-group">
                                <span class="input-group-addon"><span class="fa fa-id-card"></span></span>
                                <input  type="text" class="form-control" name="fullname" placeholder="Full Name">
                            </div>
                            <br>		
                            <div class="input-group">
                                <span class="input-group-addon"><span class="fa fa-id-card"></span></span>
                                <input  type="name" class="form-control" name="DateOfBirth" placeholder="Date of Birth i.e 1988-05/23">
                            </div>
                            <br>		
                            <div class="input-group">
                                <span class="input-group-addon"><span class="fa fa-key"></span></span>
                                <input  type="password" class="form-control" name="password" placeholder="Password">
                            </div>
                            <br>		
                            <div class="input-group">
                                <span class="input-group-addon"><span class="fa fa-key"></span></span>
                                <input  type="password" class="form-control" name="password" placeholder="Confirm Password">
                            </div>
                            <br>		
                            <div class="input-group">
                                <span class="input-group-addon"><span class="fa fa-envelope"></span></span>
                                <input  type="name" class="form-control" name="password" placeholder="Email">
                            </div>
                            <br>		
                            <div class="input-group">
                                <span class="input-group-addon"><span class="fa fa-envelope"></span></span>
                                <input  type="name" class="form-control" name="password" placeholder="Confirm Email">
                            </div>
                            
                            <hr class="tlt_seperator"/>
                            <button class="btn btn-lg btn-outline-primary btn-block tlt_loginButton" type="submit"><i class="fa fa-flag"></i> Register</button>
                        </form>
                    </div>
                </div>
                <div class="row kpx_row-sm-offset-3">
                    <div class="col-xs-12 col-sm-3">
                        <p class="tlt_loginText">
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" value="remember-me">
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Agree to the <a href="#">Terms of Service</a></span>
                            </label>
                        </p>
                    </div>
                    <div class="col-xs-12 col-sm-3">
                        <p class="kpx_forgotPwd">
                            <a href="#">Already a member?</a>
                        </p>
                    </div>
                </div>	    	
            </div>
        </div>
        <script>
            $(function () {
                $('[data-toggle="tooltip"]').tooltip()
            })
        </script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>
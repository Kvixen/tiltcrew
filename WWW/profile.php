<!doctype html>
<html lang="en">
    <head>
        <title>Home</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-grid.min.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/profile.css">
    </head>
    <body>
        <?php include('include/navbar.php'); ?>
        <div class="container-fluid">
            <div class="row SelfTopBuffer">
                <div class="col-lg">
                    <div class="row">
                        <div class="col-lg"></div>
                        <div class="col-lg- SelfContent"></div>
                        <div class="col-lg"></div>
                    </div>
                </div>
                <div class="col-lg-7 SelfContent tlt_profilePage" contenteditable="false">
                    <div class="tlt_profile_header">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-2 tlt_playerAvatar">
                                    <div class="playerAvatar">
                                        <img src="https://www.w3schools.com/css/paris.jpg" alt="responsive avatar" class="img-fluid border border-dark">
                                    </div>
                                </div>
                                <div class="col-sm-10">
                                    <div class="jumbotron">
                                        <h1 class="h1-responsive" contenteditable="false" style="font-size: 24px;">username</h1>
                                        <p class="lead" contenteditable="false">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information. This content will include the user's summary and has to be editable in their own settings.</p>
                                        <hr class="my-2">
                                        <a href="https://instagram.com">
                                            <img src="https://socialmediawidgets.files.wordpress.com/2014/03/10_instagram1.png" class="img-responsive" style="width: 20px; height: 20px;">
                                        </a>
                                        <a href="https://facebook.com">
                                            <img src="https://socialmediawidgets.files.wordpress.com/2014/03/02_facebook1.png" class="img-responsive" style="width: 20px; height: 20px;">
                                        </a>
                                        <a href="https://youtube.com">
                                            <img src="https://socialmediawidgets.files.wordpress.com/2014/03/03_youtube.png" class="img-responsive" style="width: 20px; height: 20px;">
                                        </a>
                                        <a href="https://twitter.com">
                                            <img src="https://socialmediawidgets.files.wordpress.com/2014/03/01_twitter1.png" class="img-responsive" style="width: 20px; height: 20px;">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tlt_profileButton">
                        <div class="row">
                            <div class="col-sm-3">
                                <button type="button" class="btn btn-primary btn-block">General</button>
                            </div>
                            <div class="col-sm-3">
                                <button type="button" class="btn btn-primary btn-block">Steam</button>
                            </div>
                            <div class="col-sm-3">
                                <button type="button" class="btn btn-primary btn-block">Blizzard</button>
                            </div>
                            <div class="col-sm-3">
                                <button type="button" class="btn btn-primary btn-block">League of Legends</button>
                            </div>  
                        </div>
                    </div>
                    <div class="tlt_profileInspect">
                        <div clas="row">
                            <div class="col-sm-12">
                                <table>
                                    <tr>
                                        <td>
                                            <div id="result">
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="row">
                        <div class="col-lg-2">
                    </div>
                    <div class="col-lg-10 SelfContent">
                        </div>
                    </div>
                </div>
                <div class="col-lg"></div>
            </div>
        </div>
    <!-- Optional JavaScript -->
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
	<title>Test</title>
	<script type="text/javascript" id="myjsonp"></script>
    <script type="text/javascript">
    function foo(obj) {
		document.getElementById('result').innerHTML = obj.thumbnail;	
	}
	window.onload = function() {
		document.getElementById('myjsonp').src = 	
		"https://eu.api.battle.net/wow/character/Tarren-Mill/Höstack?locale=en_GB&jsonp=foo&apikey=5zecv7nt5tvny3cz4sswkek5ttzzsxxk";
    }
    </script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>
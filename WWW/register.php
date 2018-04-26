<?php
if (isset($_POST['submit'])) {
    // receive all input values from the form
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    if (empty($_POST['username']) || empty($_POST['password'])) {
        $error = "Username or Password is invalid";
    } else {
        $username=$_POST['username'];
        $password=$_POST['password'];
        // To protect MySQL injection for Security purpose
        $username = stripslashes($username);
        $password = stripslashes($password);
        $username = mysql_real_escape_string($username);
        $password = mysql_real_escape_string($password);
    }
    
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        
        <title>TILT Crew</title>
        <?php include 'include/bootstrap_header.php';?>
        <link rel="stylesheet" href="css/login.css">
        
    </head>
    <body class="tilt-bg tilt-login">
        <?php include 'include/navbar.php';?>
            <section class="h-100">
                <div class="container h-100">
                    <div class="row justify-content-md-center h-100">
                        <div class="card-wrapper">
                            <div class="brand">
                                <img src="assets/rsz_tilt.png">
                            </div>
                            <div class="card fat">
                                <div class="card-body">
                                    <h4 class="card-title">Register</h4>
                                    <form method="POST">
                                        
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input id="name" type="text" class="form-control" name="name" required autofocus>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="email">E-Mail Address</label>
                                            <input id="email" type="email" class="form-control" name="email" required>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input id="password" type="password" class="form-control" name="password" required data-eye>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>
                                                <input type="checkbox" name="aggree" value="1"> I agree to the Terms and Conditions
                                            </label>
                                        </div>
                                        
                                        <div class="form-group no-margin">
                                            <button type="submit" name="submit" value="register" class="btn btn-primary btn-block">
                                                Register
                                            </button>
                                        </div>
                                        <div class="margin-top20 text-center">
                                            Already have an account? <a href="index.html">Login</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="footer">
                                Copyright &copy; 2017 &mdash; TilT Crew 
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        
        <?php include 'include/bootstrap_footer.php';?>
        <script src="js/login.js"></script>
    </body>
</html>
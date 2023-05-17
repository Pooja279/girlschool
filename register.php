<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from brandio.io/envato/ggicballia/html/register4.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Apr 2023 22:37:01 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ggicballia</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/iofrm-theme4.css">
</head>
<body>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registration</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
    <?php
        
        require('connection.php');
       
        // When form submitted, insert values into the database.
        if (isset($_REQUEST['username'])) {
            // removes backslashes
            $type = stripslashes($_REQUEST['admin']);
            
            $username = stripslashes($_REQUEST['username']);
            $age = stripslashes($_REQUEST['age']);

            //escapes special characters in a string
            $username = mysqli_real_escape_string($conn, $username);
            $email    = stripslashes($_REQUEST['email']);
            $email    = mysqli_real_escape_string($conn, $email);
            $password = stripslashes($_REQUEST['password']);
            $password = mysqli_real_escape_string($conn, $password);
            $create_datetime = date("Y-m-d H:i:s");
            if($type == 'teacher') {
                $table = "teachers";
            } 
            else {
                $table = "students";
            }
            $query    = "INSERT into $table (name, password, age, email)
                        VALUES ('$username', '" . md5($password) . "','$age', '$email')";
            $result   = mysqli_query($conn, $query);
            $location = 'login.php?admin='.$type;
            if ($result) {
               header('Location:'.$location);
            } else {
                echo "<div class='form'>
                    <h3>Required fields are missing.</h3><br/>
                    <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                    </div>";
            }
        } else {
    ?>
    <div class="form-body">
        <div class="website-logo">
            <a href="dashboard.php">
                <div class="logo">
                    <img class="logo-size" src="assets/img/logo-light.svg" alt="">
                </div>
            </a>
        </div>
        <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder">
                    <img src="assets/img/graphic1.svg" alt="">
                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                    

                        <h3>Admin Register</h3>
                        <?php $admintype = $_GET['admin']; ?>
                        <!-- <p>Access to the most powerfull tool in the entire design and web industry.</p> -->
                        <div class="page-links">
                            <a href="login.php?admin=<?php echo $admintype;?>">Login</a><a href="" class="active">Register</a>
                        </div>
                        <form>
                            <input type="text"  name="admin" value="<?php echo $admintype; ?>" hidden />
                            <input class="form-control" type="text" name="username" placeholder="Full Name" required>
                            <input class="form-control" type="email" name="email" placeholder="E-mail Address" required>
                            <input class="form-control" type="number" name="age" placeholder="Age" required>
                            <input class="form-control" type="password" name="password" placeholder="Password" required>

                            <div class="form-button">
                                <button id="submit" type="submit" class="ibtn">Register</button>
                            </div>
                        </form>
                        <!-- <div class="other-links">
                            <span>Or register with</span><a href="#">Facebook</a><a href="#">Google</a><a href="#">Linkedin</a>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    }
?>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/main.js"></script>
</body>

<!-- Mirrored from brandio.io/envato/ggicballia/html/register4.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Apr 2023 22:37:01 GMT -->
</html>
<?php
    session_start();
    include("includes/db.php");
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Admin Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/login.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
<div class="container"><!--container start-->
    <form class="form-login" action="" method="post"><!-- form-login start-->
        <h2 class="form-login-heading">Vikcart Login</h2>
        <input type="text" name="admin_email" class="form-control" placeholder="Email Address" required>
        <input type="password" name="admin_pass" class="form-control" placeholder="password" required>
        <button class="btn btn-primary btn-lg btn-block" type="submit" name="admin_login">
            Login.
        </button>
    </form><!--form-login ends-->
</div><!--container ends-->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
<?php
    if (isset($_POST['admin_login'])) {
        $admin_email = mysqli_real_escape_string($con, $_POST['admin_email']);
        $admin_pass = mysqli_real_escape_string($con, $_POST['admin_pass']);
        $get_admin = "select * from admins where admin_email='$admin_email' AND admin_pass='$admin_pass'";
        $run_admin = mysqli_query($con, $get_admin);
        $count = mysqli_num_rows($run_admin);
        
        if ($count == 1) {
            $_SESSION['admin_email'] = $admin_email;
            echo "<script>alert('You are login')</script>";
            echo "<script>window.open('index.php?dashboard', '_self')</script>";
        } else {
            echo "<script>alert('Email or Password is wrong')</script>";
        }
    }
?>

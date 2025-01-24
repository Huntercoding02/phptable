<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Success</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<?php
session_start();
echo '<pre>';
if(!isset($_SESSION['username'])){
    header('Location: login_form');
    exit;
}
if(isset($_SESSION['username']) && $_SESSION['username']!=""){
    echo "username: ".$_SESSION['username']; 
}
?>

<body>
<a href="logout_form">Logout</a>
<a href="login_form" name="btn_in" id="btn_in">Login</a>
</body>
</html>


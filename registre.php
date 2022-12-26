<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RegistrePage</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
<?php
require('config.php');
if (isset($_REQUEST['username'],$_REQUEST['firstname'], $_REQUEST['lastname'], $_REQUEST['email'], $_REQUEST['password'])){

    $username = stripslashes($_REQUEST['username']);
    $username1 = mysqli_real_escape_string($conn, $username);
    
    $firstname = stripslashes($_REQUEST['firstname']);
    $firstname1 = mysqli_real_escape_string($conn, $firstname);

    $lastname = stripslashes($_REQUEST['lastname']);
    $lastname1 = mysqli_real_escape_string($conn, $lastname);

    $email = stripslashes($_REQUEST['email']);
    $email1 = mysqli_real_escape_string($conn, $email);

    $phone = stripslashes($_REQUEST['phone']);
    $phone1 = mysqli_real_escape_string($conn, $phone);

    $password = stripslashes($_REQUEST['password']);
    $password1 = mysqli_real_escape_string($conn, $password); 

    $query = "INSERT into `users` (username, firstname, lastname, email, phone, password)
    VALUES ('$username1','$firstname1', '$lastname1', '$email1' '".hash('sha256', $password1)."')";

    $res = mysqli_query($conn, $query);
    if($res){
        echo "<div class='sucess'>
            <h3>Vous êtes inscrit avec succès.</h3>
        </div>";
    }
}else{}
?>
    <div  method="post" class="sign-up">
        <h2 class="titre">GENIE <span>INFO</span></h2>
        <form action="login.php" method="POST">
            <input id="username" type="text" name="username" placeholder="Username">
            <input id="firstname" type="text" name="firstname" placeholder="Firstname">
            <input id="lastname" type="text" name="lastname" placeholder="Lastname">
            <input id="email" type="email" name="email" placeholder="Email">
            <input id="phone" type="phone" name="phone" placeholder="Phone">
            <input id="password" type="password" name="password" placeholder="Password">
            <input id="login" type="submit" value="sign-up">
            <p><a href="login.php">LOGIN</a></p>
        </form>
    </div>
</body>
</html>
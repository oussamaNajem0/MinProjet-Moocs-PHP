<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login Page</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="sign-up">
        <h2 class="titre">GENIE<span> INFO</span></h2>
        <form action="log.php" method="POST">
            <input id="username" type="text" name="username" placeholder="Username">
            <input id="password" type="password" name="password" placeholder="Password">
            <input id="login" type="submit" value="Login">
            <br>
            <p>Vous êtes nouveau ici? <a href="registre.php">S'inscrire</a></p>
        </form>
    </div>
    
</body>
</html>

<?php
session_start();
if(isset($_SESSION['username'])){
    echo "Bonjour".$_SESSION['username'];
}
?>


<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="coding.css">
</head>
<header>
    <h1>Login Page</h1>
    <nav>
        <ul class="menu">
        </ul>
    </nav>
</header>
<main>
    <body>
        <div class="container">
            <img class="img-fluid mx-auto d-block" src="CODING_LOGO.png" alt="Logo epitech">
        </div>
        <div>
    <form action="login.php" method="post">
        <div class="form-row d-flex">
            <div class="form-group col-md-6 name">
                <label for="username">Username / Email</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Username / Email" required>
            </div>
            <div class="form-group col-md-6 pass">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
            </div>

            <div class="form-group col-md-12 mail">

                <button type="submit" class="btn btn-primary signin" name="submit">Login</button>
</div>
</div>
</form>
</div>
</body>
</main>
</html>
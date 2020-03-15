<?php
session_start();
if(isset($_SESSION['username'])){
    $username=$_SESSION['username'];
    $message="<p>Bonjour $username!</p>";

}else{
    header('location:login.php');
}
?>


<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/coding.css">
</head>
<header>
    <h1>Index Page</h1>
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
<p><?php echo $message; ?></p>
        </div>
            <div class="form-group col-md-12 mail">

                <button type="logout" class="btn btn-primary" name="submit"><a href="logout.php" class="logout">Logout</a></button>
</div>
</div>
</form>
</div>
</body>
</main>
</html>
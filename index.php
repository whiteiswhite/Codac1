<?php
session_start();
<<<<<<< HEAD
if(isset($_SESSION['username'])){
    echo "Bonjour".$_SESSION['username'];
}
?>


=======
class admin
{
    public $BDD;

    public function __construct()
    {
        $this->connect_db();
    }

    public function connect_db()
    {
        try {
            $DB_PDO = new PDO('mysql:host=' . 'localhost' . ';port=' . '3306' . ';dbname=' . 'pool_php_rush', 'root', '');
            $this->setBDD($DB_PDO);
        } catch (PDOException $e) {
            echo "PDO ERROR: " . $e->getMessage() . ' storage in ' . ERROR_LOG_FILE . "\n";
            error_log($e->getMessage() . "\n", 3, ERROR_LOG_FILE);
        }
    }

    public function check_admin(){
        $res = $this->getBdd()->prepare('SELECT * FROM users where username = :username');
        $res->execute(array(
            'username' => $_SESSION['username']));
        $resultat = $res->fetch();
        if($resultat['admin'] !== NULL){
            header('location: admin.php');
        } else {
            return "<p class='error'>Vous n'avez pas les droits !</p>";
        }
    }

    public function getBdd()
    {
        return $this->BDD;
    }

    public function setBdd($BDD)
    {
        $this->BDD = $BDD;
    }
}

$message_erreur = NULL;
$user = new admin();

if(isset($_SESSION['username'])){
    $username=$_SESSION['username'];
    $message="<p>Bonjour $username!</p>";

}else{
    header('location:login.php');
}

if(isset($_POST['admin'])){
    $message_erreur = $user->check_admin();
}

?>
>>>>>>> Gael
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="">
<<<<<<< HEAD
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="coding.css">
</head>
<header>
    <h1>Login Page</h1>
=======
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/coding.css">
</head>
<header>
    <h1>Index Page</h1>
>>>>>>> Gael
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
<<<<<<< HEAD
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
=======
            <p><?php echo $message; ?></p>
        </div>
            <div class="form-group col-md-12 mail">
                <form action="index.php" method="post">
                    <button type="submit" class="btn btn-primary signin" name="admin">Admin</></button>
                </form>
                <button type="submit" class="btn btn-primary signin" name="logout"><a href="logout.php" class="logout">Logout</a></button>
                <p><?php echo $message_erreur; ?></p>
>>>>>>> Gael
</div>
</div>
</form>
</div>
</body>
</main>
</html>
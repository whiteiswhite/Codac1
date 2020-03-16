<?php
<<<<<<< HEAD
=======
session_start();
>>>>>>> Gael

class log
{
    public $username;
    public $password;
    public $BDD;

    public function __construct($username, $password)
    {
        $this->setUsername($username);
        $this->setPassword($password);
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

    public function check_exists()
    {
        $res = $this->getBdd()->prepare('SELECT * FROM users where username = :username OR email = :email');
        $res->execute(array(
            'username' => $this->getUsername(),
            'email' => $this->getUsername()));
        if ($res->rowCount() >= 1) {
            return $this->check_ids();
        } else {
            return $message = "<p class='error'>Username/Email doesn't exists</p>";
        }
    }

    public function check_ids()
    {
        $res = $this->getBdd()->prepare('SELECT * FROM users where username = :username');
        $res->execute(array(
            'username' => $this->getUsername()));
        $resultat = $res->fetch();
        $isPasswordCorrect = password_verify($_POST['password'], $resultat['password']);
        if ($isPasswordCorrect){
            session_start();
            $_SESSION['username'] = $this->getUsername();
            header('location: index.php');
            return $message = "<p class='success'>Vous êtes connecté !</p>";
        } else {
            return $message = "<p class='error'>Password doesn't match</p>";
        }
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
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

    $message = NULL;

<<<<<<< HEAD
=======
if(isset($_SESSION['user_created'])) {
    $message = "<p class='success'>User created !</p>";
}


>>>>>>> Gael
    if(isset($_POST['submit'])){
    if(isset($_POST['username']) && isset($_POST['password'])){
    $user = new log($_POST['username'],$_POST['password']);
    $message = $user->check_exists();
    } else {
    $message = "<p class='error'>Complete all fields</p>";
    }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="">
<<<<<<< HEAD
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="coding.css">
=======
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/coding.css">
>>>>>>> Gael
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
<<<<<<< HEAD
                <p class="error"><?php echo $message; ?></p>
=======
                <p><?php echo $message; ?></p>
>>>>>>> Gael
</div>
</div>
</form>
</div>
</body>
</main>
</html>
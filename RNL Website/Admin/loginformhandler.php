<?php
// Include config file
define('USER', 'root');
define('PASSWORD', '');
define('HOST', 'localhost');
define('DATABASE', 'capstone');
try {
    $connection = new PDO("mysql:host=".HOST.";dbname=".DATABASE, USER, PASSWORD);
} catch (PDOException $e) {
    exit("Error: " . $e->getMessage());
}

if (isset($_POST['submit'])) {
    $username = $_POST['users_ username'];
    $password = $_POST['password'];
    $query = $connection->prepare("SELECT * FROM users WHERE users_username=:users_username");
    $query->bindParam("users_username", $username, PDO::PARAM_STR);
    $query->execute();
    $result = $query->fetch(PDO::FETCH_ASSOC);
    if (!$result) {
        echo '<p class="error">Username password combination is wrong!</p>';
    } else {
        if (password_verify($password, $result['users_password'])) {
           
            echo '<p class="success">Congratulations, you are logged in!</p>';
            header("Location: ../admin/dashboard/dashboard.php");
        } else {
            echo '<p class="error">Username password combination is wrong!</p>';
            header("Location: ../admin/dashboard/dashboard.php");
        }
    }
}

?>
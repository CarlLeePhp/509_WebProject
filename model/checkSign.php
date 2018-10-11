<?php
include '../../conf_supermail.php';
// connet database
// mysqli('server', 'username', 'password', 'databasename')
// @ 通常用在函数前，阻止错误信息显示
$db = @new mysqli($db_url, $db_user, $db_pw, $db_database );
if($db->connect_error) {
    echo 'Could not connect to database.';
    exit;
}

// Get the packageID from user
$email = $_GET['email'];
$password = $_GET['password'];

// SQL
$query = "SELECT password FROM users WHERE email = '" . $email . "'";

// query
if(!$result = $db->query ($query)) {
    echo "Can not query";
    $db->close();
    exit;
}

// Check result
if ($result->num_rows === 0) {
    echo "This email is not exist.";
    $db->close();
    exit;
}

$actor = $result->fetch_assoc();

// Check the password
if ($actor['password'] == $password) {
    echo "Welcome!";
} else {
    echo "Wrong Password! Please try again.";
}

$result->free();
$db->close();

?>


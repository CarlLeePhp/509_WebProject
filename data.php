<?php
// database supermail
// user supermail
// KxtG]ysYC-8<fgY

// connet database
// mysqli('server', 'username', 'password', 'databasename')
// @ 通常用在函数前，阻止错误信息显示
$db = @new mysqli('localhost', 'supermail', 'KxtG]ysYC-8<fgY', 'supermail' );
if($db->connect_error) {
    echo 'Could not connect to database.';
    exit;
}

// Get the packageID from user
$packageID = $_GET['packageID'];

// SQL
$query = "SELECT message FROM package WHERE code = '" . $packageID . "'";

// query
if(!$result = $db->query ($query)) {
    echo "Can not query";
    $db->close();
    exit;
}

// Check result
if ($result->num_rows === 0) {
    echo "The package ID (" . $packageID . ") is not exist.";
    $db->close();
    exit;
}

$actor = $result->fetch_assoc();

echo $actor['message'];
$result->free();
$db->close();

?>


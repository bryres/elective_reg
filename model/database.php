<?php
# Localhost connection option
# $dsn = 'mysql:host=localhost;dbname=electives';
# $username = 'electives_user';

# Remote connection option
$dsn = 'mysql:host=192.168.1.9;dbname=electives';
$username = 'electives_user_2';
$password = 'atcsrocks';
$options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

try {
    $db = new PDO($dsn, $username, $password, $options);
} catch (PDOException $e) {
    $error_message = $e->getMessage();
    include 'errors/db_error_connect.php';
    exit;
}

function display_db_error($error_message) {
    global $app_path;
    include 'errors/db_error.php';
    exit;
}
?>
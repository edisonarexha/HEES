<?php
$name = $_POST['name'];
$email = $_POST['email'];
$username = $_POST ['username'];
$password = $_POST['password'];
$role = $_POST['browser'];

function guidv4($data = null) {
    $data = $data ?? random_bytes(16);
    assert(strlen($data) == 16);
    $data[6] = chr(ord($data[6]) & 0x0f | 0x40);
    $data[8] = chr(ord($data[8]) & 0x3f | 0x80);
    return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
} 

if (!empty($name) || !empty($email) || !empty($username) || !empty($password) || !empty($role)) {
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "hees";

    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } else {
        
        // $SELECT = "SELECT username From users Where username = ? Limit = 1";
        $uuid = guidv4();
        $INSERT = "INSERT INTO users (id, name, email, username, password, role) VALUES ('$uuid', '$name', '$email', '$username', '$password', '$role')";
        if ($conn->query($INSERT) === TRUE) {
            header('Location: ../HTML-Files/HomePage.php');
        } else {
            echo "Error: " . $INSERT . "<br>" . $conn->error;
        }
        $conn->close();
    }
}
?>


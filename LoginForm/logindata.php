<?php
$username = $_POST ['username'];
$password =$_POST['password'];


$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "registerform";

$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    $query = "SELECT * FROM users where username='$username' and password='$password'";
    if ($result = $conn->query($query)) {
        $res;
        while($obj = $result->fetch_object()) {
            $res = $obj->role;
        }

        if (isset($res) && $res == 'admin') {
            header('Location: ../Admin/admin.php');
        } elseif( isset($res) && ($res == 'Ambasador' || $res == 'Donator')) {
            header('Location: ../HTML-Files/HomePage.html');
        } else {
            echo "Please enter valid username and password";
            echo "<button onclick=\"window.location.href='./LogIn.php'\">Go Back</button>";
        }
        $result->close();
    } else {
        echo "Error: " . $query . "<br>" . $conn->error. `
             <button onclick=\"window.location.href='./LogIn.php'\">Go Back</button>"
        `;
    }
    $conn->close();
}
?>
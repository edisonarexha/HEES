<?php
$username = $_POST ['username'];
$password =$_POST['password'];


$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "hees";

$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    $query = "SELECT * FROM users where username='$username' and password='$password'";
    if ($result = $conn->query($query)) {
        $res;
        while($obj = $result->fetch_object()) {
            $res = $obj->role;
            $userId = $obj->id;
        }

        if (isset($res) && $res == 'admin') {
            setcookie("logedInUser", "admin-".$userId, time()+3600, '/');
            header('Location: ../Admin/admin.php');
        } elseif( isset($res) && ($res == 'Ambasador' || $res == 'Donator')) {
            setcookie("logedInUser", $userId, time()+3600, '/');
            header('Location: ../HTML-Files/HomePage.php');
        } else {
            echo "<div class=\"non-login-screen\">";
            echo "<p>Please enter valid username and password</p>";
            echo "<button onclick=\"window.location.href='./LogIn.php'\">Go Back</button>";
            echo "</div>";
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
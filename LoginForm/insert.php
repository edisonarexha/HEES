<?php
$name = $_POST['Name'];
$email = $_POST['Email'];
$username = $_POST ['Username'];
$password = $_POST['Password'];
$role = $_POST['Role'];


if (!empty($name) || !empty($email) || !empty($username) || $empty ($password) || 
$empty($role)) {
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "RegisterForm";

    $conn = new mysqli($host,$dbUsername,$dbPassword,$dbname);
    if (mysqli_connect_error()){
        die('Connect Error ('.mysqli_connect_errno().')'. mysqli_connect_error());
    }
    else {
        
        $SELECT = "SELECT username From register Where username = ? Limit = 1";
        $INSERT = "INSERT Into register (name, email, username, password, role) values()";
    
    $stmt = $conn -> prepare ($SELECT);
    $stmt->bind_param("s");
    $stmt->execute();
    $stmt->bind_result($username);
    $stmt->store_result();
    $rnum = $stmt->num_rows;

    if($rnum==0){
        $stmt->close();

        $stmt = $conn->prepare($INSERT);
        $stmt->bind_param("ssssii", $name, $email, $username, $password, $role);
        $stmt->execute();

    echo "New record is inserted sucessfully";

    }else {
        echo "Someone already register using this username";
    }
    $stmt->close();
    $conn->close();
    
    
    }
    else {
        echo "All fields required" ; 
        die();
    
    } 
}
?>
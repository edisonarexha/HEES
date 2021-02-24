<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hees";

function guidv4($data = null) {
		    $data = $data ?? random_bytes(16);
		    assert(strlen($data) == 16);
		    $data[6] = chr(ord($data[6]) & 0x0f | 0x40);
		    $data[8] = chr(ord($data[8]) & 0x3f | 0x80);
		    return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
		}

$uuid = guidv4();

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
	
$titulli = $_POST['titulli'];
$data = $_POST['data'];
$mesazhi = addslashes($_POST['mesazhi']);
$fotografi = addslashes(file_get_contents($_FILES['fotografi']['tmp_name']));
$INSERT = "INSERT INTO news (id, title, date, message, photo) VALUES ('$uuid','$titulli','$data','$mesazhi', '$fotografi')";
	if ($conn->query($INSERT) === TRUE) {
		header('Location: ../HTML-Files/News.php');
	} else {
		echo "Error: " . $INSERT . "<br>" . $conn->error;
	}
	$conn->close();
?>
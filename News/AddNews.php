
<?php
	$lajmeID = $_POST['lajmeID'];
	$titulli = $_POST['titulli'];
	$data = $_POST['data'];
	$Mesazhi = $_POST['Mesazhi'];
	$fotografi = $_POST['fotografi'];


		function guidv4($data = null) {
		    $data = $data ?? random_bytes(16);
		    assert(strlen($data) == 16);
		    $data[6] = chr(ord($data[6]) & 0x0f | 0x40);
		    $data[8] = chr(ord($data[8]) & 0x3f | 0x80);
		    return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
		} 

			if (!empty($titulli) || !empty($data) || !empty($Mesazhi) || !empty($fotografi)) {
				# code...
				$host = "localhost";
				$dbUsername = "root";
				$dbPassword = "";
				$dbname = "hees";

				$conn = new msqli($host ,$dbUsername,$dbPassword,$dbname);
				if ($conn -> connect_error) {
				 	# code...
				 	die("Connection failed: " .$conn->connect_error);
				 } else{

				 	$uuid = guidv4();
				 	$INSERT = "INSERT INTO lajme (lajmeID,titulli,data,Mesazhi,fotografi,)
				 	VALUES ('$uuid',$titulli,$data,$Mesazhi,$fotografi)";
				 		if ($conn -> query($INSERT) ===true) {
				 			header('Location : ../HTML-Files/News.php');
				 			# code...
				 		}else{
				 			echo "Error: " . $INSERT . " <BR>" .$conn->error;
				 		}
				 			$conn ->close();
				 }
			}


?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="adminpanel.css">
	<style>
@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap');
</style>
</head>
<body>
	<div class="admin-container">
		<div class="back-button">
			<span onclick="window.location.href='../HTML-Files/HomePage.php'">Back to Home </span>
			<span onclick="window.location.href='../LoginForm/LogIn.php'">Logout</span>
		</div>
		</div>
			<div style="border: 1px solid white;width: 60%;height: 100%;margin-left: 20%">
					<div style="border: 1px solid white;width: 100%;height:10%;float: left;display: inline;">
						<h1 style="color: white;text-align: center;font-family: 'Montserrat', sans-serif;">
							What is the News for today Admin?
						</h1>
					</div>
					<div style="border:1px solid white; width: 100%;height:7%;float: left;display: inline">
						<h2 style="color: white;font-family: 'Montserrat', sans-serif;margin-left: 10%">
							Updates for today:
						</h2>
					</div>
					<div style="border: 1px solid white;width: 100%;height: 83%;float: left;display: inline">
						<form method="_POST" id="form">
							<input type="text" name="titulli" placeholder="Titulli" style="margin-top: 4%;margin-left: 3%;padding: 10px 60px;color: white;background-color: black;border-color: white;border-top: transparent;border-left: transparent;border-right: transparent;font-size: 20px">
							<input type="text" name=" data" placeholder="Date & Time" style="margin-top: 4%;margin-left: 20%;padding: 10px 60px;color: white;background-color: black;border-color: white;border-top: transparent;border-left: transparent;border-right: transparent;font-size: 20px">
							<input type="file" name="file" placeholder="Choose File" name="fotografi" style="color: white;background-color: black;padding: 10px 20px; margin-left: 5%;margin-top: 10%">
							<br>
							<textarea name="Mesazhi" rows="14" cols="120" style="margin-left: 5%;margin-top: 3%;background-color: black;color: white;border: 2px solid white;resize: none;" placeholder="Type Your news here"></textarea>
							<button type="submit" style="padding: 8px 60px;margin-left:80%;margin-top: 3%;background-color: black;border: 2px solid white;color :white;">Post</button>
						</form>
					</div>

			</div>


	</body>
	</html>
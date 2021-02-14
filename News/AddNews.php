

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
						<form method="POST" id="form" action="insertation.php">
							<input type="text" name="titulli" placeholder="Titulli" style="margin-top: 4%;margin-left: 3%;padding: 10px 60px;color: white;background-color: black;border-color: white;border-top: transparent;border-left: transparent;border-right: transparent;font-size: 20px" id="titulli">
							<input type="text" name="data" placeholder="Date & Time" style="margin-top: 4%;margin-left: 20%;padding: 10px 60px;color: white;background-color: black;border-color: white;border-top: transparent;border-left: transparent;border-right: transparent;font-size: 20px" id="data">
							<input type="file" name="fotografi" placeholder="Choose File" name="fotografi" style="color: white;background-color: black;padding: 10px 20px; margin-left: 5%;margin-top: 10%" id="fotografi">
							<br>
							<textarea name="mesazhi" rows="14" cols="120" style="margin-left: 5%;margin-top: 3%;background-color: black;color: white;border: 2px solid white;resize: none;" placeholder="Type Your news here" id="Mesazhi"></textarea>
							<button type="submit" style="padding: 8px 60px;margin-left:80%;margin-top: 3%;background-color: black;border: 2px solid white;color :white;" action="insertation.php">Post</button>
						</form>
					</div>

			</div>


	</body>
	</html>
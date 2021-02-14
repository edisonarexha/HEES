



<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="adminPanel.css">
</head>
<body>
	<div class="admin-container">
		<div class="back-button">
			<span onclick="window.location.href='../HTML-Files/HomePage.php'">Back to Home </span>
			<span onclick="window.location.href='../LoginForm/LogIn.php'">Logout</span>
		</div>
		
		<p class="welcome-text">Welcome!</p>
		<div class="dashboard-container">
			<div class="left-list">
				<div class="action-btn" onclick="changeTab('users-tab')">Users</div>
				<div class="action-btn" onclick="changeTab('other-tab')">Add News</div>
				<div class="action-btn" onclick="changeTab('trend-tab')">Users-messages</div>
			</div>
			<div class="right-box">
				<div id="users-tab">
					<h1>Users-List</h1>
					<?php
						$dbc = mysqli_connect('localhost', 'root','', 'hees') or die("Gabim gjat lidhjes.");

						$query = "SELECT * FROM users";
						$result=mysqli_query($dbc,$query);
						while ($row = mysqli_fetch_array($result)) {
							echo "<div class=\"list-item\">
									<span>".$row['name']."</span>
									<span>".$row['email']."</span>
									<span>".$row['username']."</span>
									<span>".$row['role']."</span>
								</div>";
						}
					?>
				</div>
					
				<div id="other-tab">
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
						<form method="POST" id="form" action="../News/insertation.php"  enctype="multipart/form-data">
							<input type="text" name="titulli" placeholder="Titulli" style="margin-top: 4%;margin-left: 3%;padding: 10px 60px;color: white;background-color: black;border-color: white;border-top: transparent;border-left: transparent;border-right: transparent;font-size: 20px" id="titulli">
							<input type="text" name="data" placeholder="Date & Time" style="margin-top: 4%;margin-left: 20%;padding: 10px 60px;color: white;background-color: black;border-color: white;border-top: transparent;border-left: transparent;border-right: transparent;font-size: 20px" id="data">
							<input type="file" name="fotografi" placeholder="Choose File" style="color: white;background-color: black;padding: 10px 20px; margin-left: 5%;margin-top: 10%" id="fotografi">
							<br>
							<textarea name="mesazhi" rows="14" cols="120" style="margin-left: 5%;margin-top: 3%;background-color: black;color: white;border: 2px solid white;resize: none;" placeholder="Type Your news here" id="Mesazhi"></textarea>
							<button type="submit" style="padding: 8px 60px;margin-left:80%;margin-top: 3%;background-color: black;border: 2px solid white;color :white;" action="insertation.php">Post</button>
						</form>
					</div>

			</div>
				</div>

				<div id="trend-tab"> Users-messages</div>
			</div>
		</div>
	</div>
	
	<script src="admin.js"></script>
</body>
</html>
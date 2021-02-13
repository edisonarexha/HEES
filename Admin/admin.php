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
						$dbc = mysqli_connect('localhost', 'root','', 'registerform') or die("Gabim gjat lidhjes.");

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
					
					<h1>Add News</h1>
				</div>

				<div id="trend-tab"> Users-messages</div>
			</div>
		</div>
	</div>
	
	<script src="admin.js"></script>
</body>
</html>
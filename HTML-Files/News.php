<?php if(!isset($_COOKIE['logedInUser'])) { header('Location: ../LoginForm/LogIn.php'); }  else { ?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../CSS-Files/news.css">
        
  <script type="text/javascript" src="../JavaScript-Files/Homepage.js"></script>
  <meta content="width=device-width, initial-scale=1" name="viewport" />


  <title>
    HEES
</title>

<!---------------------------------------------------------------------------------------->

              <!----------------Google Fonts------------------------------->

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Padauk&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=East+Sea+Dokdo&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Major+Mono+Display&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Lato&family=Major+Mono+Display&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Cutive+Mono&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@100&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Inconsolata&display=swap" rel="stylesheet">

<link rel="preconnect" href="https://fonts.gstatic.com">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Special+Elite&display=swap" rel="stylesheet"><link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300&display=swap" rel="stylesheet">



    </head>
    <body>
        <div id="divipare">
            <div id="navbar">
                <a href="HomePage.php"id="button-form">Home</a>
                <a href="#" id="button-form1">News</a>
                <a href="Aboutus.php" id="button-form1">About   us</a>
                <a href="contact.php" id="button-form1">Contact</a>
                <div class="right">
                    <div class="logout" onclick="window.location.href='../index.php'">Logout</div>
                </div>
            </div>
        </div>
    <div>
       
<!----------------------Testing this -->
        <div id='main-div'>
        </div>
        <div id="space-div">

            <h1 id="style-h1">
                Blog me!!!
            </h1>

        </div>
    

                </div>

          
<div class="all-news">
    <?php
                $dbc = mysqli_connect('localhost', 'root','', 'hees') or die("Gabim gjat lidhjes.");

                $query = "SELECT * FROM news";
                $result=mysqli_query($dbc,$query);
                while ($row = mysqli_fetch_array($result)) {?>
                    <div class="list-item">
                        <div class="img">
                            <img  id="img1" src=<?php echo 'data:image/jpeg;base64,'.base64_encode($row['photo']); ?> />
                        </div>
                        <h2 id="textfirst"><?php echo $row['title']; ?></h2>
                        <span id="date1"> <?php echo $row['date']; ?></span>
                        <div id="textmessage"> <?php echo $row['message']; ?></div>    
                    </div>

                <?php }?>
</div>





     
    </body>
</html>
<?php }?>

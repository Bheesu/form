<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="dash.css">
 
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><span id="user"><?php echo  $_SESSION['username']; ?></span></li>
                <li><a href="index.php"> <button>LOG OUT</button></a></li>
            </ul>
        </nav>
    </header>
    <div id="user_info">
    <?php
     $conn = mysqli_connect("localhost", "root", "", "form");
     $user= $_SESSION['username'];
    $query="select * from signup where Email='$user'";
     $run = mysqli_query($conn,$query);
     while($obj = mysqli_fetch_object($run)){
         echo "<span>Name :".($obj->First_name)."</span><br>";
         echo "<span>Last name :".($obj->Last_Name)."</span><br>";
         echo "<span>Email :".($obj->Email)."</span>";
            
          }
      
    ?>
    </div>
    <script src="dash.js"></script>
</body>
</html>
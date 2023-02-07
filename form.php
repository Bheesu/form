<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <label>Name : </label><input type ="text" name ="name" ><br>
        <label>Email : </label><input type="text" name="email" ><br>
        <label>Password : </label><input type="password" name="pass" ><br>
        <input type="submit" name ="submit">
    </form>
    <?php
    $conn=mysqli_connect("localhost","root","","form");
    // if($conn)
    // {
    //     echo "connected";
    // }
    // else
    // {
    //     echo "not connected";
    // }
    if(isset($_POST['submit']))
    {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $pass=$_POST['pass'];
        if(!empty($name && $email && $pass))
        {
        $query="insert into registration(Name,Email,Password)values('$name','$email','$pass')";
        $run=mysqli_query($conn,$query);
        // if($run)
        // {
        //     echo "form submitted";
        // }
        // else{
        //     echo "not submitted";
        // }
        }
    }

    ?>
</body>
</html>

<!-- <?php
    
    //  echo session_id();
  
    //  $conn = mysqli_connect("localhost", "root", "", "form");
    //  if($conn)
    //  {
    //      echo "hello";
    //  }
    // $query="select Username from login";
    //  $run = mysqli_query($conn,$query);
    //  while($obj = mysqli_fetch_object($run)){
    //  echo ($obj->Username);
    //     echo "<br>";
    //   }
    //   $USER="select CURRENT_USER()";
    //   $run1 = mysqli_query($conn,$USER);
    //     echo $USER;
    //   ?> -->
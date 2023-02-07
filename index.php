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
    <link rel="stylesheet" href="form.css">
</head>

<body>
    <div class="frame">
    <form method="POST" enctype="multipart/form-data">
    <h1>Login</h1>
        <table>
        
            <tr>
                <td><label>Username : </label></td>
                <td> <input type="text" name="email" placeholder="username" required></td>
            </tr>
            <tr>
                <td> <label>Password : </label></td>
                <td><input type="password" name="pass" placeholder="password" required></td>
            </tr>
            <tr>
                <td> </td>
                <td><input type="submit" id="submit" name="submit"><a href="signup.php">go to sign up page</a></td>
            </tr>
        </table>
    </form>
    </div>
    <?php
    $conn = mysqli_connect("localhost", "root", "", "form");
    // if($conn)
    // {
    //     echo "connected";
    // }
    // else
    // {
    //     echo "not connected";
    // }
    if (isset($_POST['submit'])) {
        $username = $_POST['email'];
        $pass = $_POST['pass'];

        $query = "select * from signup where Email='$username' and Password='$pass'";
        $run = mysqli_query($conn, $query);
        $row = mysqli_fetch_row($run);
        if ($row) {
            $query1 = "insert into login(Username,Password)values('$username','$pass')";
            $run = mysqli_query($conn, $query1);
            $_SESSION['username']=$username;
           
            header("location:dashboard.php");
        } else {
            echo "username and password are incorrect";
        }
    }

    ?>
</body>

</html>
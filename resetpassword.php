<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Reset password</h1>
    <form action="resetpassword.php" method = "post">
    Username: <input type="text" name="uname"><br>
    New Password: <input type="password" name="pass1"><br>
    <input type="submit" name="submit" value="Submit Account">
    </form>
    <?php
    
    if (isset($_POST['submit'])){
    if(empty($_POST['uname']) || empty($_POST['pass1'])){ 
        echo "Username or password cannot be empty";
    } elseif (file_exists($_POST['uname'] . ".json")) {
    //    echo "good USername";
       $name = $_POST['uname'];
       $resetpass1 = $_POST['pass1'];
       $FileName = $_POST['uname'] . ".json";
        $arraydir = [
            'Username' => $name,
            'Password' => $resetpass1,
        ];
        $result = file_put_contents($FileName, json_encode($arraydir));
        $_SESSION["SuccessMessage"] = "Password change Successful";
        header("Location:login.php");
    }
    
    else{
        echo "Invalid USername";
       
        }
}
?>
</body>
</html>

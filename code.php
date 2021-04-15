<?php
session_start();
    $uname = $_POST['uname'];
    $pass = $_POST['pass'];
    $FileName =  $uname . '.json';
if (isset($_POST['submit'])){
    if(empty($_POST['uname']) || empty($_POST['pass'])){ 
        $_SESSION["ErrorMessage"] = "Username or password cannot be empty";
        header("Location:Signup.php");
    } elseif (file_exists($FileName)) {
        $_SESSION["ErrorMessage"] = "Username already exist";
       header("Location:Signup.php");
    }
    
    else{
       $_SESSION["SuccessMessage"] = "Registration Successful";
       header("Location:login.php");
    
        $arraydir = [
            'Username' => $uname,
            'Password' => $pass
        ];

    file_put_contents($FileName, json_encode($arraydir));
       
        }
}

?>
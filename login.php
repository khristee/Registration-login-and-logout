<?php session_start(); ?>
<html>
<body>
<?php
echo $_SESSION["ErrorMessage"];
$_SESSION["ErrorMessage"]= null;
echo $_SESSION["SuccessMessage"];
$_SESSION["SuccessMessage"]= null;?>

<h1>Signin Form</h1>
<form action="login.php" method="post">

Username: <input type="text" name="loginuname"><br>
Password: <input type="password" name="loginpass"><br>
<a href="resetpassword.php">Click here to reset password</a>
<input type="submit" name="submit" value="Submit Account">

<?php
if (isset($_POST['submit'])){
    $loginuname = $_POST['loginuname'];
    $loginpass = $_POST['loginpass'];
    $FileName = $loginuname . ".json";
    if (file_exists($FileName)) {
        // echo "Username exist";
        $result = file_get_contents($FileName);
        // $json=str_replace("}","]",$result);
        $data = json_decode($result);
        // print_r($data);
        $open = fopen($FileName,"r");
        $read = fread($open, filesize($FileName));
        // print_r($read);
        $split = explode(":", $read);
        $replace1 = str_replace("}", "", $split);
        $replace2 = str_replace('"', "", $replace1);
        // $replace = str_replace("{", "", $replace2);
        // print_r($split);
      
        $confirm = $replace2[2];
        // echo var_dump($confirm);
        if ($loginpass == $confirm) {
            header("Location:index.php");
        } else {
            $_SESSION["ErrorMessage"] = "Wrong Password!!";
        }
} else{ 
    $_SESSION["ErrorMessage"] = "Invalid USername";
} 
}
?> 
</body> 
</html>

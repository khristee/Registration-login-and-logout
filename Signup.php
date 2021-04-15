<?php session_start()?>
<html>
<head><title>Simple Sign Up</title></head>
<body>

<?php 

echo $_SESSION["ErrorMessage"];
$_SESSION["ErrorMessage"]= null;?>
<form action="code.php" method="post">
<h1>Signup Form</h1>
Username: <input type="text" name="uname"><br>
Password: <input type="password" name="pass"><br>
<input type="submit" name="submit" value="Submit Account">
</body>
</html>
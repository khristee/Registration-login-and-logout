<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>welcome</h1>
    <form action="Signup.php" method="post">
    <button type="submit" name="submit">Logout</button>
    </form>
    <?php
    if (isset($_POST['submit'])) {
        header("Location:Signup.php");
    }
    ?>
</body>
</html>
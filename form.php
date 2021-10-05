<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <a href="http://localhost:4000/form.php">Homepage</a>
    <form action="form.php" method="post">
        username: <input type="text" name="username">
        password: <input type="password" name="password">
        <input type="submit">
    </form>
    <?php
        $username=$_POST["username"];
        $password=$_POST["password"];
        $fullname=$_POST["full name"];
        echo("$username");
    ?>
</body>
</html>

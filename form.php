<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="site.php" method="get">
        Name: <input type="text" name="firstname">
        Age: <input type="number" name="age">
        <input type="submit">
    </form>
    <br>

    <?php
        $name= $_GET["firstname"];
        $age=$_GET["age"];
        echo("<h1>Your name is $name and you are $age years old</h1>");   
    ?>
</body>
</html>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <a href="http://localhost:4000/calculator.php">Homepage</a>
    <br><br>
    <form action="calculator.php" method="post">
        Number 1 : <input type="number" name="num1" placeholder="enter number">
        <br><br>
        Number 2 : <input type="number" name="num2" placeholder="enter number">
        <br><br>
        <input type="submit">
    </form>
    Answer: 
    <?php
        $a=array();
        $num1=$_POST["num1"];
        $num2=$_POST["num2"];
        echo $num1+$num2;
    ?>
</body>
</html>
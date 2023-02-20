<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body align="center">
    <h1>Find Largest Number</h1>
    <form method="post">
        <input type="text" name="a" placeholder="Enter number 1"><br><br>
        <input type="text" name="b" placeholder="Enter number 2"><br><br>
        <input type="text" name="c" placeholder="Enter number 3"><br><br>
        <input type="submit" name="ch" value="check largest number"><br><br>
    </form>
    <?php
    if(isset($_POST['ch']))
    {
        $a=$_POST['a'];
        $b=$_POST['b'];
        $c=$_POST['c'];

        echo "Number 1 is : ".$a."<br>";
        echo "Number 2 is : ".$b."<br>";
        echo "Number 3 is : ".$c."<br><br>";
        $result = ($a > $b && $a > $c) ? ("The Largest Number 1 is : ".$a) : (($b > $c) ? ("The Largest Number 2 is : ".$b) : ("The Largest Number 3 is : ".$c));
        echo $result;
    }
    ?>
</body>
</html>
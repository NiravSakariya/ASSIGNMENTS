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
    <form method="post">
            <h3>Print The Fibonacci Series</h3>
            <input type="text" name="num" placeholder="Enter a number *" required>
            <br><br>

            <input type="submit" name="sub" value="submit"><br><br>
    </form>
<?php
if(isset($_POST['sub']))
{
    $n=$_POST['num'];
    $a = 0;
    $b = 1;

    echo "The Fibonacci Series is : $a $b ";
    for($i=1 ; $i <= $n ; $i++)
    {
        $c = $a + $b;
        echo " $c";
        $a = $b;
        $b = $c;
    }
}
?>

</body>
</html>
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
<body>
    <h1>To Check Year is Leap year or not...</h1>
    <form method="post">
        <input type="text" name="year" placeholder="Enter Year..">
        <input type="submit" name="check" value="check year">
    </form>
    <?php
    if(isset($_POST['check']))
    {
        $year=$_POST['year'];
        if($year % 4 == 0)
        {
            if($year % 100 == 0)
            {
                if($year % 400 == 0)
                {
                    echo "<h1>$year is Leap Year</h1><br>";
                }
                else
                {
                    echo "<h1>$year is Not Leap Year</h1><br>";
                }
            }
            else
            {
                echo "<h1>$year is Leap Year</h1><br>";
            }
        }
        else
        {
            echo "<h1>$year is Not Leap Year</h1><br>";
        }
    }
    ?>
</body>
</html>
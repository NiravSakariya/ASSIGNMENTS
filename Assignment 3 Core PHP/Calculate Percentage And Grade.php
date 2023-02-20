<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Ex-1</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    
<?php
    if(isset($_POST["sub"]))
    {
        $phy=$_POST["Physics"];
        $che=$_POST["Chemistry"];
        $bio=$_POST["Biology"];
        $mat=$_POST["Mathematics"];
        $com=$_POST["Computer"];
        if($phy<'100' && $che<'100' && $bio<'100' && $mat<'100' && $com<'100')
        {
            if($phy>=33 && $che>=33 && $bio>=33 && $mat>=33 && $com>=33)
            {
                $total=$phy+$che+$bio+$mat+$com;
                $pr=$total/5;
                echo '::Your Result ::<br><br><hr>'.'Physics:: '.$phy.'</br>'
                .'Chemistry:: '.$che.'</br>'
                .'Biology:: '.$bio.'</br>'
                .'Mathematics:: '.$mat.'</br>'
                .'Computer:: '.$com.'</br></br><hr>'
                .':: Grand Total is :: '.$total.'</br>'
                .':: PR is :: '.$pr.'</br></br><hr>' ;
                if($pr>=90)
                {
                    echo "<h1 align='center'>Grade A</h1>";
                }
                else if($pr>=80 && $pr<90)
                {
                    echo "<h1 align='center'>Grade B</h1>";
                }
                else if($pr>=70 && $pr<80)
                {
                    echo "<h1 align='center'>Grade C</h1>";
                }
                else if($pr>=60 && $pr<70)
                {
                    echo "<h1 align='center'>Grade D</h1>";
                }   
                else if($pr>=34 && $pr<60)
                {
                    echo "<h1 align='center'>Grade E</h1>";
                }
                else
                {
                    echo "<h1 align='center'>You Are Fail</h1>";
                }
        }
        else
        {
            echo 'Sorry You Are Fail Beter Luck Next Time....</br><hr>';
        }
    }
    else
    {
        echo "Pls Enter Marks Under 100";
    }
    }
 
    ?>
<center>
        <form method="post">
            <h1>Enter Marks And Get Result.....</h1>
            Physics::       <input type="text" name="Physics" placeholder="Enter Marks Physics"><br><br>
            Chemistry::     <input type="text" name="Chemistry" placeholder="Enter Marks Chemistry"><br><br>
            Biology::       <input type="text" name="Biology" placeholder="Enter Marks Biology"><br><br>
            Mathematics::   <input type="text" name="Mathematics" placeholder="Enter Marks Mathematics"><br><br>
            Computer::      <input type="text" name="Computer" placeholder="Enter Marks Computer"><br><br>
            <input type="submit" name="sub" value="Get Result">
        </form>
</center>
    
</body>
</html>
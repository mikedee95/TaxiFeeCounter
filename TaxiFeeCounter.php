<?php
if ($_SERVER["REQUEST_METHOD"] = "POST"){
    $distance = $_REQUEST["inputdistance"];
    if ($distance <= 1 && $distance > 0){
        echo "Total cost is 15000VND";
    } elseif ($distance >= 2 && $distance<6){
        $total = 15000 + ($distance - 1)*13500;
        echo $total;
    } elseif ($distance >= 6 && $distance <= 120){
        $total = (15000 + 13500*4 + ($distance - 5)*11000);
        echo $total;
    } elseif ($distance > 120){
        $total = (15000 + 13500*4 + ($distance - 5)*11000)*0.9;
        echo $total;
    }
}
?>

<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    Enter travelled distance: <input type="text" name="inputdistance" /><br/>
<!--    Total cost: <output name="totalcost"></output><br/>-->
    <button type="submit" name="calculate">Calculate</button>

</form>
</body>
</html>

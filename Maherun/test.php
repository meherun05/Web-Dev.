<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
<div class="one">
welcome

<h1>Our Company</h1>

<?php
echo 'This is my first Program in PHP';
?>
</div> 

<div class="two">
    <p>this is my first side box</p>
</div>

<div class="tree">
<?php
$num1=134;
$num2='134';
$result=$num1*$num2;

echo $result;
if($num1===$num2){
    echo '<br> true';
}else{
    echo '<br> false';
}
?>
<?php
$t = date("H");

if ($t < "20") {
  echo "<br> Have a good day!";
} else {
  echo "<br> Have a good night!";
}
?>
</div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
    <style>
    h1{
        color:blue;
    }
    </style>
</head>
<body>
<div>
    <h1>Array</h1>
<?php
$carmakes = array ("Audi","BMW","Mercedes");
echo "<p>Car makes:</p>";
print_r($carmakes);
echo "<p>Car makes: Element one </p>";
echo $carmakes[0];
?>

</div>
</body>
</html>
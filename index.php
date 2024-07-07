<?php 
require_once __DIR__ . '/movie.php';

$Movie1 = new Movie ("scimmie danzanti", "1993");
$Movie2 = new Movie ("scimmie arcobaleno", "1995");

// var_dump($Movie1, $Movie2);

echo $Movie1->getData() . "<br>";
echo $Movie2->getData() . "<br>";



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>oop1</title>
</head>
<body>
    
</body>
</html>
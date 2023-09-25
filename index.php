<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/style/style.css">
</head>
<body>
    
</body>
</html> -->

<?php 

require_once("./Classes/Pet.php");
require_once("./Classes/Owner.php");


$owner1     = new Owner("peter", "Montréal", "7000", "438-438-1111", "a@a.com");

var_dump($owner1);

$hayawen    = new Pet;

$hayawen->setProp("hellooo", 18);
$hayawen->getProp();

echo $hayawen->getProp();





?>
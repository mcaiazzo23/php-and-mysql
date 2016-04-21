<!DOCTYPE html>
    <html>
<head>
    <title>PHP Loops!</title>
</head>
<body>
<?php

// while loop
$number = 1; // initialization expression

while($number<10) { // conditional expression
    echo $number++ . "<br>"; // modification expression
}

// for loop
for($i=1; $i<10; $i++) {
    echo $i;
}

// foreach loop
$name = array("Mike","Bob","John","Jim");

foreach($name as $value) {
    echo $value . "<br>";
}

?>
</body>
</html>
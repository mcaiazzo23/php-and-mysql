<!DOCTYPE html>
    <html>
<head>
    <title>PHP Functions!</title>
</head>
<body>
<?php
function hello() {
    $name = "Michael";
    if(strlen($name)>5) {
        echo $name . " Your name is longer than 5 letters";
    }
    else {
        echo $name . " Your name is less than 5 letters";
    }
}

hello();
?>
</body>
</html>
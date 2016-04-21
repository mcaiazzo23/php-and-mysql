<!DOCTYPE html>
    <html>
<head>
    <title>PHP If & Else</title>
</head>
<body>
<form action="if_else.php" method="get">
    <input type="password" name="pass"/>
    <input type="submit" name="sub" value="Submit"/>
</form>
<?php
if(isset($_GET['sub'])) {
    $pass = $_GET['pass'];
    if ($pass=='') {
        echo '<h3>Please enter something!';
        exit();
    }
    if (strlen($pass) < 6) {
        echo '<h3>Password must be minimum 6 characters</h3>';
    }
    else {
        echo '<h3>Your password is: ' . $pass . '</h3>';
    }
}
?>
</body>
</html>
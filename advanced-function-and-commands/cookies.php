<?php

$expire = time()+60*60*24*30; // this will create cookie that will last 30 days

// cookie function takes 3 parameters - name of cookie, value of cookie you want to set, expiration date
setCookie("user","mysite.com", $expire);
?>

<!DOCTYPE html>
    <html>
<head>
    <title>PHP Cookies(not real ones)!</title>
</head>
<body>
<?php
$cook = $_COOKIE['user'];
echo var_dump($cook);
?>
</body>
</html>
<form action="" method="GET">
    <input type="text" name="name" placeholder="Enter your name"/><br>
    <input type="text" name="email" placeholder="Enter your email"/><br>
    <input type="text" name="pass" placeholder="Enter your password"/><br>
    <input type="submit" name="sub" value="Submit"/>
</form>
<?php
    if(isset($_GET['sub'])) {
        $name = $_GET['name'];
        $email = $_GET['email'];
        $pass = $_GET['pass'];

        $session = $_SESSION['email']=$email;

        echo "Welcome: ". $session;
    }
?>
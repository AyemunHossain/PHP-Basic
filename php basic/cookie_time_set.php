<!DOCTYPE html>
<?php
$cookie_name = "Name";
$cookie_value = "Ashik";
$expiry = time() + (86400);
setcookie($cookie_name, $cookie_value, $expiry);     //1 day
?>
<html>

<body>

    <?php
    if (!isset($_COOKIE[$cookie_name])) {
        echo "Cookie named '" . $cookie_name . "' is not set!";
    } else {
        echo "Cookie '" . $cookie_name . "' is set!<br>";
        echo "Value is: " . $_COOKIE[$cookie_name];
    }
    ?>

    <p><strong>Note:</strong> This cookie will expired in one day </p>

</body>

</html>
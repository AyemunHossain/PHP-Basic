<!DOCTYPE html>
<?php
$cookie_name = "Name";
$cookie_value = "Ashik";
setcookie($cookie_name, $cookie_value);
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

    <p><strong>Note:</strong> You might have to reload the page to see the value of the cookie.</p>

</body>

</html>
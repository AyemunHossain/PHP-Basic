<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php

    $_SESSION["favcolor"] = "green";
    $_SESSION["favanimal"] = "cat";
    echo "Session variables are set.";

    echo "favcolor " . $_SESSION["favcolor"]."<br>";
    echo "faccolor ".$_SESSION["favanimal"];

?>

</body>
</html>
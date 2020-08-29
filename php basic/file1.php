<!DOCTYPE html>
<html>

<body>

    <?php
    $myfile = fopen("new.txt", "r") or die("Unable to open file!");
    echo fread($myfile, filesize("new.txt"));
    echo "File size".filesize("new.txt");
    fclose($myfile);
    ?>

</body>

</html>
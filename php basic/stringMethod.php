<!DOCTYPE html>
<html>
<body>

<?php

    $name = "Ayemun Hossain Ashik";
    echo "Length of name : ".strlen($name)."<br>";
    echo "Word of name : ".str_word_count($name)."<br>";
    echo "Revarse of name : ".strrev($name)."<br>";
    echo "Postion of Ashik : ".strpos($name,'Ashik')."<br>";        //case sensative
    echo "Replace Ashik with Ayemun :  <b>".str_replace('Ashik','Ayemun',$name)."</b><br>";

?> 

</body>
</html>

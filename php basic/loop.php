<!DOCTYPE html>
<html>
<body>

<?php
    echo "Do while Loop <br><br><br>";
    $x=0;
	do{
        echo "Agun Hoye jolbo jani ".$x."<br>";
        $x++;
    }while ($x<10);
    
    echo "<hr><br>Foreach loop <br><br><br><br>";
    $st_id = [2333,23444,23442,2408,2393,2399,2409,2313];

    foreach($st_id as $id){
        echo "$id <br>";
    }
?> 

</body>
</html>

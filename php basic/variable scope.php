<!DOCTYPE html>
<html>
<body>

<?php
    $id = 2408;  //global scope
    echo "Global Vaiable id  :".$id."<br>";
    function get_id(){
        $student_id = 2399;     //local scope
        echo "Local Vaiable student_id  :".$student_id."<br>";
        return $student_id;
    }
    $local = get_id();

    //There is another way to do it with global keyword
    function myTest() {
        global $y;
        $y = 3343;
      }
    $temp = myTest();   //call the funtion for execute it's body
    echo "y  :".$y."<br>";


    //the third to way to do it 
    function myFun(){
        $GLOBALS['x']="Let me down slowly";
    }
    $temp = myFun();      //you can call funtion without stroing it .but it's good preactice 
    echo "x : ".$x;
?> 

</body>
</html>

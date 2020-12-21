<?php
    $empID = $_REQUEST['empID'];
    $title = $_REQUEST['title'];
    $name = $_REQUEST['name'];
    $sex = $_REQUEST['sex'];
    $edu = $_REQUEST['education'];
    $stdate = $_REQUEST['date'];
    $salary = $_REQUEST['salary'];
    $dptID = $_REQUEST['dptID'];

    require('connectdb.php');

    $sql = "insert into employee values
    ('$empID','$title','$name','$sex','$edu','$stdate','
    $salary','$dptID');";

   
    $queryre = mysqli_query($conn, $sql);
 
    if($queryre){
        echo "insert sucess";
    }else{
        echo "error";
    }
    
    mysqli_close($conn); // ปิดฐานข้อมูล
    echo "<br><br>";
    echo "--- END ---";
   
?>
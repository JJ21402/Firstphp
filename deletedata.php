<?php /* *** No Copyright for Education (Free to Use and Edit) *** * /
PHP 7.1.1 | MySQL 5.7.17 | phpMyAdmin 4.6.6 | by appserv-win32-8.6.0.exe
Created by Mr.Earn SURIYACHAY | ComSci | KMUTNB | Bangkok | Apr 2018 */ ?>
<?php

$deleteid = $_REQUEST['EmployeeID'];

require('connectdb.php');

$sql = 'delete from employee
where employeeid = ' . $deleteid . '';

$queryre = mysqli_query($conn, $sql);
if ($queryre) {
    echo "delete" . $deleteid . "success";
} else {
    echo "error";
}

mysqli_close($conn); // ปิดฐานข้อมูล
echo "<br><br>";
echo "--- END ---";
?>

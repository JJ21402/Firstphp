<?php /* *** No Copyright for Education (Free to Use and Edit) *** * /
PHP 7.1.1 | MySQL 5.7.17 | phpMyAdmin 4.6.6 | by appserv-win32-8.6.0.exe
Created by Mr.Earn SURIYACHAY | ComSci | KMUTNB | Bangkok | Apr 2018 */ ?>
<html>

<head>
    <script>
        function checkDe(){
            window.alert("Are u sure to delete ?");
        }
    </script>
</head>

<body>
    <?php
    require('connectdb.php');

    $sql = '
    SELECT * 
    FROM employee;
    ';

    $objquery = mysqli_query($conn, $sql);
    ?>
    <table border="1">
        <tr>
            <th width="100px">No.</th>
            <th width="100px">EmpID</th>
            <th width="100px">Title</th>
            <th width="100px">Name</th>
            <th width="100px">Sex</th>
            <th width="100px">Education</th>
            <th width="100px">Date</th>
            <th width="100px">Salart</th>
            <th width="100px">Depart</th>
        </tr>
        <?php
        $i = 1;
        while ($objresult = mysqli_fetch_array($objquery)) {
        ?>
            <tr>
                <td width="100px"><?php echo $i ?></td>
                <td width="100px"><?php echo $objresult['EmployeeID'] ?></td>
                <td width="100px"><?php echo $objresult['Title'] ?></td>
                <td width="100px"><?php echo $objresult['Name'] ?></td>
                <td width="100px"><?php echo $objresult['Sex'] ?></td>
                <td width="100px"><?php echo $objresult['Education'] ?></td>
                <td width="100px"><?php echo $objresult['Start_Date'] ?></td>
                <td width="100px"><?php echo $objresult['Salary'] ?></td>
                <td width="100px"><?php echo $objresult['DepartmentID'] ?></td>
                <td width="100px"><a href="deletedata.php?EmployeeID=<?php echo $objresult['EmployeeID'] ?>" onclick="checkDe()">Delete</td>
            </tr>
            
        <?php
        $i++;
    }
        ?>

    </table>
  
</body>
<?php
mysqli_close($conn); // ปิดฐานข้อมูล
echo "<br><br>";
echo "--- END ---";
?>
</body>

</html>
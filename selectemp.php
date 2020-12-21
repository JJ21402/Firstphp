<?php
require('connectdb.php');
$sql = 'select * from employee';

$objQuery = mysqli_query($conn, $sql) or
    die("Error query [" . $sql . "]");
?>

<body>
    <table border="1">
        <tr>
            <th width="100px">No</th>
            <th width="100px">ID</th>
        </tr>
        <?php
        $i = 1;
        while ($objResult = mysqli_fetch_array($objQuery)) {
        ?>    
            <tr>
                <td><?php echo $i;?></td>
                <td><?php echo $objResult['EmployeeID'];?></td>
            </tr>
        <?php
            $i++;
        }
        ?>   
    </table>
    <?php mysqli_close($conn);?>
</body>





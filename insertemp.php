
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InsertEMP</title>
</head>
<body>
    <h1>InsertEMP</h1>
    <form action="insertdata.php" method="post">
        EmployeeID: <input type="text" name="empID">
        <br>
        Title: <select name="title">
            <option value="นาย">นาย</option>
            <option value="นาง">นาง</option>
            <option value="นางสาว">นางสาว</option>
        </select>
        <br>
        Name: <input type="text" name="name">
        <br>
        Sex: <input type="radio" name="sex" value="ชาย">ชาย
        <input type="radio" name="sex" value="หญิง">หญิง
        <br>
        Education: <select name="education">
            <option value="ตรี">ตรี</option>
            <option value="โท">เอก</option>
            <option value="อื่นๆ">อื่นๆ</option>
        </select>
        <br>
        StartDate: <input type="date" name="date">
        <br>
        salary: <input type="text" name="salary">
        <br>
        departmentid: <input type="text" name="dptID">
        <br>
        <input type="submit">
    </form>
</body>
</html>


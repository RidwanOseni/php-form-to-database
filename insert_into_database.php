<?php
if(isset($_POST['submit'])) {
    if(!empty($_POST["EName"]) && !empty($_POST["SSN"])) {

$EName = $_POST["EName"];
$SSN = $_POST["SSN"];
$Dept = $_POST["Dept"];
$Salary = $_POST["Salary"];
$HomeAddress = $_POST["HomeAddress"];


$conn = mysqli_connect('localhost','root','','record');

if(!$conn) {
    echo "Connection failed " . mysqli_connect_error($conn);
}else{
    echo "connection successful";
}



$query = "INSERT INTO emp_record(ename,ssn,dept,salary,homeAddress) VALUES('$EName','$SSN','$Dept','$Salary','$HomeAddress')";
$execute = mysqli_query($conn, $query);
if($execute) {
    echo "<span class = 'success'> data inserted in database</span>";
}else{
    echo "<span class = 'error'> Error Description: </span>" . mysqli_error($conn);
}

mysqli_close($conn);
}else{
    echo "<span class='fieldInfoHeading'>Fill in your name and SSN </span>";
}
}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Into Database</title>
</head>

<body>

<div>
    <form action="insert_into_database.php" method="POST">
    <fieldset>
        <span class="fieldInfo"> Employee Name: </span><br><input type="text" name="EName" value=""><br>
        <span class="fieldInfo"> Social Security Number: </span><br><input type="text" name="SSN" value=""><br>
        <span class="fieldInfo"> Department: </span><br><input type="text" name="Dept" value=""><br>
        <span class="fieldInfo"> Salary: </span><br><input type="text" name="Salary" value=""><br>
        <span class="fieldInfo"> Home Address: </span><br><textarea name="HomeAddress" id="" cols="" rows=""></textarea>
        <br>
        <input type="submit" name="submit" value="Submit Your Record">
    </fieldset>


    </form>
</div>
    
</body>
</html>
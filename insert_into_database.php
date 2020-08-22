<?php
if(isset($_POST['submit'])) {
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
    echo " <p class= 'success'>data inserted in database</p>";
}else{
    echo "Error Description: " . mysqli_error($conn);
}

mysqli_close($conn);

}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Into Database</title>
</head>
<style type="text/css">
input[type = "text"], textarea {
    border: 1px, solid;
    background-color: rgb(221, 216, 212);
    width: 480px;
    padding: .5em;
    font-size: 1.0em;
}

input[type="submit"] {
    color: white;
    font-size: 1.0 em;
    font-family: Georgia, 'Times New Roman', Times, serif;
    width: 200px;
    height: 40px;
    background-color: purple;
    border: 5px, solid;
    border-bottom-left-radius: 35px;
    border-bottom-right-radius: 35px;
    border-top-left-radius: 35px;
    border-bottom-right-radius: 35px;
    border-color: rgb(221, 216, 212);
    font-weight: bold;


}

.fieldInfo {
    color: rgb(251, 174, 44);
    font-family: Georgia, 'Times New Roman', Times, serif;
    font-size: 1 em;
}

.success{
    color: rgb(158, 174, 44);
    font-family: Georgia, 'Times New Roman', Times, serif;
    font-size: 1.3em;
    font-weight: bold;
}

</style>
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
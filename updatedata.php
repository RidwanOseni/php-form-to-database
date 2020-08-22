<?php 
    
    $conn = mysqli_connect('localhost','root','','record');
    $updateRecord = $_GET['Update'];
    $extractQuery = "SELECT * From emp_record WHERE id = '$updateRecord'"; 
    $update = mysqli_query($conn, $extractQuery);

    while($dataRows = mysqli_fetch_array($update)) {
            $updateId = $dataRows['id'];
            $ename = $dataRows['ename'];
            $ssn = $dataRows['ssn'];
            $dept = $dataRows['dept'];
            $salary = $dataRows['salary'];
            $homeAddress = $dataRows['homeAddress'];
    }

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Database</title>
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
        <span class="fieldInfo"> Employee Name: </span><br><input type="text" name="EName" value="<?php echo $ename; ?>"><br>
        <span class="fieldInfo"> Social Security Number: </span><br><input type="text" name="SSN" value="<?php echo $ssn; ?>"><br>
        <span class="fieldInfo"> Department: </span><br><input type="text" name="Dept" value="<?php echo $dept; ?>"><br>
        <span class="fieldInfo"> Salary: </span><br><input type="text" name="Salary" value="<?php echo $salary; ?>"><br>
        <span class="fieldInfo"> Home Address: </span><br><textarea name="HomeAddress" id="" cols="" rows="" ><?php echo $homeAddress; ?></textarea>
        <br>
        <input type="submit" name="submit" value="Submit Your Record">
    </fieldset>


    </form>
</div>
    
</body>
</html>

<?php
    // Edit the data in your form
    $conn = mysqli_connect('localhost','root','','record');

    if(isset($_POST["submit"])) {
        $updateId = $_GET['updateId'];
        $EName = $_POST["EName"];
        $SSN = $_POST["SSN"];
        $Dept = $_POST["Dept"];
        $Salary = $_POST["Salary"];
        $HomeAddress = $_POST["HomeAddress"];
        $updateQuery = "UPDATE emp_record SET ename = '$ename',ssn = '$ssn',dept = '$dept',salary = '$salary',homeAddress = '$homeAddress' WHERE id = '$updateId' ";
        $execute = mysqli_query($conn, $updateQuery);

        // if($execute) {
        //     function redirect_to($newLocation) {
        //         header("Location: ". $newLocation);
        //         exit;
        // }
    
        // redirect_to("update.php?Updated=Record updated successfully");
        // }

    }
?>
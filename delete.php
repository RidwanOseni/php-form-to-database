<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View From Database</title>
</head>

<style type="text/css">
input[type = "text"], textarea {
    border: 1px, solid;
    background-color: rgb(221, 216, 212);
    width: 480px;
    padding: .5em;
    font-size: 1.0em;
}


.success, caption{
    color: rgb(158, 174, 44);
    font-family: Georgia, 'Times New Roman', Times, serif;
    font-size: 1.3em;
    font-weight: bold;
}



</style>

<body>

    <h2 class="success"><?php echo @$_GET['Deleted']; ?></h2>
    <table width="1000" border="5" align="center">
        <caption>View From Database</caption>
        <tr>
            <th>ID</th>
            <th>Employee Name</th>
            <th>SSN</th>
            <th>Department</th>
            <th>Salary</th>
            <th>Home Address</th>
            <th>Delete</th>
            <th>Update</th>
        </tr>

    <?php
        $conn = mysqli_connect('localhost','root','','record');
        $viewQuery = "SELECT * From emp_record";
        $execute = mysqli_query($conn, $viewQuery);

        while($dataRows = mysqli_fetch_array($execute)) {
            $id = $dataRows['id'];
            $ename = $dataRows['ename'];
            $ssn = $dataRows['ssn'];
            $dept = $dataRows['dept'];
            $salary = $dataRows['salary'];
            $homeAddress = $dataRows['homeAddress'];

    ?>
<tr>
    <td><?php echo $id; ?></td>
    <td><?php echo $ename; ?></td>
    <td><?php echo $ssn; ?></td>
    <td><?php echo $dept; ?></td>
    <td><?php echo $salary; ?></td>
    <td><?php echo $homeAddress; ?></td>
    <td> <a href="deletedata.php?Delete=<?php echo $id ?> ">Delete</a></td>
    <td>Update</td>
</tr>

<?php } ?>

    </table>
    
    
</body>
</html>
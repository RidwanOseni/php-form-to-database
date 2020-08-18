<?php
$deleteRecordId = $_GET['Delete'];
$deleteQuery = "DELETE From emp_record WHERE id = '$deleteRecordId'";
$conn = mysqli_connect('localhost','root','','record');
$execute = mysqli_query($conn, $deleteQuery);

if($execute) {
    echo " <script>window.open('delete.php?Deleted= Record deleted successfully','_self')</script> ";
}
?>
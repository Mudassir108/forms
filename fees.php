<?php
$insert=false;
if(isset($_POST['student_id']))
{
$server="localhost";
$username="root";
$password="";
$db="sms";
$con=mysqli_connect($server,$username,$password,$db);
if(!$con){
    die("connection to this database failed due to".
    mysqli_connect_error());
}

//echo "connecting to the database "
$student_id=$_POST['student_id'];
$amount=$_POST['amount'];
$due_date=$_POST['due_date'];
$status=$_POST['status'];

$sql="INSERT INTO `fees` (`student_id`, `amount`, `due_date`, `status`) VALUES ('$student_id', '$amount', '$due_date', '$status');";
//echo $sql;

if ($con->query($sql)==true){
    //echo"successfully inserted";
    $insert=true;
}
else{
echo"ERROR:$sql <br> $con->error";
}
$con->close();
}




?>








<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>

<form action="fees.php" method="post">
    <h2>Student Fees Form</h2>
    <label for="student_id">Student ID:</label>
    <input type="text" id="student_id" name="student_id" required><br><br>

    <label for="amount">Amount :</label>
    <input type="number" id="amount" name="amount"  required><br><br>

    <label for="due_date">Due Date:</label>
    <input type="date" id="due_date" name="due_date" required><br><br>

    <label>Status:</label>
    
        <input type="radio" id="status_pending" name="status" value="pending" checked>
        <label for="status_pending">Pending</label>
    
    
        <input type="radio" id="status_paid" name="status" value="paid">
        <label for="status_paid">Paid</label>
    

    <input type="submit" value="Submit">
</form>

</body>
</html>



</html>

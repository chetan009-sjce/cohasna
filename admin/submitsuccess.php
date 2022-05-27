<?php 
define ('TITLE','SubmitRequest');

include('includes/header.php');
include('../dbconnection.php');
session_start();
if($_SESSION['is_adminlogin']){
    $rEmail=$_SESSION['aEmail'];
}else{
    echo "<script>location.href='login.php'</script>";
}
$sql="SELECT * FROM submitrequest_tb WHERE request_id={$_SESSION['myid']}";
$result=$conn->query($sql);
if($result->num_rows==1){

    $row=$result->fetch_assoc();
    echo "<div class='ml-5 mt-5'>
    <table class ='table'>
    <tbody>
    <tr>
    <th>Request ID</th>
    <td>".$row['request_id']."</td>
    </tr>
    <tr>
    <th>Name</th>
    <td>".$row['requester_name']."</td>
    </tr>
    <tr>
    <th>Email ID</th>
    <td>".$row['requester_email']."</td>
    </tr>
    <tr>
    <th>Request Info</th>
    <td>".$row['request_info']."</td>
    </tr>
    <tr>
    <th>Request Description</th>
    <td>".$row['reques_desc']."</td>
    </tr>
    <tr>
    <td><form class='d-print-none'><input class='btn btn-danger' type='submit' value='Print'
    onClick='window.print()'></form></td>
    <td><form class='d-print-none'><a href='submitrequest.php' class='btn btn-secondary'>Close</a></form></td>;
    </tr>
    </tbody>
    </table></div>";}

    else{
        echo "Failed";
    }
    

?>
<?php
include('includes/footer.php');
?>
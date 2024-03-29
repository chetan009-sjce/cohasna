<?php 
define('TITLE','Dashboard');
define('PAGE','dashboard');
include('includes/header.php');
include('../dbconnection.php');
session_start();
if(isset($_SESSION['is_adminlogin'])){
    $aEmail=$_SESSION['aEmail'];
}else{
    echo "<script> location.href='login.php'</script>";
}

$sql="SELECT max(request_id) FROM submitrequest_tb";
$result=$conn->query($sql);
$row=mysqli_fetch_row($result);
$submitrequest=$row[0];

$sql="SELECT max(rno) FROM assignwork_tb";
$result=$conn->query($sql);
$row=mysqli_fetch_row($result);
$assignwork=$row[0];

$sql="SELECT max(empid) FROM technician_tb";
$result=$conn->query($sql);
$row=mysqli_fetch_row($result);
$technician=$row[0];
?>




<div class="col-sm-9 col-md-10"><!...second colmn>
<div class="row text-center mx-5">
    <div class="col-sm-4 mt-5">
        <div class="card text-white bg-danger mb-3" style="max-width:22rem">
            <div class="card-header">Requests Made</div>
            <div class="card-body">
            <h4 class="card-title"><?php echo $submitrequest;?></h4>
            <a class="btn text-white"href="request.php">View</a>
        </div>
        </div>
</div>
<div class="col-sm-4 mt-5">
        <div class="card text-white bg-success mb-3" style="max-width:22rem">
            <div class="card-header">Requests completed</div>
            <div class="card-body">
            <h4 class="card-title"><?php echo $assignwork;?></h4>
            <a class="btn text-white"href="work.php">View</a>
        </div>
        </div>
</div>




</div>
<div class="mx-5 mt-5 text-center">
    <p class="bg-dark text-white">List Of Requests Assigned</p>
    <?php 
    $sql="SELECT * FROM requesterlogin_tb";
    $result=$conn->query($sql);
    if($result->num_rows >0){
        echo '<table class="table">
        <thead>
        <tr>
        <th scope="col">Request ID</th>
        <th scope="col">Email</th>
        <th scope="col">Name </th>
        </tr>
        </thead>
        <tbody>';
        while($row=$result->fetch_assoc()){
        echo '<tr>';
       echo '<td>'.$row["r_login_id"].'</td>';
       echo '<td>'.$row["r_email"].'</td>';
       echo '<td>'.$row["r_name"].'</td>';
       
        echo '</tr>';}
        echo '</tbody></table>
        ';

    }else{
        echo '0 Result';}?>

</div>







   </div>
   <?php include('includes/footer.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo TITLE ?></title>
    <style>
    .active{
        color:black;
        background-color: white;
    }
    </style>
    <!..bootstrap>
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <!..font awesome>
    <link rel="stylesheet" href="../css/all.min.css">

    <!..custom css>
    <link rel="stylesheet" href="../css/custom.css">
</head>
<body>
<!..navigation start>
    <nav class="navbar navbar-expand-sm navbar-dark bg-danger flex-md-nowrap p-0 shadow"><a class="navbar-brand col-sm-3 col-md-2 mr-0" href="dashboard.php">
        Co-Hasna</a> <span class="navbar-text">Let's Spread Some Smile...</span>
</nav>

<!..conataiiner>
        <div class="container-fluid" style="margin-top:40px;">
            <div class="row">
                <nav class="col-sm-2 bg-dark sidebar py-5 d-print-none"><!..sidebar 1st column>
                    <div class="sidebar-sticky"><ul class="nav flex-column">
                        <li class="nav-item"> <a class="nav-link <?php if(PAGE=='dashboard'){echo 'active';} ?>" href="dashboard1.php"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
                        <li class="nav-item"> <a class="nav-link  <?php if(PAGE=='viewassign'){echo 'active';} ?>" href="viewassign.php"><i class="fab fa-accessible-icon"></i> view assigned</a></li>
                        <li class="nav-item"> <a class="nav-link  <?php if(PAGE=='request'){echo 'active';} ?>" href="request1.php"><i class="fas fa-align-center"></i> Request</a></li>
                        <li class="nav-item"> <a class="nav-link  <?php if(PAGE=='assets'){echo 'active';} ?>" href="asset1.php"><i class="fas fa-align-center"></i> Assets</a></li>
                        
                        <li class="nav-item"> <a class="nav-link  <?php if(PAGE=='sellreport'){echo 'active';} ?>" href="sellreport.php"><i class="fas fa-table"></i> Sell Report</a></li>
                        <li class="nav-item"> <a class="nav-link  <?php if(PAGE=='workreport'){echo 'active';} ?>" href="workreport1.php"><i class="fas fa-table"></i> Work Report</a></li>
                        <li class="nav-item"> <a class="nav-link  <?php if(PAGE=='ChangePass'){echo 'active';} ?>" href="changepass1.php"><i class="fas fa-key"></i> Change Password</a></li>
                        <li class="nav-item"> <a class="nav-link" href="../logout.php"><i class="fas fa-sign-out-alt"></i> Log Out</a></li>
                        <li class="nav-item"><form>
                        <input type="button" name="submitrequest" style="background-color:red" onclick="window.location.href='https://maker.ifttt.com/trigger/event/json/with/key/i9xMPFjQbS4KUgjSq9dKz5zxqBK5Zq-Halx8-5mk4Wl';" 
                        value='Notify'/></form></li>
                       
</ul></div></nav><!..end side bar 1st column>
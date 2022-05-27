<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

$db_host="localhost";
$db_user="root";
 $db_password="";
 $db_name="Wall-e";
$db_port=3307;


$conn=new mysqli($db_host,$db_user,$db_password,$db_name,$db_port);


if($conn->connect_error){
    die("failed");
}
// }else{
//     echo "connetced";
// }

?></body>
</html>
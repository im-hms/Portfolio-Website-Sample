<?php

$con = mysqli_connect('localhost', 'root');

if($con){
    echo "Connection Successful";
}else{
    echo "No Connection";
}
mysqli_select_db($con, 'portfolioinfo');

$user = $_POST['user'];
$email = $_POST['email'];
$project = $_POST['project'];
$comment = $_POST['comment'];

$query = "insert into projecttable (user, email, project, comment)
values ('$user', '$email', '$project', '$comment') ";

mysqli_query($con, $query);
header ('location:index.html');

?>

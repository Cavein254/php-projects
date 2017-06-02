<?php
require('dbc.php');
$fname = $_POST['fname']; 
$lname = $_POST['lname'];
$pword = $_POST['pword'];


$sql = "INSERT INTO userpp(fname,lname,pword)
        VALUES ('$fname','$lname','$pword')";

if ($conn->query($sql)==TRUE){
    echo "New record created successfully";
} else{
    echo("Error" .$sql . "<br >".$conn->error);
}

$conn->close();

header("Location: http://127.0.0.1/cave/test/");
?>
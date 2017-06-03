<?php
require('./dbc.php');
require('inc/header.php');
?>

<?php


//check if the user exists
if($_SERVER["REQUEST_METHOD"] =="POST"){
    //Get the username and password
    $uname = $_POST['uname'];
    $pword = $_POST['pword'];

    $sql = "SELECT id FROM userpp WHERE uname='$uname' AND pword = '$pword'";
    $result = mysql_query($sql);
    $row = mysql_fetch_array($result);
    $active = $row['active'];
    $count = mysql_num_rows($result);

    //check if member exists
    if($count == 1){
        echo "<h1> The user exists</h1>";
    } else {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $uname = $_POST['uname'];
        $pword = $_POST['pword'];

        $sql = "INSERT INTO userpp(fname,lname,uname,pword)
            VALUES ('$fname','$lname','$uname','$pword')";

        if ($conn->query($sql)==TRUE){
            echo "New record created successfully";
        } else{
            echo("Error" .$sql . "<br >".$conn->error);
        }

        $conn->close();
    }
}
?>


<div>
    <h1>Registration Form</h1>
</div>
<form action="register.php" method="post">
    <div>
        <input type="text" placeholder="First Name" name="fname">
    </div>
    <div>
        <input type="text" placeholder="Last Name" name="lname">
    </div>
    <div>
        <input type="text" placeholder="user name" name="uname">
    </div>
    <div>
        <input type="password" placeholder="password" name="pword">
    </div>
    <div>
        <button type="submit">Register</button>
    </div>
</form>

<?php
require('inc/footer.php');
?>
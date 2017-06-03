<?php
session_start();
require('./dbc.php');
require('inc/header.php');
require('inc/functions.php');
?>

<?php
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
        session_register("uname");
        $_SESSION['login_user'] = $uname;

        //header("Location: welcome.php");
        //die();
       $url = "http://l27.0.0.1/cave/inc/welcome.php";
       redirection($url);
    } else {
       $url = "http://127.0.0.1/cave/register.php";
       redirection($url);
    }
}
?>
<div>
    <h1>Login</h1>
</div>
<form action="login.php" method="post">
    <div>
        <input type="text" placeholder="User Name" name="uname">
    </div>
    <div>
        <input type="password" placeholder="password" name="pword">
    </div>
    <div>
        <button type="submit">Login</button>
    </div>
</form>
<?php
require('inc/footer.php');
?>
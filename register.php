<?php
require('./dbc.php');
require('inc/header.php');
?>
<div>
    <h1>Registration Form</h1>
</div>
<form action="output.php" method="post">
    <div>
        <input type="text" placeholder="First Name" name="fname">
    </div>
    <div>
        <input type="text" placeholder="Last Name" name="lname">
    </div>
    <div>
        <input type="password" placeholder="user name" name="uname">
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
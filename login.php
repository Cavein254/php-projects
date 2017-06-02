<?php
require('./dbc.php');
require('inc/header.php');
?>
<div>
    <h1>Login</h1>
</div>
<form action="output.php" method="post">
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
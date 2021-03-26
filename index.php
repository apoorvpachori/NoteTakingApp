<?php
$servername = "practicedatabase.czxgxu5qixl3.us-west-1.rds.amazonaws.com";
$username = "admin";
$password = "adarshhi1poofy";
$databasename = "example";
$conn = mysqli_connect($servername,$username,$password,$databasename);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>HTML5 Application Development</title>
        <link rel="stylesheet" type="text/css" href="styles.css" />
        <script src="functionality.js"></script>
    </head>
    <body>
        <div id="header">
            <div id="name">Web Note</div>
            <div id="menubutton"><a id="menulink" href="#">MENU</a></div>
            <div id="menu" class="hiddenmenu">
                <div class="menuitem"><a id="home" href="#">Home</a></div>
                <div class="menuitem"><a id="about" href="#">About us</a></div>
            </div>
            <div class="clear"></div>
        </div>
        <div id="container">
            <textarea id="area" rows="10" cols="50">make a change</textarea>
        </div>
        <div id="controls">
            <p><a href="javascript:save();" class="button">Save</a>
                <a href="javascript:clear();" class="button">Clear</a></p>
        </div>
    </body>
</html>

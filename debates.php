<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8"/>
<link rel="stylesheet" type="text/css" href="style.css">
    <title>DEBATES</title>

    
</head>
<body>
    
<div class="toolbar">
    <a href="index.php">HOME</a>
    <a href="aboutus.php">ABOUT US</a>
    <a href="eboard.php">E-BOARD</a>
    <a href="membersearch.php">MEMBER SEARCH</a>
    <a class="active" href="debates.php">DEBATES</a>
    <a href="events.php">EVENTS</a>
</div>
    
<h1 id="title">DEBATES</h1>

<div class="debates">
<p class="debates2">We will make a calendar of the dates of the debates and what the titles of the debates are. We will do this by reading the URL of a Google calendar.
The day before a debate, a reminder e-mail will automatically be sent to our users. This will be
done by running a cron that uses the PHP mail function.</p></div>

</body>
</html>
<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8"/>
<link rel="stylesheet" type="text/css" href="style.css">
    <title>MEMBER SEARCH</title>

    
</head>
<body>
    
<div class="toolbar">
    <a href="index.php">HOME</a>
    <a href="aboutus.php">ABOUT US</a>
    <a href="eboard.php">E-BOARD</a>
    <a class="active" href="membersearch.php">MEMBER SEARCH</a>
    <a href="debates.php">DEBATES</a>
    <a href="events.php">EVENTS</a>
</div>
    
<h1 id="title">MEMBER SEARCH</h1>

<div class="membersearch">
<p class="membersearch2">This page will only be viewable if you are signed in as an e-board member. The e-board member can search by any of the fields in the user table and the member(s) will appear.</p></div>

<!--Member_search(){
	If(any of the parameters are not empty){
		Ensure the search terms are valid
		Search the database based on these parameters
		Show the search results
}

Member_edit(){
	Get the member to be edited
	If (any of the changed parameters arenÕt empty){
		Update the database with the respective edits
	}
}

Member_age_update(){
	If(The end of the year update button is pressed){
	Update all freshman to sophomores
	Update all sophomores to juniors
	Update all juniors to seniors
	Update all seniors to alumni
}-->

</body>
</html>
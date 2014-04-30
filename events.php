<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8"/>
<link rel="stylesheet" type="text/css" href="style.css">
    <title>EVENTS</title>

    
</head>
<body>
    
<div class="toolbar">
    <a href="index.php">HOME</a>
    <a href="aboutus.php">ABOUT US</a>
    <a href="eboard.php">E-BOARD</a>
    <a href="membersearch.php">MEMBER SEARCH</a>
    <a href="debates.php">DEBATES</a>
    <a class="active" href="events.php">EVENTS</a>
</div>
    
<h1 id="title">EVENTS</h1>

<!--Event_search(){
	If(at least one of the parameters is not empty){
		Return the events that satisfy the search parameters
	}
}

Email_reminder(){
	If(TodayÕs date + 1 == date of any event in the event database){
		Emails[] = emails of all non alumni in the database
		For all Events that are happening tomorrow:
Send an email to all email addresses in Emails[] with the event time and description
}
	If(Info pulled from google calendar says there is a debate tomorrow){
		Send an email to all email addresses in Emails[] with the debate time and location
}
}

Event_add(){
	If(The admin is logged in){
		If(there are no empty parameters){
			Update the event database with the new event
}
}-->

<div class="events">
<p class="events2">There will be a search function for events. Users can search by event title or by date. If the user searches for any word that
is in an event title, the events with that word in their title will appear. For the date, there will
be a drop down calendar and the user can choose a date and events will appear that are on that date.
This search function is also helpful becuase it will allow e-board members to see how an
event went in the past if they are thinking about holding it again.
The day before an event, a reminder e-mail will automatically be sent to our users. This will be
done by running a cron that uses the PHP mail function.</p></div>

</body>
</html>
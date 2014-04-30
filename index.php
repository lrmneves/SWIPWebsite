<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8"/>
<link rel="stylesheet" type="text/css" href="style.css">
    <title>SOCIETY FOR WOMEN IN POLITICS</title>

</head>
<body>

<div class="toolbar">
    <a class="active" href="index.php">HOME</a>
    <a href="aboutus.php">ABOUT US</a>
    <a href="eboard.php">E-BOARD</a>
    <a href="membersearch.php">MEMBER SEARCH</a>
    <a href="debates.php">DEBATES</a>
    <a href="events.php">EVENTS</a>
</div>

<div class="flagandtitle">
<img src="http://womensvoicesforchange.org/wp-content/uploads/2013/07/american-flag.jpg" alt="flagandtitle" height="300" width="1300">
<h1 class="anywoman" align="center">"Any Woman, Any Study"</h1><h2 class="swip">SOCIETY FOR WOMEN IN POLITICS</h2>
</div>

<!--login_fun(){
	if(Entered Password == Password for Username){
		Login Successful
If Password == temporary password, remove it from the database and allow the user to enter a new password. Set this as the userÕs new password.
}

Forget_password(){
	If(Forget password button is pressed){
		Hash a temporary password
		Send a email containing the temporary password
		Update database to contain this temporary password for the input username.
}

Logout_fun(){
	If(The logout button is clicked){
		Logout the user
		Update session variables accordingly
		Redirect to homepage if on a page only accessible by admin
}

New_member_update(){
	If(all the parameters are filled){
		Update the database to contain the new userÕs information
	}
	Else{
		Print a warning message telling the user they must fill in all their information
	}
}-->

<div class="loginform">
    <h2 class="loginform2">ALREADY A MEMBER? <br> LOG IN!</h2>
    <form action="admin.php" method="post" enctype="multipart/form-data">
    Username:<input type="text" name="username" maxlength="2000"><br />
    Password:<input type="text" name="password" maxlength="2000"><br />
    <input type="submit" name="submit3" value="Submit">
    <input type="submit" name="username" value="Forgot password?"></form>
</div>

<div class="signupform">
    <h3 class="signupform2">NOT A MEMBER YET? <br> SIGN UP!</h3>
    <form action="admin.php" method="post" enctype="multipart/form-data">
    NetID:<input type="text" name="username" maxlength="2000"><br />
    First Name:<input type="text" name="username" maxlength="2000"><br />
    Last Name:<input type="text" name="username" maxlength="2000"><br />
    Username:<input type="text" name="username" maxlength="2000"><br />
    Password:<input type="text" name="password" maxlength="2000"><br />
    E-mail:<input type="text" name="username" maxlength="2000"><br />
    Phone Number:<input type="text" name="username" maxlength="2000"><br />
    Graduation Year:<input type="text" name="username" maxlength="2000"><br />
    <input type="submit" name="submit3" value="Submit"></form>
</div>

<div class="formdescription">
<p class="formdescription2">There will be a sign up form. A user will sign up with thier
netid, name, login, password, e-mail, phone number, year and if they are on the e-board.
There will also be a login form. The login form will be a form that requires their username and password.
The form will have a forgot password option, which will allow the user to reset their password.
If they click forgot password, they must enter in their e-mail address and we will send them an
e-mail with a link to a page where they can change their password. This page will have a form that says enter username and enter new password. This
will update their password in the user database. Everyone on the executive board will know one username and password, which they can
use to log in and which will give them additional functionality such as a member search.
There will be a logout button on the top of each page.</p></div>

</body>
</html>
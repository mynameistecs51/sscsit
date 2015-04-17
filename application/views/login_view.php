<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>Simple Login with CodeIgniter</h1>
	<?php echo validation_errors(); ?>
	<?php echo form_open('verifylogin'); ?>
	<label for="useremail">Useremail:</label>
	<input type="text"  id="useremail" name="useremail"/>
	<br/>
	<label for="userpassword">Userpassword:</label>
	<input type="password" size="20" id="userpassword" name="userpassword"/>
	<br/>
	<input type="submit" value="Login"/>
</form>
</body>
</html>
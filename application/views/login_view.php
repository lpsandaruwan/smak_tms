<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link href="/smak-tms/home/css/custom.css" rel="stylesheet">
	<title>SMAK TMS</title>

</head>
<body>

<div id="container">
    <center>
	<h1>Country Style Foods Pvt Ltd</h1>
	<h2>Transport Management System</h2>

	<div id="body">
	
		<?php echo validation_errors(); ?>
                <?php echo form_open('verifylogin'); ?>
                    <label for="username">Username:</label>
                    <input type="text" size="20" id="username" name="username"/>
                    <br/><br/>
                    <label for="password">Password :</label>
                    <input type="password" size="20" id="passowrd" name="password"/>
                    <br/><br/>
                    <input type="submit" value="Login"/>
                </form>
                
	</div>
    </center>
	<p class="footer">Login</p>
</div>

</body>
</html>
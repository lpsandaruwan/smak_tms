<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<style type="text/css">

	::selection{ background-color: #E13300; color: white; }
	::moz-selection{ background-color: #E13300; color: white; }
	::webkit-selection{ background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #3333FF;
		background-color: transparent;
		font-size: 35px;
		font-weight: normal;
		margin: 10 0 0px 0;
		padding: 14px 15px 10px 15px;
	}

	h2 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 20px;
		font-weight: normal;
		margin: 10 0 10px 0;
		padding: 0px 15px 20px 15px;
	}
	
	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body{
		margin: 0 15px 0 15px;
	}
	
	p.footer{
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}
	
	#container{
		margin: 10px;
		border: 1px solid #D0D0D0;
		-webkit-box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
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
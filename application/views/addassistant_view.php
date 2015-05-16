<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>SMAK TMS add assistant</title>

	<link href="/smak-tms/home/css/bootstrap.min.css" rel="stylesheet">
	<script src="/smak-tms/home/js/bootstrap.min.js"></script>
	<script src="/smak-tms/home/js/jquery.min.js"></script>
	
	<style type="text/css">


	body {
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
		color: #444;
		background-color: transparent;
		font-size: 20px;
		font-weight: normal;
		margin: 10px 0 0px 0;
		padding: 14px 15px 10px 15px;
	}

	h2 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 18px;
		font-weight: normal;
		margin: 10px 0 10px 0;
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
		font-size: 14px;
		line-height: 32px;
		padding: 0 10px 0 0;
		margin: 2px 0 0 0;
	}
	
	img{
		margin: 10px 10px 10px 10px
		
	}
	
	#container{
		margin: 10px;
		border: 1px solid #D0D0D0;
		-webkit-box-shadow: 4px 4px 6px #D0D0D0;
	}

	#container1{
		position: relative;
		float:left;
		min-width:200px;
		max-width: 240px;
		max-height: 1500px;
		margin: 10px;
		border: 1px solid #D0D0D0;
		padding: 15px 15px 10px 10px;
		-webkit-box-shadow: 4px 4px 6px #D0D0D0;	
	}
	
	#container2{
		float: right;
		margin: 10px;
		min-width:600px;
		width:1020px;
		max-width:1800px;
		max-height:800px;
		border: 1px solid #D0D0D0;
		padding: 10px 10px 10px 10px;
		-webkit-box-shadow: 4px 4px 6px #D0D0D0;
	}	
	
	.btn{
		color: #191919;
		background:white;
		width:170px;
		margin:10px;
		font-size:14px;
		padding:20px;
		border:1px solid #D0D0D0;
		-webkit-box-shadow: 4px 4px 6px #D0D0D0;
	}
	
	.btn a{
		color:black;
	}
	
	.btn:hover{
		background:grey;
		color:white;
		width:170px;
		font-size:14px;
		padding:20px;
		border:1px solid #D0D0D0;
	}
	
	.usermenu{
		padding:20px;
		float:right;
	}

	.btn-xs{
		color: #191919;
		margin:0;
		font-size:12px;
		width:180px;
		height:40px;
		background:white;
		border:1px solid #D0D0D0;
		padding:1px 1px 1px 1px;
		-webkit-box-shadow: 4px 4px 6px #D0D0D0;
	}
	
	.btn-xs a{
		padding:10px 10px 10px 10px;
		color:#191919;
	}
	
	.btn-xs:hover{
		margin:0;
		color:white;
		font-size:12px;
		padding:1px 1px 1px 1px;
		width:180px;
		height:40px;
		background:grey;
		border:1px solid #D0D0D0;
	}
	
	
	</style>
	</head>
	
	<body>
        <div id="container">
            <img src="/smak-tms/home/img/smaklogo.png" style="height:80px; width:140px"></img>
			<div class=usermenu><?php echo ""; ?></div>
		</div>
		
		<div id="container2">
				<h1>Employee Registration Form</h1>
				<h2>Sales Assistant</h2>
				<form class="form-horizontal" role="form" method="post">
					<div class="form-group">
						<label for="id" class="col-sm-2 control-label">Employee ID</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" id="id" name="id" placeholder="ex. TUE0021" value=""><?php echo '<font color="red">'.form_error('id').'</font>'; ?>
						</div>
					</div>
					<div class="form-group">
						<label for="name" class="col-sm-2 control-label">Name</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" id="name" name="name" placeholder="employee name" value=""><?php echo '<font color="red">'.form_error('name').'</font>'; ?>
						</div>
					</div>
					<div class="form-group">
						<label for="address" class="col-sm-2 control-label">Address</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" id="address" name="address" placeholder="street, city" value=""><?php echo '<font color="red">'.form_error('address').'</font>'; ?>
						</div>
					</div>
					<div class="form-group">
						<label for="nic" class="col-sm-2 control-label">NIC</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" id="nic" name="nic" placeholder="" value=""><?php echo '<font color="red">'.form_error('nic').'</font>'; ?>
						</div>
					</div>
					<div class="form-group">
						<label for="dob" class="col-sm-2 control-label">Date of Birth</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" id="dob" name="dob" placeholder="yyyy-mm-dd" value=""><?php echo '<font color="red">'.form_error('dob').'</font>'; ?>
						</div>
					</div>
					<div class="form-group">
						<label for="phone" class="col-sm-2 control-label">Telephone</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" id="phone" name="phone" placeholder="011xxxxxxx" value=""><?php echo '<font color="red">'.form_error('phone').'</font>'; ?>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-10 col-sm-offset-2">
							<input id="submit" name="save" type="submit" value="Save" class="btn btn-xs">
						</div>
					</div>
				</form>
		</div>
		
		<div id="container1">	

			<div>
				<a href="/smak-tms/index.php/home" class="btn btn-xs">
					<img src="/smak-tms/home/img/dashboard.png" style="float:left;height:20px; width:20px;">
					<p style="text-align: left; margin:10px;">Dashboard</p></a><br/>
			</div><br/>
			<div>
				<a href="/smak-tms/index.php/adddriver" class="btn btn-xs">
					<img src="/smak-tms/home/img/driver.png" style="float:left;height:20px; width:20px;">
					<p style="text-align: left; margin:10px;">Driver</p></a><br/>

				<a href="/smak-tms/index.php/addcleaner" class="btn btn-xs">
					<img src="/smak-tms/home/img/cleaner.png" style="float:left;height:20px; width:20px;">
					<p style="text-align: left; margin:10px;">Cleaner</p></a><br/>

				<a href="/smak-tms/index.php/addassistant" class="btn btn-xs">
					<img src="/smak-tms/home/img/assistant.png" style="float:left;height:20px; width:20px;">
					<p style="text-align: left; margin:10px;">Sales Assistant</p></a><br/>
				
			</div>
		</div>
	</body>
	
</html>
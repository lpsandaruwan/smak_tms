<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>SMAK TMS home</title>

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
		color: #3333FF;
		background-color: transparent;
		font-size: 35px;
		font-weight: normal;
		margin: 10px 0 0px 0;
		padding: 14px 15px 10px 15px;
	}

	h2 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 20px;
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
		-webkit-box-shadow: 10px 10px 8px #D0D0D0;
	}

	#container1{
		position: relative;
		float:left;
		max-width: 220px;
		max-height: 1500px;
		margin: 10px;
		border: 1px solid #D0D0D0;
		padding: 15px 15px 10px 10px;
		-webkit-box-shadow: 10px 10px 8px #D0D0D0;	
	}
	
	#container2{
		float: right;
		margin: 10px;
		min-width:500px;
		max-width:1600px;
		max-height:600px;
		border: 1px solid #D0D0D0;
		padding: 10px 10px 10px 10px;
		-webkit-box-shadow: 10px 10px 8px #D0D0D0;
	}	
	
	.btn{
		color: darkred;
		background:white;
		width:170px;
		margin:10px;
		font-size:14px;
		padding:20px;
		border:1px solid #D0D0D0;
		-webkit-box-shadow: 6px 6px 8px #D0D0D0;
	}
	
	.btn a{
		color:red;
	}
	
	.btn:hover{
		background:#FFDB4D;
		color:red;
		width:170px;
		margin:10px;
		font-size:14px;
		padding:20px;
		border:1px solid #D0D0D0;
	}
	
	.btn a:hover{
		color:red;
	}
	
	.usermenu{
		padding:20px;
		float:right;
	}

	.btn-xs{
		color: darkred;
		background:white;
		width:170px;
		border:1px solid #D0D0D0;
		-webkit-box-shadow: 6px 6px 8px #D0D0D0;
	}
	
	.btn-xs a{
		color:red;
	}
	
	.btn-xs:hover{
		background:#FFDB4D;
		color:red;
		width:170px;
		border:1px solid #D0D0D0;
	}
	
	.btn-xs a:hover{
		color:red;
	}
	
	</style>
	</head>
	
	<body>
        <div id="container">
            <img src="/smak-tms/home/img/smaklogo.jpg" style="-webkit-box-shadow: 6px 6px 8px #D0D0D0; height:80px; width:140px"></img>
			<div class=usermenu>dd<?php echo $username; ?></div>
		</div>
		
		<div id="container2">
				<h2>Dashboard</h2>
				
				<div class=btn>
					<img src="/smak-tms/home/img/addemp.png" style="height:60px; width:60px;">
					<br/><a href="#">Add Employee</a>
				</div>
				<div class=btn>
					<img src="/smak-tms/home/img/addveh.png" style="height:60px; width:60px;">
					<br/><a href="#">Add Vehicle</a>
				</div>
				<div class=btn>
					<img src="/smak-tms/home/img/adduser.png" style="height:60px; width:60px;">
					<br/><a href="#">Add User</a>
				</div>
				<div class=btn>
					<img src="/smak-tms/home/img/sch.png" style="height:60px; width:60px;">
					<br/><a href="#">Route Schedule</a>
				</div>
				<div class=btn>
					<img src="/smak-tms/home/img/ins.png" style="height:60px; width:60px;">
					<br/><a href="#">Insurance</a>
				</div><br/>
				<div class=btn>
					<img src="/smak-tms/home/img/leasing.png" style="height:60px; width:60px;">
					<br/><a href="#">Leasing</a>
				</div>
				<div class=btn>
					<img src="/smak-tms/home/img/serv.png" style="height:60px; width:60px;">
					<br/><a href="#">Service</a>
				</div>
				<div class=btn>
					<img src="/smak-tms/home/img/maint.png" style="height:60px; width:60px;">
					<br/><a href="#">Maintenance</a>
				</div>
				<div class=btn>
					<img src="/smak-tms/home/img/hire.png" style="height:60px; width:60px;">
					<br/><a href="#">Hire Payment</a>
				</div>
				<div class=btn>
					<img src="/smak-tms/home/img/report.png" style="height:60px; width:60px;">
					<br/><a href="#">Reports</a>
				</div>
		</div>
		
		<div id="container1">	

				<div class=btn-xs>
					<img src="/smak-tms/home/img/dashboard.png" style="height:30px; width:30px;">
					<a href="#">Dashboard</a>
				</div>				
				<div class=btn-xs>
					<img src="/smak-tms/home/img/addemp.png" style="height:30px; width:30px;">
					<a href="#">Add Employee</a>
				</div>
				<div class=btn-xs>
					<img src="/smak-tms/home/img/addveh.png" style="height:30px; width:30px;">
					<a href="#">Add Vehicle</a>
				</div>
				<div class=btn-xs>
					<img src="/smak-tms/home/img/adduser.png" style="height:30px; width:30px;">
					<a href="#">Add User</a>
				</div>
				<div class=btn-xs>
					<img src="/smak-tms/home/img/sch.png" style="height:30px; width:30px;">
					<a href="#">Route Schedule</a>
				</div>
				<div class=btn-xs>
					<img src="/smak-tms/home/img/ins.png" style="height:30px; width:30px;">
					<a href="#">Insurance</a>
				</div>
				<div class=btn-xs>
					<img src="/smak-tms/home/img/leasing.png" style="height:30px; width:30px;">
					<a href="#">Leasing</a>
				</div>
				<div class=btn-xs>
					<img src="/smak-tms/home/img/serv.png" style="height:30px; width:30px;">
					<a href="#">Service</a>
				</div>
				<div class=btn-xs>
					<img src="/smak-tms/home/img/maint.png" style="height:30px; width:30px;">
					<a href="#">Maintenance</a>
				</div>
				<div class=btn-xs>
					<img src="/smak-tms/home/img/hire.png" style="height:30px; width:30px;">
					<a href="#">Hire Payment</a>
				</div>
				<div class=btn-xs>
					<img src="/smak-tms/home/img/report.png" style="height:30px; width:30px;">
					<a href="#">Reports</a>
				</div>
		</div>
	</body>
</html>
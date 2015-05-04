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
		max-height:600px;
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
		background:#CC0000;
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
		background:#CC0000;
		border:1px solid #D0D0D0;
	}
	
	
	</style>
	</head>
	
	<body>
        <div id="container">
            <img src="/smak-tms/home/img/smaklogo.png" style="height:80px; width:140px"></img>
			<div class=usermenu>dd<?php echo $username; ?></div>
		</div>
		
		<div id="container2">
				<h2>Dashboard</h2>
				
				<div>
				<a href="kk" class="btn btn">
					<img src="/smak-tms/home/img/addemp.png" style="height:60px; width:60px;">
					<br/>Add Employee</a>
				
				<a href="kk" class="btn btn">
					<img src="/smak-tms/home/img/addveh.png" style="height:60px; width:60px;">
					<br/>Add Vehicle</a>
				
				<a href="kk" class="btn btn">
					<img src="/smak-tms/home/img/adduser.png" style="height:60px; width:60px;">
					<br/>Add User</a>
	
				<a href="kk" class="btn btn">
					<img src="/smak-tms/home/img/sch.png" style="height:60px; width:60px;">
					<br/>Route Schedule</a>
				
				<a href="kk" class="btn btn">
					<img src="/smak-tms/home/img/ins.png" style="height:60px; width:60px;">
					<br/>Insurance</a>
				<br/>
				<a href="kk" class="btn btn">
					<img src="/smak-tms/home/img/leasing.png" style="height:60px; width:60px;">
					<br/>Leasing</a>
			
				<a href="kk" class="btn btn">
					<img src="/smak-tms/home/img/serv.png" style="height:60px; width:60px;">
					<br/>Service</a>

				<a href="kk" class="btn btn">
					<img src="/smak-tms/home/img/maint.png" style="height:60px; width:60px;">
					<br/>Maintenance</a>

				<a href="kk" class="btn btn">
					<img src="/smak-tms/home/img/hire.png" style="height:60px; width:60px;">
					<br/>Hire Payment</a>
				
				<a href="kk" class="btn btn">
					<img src="/smak-tms/home/img/report.png" style="height:60px; width:60px;">
					<br/>Reports</a>
				</div>
		</div>
		
		<div id="container1">	

			<div>
				<a href="" class="btn btn-xs">
					<img src="/smak-tms/home/img/dashboard.png" style="float:left;height:20px; width:20px;">
					<p style="text-align: left; margin:10px;">Dashboard</p></a><br/>
					
				<a href="" class="btn btn-xs">
					<img src="/smak-tms/home/img/addemp.png" style="float:left;height:20px; width:20px;">
					<p style="text-align: left; margin:10px;">Add Employee</p></a><br/>

				<a href="" class="btn btn-xs">
					<img src="/smak-tms/home/img/addveh.png" style="float:left;height:20px; width:20px;">
					<p style="text-align: left; margin:10px;">Add Vehicle</p></a><br/>

				<a href="" class="btn btn-xs">
					<img src="/smak-tms/home/img/adduser.png" style="float:left;height:20px; width:20px;">
					<p style="text-align: left; margin:10px;">Add User</p></a><br/>
				
				<a href="" class="btn btn-xs">
					<img src="/smak-tms/home/img/sch.png" style="float:left;height:20px; width:20px;">
					<p style="text-align: left; margin:10px;">Route Schedule</p></a><br/>

				<a href="" class="btn btn-xs">
					<img src="/smak-tms/home/img/ins.png" style="float:left;height:20px; width:20px;">
					<p style="text-align: left; margin:10px;">Insurance</p></a><br/>

				<a href="" class="btn btn-xs">
					<img src="/smak-tms/home/img/leasing.png" style="float:left;height:20px; width:20px;">
					<p style="text-align: left; margin:10px;">Leasing</p></a><br/>
					
				<a href="" class="btn btn-xs">
					<img src="/smak-tms/home/img/serv.png" style="float:left;height:20px; width:20px;">
					<p style="text-align: left; margin:10px;">Service</p></a><br/>
					
				<a href="" class="btn btn-xs">
					<img src="/smak-tms/home/img/maint.png" style="float:left;height:20px; width:20px;">
					<p style="text-align: left; margin:10px;">Maintenance</p></a></br>

				<a href="" class="btn btn-xs">
					<img src="/smak-tms/home/img/hire.png" style="float:left;height:20px; width:20px;">
					<p style="text-align: left; margin:10px;">Hire Payment</p></a><br/>
				
				<a href="" class="btn btn-xs">
					<img src="/smak-tms/home/img/report.png" style="float:left;height:20px; width:20px;">
					<p style="text-align: left; margin:10px;">Reports</p></a><br/>
			</div>
		</div>
	</body>
</html>
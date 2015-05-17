<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>SMAK TMS add company own vehicle</title>

	<link href="/smak-tms/home/css/bootstrap.min.css" rel="stylesheet">
	<link href="/smak-tms/home/css/custom.css" rel="stylesheet">
	<script src="/smak-tms/home/js/bootstrap.min.js"></script>
	<script src="/smak-tms/home/js/jquery.min.js"></script>
	
</head>
	
    <body>
        <div id="container">
            <img src="/smak-tms/home/img/smaklogo.png" style="height:80px; width:140px"></img>
			<div class=usermenu><?php echo ""; ?></div>
		</div>
		
		<div id="container2">
				<h1>Vehicle Registration Form</h1>
				<h2>Company own vehicle</h2>
				<form class="form-horizontal" role="form" method="post">
					<div class="form-group">
						<label for="vid" class="col-sm-2 control-label">Vehicle No. </label>
						<div class="col-sm-4">
							<input type="text" class="form-control" id="vid" name="vid" placeholder="ex. TUV0032" value=""><?php echo '<font color="red">'.form_error('vid').'</font>'; ?>
						</div>
					</div>
					<div class="form-group">
						<label for="rid" class="col-sm-2 control-label">Registration No.</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" id="rid" name="rid" placeholder="registration number" value=""><?php echo '<font color="red">'.form_error('rid').'</font>'; ?>
						</div>
					</div>
					<div class="form-group">
						<label for="eid" class="col-sm-2 control-label">Engine No.</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" id="eid" name="eid" placeholder="engine number" value=""><?php echo '<font color="red">'.form_error('eid').'</font>'; ?>
						</div>
					</div>
					<div class="form-group">
						<label for="make" class="col-sm-2 control-label">Make</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" id="make" name="make" placeholder="make" value=""><?php echo '<font color="red">'.form_error('make').'</font>'; ?>
						</div>
					</div>
					<div class="form-group">
						<label for="vlexp" class="col-sm-2 control-label">License Expired</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" id="vlexp" name="vlexp" placeholder="yyyy-mm-dd" value=""><?php echo '<font color="red">'.form_error('vlexp').'</font>'; ?>
						</div>
					</div>
					<div class="form-group">
						<label for="chanum" class="col-sm-2 control-label">Chasis No.</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" id="chanum" name="chanum" placeholder="chasis number" value=""><?php echo '<font color="red">'.form_error('chanum').'</font>'; ?>
						</div>
					</div>
					<div class="form-group">
						<label for="ftype" class="col-sm-2 control-label">Fuel Type</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" id="ftype" name="ftype" placeholder="fuel type" value=""><?php echo '<font color="red">'.form_error('ftype').'</font>'; ?>
						</div>
					</div>
					<div class="form-group">
						<label for="mod" class="col-sm-2 control-label">Model</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" id="mod" name="mod" placeholder="model type" value=""><?php echo '<font color="red">'.form_error('mod').'</font>'; ?>
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
				<a href="/smak-tms/index.php/addvehiclec" class="btn btn-xs">
					<img src="/smak-tms/home/img/hiredv.png" style="float:left;height:20px; width:20px;">
					<p style="text-align: left; margin:10px;">Company own</p></a><br/>

				<a href="/smak-tms/index.php/addvehicleh" class="btn btn-xs">
					<img src="/smak-tms/home/img/companyv.png" style="float:left;height:20px; width:20px;">
					<p style="text-align: left; margin:10px;">Hired</p></a><br/>
				
			</div>
		</div>
	</body>
	
</html>
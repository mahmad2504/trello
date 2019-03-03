<!DOCTYPE html>
<html>
<head>
    <title>Shipment Graphs</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge;chrome=1" >
	
	<?php include 'modules/assets/stylesheets.php';
	ModuleJsCode();
	?>
</head>
<body>
	<?php include 'modules/assets/header.php'; ?>
	<p></p>
	
	<div class="container-fluid">
		<div style="margin-left:100px;" class="row" width="90%">
			<div  class="col-5">
				<div  style="margin-left:80px"  class="col-auto">
				<!-- Material inline 1 -->
					<div class="form-check form-check-inline">
					<input checked="checked" type="radio" class="form-check-input" id="cbmonthly" name="inlineMaterialRadiosExample">
					<label class="form-check-label" for="cbmonthly">Monthly</label>
					</div>

				<!-- Material inline 2 -->
					<div class="form-check form-check-inline">
					<input type="radio" class="form-check-input" id="cbquarterly" name="inlineMaterialRadiosExample">
					<label class="form-check-label" for="cbquarterly">Quarterly</label>
					</div>

				<!-- Material inline 3 -->
					<div class="form-check form-check-inline">
					<input type="radio" class="form-check-input" id="cbbiannually" name="inlineMaterialRadiosExample">
					<label class="form-check-label" for="cbbiannually">Bianullay</label>
					</div>
				
				<!-- Material inline 4 -->
					<div class="form-check form-check-inline">
					<input type="radio" class="form-check-input" id="cbannually" name="inlineMaterialRadiosExample">
					<label class="form-check-label" for="cbannually">Annually</label>
					</div>
				</div>
			</div>
			<div  class="col-5">
				<div  style="margin-left:150px" class="col-auto">
				<!-- Material inline 1 -->
					<div class="form-check form-check-inline">
					<input checked="checked" type="radio" class="form-check-input" id="cbproperty" name="inlineMaterialRadiosExample1">
					<label class="form-check-label" for="cbproperty">Property</label>
					</div>

				<!-- Material inline 2 -->
					<div class="form-check form-check-inline">
					<input type="radio" class="form-check-input" id="cbcountry" name="inlineMaterialRadiosExample1">
					<label class="form-check-label" for="cbcountry">Country</label>
					</div>

				<!-- Material inline 3 -->
					<div class="form-check form-check-inline">
					<input type="radio" class="form-check-input" id="cbteam" name="inlineMaterialRadiosExample1">
					<label class="form-check-label" for="cbteam">Team</label>
					</div>
				
				</div>
			</div>
		</div>
		<div style="margin-left:100px;" class="row" width="90%">
			<div  class="col-5">
			   	<div id="shipment_chart_div" class='shadow1'></div>
			</div>
			<div  class="col-5">
			    <div id="shipment_chart_div2" class='shadow1'>
				</div>
			</div>
		</div>
		
	</div>
	<div class="row justify-content-center align-items-center">
		<img id="spinner" width="200px" src="modules/assets/images/spinner.gif"></img>
	</div>
	<?php include $modulebase.'/assets/footer.php'; ?>
	<?php include $modulebase.'/assets/jscripts.php';?>
</body>
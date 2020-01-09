<!DOCTYPE html>
<html>
<head>
    <title>Payment Details</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge;chrome=1" >
	<?php include 'modules/assets/stylesheets.php';
	ModuleJsCode();
	$trello = new Trello();
	$countries  = $trello->GetPropertyCountriesList();
	$accounts = $trello->GetAccounts();
	
	$range['Ireland'] = [10000,20000,'2020-03-15',1,2];
	$range['Japan'] = [10000,50000,'2020-03-15',1,2];
	$range['US'] = [25000,50000,'2020-03-15',1,2];
	$range['Egypt'] = [10000,20000,'2020-03-15',1,2];
	$range['Hungary'] = [10000,20000,'2020-03-15',1,2];
	$range['Taiwan'] = [10000,20000,'2020-03-15',1,2];
	
	?>
	<style>
		<!-- You can insert the CSS to either the document Head or link it as an external resource -->
	table.table-style-two {
		font-family: verdana, arial, sans-serif;
		font-size: 11px;
		color: #333333;
		border-width: 1px;
		border-color: #3A3A3A;
		border-collapse: collapse;
	}
 
	table.table-style-two th {
		border-width: 1px;
		padding: 8px;
		border-style: solid;
		border-color: #517994;
		background-color: #B2CFD8;
	}
 
	table.table-style-two tr:hover td {
		background-color: #DFEBF1;
	}
 
	table.table-style-two td {
		border-width: 1px;
		padding: 8px;
		border-style: solid;
		border-color: #517994;
		background-color: #ffffff;
	}
	
	.select-style {
		border: 1px solid #ccc;
		width: 120px;
		border-radius: 3px;
		overflow: hidden;
		background: #fafafa url("img/icon-select.png") no-repeat 90% 50%;
	}

	.select-style select {
		padding: 5px 8px;
		width: 130%;
		border: none;
		box-shadow: none;
		background: transparent;
		background-image: none;
		-webkit-appearance: none;
	}

	.select-style select:focus {
		outline: none;
	}
		

	</style>
</head>
<body>
	<?php include 'modules/assets/header.php'; ?>
	
	<div class="container"> 
		<div class="row"> 
			<div class="col-sm-3">
				<div style="margin-top:10px;">Account Balance</div>
					<table style="font-size:12px; box-shadow: 2px 2px #888888;" class="table-style-two">
						<thead>
							<tr>
								<th>#</th>
								<th>Account</th>
								<th>Contract Expiry</th>
								<th>Balance</th>
							</tr>
						</thead>
						<tbody>
						<?php
							$i=1;
							function nb_mois($date1, $date2)
							{
								$begin = new DateTime( $date1 );
								$end = new DateTime( $date2 );
								$end = $end->modify( '+1 month' );

								$interval = DateInterval::createFromDateString('1 month');

								$period = new DatePeriod($begin, $interval, $end);
								$counter = 0;
								foreach($period as $dt) {
									$counter++;
								}

								return $counter;
							}
							foreach($accounts as $account=>$balance)
							{
								if($account == 'Unknown')
									continue;
								$color = 'blue';
								$contractexpiry = 'none';
								if(array_key_exists($account,$range))
								{
									$low = $range[$account][0];
									$high = $range[$account][1];
									$contractexpiry = $range[$account][2];
									$celow = $range[$account][3];
									$cehigh = $range[$account][4];
									$months = nb_mois(date('Y-m-d', time()),$contractexpiry);
									$cecolo = 'blue';
									if($months >= $cehigh)
										$cecolo = 'green';
									else if($months >= $celow)
										$cecolo = 'orange';
									else
										$cecolo = 'red';
									
									$contractexpiry = date('d F Y', strtotime($contractexpiry));
									
									if($balance>=$high)
										$color = 'green';
									else if($balance>=$low)
										$color = 'orange';
									else
										$color = 'red';
								}
								echo '<tr>';
									echo '<td>'.$i.'</td>';
									echo '<td>'.$account.'</td>';
									echo '<td style="color:'.$cecolo.'";>'.$contractexpiry.'</td>';
									echo '<td style="color:'.$color.'";>$ '.number_format(round($balance)).'</td>';
								echo '</tr>';
								$i++;
							}
						?>			
						</tbody>
					</table>
			</div>
			<div class="col-sm-9">
				<select class="select-style" style="margin-top:10px;" id="countrylist" name="example">
				<?php 
					foreach($accounts as $account=>$balance)
					{
						if($account == 'US')
							echo '<option value="'.$account.'" selected>'.$account.'</option>';
						else
							echo '<option value="'.$account.'">'.$account.'</option>';
					}
				?>
	
				</select>&nbspTransaction Details 
				<div style="box-shadow: 2px 2px #888888; width:100%; margin-left: auto; margin-right: auto; text-align:center;color:grey" class="center">
		<div id="table1">
		</div>
	</div>
			</div> 
		</div> 
    </div>

	
	
	
	
	<?php include 'modules/assets/footer.php'; ?>
	<?php include 'modules/assets/jscripts.php';?>
	<script type="text/javascript" src="<?php echo $modulepath.'/assets/js/app.js';?>"></script>

</body>
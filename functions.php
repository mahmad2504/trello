<?php
function SaveInSession($params,$data)
{
	foreach($params as $key=>$value)
		$_SESSION[$key] = $value;
	SendResponse('Done');
}
function GetShipmentStatistics($params,$data)
{
	$trello = new Trello();
	$result = [];
	$result['monthly'] = $trello->GetMonthlyShipmentCount();
	$result['quarterly'] = $trello->GetQuartelyShipmentCount();
	$result['biannually'] = $trello->GetBiAnnuallyShipmentCount();
	$result['yearly'] = $trello->GetYearlyShipmentCount();
	$result['property'] = $trello->GetPropertyShipmentCount();
	$result['country'] = $trello->GetCountryShipmentCount();
	$result['team'] = $trello->GetTeamShipmentCount();
	SendResponse($result);
}

function GetTicketData($params,$data)
{
	$trello = new Trello();
	$table = $trello->GetTicketsData();
	SendResponse($table);
}
function SyncTrello($params,$data)
{
	$trello = new Trello();
	$trello->Sync();
}
?>


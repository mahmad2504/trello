var source =  null;
$(function() 
{
	"use strict";
	console.log("Loading Sync Module");
	$("#sync").click(Sync); 
	$("#clear").click(Clear);
	$("#close").click(closeConnection);
})
function Clear()
{
	logger.clear()
}

function closeConnection() {
	if(source == null)
		return;
	
	source.close();
	logger.log('> Connection was closed');
	updateConnectionStatus('Disconnected', false);
}
function Sync() 
{
	console.log("Initiating Sync");
	source = new EventSource(resource+'?data=data&console=1');
	source.addEventListener('message', function(event) {
	var data = JSON.parse(event.data);
	var d = new Date(data.id * 1e3);
	var timeStr = [d.getHours(), d.getMinutes(), d.getSeconds()].join(':');
	logger.log('' + timeStr+' '+data.msg);
	}, false);

	source.addEventListener('open', function(event) 
	{
		logger.log('> Connected');
		updateConnectionStatus('Connected', true);
	}, false);

	source.addEventListener('error', function(event) 
	{
		if (event.eventPhase == 2) 
		{ //EventSource.CLOSED
			logger.log('> Disconnected');
			updateConnectionStatus('Disconnected', false);
			source.close();
		}
	}, false);
}
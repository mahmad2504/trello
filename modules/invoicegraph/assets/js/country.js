var options = 
{
	curveType: 'function',
	hAxis: { slantedText:true, slantedTextAngle:90, fontSize: 18},
	bar: {groupWidth: "20%"},
	height: 400,
	legend: { position: 'right' },
	vAxis: {minValue: 0},
	//'backgroundColor': 'transparent',
	//hAxis : { textPosition: 'none', gridlines: {color:"#000000"} },
	
	//'backgroundColor': 'transparent',
};
$(function() 
{
	"use strict";
	console.log("Starting Module Visual JS");
	if(typeof(params.country) === 'undefined')
		params.country = '';
	if(typeof(params.duration) === 'undefined')
		params.duration = 'month';
	
	$('#cbquarterly').click(function() {
		DrawInvoiceChart('Quarterly Invoices shipped from '+country,jsondata.data[country]['quarterly']);
		duration = 'quarter';
		$('#cbquarterly').attr('checked', true);
	});
	
	$('#cbmonthly').click(function() {
		console.log(country);
		DrawInvoiceChart('Monthly Invoices shipped from  '+country,jsondata.data[country]['monthly']);
		duration = 'month';
		$('#cbmonthly').attr('checked', true);
	});
	$('#cbbiannually').click(function() {
		DrawInvoiceChart('Biannual Invoices shipped from '+country,jsondata.data[country]['biannually']);
		duration = 'biannual';
		$('#cbbiannually').attr('checked', true);
	});
	$('#cbannually').click(function() {
		DrawInvoiceChart('Annual Invoices shipped from '+country,jsondata.data[country]['yearly']);
		duration = 'annual';
		$('#cbannually').attr('checked', true);
	});
	
	
	google.charts.load('current', {'packages':['corechart']});
	google.charts.setOnLoadCallback(drawChart);
})
function selectchange()
{
	country = jsondata.data.countries[document.getElementById("select").selectedIndex];
	console.log(duration);
	if(duration == 'quarter')
		$('#cbquarterly').click();
	else if(duration == 'biannual')
		$('#cbbiannually').click();
	else if(duration == 'annual')
		$('#cbannually').click();
	else 
		$('#cbmonthly').click();
}
function FindAverage(indata)
{
	var acc = 0;
	var count = 0;
	for (var k in indata)
	{
		count++;
		acc  += indata[k];
	}
	return acc/count;
}
function ArrayToGoogleChartTable(header,indata,average)
{
	var i=0;
	var data = [];
	data[i++] = header;
	for (var k in indata)
	{
		if(average != null)
			var array = [k,indata[k],average];
		else
			var array = [k,indata[k]];
		
		data[i++] = array;
	}
	//console.log(data);
	return data;
}
var jsondata;
var country = '';
var duration;
function drawChart() 
{
	var jsonData = $.ajax({
		url: "getinvoiceamountbycountry",
        dataType: "json",
        success: function (json) {
			jsondata = json;
			
			console.log(jsondata.data.countries);
			$('#spinner').hide();
			$('#radios').show();
			var dropdown = $("#select");
			
			country = jsondata.data.countries[0];
			console.log(country);
			for(var i=0;i<jsondata.data.countries.length;i++)
			{
				if(jsondata.data.countries[i].toLowerCase() == params.country.toLowerCase())
				{
					dropdown.append($('<option selected></option>').attr('value', jsondata.data.countries[i]).text(jsondata.data.countries[i]));
					country = jsondata.data.countries[i];
				}
				else
				{
					dropdown.append($('<option></option>').attr('value', jsondata.data.countries[i]).text(jsondata.data.countries[i]));
				}
			}
			
			console.log(country);
			
			params.duration = params.duration.toLowerCase();
			if(params.duration == 'quarter')
			{
				$('#cbquarterly').click();
			}
			else if(params.duration == 'biannual')
			{
				$('#cbbiannually').click();
			}
			else if(params.duration == 'annual')
			{
				$('#cbannually').click();
			}
			else
			{
				$('#cbmonthly').click();
			}
		}
    }) 
    // Create our data table out of JSON data loaded from server.
    //var data = new google.visualization.DataTable(jsonData);
    // Instantiate and draw our chart, passing in some options.
    //var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
    //chart.draw(data, {width: 400, height: 240});
}
function DrawInvoiceChart(title,data)
{
	console.log(data);
	var average = FindAverage(data);
	var ol = Object.keys(data);

	length = ol.length;
	console.log(length);
	var data = ArrayToGoogleChartTable( ['Duration', 'Invoice Amount','Average Amount'],data,average);
	data =  new google.visualization.arrayToDataTable(data);
	
	//var length = data.length;
	//console.log(length);
	var groupwidth = length*2;
//groupwidth =20;
	options.title = title;
	options.bar = {groupWidth: groupwidth+"%"};
	options.series = {1: {type: 'line'}};
	options.legend = { position: 'top', alignment: 'start' };
	
	var chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));
	chart.draw(data, options);
	//var anchor1 = document.getElementById('anchor1')
	//anchor1.innerHTML = '<a href="' + chart.getImageURI() + '">D</a>';
	// '<a href="' + chart.getChart().getImageURI() + '">Printable version</a>'
}
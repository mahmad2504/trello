function numberWithCommas(x) {
    x = x.toString();
    var pattern = /(-?\d+)(\d{3})/;
    while (pattern.test(x))
        x = x.replace(pattern, "$1,$2");
    return x;
}

$(function() 
{
	"use strict";
	console.log("Starting JS");
	$('#countrylist').change(function(){
			
			table1.setFilter([{field:"account",type:"=",value:$(this).val()},
							  {field:"export", type:"<=", value:0}]);
	});
	
	var visible = false;
	var error = 0;
	if(params.exporttickets ==1)
		visible = true;
	var paging = 'local';
	if(params.paging == 0)
		paging = '';
	var enablefilters = false;
	if(params.filter == 1)
		enablefilters = true;
	//console.log(params.exporttickets);
	var settings1 = 
	{
		tooltips:true,
		layout:"fitDataFill",
		pagination:'', //enable local pagination.
        paginationSize:15, // this option can take any positive integer value (default = 10)
		columnVertAlign:"bottom", 
		//height:105, // set height of table (in CSS or here), this enables the Virtual DOM and improves render speed dramatically (can be any valid css height value)
		ajaxURL:'GetTicketData', //ajax URL
		//autoColumns:true,
		ajaxResponse:function(url, params, response)
		{
			//console.log(response);
			//url - the URL of the request
			//params - the parameters passed with the request
			//response - the JSON object returned in the body of the response.
			if(response.data === undefined)
				return [];//return the tableData property of a response json object
			return response.data;
		},
		columns:
		[
			{resizable: false,title:"",formatter:"rownum", align:"center", width:"3%", headerSort:false,
				
			
			},
			
			{resizable: false,title:"Date",headerFilter:enablefilters, field:"received_date", align:"left", width:"10%",
				formatter:"datetime", 
				formatterParams:{
					inputFormat:"YYYY-MM-DD",
					outputFormat:"DD/MM/YY",
					invalidPlaceholder:"(invalid date)"
				}
			},
			{resizable: false,title:"Shipment Title (Imports)",field:"name", headerFilter:enablefilters, width:"30%",
				formatter:function(cell, formatterParams)
				{
					var value = cell.getValue();
					var row = cell.getRow();
					return '<a href="'+row._row.data.url+'">'+value+'</a>';
				}			
			}, 
			{resizable: false,title:"Country",field:"origincountry", headerFilter:enablefilters,width:"11%",
					
			},
			{resizable: false,title:"HSCODE",field:"hscode", headerFilter:enablefilters,width:"10%",
					
			},
			{resizable: false,title:"Account",visible:false,field:"account", headerFilter:enablefilters,width:"13%",
					
			},
			{resizable: false,title:"Team", field:"team", align:"left",headerFilter:enablefilters,width:"10%",
		
			},
			
			{resizable: false,title:"Invoice",headerFilter:enablefilters, field:"invoice",sorter:"number",align:"left", width:"12%",
				formatter:function(cell, formatterParams)
				{
					var value = cell.getValue();
					var row = cell.getRow();
					if(row._row.data.charged ==  0)
						return value;
					if(row._row.data.export == -1)
						return '<span style="color:green;">+'+numberWithCommas(value)+"</span>";
					else
						return '<span style="color:red;">-'+numberWithCommas(value)+"</span>";
				}	
			},
			{resizable: false,title:"Balance",headerFilter:enablefilters, field:"balance",align:"left", width:"12%",
				formatter:function(cell, formatterParams)
				{
					var value = cell.getValue();
					if(value >= 0)
						return '<span style="color:green;">$ '+numberWithCommas(value)+"</span>";
					else
						return '<span style="color:red;">$ '+numberWithCommas(value)+"</span>";
				}
			},
			{resizable: false,title:"Exp",visible:false,headerFilter:enablefilters,field:"export",align:"left", width:"3%",
		
			},
			{resizable: false,title:"",visible: false, field:"error",align:"left", width:"3%",
				mutator:function(value, data, type, params, component)
				{
					if(value == 1)
					{
						error = 1;
						//console.log(error);
						return 'Ticket Parsing Error';
					}
					else 
						return '';
				},
				formatter:function(cell, formatterParams)
				{
					var value = cell.getValue();
					var row = cell.getRow();
					if(value.length>0)
					{
						return '<i class="fa fa-exclamation-triangle" style="color:red"></i>';
					}
					return value;
				}
			},
			
		],
		initialFilter:[
			{field:"export", type:"<=", value:0},
			{field:"account", type:"=", value:'US'}
		],
		initialSort:
		[
			{column:"received_date", dir:"dsc"} //sort by this first
		],
		renderComplete:function()
		{
			//console.log("Rendered "+error);
			if(error == 1)
				this.showColumn("error") ;
		}
	};
	var table1 = new Tabulator("#table1", settings1);
})

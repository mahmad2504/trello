	<!-- Navigation -->
<?php
	if(isset($params->noheaders))
		if($params->noheaders == 1)
			return;
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
  <div class="container">
    <a class="navbar-brand" href="#">
          <img  width="40px" style="border-radius:10%;" src="<?php echo $modulebase.'/assets/images/logo.png';?>" alt="">
    </a>
    
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav">
        <li id="homecont" class="nav-item">
          <a id="homelink" class="nav-link" href="this/../">Home
                <span class="sr-only">(current)</span>
              </a>
        </li>
        <li id="shipmentscont" class="nav-item">
          <a id="shipmentslink" class="nav-link" href="this/../shipments">Shipments
		  
		  </a>
        </li>
		<li id="invoicescont" id="invoices" class="nav-item">
          <a id="invoiceslink" class="nav-link disabled" href="#">Invoices</a>
        </li>
      </ul>
    </div>
	
	<span id="toolbar"  style="color:white;float:right;margin-right:10px;display:none;">
		<a href="#">
				<i style="color:lawngreen;" id="download"  title="Download data" class="fa fa-download fa-sm fa-border" aria-hidden="true"></i>  
		</a>
		<a href="#" >
			<?php
				$color ='color:lawngreen';
				if($params->filter == 0)
					$color ='color:grey';
			?>
			<i style="<?php echo $color;?>" title="Toggle Seacrh Filters" class="download fas fa-filter fa-sm fa-border" aria-hidden="true" onclick="onFilterClick();">
			</i>
		</a>
		<a href="#">
			<?php
				$color ='color:lawngreen';
				if($params->paging == 0)
					$color ='color:grey';
			?>
			<i style="<?php echo $color;?>" title="Toggle Pagging" class="download fas fa-columns fa-sm fa-border" aria-hidden="true" onclick="onPagingClick();">
			</i>
		</a>
		<a data-toggle="modal" data-target="#myModal" href="#">
			<i style="color:lawngreen;" title="Sync with trello" class="fas fa-sync fa-sm fa-border" aria-hidden="true">
			</i>
		</a>
	</span>
  </div>
</nav>

<!-- Modal -->
<div class="modal fade" width="1250" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" >
    <div class="modal-content">
      <!--<div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel"></h4>
      </div>-->
      <div class="modal-body">
          <iframe src="sync" width="465" height="180" frameborder="0" allowtransparency="true"></iframe>  
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<script>
	if(resource == 'invoices')
	{
		var d = document.getElementById("invoiceslink");
		d.className += " active";
	}
	else if(resource == 'shipments')
	{
		var d = document.getElementById("shipmentslink");
		d.className += " active";
	}
	else
	{
		var d = document.getElementById("homelink");
		d.className += " active";
		document.getElementById("toolbar").style.display = "block";
	}
	function successcb(jsondata)
	{
		window.location.reload(true);
	}
	function onPagingClick()
	{
		if(params.paging == 1)
			params.paging = 0;
		else
			params.paging = 1;
		
		GetResource(0,'saveinsession','',params,null,successcb) 
	}
	function onFilterClick()
	{
		if(params.filter == 1)
			params.filter = 0;
		else
			params.filter = 1;
		
		GetResource(0,'saveinsession','',params,null,successcb) 
	}
</script>
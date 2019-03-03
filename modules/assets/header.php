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
				<i id="download"  class="fa fa-download fa-sm fa-border" aria-hidden="true"></i>  
		</a>
		<a href="#" >
			<?php
				$color ='';
				if($params->filter == 0)
					$color ='color:grey';
			?>
			<i style="<?php echo $color;?>" class="download fas fa-filter fa-sm fa-border" aria-hidden="true" onclick="onFilterClick();">
			</i>
		</a>
		<a href="#">
			<?php
				$color ='';
				if($params->paging == 0)
					$color ='color:grey';
			?>
			<i style="<?php echo $color;?>" class="download fas fa-columns fa-sm fa-border" aria-hidden="true" onclick="onPagingClick();">
			</i>
		</a>
	</span>
  </div>
</nav>
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
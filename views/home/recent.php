<h3>Your Recent Positions</h3>

<div class="map"></div>

<div class="clear"></div>

<script type="text/javascript">

var markers = [{ latitude: <?= $latest->location->position->latitude ?>, longitude: <?= $latest->location->position->longitude ?> }];

<?php foreach ($history as $record): ?>

	markers.push(
	{
	  	latitude:  <?= $record->location->position->latitude ?>, 
		longitude: <?= $record->location->position->longitude ?>
	});

<?php endforeach; ?>

$(".map").gMap({
  latitude: <?= $latest->location->position->latitude ?>, 
  longitude: <?= $latest->location->position->longitude ?>,
  zoom: 15,
  markers: markers
});

/* 
var coder = new GClientGeocoder();

  coder.getLatLng(address, function(gpoint)
  {
    	
	var markers = [{address: address}];
	
	$('.driveway_address').each(function()
	{
	
		var thisAddress = $(this).text();
	
		markers.push(
		{
		  	address: thisAddress, 
		  	icon :
			{
				image: "/application/views/dashboard_veepark/assets/icons/no_driveway_small.png", 
				iconsize: [35, 35],
				iconanchor: [35, 35],
				infowindowanchor: [12, 0]
			}
		});
	
	});
	
	$(".map").gMap({
	address: address,
	zoom: 15,
	markers: markers
	
	});	

  });
*/ 

</script>
<form name="settings_update" id="settings_update" method="post" action="<?= base_url() ?>api/settings/modify" enctype="multipart/form-data">

<div class="content_wrap_inner">
	
	<div class="content_inner_top_right">
		<h3>Module</h3>
		<p><?= form_dropdown('enabled', config_item('enable_disable'), $settings['geoloqi']['enabled']) ?></p>
	</div>		
	
	<h3>Application Keys</h3>

	<p>GeoLoqi is a private location sharing application <a href="https://geoloqi.com" target="_blank">read about it</a></p>
				
	<p><input type="text" name="api_version" value="<?= $settings['geoloqi']['api_version'] ?>"> Api Version</p>			
				
	<p><input type="text" name="oauth2_token" value="<?= $settings['geoloqi']['oauth2_token'] ?>"> OAuth Token</p> 

	<p><input type="submit" name="save" value="Save" /></p>

</div>

</form>

<?= $shared_ajax ?>
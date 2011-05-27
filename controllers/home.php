<?php
class Home extends Dashboard_Controller
{
    function __construct()
    {
        parent::__construct();

		$this->load->config('geoloqi');

		$this->data['page_title'] = 'Geoloqi';
	}
	
	function index()
	{		
		redirect('home');
	}

	function recent()
	{	
		
		$latest = file_get_contents('http://api.geoloqi.com/'.config_item('geoloqi_api_version').'/location/last?oauth_token='.config_item('geoloqi_oauth2_token'));
		$this->data['latest'] = json_decode($latest);

		$history = file_get_contents('http://api.geoloqi.com/'.config_item('geoloqi_api_version').'/location/history?oauth_token='.config_item('geoloqi_oauth2_token'));
		$this->data['history'] = json_decode($history);

		$this->render();
	
	}


}
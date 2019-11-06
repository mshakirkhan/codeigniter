<?php 	

class Crul extends CI_Controller
{
	public function index()
	{
		// This is example of how we are able to get data from webservices
		// This is Controller paste this file in your controller

		$api_url = "http://book-app.mshakirkhan.com/api/local_city";
		$client = curl_init($api_url);
		curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
		$response = curl_exec($client);
		curl_close($client);
		$result = json_decode($response);

		echo "<pre>";
		print_r($result);
		
	}
}

 ?>

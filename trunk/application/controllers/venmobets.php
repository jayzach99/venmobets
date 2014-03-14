<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Venmobets extends CI_Controller {


 	public function __construct() {
    	parent::__construct();
		$this->load->model('Venmobets_model', 'venmobets');
	}


	public function index() {
		// determine response type
		$response_type = 'code'; //code = server side & token = client side
	
		// change the scope permissions here.
		$scope = array();
		$scope['access_balance'] = 1;
		$scope['make_payments'] = 1;
		$scope['access_friends'] = 1;
		$scope['access_phone'] = 0;
		$scope['access_email'] = 1;
		$scope['access_profile'] = 1;
		$scope['access_feed'] = 0;
		
		$scope_string = '';
		foreach ($scope as $key => $value) {
			if ($value == 1) {
				$scope_string = $scope_string.$key."%20";
			}
		}
		
		$test = $this->venmobets->record_visit();
		// construct the redirect
		$href = 'https://api.venmo.com/v1/oauth/authorize?client_id=1631&scope='.$scope_string.'&response_type='.$response_type;
		
		// format to pass onto the view
		$data['href'] = $href;
		
		// load this baby up
		$this->load->view('landing-view', $data);
	
	}
	
	public function redirect() {
		$code = $_GET["code"]; // You'll likely need this code to do further transactions.
		$client_id = 1631;
		$client_secret = "GzSbsJxDzZ9dYRXmH8jR4TCmpg8uWBQQ";
	
		$curl = curl_init();
		curl_setopt_array($curl, array(
		CURLOPT_RETURNTRANSFER => 1,
    	CURLOPT_URL => 'https://api.venmo.com/v1/oauth/access_token',
    	CURLOPT_POST => 1,
    	//CURLOPT_HTTPHEADER => 'Accept: application/json',
    	CURLOPT_POSTFIELDS => array (
        	'code' => $code,
        	'client_id' => $client_id,
        	'client_secret' => $client_secret
        	)
		));
	
		$result = curl_exec($curl);
		$result_obj = json_decode($result, true);
		//var_dump($result_obj);
	
		curl_close($curl);
		
		$data['code'] = $code;
		$data['client_id'] = $client_id;
		$data['client_secret'] = $client_secret;
		$data['result_obj'] = $result_obj;
		
		
		$this->load->view('venmobets-view', $data);
	}
	
	
	public function make_bet() {
		$test = $this->venmobets->make_bet($_POST);
	}
	
}

/* End of file venmobets.php */
/* Location: ./application/controllers/venmobets.php */
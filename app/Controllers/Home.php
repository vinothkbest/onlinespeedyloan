<?php
namespace App\Controllers;
use App\Models\ApplyNowModel;

use App\Models\CreditPassModel;

class Home extends BaseController{


	public function __construct(){

		$this->db = \Config\Database::connect();

		$this->validate =  \Config\Services::validation();

	}


	
	public function index(){

	//validation

		helper('form');

		$this->validate->setRules([
			'fullname' => 'required|min_length[2]',
			'mobile' => 'required|min_length[10]',
			'email' =>'required|valid_email'
				
		],

		[   // Errors
        'fullname' => [
            'min_length[2]' => 'Name should be atleast two characters',
        ],
        'mobile' => [
            'min_length[10]' => 'Mobile number should be 10 digits'
        ],
        'email' => [
            'valid_email' => 'Please check your mail'
        ]
    ]);												

		if($this->validate->withRequest($this->request)->run()) :

	        $data['Name'] = $this->request->getPost('fullname');

	        $data['PhoneNumber'] = $this->request->getPost('mobile');

	        $data['Email'] = $this->request->getPost('email');
	        
	        $data['LoanAmount'] = $this->request->getPost('amount');


	        $this->applynow = new ApplyNowModel();

            $passer = ['customers' => $this->applynow->datatable($data)];  

	    else : $passer = ['submit' => $this->request->getPost('submit'), 
	    					'invalid' => 'Please check fields']; 

	     endif;
	        	

	         return view('index', $passer);


	}

	public function creditpass($title){

		$data['AuthorizationCode'] = $this->request->getPost('verifyAuth-code');

		$this->CreditPassModel = new CreditPassModel();

		$passer = ['code' => $this->CreditPassModel->authorizecodeverify($data),
					'title' => $title];  

		if($passer['code'] == 'Authorised') :

			return redirect()->route('creditpass-confirm'); 
		
		endif;			

		return view('pages/creditpass', $passer);
	}
	
	public function creditpass_confirm($title){

		$header['title'] = $title;

	   return view('pages/creditpass_confirm', $header);
	}

	public function faq($title){

		$header['title'] = $title;

	   return view('pages/faq', $header);
	}
	
	public function fees($title){

		$header['title'] = $title;

	   return view('pages/fees', $header);
	}

	public function lenders($title){

		$header['title'] = $title;

	   return view('pages/lenders', $header);
	}

	public function privacy($title){

		$header['title'] = $title;

	   return view('pages/privacy', $header);
	}

	public function terms($title){

		$header['title'] = $title;

	   return view('pages/terms', $header);
	}

}

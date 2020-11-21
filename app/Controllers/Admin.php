<?php
namespace App\Controllers;

use App\Models\LoginModel;

use App\Models\UsersModel;

use App\Models\DashboardModel;

use App\Models\AuthorizeCodeModel;

use App\Models\ThirdPartyWebsitesModel;

use CodeIgniter\HTTP\Files\UploadedFile;

class Admin extends BaseController{

	public function __construct(){

			$this->db = \Config\Database::connect();
            
			$this->validation =  \Config\Services::validation();

			$session = \Config\Services::session();

			
	}

	public function login($title){

		unset($_SESSION['mail']);


		$header['title'] = $title;

		return view('admin/login', $header);

	}

	public function verification(){

		$this->validation->setRules([

			'username' => 'required',
			'password' => 'required']);


		$data['Email'] = trim($this->request->getPost('username'));

		$data['Password'] = trim($this->request->getPost('password'));

		$_SESSION['mail'] = trim($this->request->getPost('username'));

		if($this->validation->withRequest($this->request)->run()) :

				$password = new LoginModel();

					foreach ($password->checker($data) as $key => $password) {
							
						$password = $password->Password;	
					}

				if(password_verify($data['Password'], $password)) :

					echo 'Verified';

				endif;


		else :
			echo 'Invalid Credentials';

		endif;


	}

	public function dashboard($title){

		if(isset($_SESSION['mail'])) :

			

			$this->DashboardModel =	new DashboardModel();

			

			$passer = [

					'auhorizedcodedetails' =>  $this->DashboardModel->totalauthcodereports(),
					'title' => $title,
			];

			return view('admin/dashboard', $passer);
		else :

			return redirect()->route('crm-admin'); 

		endif;


	}


	public function authorizecodelist($title){

		if(isset($_SESSION['mail'])) :

			$this->validation->setRules([

			'add-auth-code' => 'required']);

			$this->AuthorizeCodeModel =	new AuthorizeCodeModel();


			if($this->validation->withRequest($this->request)->run()) :

				$code['AuthorizationCode'] = $this->request->getPost('add-auth-code');

				$passer = [

						'auhorizedcodes' =>  $this->AuthorizeCodeModel->codetableinsert($code),
						'title' => $title,
				];

			else : 

				$passer = [

						'auhorizedcodes' =>  $this->AuthorizeCodeModel->codetable(),
						'title' => $title,
				];

			endif;


				return view('admin/authorizecodelist', $passer);

		else :

			return redirect()->route('crm-admin'); 

		endif;


	}




	public function userslist($title){

			if(isset($_SESSION['mail'])) :

				$updationdata['CaseID'] = $this->request->getPost('caseid');
				$updationdata['AuthorizationCode'] = $this->request->getPost('auth-code');
				$updationdata['Status'] = $this->request->getPost('status');	
				
				$this->users =  new UsersModel();

				$this->AuthorizeCodeModel =	new AuthorizeCodeModel();

				$header = ['title' => $title, 'userslist' => $this->users->TableList($updationdata),
											'auhorizedcodes' =>  $this->AuthorizeCodeModel->codetable()];

				return view('admin/users', $header);

			else : 
				return redirect()->route('crm-admin'); 

			endif;

	}

	public function usagehistory($title){

		if(isset($_SESSION['mail'])) :


			$this->DashboardModel =	new DashboardModel();

			

			$passer = [

					'auhorizedcodedetails' =>  $this->DashboardModel->totalauthcodereports(),
					
					'title' => $title,

					'users' => $this->DashboardModel->paginate(5),
            		'pager' => $this->DashboardModel->pager
			];


				return view('admin/usagehistory', $passer); 


		else : 
				return redirect()->route('crm-admin'); 

		endif;


	}

	public function thirdpartywebsites($title){

		if(isset($_SESSION['mail'])) :


			$this->validation->setRules([

				'weburl' => 'required',
				'status' => 'required',
				 
				]);


			$this->ThirdPartyWebsitesModel =	new ThirdPartyWebsitesModel();


			if($this->validation->withRequest($this->request)->run()) :

				$websites['WebUrl'] = $this->request->getPost('weburl');
				$websites['Status'] = $this->request->getPost('status');
				
				$image = $this->request->getFile('image');

            	$image->move(WRITEPATH . '/admin/ThirdPartyWebsites');
    
	            $data = [
		               'name' =>  $image->getName(),
		               'type'  => $image->getClientMimeType()
	            ];
    

				$passer = [

						'websites' =>  $websites['UrlImage'],
						'title' => $title,
				];

			else : 

				$passer = [

						'websites' =>  $this->ThirdPartyWebsitesModel->websitetable(),
						'title' => $title,
				];

			endif;

			
			return view('admin/thirdpartysites', $passer); 


		else : 
			return redirect()->route('crm-admin'); 

		endif;


	}

}

?>
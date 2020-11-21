<?php
namespace App\Models;

use CodeIgniter\Model;

class CreditPassModel extends Model{


	public function authorizecodeverify($code){

		
		
		if(isset($code['AuthorizationCode'])) : 

			$this->builder = $this->db->table('ApplyNow');
		
			$this->builder->select('*');
			$this->builder->where('AuthorizationCode', $code['AuthorizationCode']);

			$count = $this->builder->countAllResults();

			if($count > 0) :

				return  'Authorised'; 
			
			else : 	
		
				return 'Invalid Code!';

			endif;

		endif;

	}

}


?>
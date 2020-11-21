<?php
namespace App\Models;

use CodeIgniter\Model;

class AuthorizeCodeModel extends Model{


	public function codetableinsert($authorizationcode){

	
			$this->builder = $this->db->table('AuthorizationCodes');

			$this->builder->insert($authorizationcode);

			return $this->findAll();

	}


	public function codetable(){

	
			$this->builder = $this->db->table('AuthorizationCodes');

			$count = $this->builder->countAllResults();

			if($count > 0) : return $this->findAll();

		 	else : return 'No Code';

		 	endif;

	}

}


?>
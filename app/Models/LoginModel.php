<?php
namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model{


	public function checker($logindetails){

		$builder = $this->db->table('Admin');
		$builder->select('*');
		$builder->where('Email', $logindetails['Email']);

		return $builder->get()->getResult();

		

	}

}


?>
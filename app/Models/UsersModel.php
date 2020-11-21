<?php
namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model{

	public function TableList($updationdetails){

			$this->builder = $this->db->table('ApplyNow');



			if(isset($updationdetails)) :

				$data = [

					'AuthorizationCode' => $updationdetails['AuthorizationCode'],

					'Status' => $updationdetails['Status']

				];

				$this->builder->where('CaseID', $updationdetails['CaseID']);
				$this->builder->update($data);

			endif;

			return $this->findAll();
		
			
	}
}

 ?>
<?php
namespace App\Models;

use CodeIgniter\Model;

class ApplyNowModel extends Model{


	public function datatable($FormDetails){

		
		$builder = $this->db->table('ApplyNow');

		$query = $this->db->query("SELECT * FROM ApplyNow WHERE PhoneNumber = " . $FormDetails['PhoneNumber']);
	
		$row = $query->getRow();

		if(isset($row)) :

			$builder->select('CaseID, Name');
			$builder->where('PhoneNumber', $FormDetails['PhoneNumber']);

			return ['type'=>'exist', 'data' => $builder->get()->getResult()];
		
		else : 	
	
			$builder->insert($FormDetails);

			$builder->select('CaseID, Name');
			$builder->where('PhoneNumber', $FormDetails['PhoneNumber']);

			return ['type'=>'new', 'data' => $builder->get()->getResult()];

		endif;
		

	}

}


?>
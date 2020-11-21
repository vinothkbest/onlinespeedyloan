<?php
namespace App\Models;

use CodeIgniter\Model;

class DashboardModel extends Model{


	public function totalauthcodereports(){

	
			$this->builder = $this->db->table('ApplyNow');
		
	//Total Codes and their counts		

			$this->builder->select('AuthorizationCode');

			$this->builder->where('AuthorizationCode is not null', null);

			$total_codes = $this->builder->get()->getResult();


	// Codes Used Each Day
	
			$query = "SELECT `AuthorizationCode`, COUNT(`AuthorizationCode`) as 'CodeUsage', AppliedDate 
							FROM ApplyNow WHERE AuthorizationCode IS NOT NULL GROUP BY `AppliedDate`, `AuthorizationCode`;";	

			$exec = $this->db->query($query);


	// Approved Users

			$this->builder->select('CaseID');

			$this->builder->where('Status=','Approved');	

			$total_approved = $this->builder->get()->getResult();


			return 	[ 'totalusage' => $total_codes, 

					  'usagesperday' => $exec->getResult(),

					  'approvedusers' => $total_approved,


				];

	}

}


?>
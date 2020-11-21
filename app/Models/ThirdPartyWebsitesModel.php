<?php

namespace App\Models;

use CodeIgniter\Model;

class ThirdPartyWebsitesModel extends Model{


	public function websitesinsertion($websitedetails){

	
			$this->builder = $this->db->table('ThirdPartyWebsites');

			$this->builder->insert($websitedetails);

			return $this->findAll();

	}


	public function websitetable(){

	
			$this->builder = $this->db->table('ThirdPartyWebsites');

			$count = $this->builder->countAllResults();

			if($count > 0) : return $this->findAll();

		 	else : return 'No Websites';

		 	endif;

	}

}


 ?>
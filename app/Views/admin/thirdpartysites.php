<?= $this->extend('admin/part/template') ?>

<?= $this->section('content')?>
<div class="container form-panel">

	<form action="<?= base_url('crm-admin/thirdpartywebsites') ?>" method="post" style="margin-bottom: 50px;" enctype="multipart/form-data">
		<div class="row">
			<div class="col-md-8" style="display: flex; justify-content: space-between;">
				   <input type="text" class="form-control" placeholder="Enter Third party website (URL)" name = "weburl" required style="outline: none;margin-left: 20px;">
				   	<br>
				   	<input class="form-control" type="file" name = "image" required>
				   	<br>
 					<select class="form-control" name = "status" required style="margin-left: 20px;">
					  	<option>Inactive</option>
					  	<option>Active</option>
				  </select>
			</div>
			<div class="col-md-4">
			  <button type="submit" class="btn btn-primary" style="outline: none">Add</button>
			</div>
		</div>
	</form>
</div>

<div class="table-panel">
	
			<?php print_r($websites) ?>

</div>


<?= $this->endSection() ?>
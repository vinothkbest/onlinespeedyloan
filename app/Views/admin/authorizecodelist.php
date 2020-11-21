<?= $this->extend('admin/part/template') ?>

<?= $this->section('content') ?>

<div class="container authorizecodeform">

	<form action="<?= base_url('crm-admin/authorizecodelist') ?>" method="post" style="margin-bottom: 50px;">
		<div class="row">
			<div class="col-md-3">
			  <input type="text" class="form-control" placeholder="Enter New Authorization Code" name = "add-auth-code" required style="outline: none">
			</div>
			<div class="col-md-8">
			  <button type="submit" class="btn btn-primary" style="outline: none">Add</button>
			</div>
		</div>
	</form>



	<?php if($auhorizedcodes == 'No Code') : ?>

			<p style="margin-top: 50px; color: red">No Authorize Codes are Added!</p> 

	<?php else: ?>

	
				<div class="table" style="width:400px;">
						<table id = "auth-code-table" class="table table-striped table-responsive-sm">
							<thead>
								<tr>
									<th>S.No</th>
									<th>Authorization Code</th>
								</tr>
							</thead>
							<tbody>
							<?php 
								foreach ($auhorizedcodes as $key => $codes) {?>

								<tr>
									<th><?= $key+1 ?></th>
									<td><?= $codes['AuthorizationCode']; ?></td>
								</tr>
									
							<?php 	} ?>
								
							</tbody>
						</table>
					</div>
				</div>	  	

	<?php endif;?>

</div>



<?= $this->endSection() ?>
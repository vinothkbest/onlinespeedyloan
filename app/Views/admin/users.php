<?= $this->extend('admin/part/template') ?>
<?= $this->section('content') ?>

<div>
	<div class="table">
		<table id = "userstable" class="table table-striped table-responsive-sm">
			<thead>
				<tr>
					<th>Case ID</th>
					<th>Name</th>
					<th>Phone Number</th>
					<th>Email ID</th>
					<th>Loan Amount</th>
					<th>Applied Date</th>
					<th>Authorization Code</th>
					<th>Status</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
			<?php 
			if(isset($userslist)) :
				foreach ($userslist as $key => $user) {?>

				<tr>
					<th><?= $user['CaseID'] ?></th>
					<td><?= $user['Name']; ?></td>
					<td><?= $user['PhoneNumber']; ?></td>
					<td><?= $user['Email']; ?></td>
					<td><?= $user['LoanAmount']; ?></td>
					<td><?= $user['AppliedDate']; ?></td>
					<td><?= $user['AuthorizationCode']; ?></td>
					<td><?= $user['Status']; ?></td>
					<td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#<?= $user['CaseID'] ?>">
							<i class="fa fa-edit"></i>
						</button>
					</td>
				</tr>
					
			<?php 	} 
			else : ?> 

				<h3>No Records to be Found</h3>

			<?php endif; 

			?>
				
			</tbody>
		</table>
	</div>
</div>

<style type="text/css">
	#userstable_wrapper{
		display: block;
	}
	.paginate_button{
		outline: none;

	}
	.dataTables_length > label{
	display: grid;
    grid-template-columns: 1fr 2fr 10fr;
    grid-gap: 10px;

	}
	.dt-body-nowrap {
   			white-space: nowrap;
	}
</style>

<?php foreach ($userslist as $key => $user): ?>

<div class="modal fade" id="<?= $user['CaseID'] ?>" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
		    <h5 class="modal-title" id="ModalLabel" style="text-align: center"><?= $user['Name'] . ' Details'?></h5>
		  </div>
		   <form action="<?php base_url('crm-admin/users'); ?>" method="post">		   
		    	<div class="modal-content">
			    	<div class="form-group">
					    <label for="inputdefault">CaseID</label>
					    <input class="form-control" type="text" name= "caseid" value="<?= $user['CaseID'] ?>" readonly>
					</div>
					<div class="form-group">
					    <label for="inputdefault">AuthorizationCode</label>
					    <select class="form-control" name = "auth-code">

					    			<option disabled="disabled" selected="selected">Choose Authorized Code</option>

								    <?php foreach ($auhorizedcodes as $key => $codes) : ?>

								  	<option><?= $codes['AuthorizationCode']; ?></option>
								  	
								  <?php endforeach ?>
						</select>
					</div>
					<div class="form-group">
					    <label for="inputdefault">Status</label>
					    <select class="form-control" name = "status">
					    		<option>Pending</option>
					    		<option>Approved</option>
						</select>
					</div>
				</div>
			  <div class="modal-footer">
			    <button type="button" class="btn btn-secondary" data-dismiss="modal" style="background:red; font-weight: bold; color:white">Cancel</button>
			    <button type="submit" class="btn btn-primary">Update</button>
			  </div>
			</form>
		</div>
	</div>
</div>
	
<?php endforeach; ?>

<script type="text/javascript">
	
	$('.')

</script>




<?= $this->endSection() ?>





<?= $this->extend('admin/part/template') ?>
<?= $this->section('content') ?>

<div>
	<div class="table" style="overflow: scroll;">
		<?php if(isset($userslist)) : ?>
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
				<?php foreach ($userslist as $key => $user) :?>

					<tr>
						<th><?= $user['CaseID'] ?></th>
						<td><?= $user['Name']; ?></td>
						<td><?= $user['PhoneNumber']; ?></td>
						<td><?= $user['Email']; ?></td>
						<td><?= $user['LoanAmount']; ?></td>
						<td><?= $user['AppliedDate']; ?></td>
						<td><?= $user['AuthorizationCode']; ?></td>
						<td class="status"><?= $user['Status']; ?></td>
						<td>
						<?php if ($user['Status'] == "Approved" && isset($user['AuthorizationCode'])): ?>
							<button type="button" style="background: #315ea2" class="btn btn-info" data-toggle="modal" data-target="#<?= $user['CaseID'] ?>" disabled>
								<i class="fa fa-edit"></i>
							</button>
						<?php else : ?>
							<button type="button" style="background: #315ea2" class="btn btn-info" data-toggle="modal" data-target="#<?= $user['CaseID'] ?>">
								<i class="fa fa-edit"></i>
							</button>
						<?php endif ?>
							<button type="button" style="background: red" class="btn btn-info" data-toggle="modal" data-target="#<?= $user['CaseID'] ?>">
								<i class="glyphicon glyphicon-trash"></i>
							</button>
					</tr>
						
				<?php endforeach;?> 
				</tbody>
			</table>
		<?php else : ?>
			<h4 style="text-align: center;">No Records Found</h4>
		<?php endif; ?>	
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

<?= $this->endSection() ?>





<?= $this->extend('admin/part/template') ?>

<?= $this->section('content')?>

<div class="container form-panel">

    <div class="col-md-8">
        <form 
          action=""
          method= "post"
          enctype="multipart/form-data"
          class="form">
          <div class="form-group">
              <input 
                type="text"
                class="form-control"
                name="weburl"
                placeholder="Enter Third party website (URL)"
                style="width:250px"
                required>
          </div>
          <div class="form-group">
             <input type="file" class="form-control" name="image" required>
          </div>
          <div class="form-group">
              <button type="submit" class="btn btn-primary">Add Websites</button>
          </div> 
        </form>
    </div>

</div>

<div class="container table" style="margin-top: 50px;">
  <?php   if($websites != 'No Websites') : ?>
      <div class="table">
          <table id = "usertable" class="table table-striped table-responsive-sm">
              <thead>
                  <tr>
                    <th>S.No</th>
                    <th>Third party website (URL)</th>
                    <th>Website Image</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
              </thead>
              <tbody>
              <?php foreach ($websites as $key => $website) :?>

                  <tr>
                      <th><?= $key+1 ?></th>
                      <td><?= $website['WebUrl']; ?></td>
                      <td><img height="50px" width= "50px" src="<?= base_url('thirdpartywebsites') .'/'. $website['UrlImage']?>"></td>
                      <td class="status"><?= $website['Status']; ?></td>
                      <td>
                        <button type="button" style="background: #315ea2" class="btn btn-info" data-toggle="modal" data-target="#<?= $website['UrlID'] ?>">
                          <i class="fa fa-edit"></i>
                        </button>
                        <button type="button" style="background: red" class="btn btn-info" data-toggle="modal" data-target="#<?= $website['UrlID'] ?>">
                          <i class="glyphicon glyphicon-trash"></i>
                        </button>
                  </tr>
                  
              <?php endforeach; ?> 
              </tbody>
          </table>
      </div>
  <?php else : ?>
      <h4 style="text-align: center;">No Records Found</h4>    
  <?php endif; ?>
</div>

<style type="text/css">
  form{
    display: flex;
    justify-content: space-between;
  }
</style>

<?= $this->endSection() ?>

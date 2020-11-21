<?= $this->extend('admin/part/template') ?>

<?= $this->section('content') ?>
    <div class="panel-body counts-panel">
            <div class="row">
                <div class="col-md-4" style="text-align: center; height: 70px;">
                    <h3>Total Number of Approved Users</h3>
                    <p><?= count($auhorizedcodedetails['approvedusers']) ?></p>
                
            </div>
            <div class="col-md-4" style="text-align: center; height: 70px;">
                
                    <h3>Total Number of Third Party Websites</h3>
                    
                
            </div>
            <div class="col-md-4" style="text-align: center; height: 70px;">
                
                    <h3>Total Number of Authorization Codes</h3>
                    <p><?= count($auhorizedcodedetails['totalusage']) ?></p>
            
            </div>
            </div>
    </div>

<?= $this->endSection() ?>

<?= $this->extend('admin/part/template') ?>

<?= $this->section('content') ?>

<div class="usages-panel">
     <div class="col-md-12" style="margin-top: 50px;">
             <?php if($auhorizedcodedetails !== 'No Code') : ?>   

                <table id = "userstable" class="table table-striped table-responsive-sm">
                    <thead>
                        <tr>
                            <th>S.No</th>
                            <th>Applied Date</th>
                            <th>Authorization Code</th>
                            <th>Code Usage Count</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($auhorizedcodedetails['usagesperday'] as $key => $auhorizedcodede): ?>

                        <tr>
                            <td><?= $key+1 ?></td>
                            <td><?= $auhorizedcodede->AppliedDate; ?></td>
                            <td><?= $auhorizedcodede->AuthorizationCode; ?></td>
                            <td><?= $auhorizedcodede->CodeUsage; ?></td>                 
                        </tr>
                            
            <?php endforeach; ?>
                        
                    </tbody>
                </table>
         <?php   else : ?> 

             <h4 style="text-align: center;">No Records to be Found</h4>

            <?php endif; ?>
    </div>

</div>

<?= $this->endSection() ?>

<?php echo view('admin/part/header', ['title'=>'Portfolio'])?>
<div class="col-md-12">
     <div class="panel panel-default">
         <div class="panel-heading">
             <h3 class="panel-title pull-left">Portfolio</h3>
             <a href="" class="btn btn-success pull-right" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i></a>
                <div id="myModal" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <form method="post" action="<?=base_url('admin/portfolio/add')?>">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Add Portfolio</h4>
                        </div>
                        <div class="modal-body">
                            
                            
                            <div class="form-group">
                                <label >Title</label>
                                <input class="form-control" type="text" name="title" value="">
                                
                            </div>
                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary" name="edit">Add</button>
                        </div>
                                </form>
                        </div>

                    </div>
                </div>
             <div class="clearfix"></div>
            </div>

         <div class="panel-body">
            <table class="table table-bordered" id="dataTable">
                <thead>
                    <tr>
                        <th>S.no</th>
                        <th>Title</th>
                        <th>Gallery</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($portfolios as $folio) { ?>
                        <tr>
                       <td style="width:10%">1</td>
                       <td><?=$folio['name']?></td>
                       <td><a href="<?=base_url('admin/portfolio-detail/'.$folio['id'])?>" class="btn btn-primary">View</td>
                       <td style="width:10%"><a href="" class="btn btn-warning"  data-toggle="modal"  data-target="#myModal<?=$folio['id']?>"><i class="fa fa-edit"></i></a>
                            <a href="" data-id="<?=$folio['id']?>" class="btn btn-danger delete"><i class="fa fa-trash"></i></a>
                            <div id="myModal<?=$folio['id']?>" class="modal fade" role="dialog">
                                <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <form method="post" action="<?=base_url('admin/portfolio/edit')?>">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Add Portfolio</h4>
                                    </div>
                                    <div class="modal-body">
                                        
                                    <input  type="hidden" name="id" value="<?=$folio['id']?>">
                                        <div class="form-group" style="display:block;width:100%">
                                            <label>Title</label>
                                            <input class="form-control" style="display:block;width:100%" type="text" name="title" value="<?=$folio['name']?>">
                                           
                                            
                                        </div>
                                       
                                        
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                        <button type="submit" class="btn btn-primary" name="edit">Add</button>
                                    </div>
                                            </form>
                                    </div>

                                </div>
                            </div>
                       </td>
                       </tr>
                    <?php } ?>
                </tbody>
            </table>
         </div>
         <!-- panel-body -->
     </div>
     <!-- panel -->
</div>
<?php echo view('admin/part/footer')?>

<script>
    $(function(){
        $(document).on('click','.delete',function(e){
            e.preventDefault();
            var id = $(this).data('id');
            if(confirm('Are you sure want to delete the portfolio?'))
                window.location='admin/portfolio/delete/'+id;

        });
    })
</script>
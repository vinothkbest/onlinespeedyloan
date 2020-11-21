<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Interior Decoration">
<meta name="author" content="Events9">

<link rel="icon" href="<?= base_url('assets/images/usafav.ico')  ?>">

<?php $words = explode('-', $title);
      
      $title = implode(' ', $words);  

     ?>

<title>Admin || <?= ucfirst($title) ?></title>

<!-- Google-Fonts -->
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:100,300,400,600,700,900,400italic'
    rel='stylesheet'>

<!-- Bootstrap core CSS -->
<link href="<?= base_url('admin/css/bootstrap.min.css'); ?>" rel="stylesheet">
<link href="<?= base_url('admin//css/bootstrap-reset.css')?>" rel="stylesheet">

<!--Animation css-->
<link href="<?= base_url('admin/css/animate.css')?>" rel="stylesheet">

<!--Icon-fonts css-->
<link href="<?= base_url('admin/assets/font-awesome/css/font-awesome.css')?>" rel="stylesheet" />
<link href="<?= base_url('admin/assets/ionicon/css/ionicons.min.css')?>" rel="stylesheet" />
 <link rel="stylesheet" href="<?= base_url('admin/assets/morris/morris.css')?>">

<!-- sweet alerts -->
<link href="<?= base_url('admin/assets/sweet-alert/sweet-alert.min.css')?>" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="<?= base_url('admin/css/style.css')?>" rel="stylesheet">
<link href="<?= base_url('admin/css/helper.css')?>" rel="stylesheet">
<link href="<?= base_url('admin/css/style-responsive.css')?>" rel="stylesheet" />
<link href="<?= base_url('admin/css/jquery.lightbox.css')?>" rel="stylesheet" />
<link href="<?= base_url('admin/assets/datatables/jquery.dataTables.min.css')?>" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap.min.css">
<link rel="stylesheet" href="<?= base_url('admin/assets/sweet-alert/sweet-alert.min.css')?>">

<style>
    .custom-panel {
        border: 1px solid #ddd;

    }



    .custom-panel .panel-heading {
        padding: 10px 20px;
        font-size: 20px;
        background: #ddd;
        color: #000;
    }

    .custom-panel .panel-body {
        padding: 10px 20px;
    }

    .custom-panel .panel-body .count {
        font-size: 80px;
        padding: 0;
        margin: 0;
    }
    .nav-label{
        font-weight: bold;
    }

</style>


</head>


<body>

<!-- Aside Start-->
<aside class="left-panel">

    <!-- brand -->
    <div class="logo">
        <a href="<?= base_url('crm-admin/dashboard'); ?>" class="logo-expanded">
            <span class="nav-label"><img src="<?= base_url('assets/images/callrep.png') ?>" width="150">
            </span>
        </a>
    </div>
    <!-- / brand -->

    <!-- Navbar Start -->
    <nav class="navigation">
        <ul class="list-unstyled">
            <li class="has-submenu"><a href="<?= base_url('crm-admin/dashboard'); ?>"><i class="ion-home"></i> <span
                        class="nav-label">Dashboard</span></a>
            </li>
            <li class="has-submenu "><a href="<?= base_url('crm-admin/authorizecodelist'); ?>"><i class="fa fa-archive"></i> <span
                        class="nav-label">​Authorize Code List</span></a>
                        </li>
            <li class="has-submenu "><a href="<?= base_url('crm-admin/users'); ?>"><i class="fa fa-users"></i> <span
                        class="nav-label">​Users</span></a>
                        </li>
            <li class="has-submenu "><a href="<?= base_url('crm-admin/thirdpartywebsites') ?>"><i class="fa fa-th"></i> <span
                        class="nav-label">Third Party Websites</span></a>
            </li>
            <li class="has-submenu "><a href="<?= base_url('crm-admin/usagehistory'); ?>"><i class="fa fa-history"></i> <span
                        class="nav-label">Authorised Code Usage</span></a>
            </li>

        </ul>
    </nav>

</aside>
<!-- Aside Ends-->


<!--Main Content Start -->
<section class="content">

    <!-- Header -->
    <header class="top-head container-fluid">

        <div style="text-align: center;display: flex; justify-content: space-between; margin-top: 20px;">

            <img src="<?=  base_url('assets/img2/osl.png'); ?>" width="250px" height="40px">

            <button type="button" class="navbar-toggle pull-left">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <ul class="list-inline navbar-right top-menu top-right-menu">

            <li class="dropdown text-center">
                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                    <img alt="" src="<?= base_url('assets/images/usafav.ico') ?>" class="img-circle profile-img thumb-sm">
                    <span class="username"></span> <span class="caret"></span>
                </a>
                    <ul class="dropdown-menu extended pro-menu fadeInUp animated" tabindex="5003"
                    style="overflow: hidden; outline: none;">
                    <li><a href="<?=base_url('crm-admin')?>"><i class="fa fa-sign-out"></i>Log Out</a></li>

                   
                
                    </ul>
                </li>
            <!-- user login dropdown end -->
            </ul>
        <!-- End right navbar -->

        </div>

        




       

    </header>
    <!-- Header Ends -->


    <!-- Page Content Start -->
    <!-- ================== -->
<div class="title-bar">
    <div style="margin: 0 0 50px 0; width: 100%; height: 100px; display: flex; justify-content: center; align-items: center; background: #315ea2; color: white">
            <h3 style="text-align: center;font-weight: bold;"><?= ucwords($title) ?></h3>
    </div> 
</div>  

    <div class="wraper container-fluid">

         
        
        <?= $this->renderSection('content'); ?>

            
    </div>      
        <!-- Page Content Ends -->
        <!-- ================== -->

        <!-- Footer Start -->
        <footer class="footer" style="text-align: center">
            <?php echo date('Y') . " Onlinespeedyloan.com . All Rights Reserved."?>
        </footer>
        <!-- Footer Ends -->



    </section>
    <!-- Main Content Ends -->
    


    <!-- js placed at the end of the document so the pages load faster -->
    
<script type="text/javascript">
    var baseURL = "<?= base_url(); ?>" 
</script>
<script src="<?= base_url('admin/js/jquery.js')?>"></script>
<script src="<?= base_url('admin/js/bootstrap.min.js')?>"></script>
<script src="<?= base_url('admin/js/pace.min.js')?>"></script>
<script src="<?= base_url('admin/js/jquery.lightbox.js')?>"></script>
<script src="<?= base_url('admin/js/wow.min.js')?>"></script>
<script src="<?= base_url('admin/js/jquery.nicescroll.js')?>" type="text/javascript"></script>
<script src="<?= base_url('admin/assets/sweet-alert/sweet-alert.min.js')?>"></script>
<script src="<?= base_url('admin/assets/sweet-alert/sweet-alert.init.js')?>"></script>
<script src="<?= base_url('admin/assets/datatables/jquery.dataTables.min.js')?>"></script>
<script src="<?= base_url('admin/assets/datatables/dataTables.bootstrap.js')?>"></script>
<script type="text/javascript" src="<?= base_url('admin/js/style.js')?>"></script>
<script src="<?= base_url('admin/js/jquery.app.js')?>"></script>
<script type="text/javascript" src="<?= base_url('admin/js/login.js')?>"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript" src="<?= base_url('admin/js/jquery.tabledit.min.js')?>"></script>
<script type="text/javascript" src="https://www.jsdelivr.com/package/npm/chart.js"></script>
</body>
</html>

<!-- UsersList --> 
<script type="text/javascript">
    $(document).ready(function() {
        $('#userstable').DataTable({

            select: true,
            ordering:  false,
            lengthMenu: [10, 25, 50],
            pagingType : 'simple',

        });

    } );
</script>
<!-- Reports -->


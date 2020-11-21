<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Interior Decoration">
<meta name="author" content="Events9">

<link rel="icon" href="assets/images/usafav.ico">

<title><?= 'Admin ' . $title ?></title>

<!-- Google-Fonts -->
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:100,300,400,600,700,900,400italic'
    rel='stylesheet'>

<!-- Bootstrap core CSS -->
<link href="admin/css/bootstrap.min.css" rel="stylesheet">
<link href="admin/css/bootstrap-reset.css" rel="stylesheet">

<!--Animation css-->
<link href="admin/css/animate.css" rel="stylesheet">

<!--Icon-fonts css-->
<link href="admin/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
<link href="admin/assets/ionicon/css/ionicons.min.css" rel="stylesheet" />
 <link rel="stylesheet" href="admin/assets/morris/morris.css">

<!-- sweet alerts -->
<link href="admin/assets/sweet-alert/sweet-alert.min.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="admin/css/style.css" rel="stylesheet">
<link href="admin/css/helper.css" rel="stylesheet">
<link href="admin/css/style-responsive.css" rel="stylesheet" />
<link href="admin/css/jquery.lightbox.css" rel="stylesheet" />
<link href="admin/assets/datatables/jquery.dataTables.min.css" rel="stylesheet" />

<link rel="stylesheet" href="admin/assets/sweet-alert/sweet-alert.min.css">
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

<div class="wrapper-page animated fadeInDown">
    <div class="panel panel-color panel-primary">
        <div class="panel-heading"> 
           <h3 class="text-center m-t-10"> <strong>Admin</strong> </h3>
        </div> 
        <br>
        <div class="indicator"></div>
        <form class="form-horizontal m-t-40" id="formlogin" method="post" action="">
        
            <div class="form-group ">
                <div class="col-xs-12">
                   
                    <input class="form-control" type="text" placeholder="User Name" name="username">
                </div>
            </div>
            <div class="form-group ">
                
                <div class="col-xs-12">
                    <input class="form-control" type="password" placeholder="Password" name="password">
                </div>
            </div>

           
            
            <div class="form-group text-right">
                <div class="col-xs-12">
                    <?= anchor('crm-admin', '<button class="btn btn-purple w-md" type="submit" name="log_in">Log In</button>', '') ?>
                </div>
            </div>
            
        </form>

    </div>
</div>

    <script type="text/javascript">
        var baseURL = "<?= base_url(); ?>" 
    </script>
    <script src="admin/js/jquery.js"></script>
    <script src="admin/js/bootstrap.min.js"></script>
    <script src="admin/js/pace.min.js"></script>
    <script src="admin/js/jquery.lightbox.js"></script>
    <script src="admin/js/wow.min.js"></script>
    <script src="admin/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="admin/assets/sweet-alert/sweet-alert.min.js"></script>
    <script src="admin/assets/sweet-alert/sweet-alert.init.js"></script>
    <script type="text/javascript" src="admin/js/style.js"></script>
    <script src="admin/js/jquery.app.js"></script>
    <script type="text/javascript" src="admin/js/login.js"></script>
</body>
</html>
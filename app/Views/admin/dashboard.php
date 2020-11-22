<?= $this->extend('admin/part/template') ?>

<?= $this->section('content') ?>

<div class="dashboard-content">
  
  <div class="tile-panel">

    <div class="approved-users tile">
      <div class="title">
        Total Approved Users
      </div>
      <div class="counts users">
        
      </div>
    </div>

    <div class="approved-codes tile">
      <div class="title">
        Total Authorized Codes
      </div>
      <div class="counts codes">
      </div>
    </div>

    <div class="third-party-websites tile">
      <div class="title">
        Total Third Party Websites
      </div>
      <div class="counts websites">
        
        
      </div>
    </div>

  </div>

</div>
<p hidden class="approved-users-count"></p>
<p hidden class="approved-codes-count"></p>
<p hidden class="websites-count"></p>
<style type="text/css">
  .tile-panel{
    width:100%;
    display: flex;
    justify-content: space-around;
    align-items: center;

  }
  .tile{
    width:250px;
    height: 250px;
    background: #315ea2;
    border-radius: 15px;
    color: white;
    opacity: 0.8;
  }
  .title, .counts{
    text-align: center;
    margin-top: 50px;
    font-weight: bolder;
    font-size: 20px
  }
  .counts{
    
     font-size: 40px

  }
  
</style>

<script src="<?= base_url('admin/js/jquery.js')?>"></script>
<script type="text/javascript">
    
    var approvedusers = <?= count($auhorizedcodedetails['approvedusers']) ?>;
    var approvedcodes = <?= count($auhorizedcodedetails['totalusage']) ?>;
    var websites = 90;

    let i = 0, j = 0, k = 0;

    setInterval(users, 100);

    function users(){

       if( approvedusers > i ) {

         i = i+1;

         $('.users').text(i);

       }

    }

    setInterval(codes, 100);

    function codes(){

       if( approvedcodes > j ) {

         j = j+1;

         $('.codes').text(j);

       }

    }
  
    setInterval(websitesusage, 100);

    function websitesusage(){

       if( websites > k ) {

         k = k+1;

         $('.websites').text(k);

       }

    }

</script>

<?= $this->endSection() ?>

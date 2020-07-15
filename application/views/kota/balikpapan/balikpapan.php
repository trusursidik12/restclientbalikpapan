<!DOCTYPE html>
<html>
<head>
  <title>BALIKPAPAN</title>
  <link rel="icon" href="<?=base_url()?>assets/dist/img/balikpapan.png">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="<?= base_url('assets/dist/css/adminlte.min.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('assets/dist/css/sidik.css'); ?>">

  <!-- js cart -->
  <script src="<?= base_url('assets/dist/js/chart/chart.min.js'); ?>"></script>
  <script src="<?= base_url('assets/dist/js/chart/utils.js'); ?>"></script>

  <script src="<?= base_url('assets/dist/js/jquery.min.js') ?>"></script>
  <script src="<?= base_url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
</head>
<body onload="startTime()">

  <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <!-- Aqms -->
                <div id="chartispu">
                  <?php $this->view('kota/balikpapan/chart') ?>
                </div>
                <!-- /.Aqms -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

    <script type="text/javascript">
      function startTime() {
        $('#chartispu').load('<?= site_url('load/chartispu') ?>', function(){})
        var t = setTimeout(startTime, 60000);
      }
    </script>

</body>
</html>
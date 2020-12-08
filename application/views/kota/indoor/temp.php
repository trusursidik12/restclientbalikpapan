<!DOCTYPE html>
<html>
<head>
  <title>BALIKPAPAN</title>
  <link rel="icon" href="<?=base_url()?>assets/dist/img/pelindo.png">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="<?= base_url('assets/dist/css/adminlte.min.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('assets/dist/css/sidik.css'); ?>">

  <!-- js cart -->
  <script src="<?= base_url('assets/dist/js/chart/chart.min.js'); ?>"></script>
  <script src="<?= base_url('assets/dist/js/chart/utils.js'); ?>"></script>

  <script src="<?= base_url('assets/dist/js/jquery.min.js') ?>"></script>
  <script src="<?= base_url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
</head>
<!-- <body onload="startTime()" style="background-image: url(<?= base_url() ?>assets/dist/img/bg_balikpapan.jpg); background-repeat:  no-repeat; background-position: center; background-size: cover;"> -->

  <!-- <section class="content" style="background-image: url(<?= base_url() ?>assets/dist/img/bg_balikpapan.jpg); background-repeat:  no-repeat; background-position: center; background-size: cover;"> -->
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="">
              <div class="">
                <ul class="nav nav-pills">
                </ul>
              </div><!-- /.card-header -->
              <!-- <div class="card-body" style="background-image: url(<?= base_url() ?>assets/dist/img/bg_balikpapan.jpg); background-repeat:  no-repeat; background-position: center; background-size: cover;"> -->
                <!-- Aqms -->
                <div id="chart">
                  <br>
                  <br>
                  <?php $this->view('kota/indoor/chart') ?>
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
        $('#chart').load('<?= site_url('load/chart') ?>', function(){})
        var t = setTimeout(startTime, 60000);
      }
    </script>

</body>
</html>
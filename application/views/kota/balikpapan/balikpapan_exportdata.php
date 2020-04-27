<!DOCTYPE html>
<html>
<head>
  <title>SUKOHARJO EXPORT DATA</title>
  <link rel="icon" href="<?=base_url()?>assets/dist/img/ptrum.png">

  <link rel="stylesheet" href="<?= base_url('assets/dist/css/adminlte.min.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('assets/dist/css/sidik.css'); ?>">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?= base_url('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.css') ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('assets/dist/css/adminlte.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/plugins/datatables-buttons/css/buttons.dataTables.min.css') ?>">
</head>
<body>
  <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="<?= site_url() ?>">CHART</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body" height="100%">
                <div class="tab-content">
                  <div class="active tab-pane" id="cams">
                    <!-- Cams -->
                      <div class="card-body">
                        <div class="table-responsive">
                          <table id="camsdata" class="table table-bordered table-striped" width="100%">
                            <thead>
                            <tr class="text-center">
                              <th width="10">NO</th>
                              <th>ID STATION</th>
                              <th>WAKTU</th>
                              <th>PM25 [μg]</th>
                              <th>SO2 [μg]</th>
                              <th>NO2 [μg]</th>
                            </tr>
                            </thead>
                            <tbody>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    <!-- /.Cams -->
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
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

  <script src="<?= base_url('assets/dist/js/jquery.min.js') ?>"></script>
  <script src="<?= base_url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
  <!-- DataTables -->
  <script src="<?= base_url('assets/plugins/datatables/jquery.dataTables.js') ?>"></script>
  <script src="<?= base_url('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js') ?>"></script>

  <script src="<?= base_url('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js') ?>"></script>
  <script src="<?= base_url('assets/plugins/datatables-buttons/js/jszip.min.js') ?>"></script>
  <script src="<?= base_url('assets/plugins/datatables-buttons/js/pdfmake.min.js') ?>"></script>
  <script src="<?= base_url('assets/plugins/datatables-buttons/js/buttons.html5.min.js') ?>"></script>

  <script>
    $(document).ready(function() {
      $('#camsdata').DataTable({
        "processing": true,
        "serverSide": true,
    "lengthMenu": [ [10, 25, 50, 100, 200, 300, 500, -1], [10, 25, 50, 100, 200, 300, 500, "All"] ],
        "ajax": {
          "url" : "http://localhost/restserverclientbalikpapan/ajax/get_ajax",
          "type" : "POST"
        },
    dom: "lBfrtip",
    buttons: ['excel'],
    "order": [ [2, "desc"]]
      })
    })
  </script>
</body>
</html>
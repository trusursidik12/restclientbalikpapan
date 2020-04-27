<!DOCTYPE html>
<html>
<head>
  <title>BALIKPAPAN</title>
  <link rel="icon" href="<?=base_url()?>assets/dist/img/ptrum.png">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="<?= base_url('assets/dist/css/adminlte.min.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('assets/dist/css/sidik.css'); ?>">

  <!-- js cart -->
  <script src="<?= base_url('assets/dist/js/chart/chart.min.js'); ?>"></script>
  <script src="<?= base_url('assets/dist/js/chart/utils.js'); ?>"></script>
</head>
<body>

  <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="<?= site_url('export') ?>">EXPORT DATA</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <!-- Aqms -->
                <div class="row d-flex align-items-stretch">

                  <div class="col-sm-12">
                    <div class="table-responsive">
                      <table border="1" width="100%" class="text-center">
                          <thead>
                              <tr>
                                  <th>NO</th>
                                  <th>ISPU</th>
                                  <th>RANGE NILAI &#127777;</th>
                              </tr>
                          </thead>
                          <tbody>
                              <tr>
                                  <td>5</td>
                                  <td>Berbahaya &#128567;</td>
                                  <td class="text-white bg-dark" style="color: #FFFFFF;"> >300 </td>
                              </tr>                        
                              <tr>
                                  <td>4</td>
                                  <td>Sangat Tidak Sehat &#129319;</td>
                                  <td class="text-white bg-danger">201 - 300</td>
                              </tr>    
                              <tr>
                                  <td>3</td>
                                  <td>Tidak Sehat &#128552;</td>
                                  <td class="text-white bg-warning">101 - 200</td>
                              </tr> 
                              <tr>
                                  <td>2</td>
                                  <td>Sedang &#128578;</td>
                                  <td class="text-white bg-primary">51 - 100</td>
                              </tr>   
                              <tr>
                                  <td>1</td>
                                  <td>Baik &#128515;</td>
                                  <td class="text-white bg-success">0 - 50</td>
                              </tr>
                          </tbody>
                      </table>
                    </div>
                  </div>

                  <div class="col-sm-6 p-3">
                    <div class="row">
                      <div class="col-sm-12 text-center">
                        <h2>STASIUN BALIKPAPAN BARU</h2>
                        <div class="row">
                          <div class="col-sm-6">
                            <p style="font-size: 20px;"><b>ISPU</b></p>
                            <canvas id="balikpapanbbispu" width="100" height="93"></canvas>
                          </div>
                          <div class="col-sm-6">
                            <p style="font-size: 20px;"><b>DATA</b></p>
                            <canvas id="balikpapanbbdata" width="100" height="93"></canvas>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-sm-6 p-3">
                    <div class="row">
                      <div class="col-sm-12 text-center">
                        <h2>STASIUN PLAZA BALIKPAPAN</h2>
                        <div class="row">
                          <div class="col-sm-6">
                            <p style="font-size: 20px;"><b>ISPU</b></p>
                            <canvas id="balikpapanpbispu" width="100" height="93"></canvas>
                          </div>
                          <div class="col-sm-6">
                            <p style="font-size: 20px;"><b>DATA</b></p>
                            <canvas id="balikpapanpbdata" width="100" height="93"></canvas>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

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

  <script src="<?= base_url('assets/dist/js/jquery.min.js') ?>"></script>
  <script src="<?= base_url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

  <script>
    $(function() {
      var color = Chart.helpers.color;
      var UserVsMyAppsData = {
          labels: ["PM2,5", "SO2", "NO2"],
          datasets: [{
              label: '# ISPU',
              backgroundColor: color(window.chartColors.blue).alpha(0.5).rgbString(),
              borderColor: window.chartColors.blue,
              borderWidth: 1,
              data: [
                <?php foreach($balikpapanbbispu as $bbispu) : ?>
                  <?= $bbispu['pm25'] ?>,
                  <?= $bbispu['so2'] ?>,
                  <?= $bbispu['no2'] ?>
                <?php endforeach ?>
              ]
          }]
   
      };
   
      var UserVsMyAppsCtx = document.getElementById('balikpapanbbispu').getContext('2d');
      var UserVsMyApps = new Chart(UserVsMyAppsCtx, {
          type: 'bar',
          data: UserVsMyAppsData,
          options: {
              responsive: true,
              legend: {
                  position: 'top',
                  display: true,
   
              },
              "hover": {
                "animationDuration": 0
              },
               "animation": {
                  "duration": 1,
                "onComplete": function() {
                  var chartInstance = this.chart,
                    ctx = chartInstance.ctx;
   
                  ctx.font = Chart.helpers.fontString(Chart.defaults.global.defaultFontSize, Chart.defaults.global.defaultFontStyle, Chart.defaults.global.defaultFontFamily);
                  ctx.textAlign = 'center';
                  ctx.textBaseline = 'bottom';
   
                  this.data.datasets.forEach(function(dataset, i) {
                    var meta = chartInstance.controller.getDatasetMeta(i);
                    meta.data.forEach(function(bar, index) {
                      var data = dataset.data[index];
                      ctx.fillText(data, bar._model.x, bar._model.y - 5);
                    });
                  });
                }
              },
              title: {
                  display: false,
                  text: ''
              },
              scales: {
                yAxes: [{
                  ticks: {
                    beginAtZero: true,
                    suggestedMin: 0,
                    stepSize: 50,
                    suggestedMax: 350,
                  }
                }],
                xAxes: [{
                  ticks: {
                    fontSize: 30
                  }
                }]
              }
          }
      });
    });
  </script>
  <script>
    $(function() {
      var color = Chart.helpers.color;
      var UserVsMyAppsData = {
          labels: ["PM2,5", "SO2", "NO2"],
          datasets: [{
              label: '# DATA',
              backgroundColor: color(window.chartColors.blue).alpha(0.5).rgbString(),
              borderColor: window.chartColors.blue,
              borderWidth: 1,
              data: [
                <?php foreach($balikpapanbbdata as $bbdata) : ?>
                  <?= $bbdata['pm25'] ?>,
                  <?= $bbdata['so2'] ?>,
                  <?= $bbdata['no2'] ?>
                <?php endforeach ?>
              ]
          }]
   
      };
   
      var UserVsMyAppsCtx = document.getElementById('balikpapanbbdata').getContext('2d');
      var UserVsMyApps = new Chart(UserVsMyAppsCtx, {
          type: 'bar',
          data: UserVsMyAppsData,
          options: {
              responsive: true,
              legend: {
                  position: 'top',
                  display: true,
   
              },
              "hover": {
                "animationDuration": 0
              },
               "animation": {
                  "duration": 1,
                "onComplete": function() {
                  var chartInstance = this.chart,
                    ctx = chartInstance.ctx;
   
                  ctx.font = Chart.helpers.fontString(Chart.defaults.global.defaultFontSize, Chart.defaults.global.defaultFontStyle, Chart.defaults.global.defaultFontFamily);
                  ctx.textAlign = 'center';
                  ctx.textBaseline = 'bottom';
   
                  this.data.datasets.forEach(function(dataset, i) {
                    var meta = chartInstance.controller.getDatasetMeta(i);
                    meta.data.forEach(function(bar, index) {
                      var data = dataset.data[index];
                      ctx.fillText(data, bar._model.x, bar._model.y - 5);
                    });
                  });
                }
              },
              title: {
                  display: false,
                  text: ''
              },
              scales: {
                yAxes: [{
                  ticks: {
                    beginAtZero: true,
                    suggestedMin: 0,
                    stepSize: 50,
                    suggestedMax: 350,
                  }
                }],
                xAxes: [{
                  ticks: {
                    fontSize: 30
                  }
                }]
              }
          }
      });
    });
  </script>
  <script>
    $(function() {
      var color = Chart.helpers.color;
      var UserVsMyAppsData = {
          labels: ["PM2,5", "SO2", "NO2"],
          datasets: [{
              label: '# ISPU',
              backgroundColor: color(window.chartColors.blue).alpha(0.5).rgbString(),
              borderColor: window.chartColors.blue,
              borderWidth: 1,
              data: [
                <?php foreach($balikpapanpbispu as $pbispu) : ?>
                  <?= $pbispu['pm25'] ?>,
                  <?= $pbispu['so2'] ?>,
                  <?= $pbispu['no2'] ?>
                <?php endforeach ?>
              ]
          }]
   
      };
   
      var UserVsMyAppsCtx = document.getElementById('balikpapanpbispu').getContext('2d');
      var UserVsMyApps = new Chart(UserVsMyAppsCtx, {
          type: 'bar',
          data: UserVsMyAppsData,
          options: {
              responsive: true,
              legend: {
                  position: 'top',
                  display: true,
   
              },
              "hover": {
                "animationDuration": 0
              },
               "animation": {
                  "duration": 1,
                "onComplete": function() {
                  var chartInstance = this.chart,
                    ctx = chartInstance.ctx;
   
                  ctx.font = Chart.helpers.fontString(Chart.defaults.global.defaultFontSize, Chart.defaults.global.defaultFontStyle, Chart.defaults.global.defaultFontFamily);
                  ctx.textAlign = 'center';
                  ctx.textBaseline = 'bottom';
   
                  this.data.datasets.forEach(function(dataset, i) {
                    var meta = chartInstance.controller.getDatasetMeta(i);
                    meta.data.forEach(function(bar, index) {
                      var data = dataset.data[index];
                      ctx.fillText(data, bar._model.x, bar._model.y - 5);
                    });
                  });
                }
              },
              title: {
                  display: false,
                  text: ''
              },
              scales: {
                yAxes: [{
                  ticks: {
                    beginAtZero: true,
                    suggestedMin: 0,
                    stepSize: 50,
                    suggestedMax: 350,
                  }
                }],
                xAxes: [{
                  ticks: {
                    fontSize: 30
                  }
                }]
              }
          }
      });
    });
  </script>
  <script>
    $(function() {
      var color = Chart.helpers.color;
      var UserVsMyAppsData = {
          labels: ["PM2,5", "SO2", "NO2"],
          datasets: [{
              label: '# DATA',
              backgroundColor: color(window.chartColors.blue).alpha(0.5).rgbString(),
              borderColor: window.chartColors.blue,
              borderWidth: 1,
              data: [
                <?php foreach($balikpapanpbdata as $bbdata) : ?>
                  <?= $bbdata['pm25'] ?>,
                  <?= $bbdata['so2'] ?>,
                  <?= $bbdata['no2'] ?>
                <?php endforeach ?>
              ]
          }]
   
      };
   
      var UserVsMyAppsCtx = document.getElementById('balikpapanpbdata').getContext('2d');
      var UserVsMyApps = new Chart(UserVsMyAppsCtx, {
          type: 'bar',
          data: UserVsMyAppsData,
          options: {
              responsive: true,
              legend: {
                  position: 'top',
                  display: true,
   
              },
              "hover": {
                "animationDuration": 0
              },
               "animation": {
                  "duration": 1,
                "onComplete": function() {
                  var chartInstance = this.chart,
                    ctx = chartInstance.ctx;
   
                  ctx.font = Chart.helpers.fontString(Chart.defaults.global.defaultFontSize, Chart.defaults.global.defaultFontStyle, Chart.defaults.global.defaultFontFamily);
                  ctx.textAlign = 'center';
                  ctx.textBaseline = 'bottom';
   
                  this.data.datasets.forEach(function(dataset, i) {
                    var meta = chartInstance.controller.getDatasetMeta(i);
                    meta.data.forEach(function(bar, index) {
                      var data = dataset.data[index];
                      ctx.fillText(data, bar._model.x, bar._model.y - 5);
                    });
                  });
                }
              },
              title: {
                  display: false,
                  text: ''
              },
              scales: {
                yAxes: [{
                  ticks: {
                    beginAtZero: true,
                    suggestedMin: 0,
                    stepSize: 50,
                    suggestedMax: 350,
                  }
                }],
                xAxes: [{
                  ticks: {
                    fontSize: 30
                  }
                }]
              }
          }
      });
    });
  </script>
</body>
</html>
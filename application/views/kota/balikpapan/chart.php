<div class="row d-flex align-items-stretch">

  <div class="col-sm-12">
    <div class="table-responsive">
        <table border="1" width="100%" class="text-center">
            <thead>
                <tr>
                    <th>DATA</th>
                    <th>RANGE NILAI</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Berbahaya &#128567;</td>
                    <td class="text-white bg-dark" style="color: #FFFFFF;"> >300 </td>
                </tr>                        
                <tr>
                    <td>Sangat Tidak Sehat &#129319;</td>
                    <td class="text-white bg-danger">201 - 300</td>
                </tr>    
                <tr>
                    <td>Tidak Sehat &#128552;</td>
                    <td class="text-white bg-warning">101 - 200</td>
                </tr> 
                <tr>
                    <td>Sedang &#128578;</td>
                    <td class="text-white bg-primary">51 - 100</td>
                </tr>   
                <tr>
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
            <p style="font-size: 20px;"><b>ISPU <?php foreach($balikpapanbbispu as $bbispu) : ?><?= '('.$bbispu['waktu'].')' ?><?php endforeach ?></b></p>
            <canvas id="balikpapanbbispu" width="100" height="100"></canvas>                            
            </div>
            <div class="col-sm-6">
            <p style="font-size: 20px;"><b>DATA<?php foreach($balikpapanbbdata as $bbdata) : ?><?= '('.$bbdata['waktu'].')' ?><?php endforeach ?></b></p>
            <canvas id="balikpapanbbdata" width="100" height="100"></canvas>
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
            <p style="font-size: 20px;"><b>ISPU <?php foreach($balikpapanpbispu as $pbispu) : ?><?= '('.$pbispu['waktu'].')' ?><?php endforeach ?></b></p>
            <canvas id="balikpapanpbispu" width="100" height="100"></canvas>
            </div>
            <div class="col-sm-6">
            <p style="font-size: 20px;"><b>DATA <?php foreach($balikpapanpbdata as $pbdata) : ?><?= '('.$pbdata['waktu'].')' ?><?php endforeach ?></b></p>
            <canvas id="balikpapanpbdata" width="100" height="100"></canvas>
            </div>
        </div>
        </div>
    </div>
  </div>

</div>

<script>
    $(function() {
      const data = [
        <?php foreach($balikpapanbbispu as $bbispu) : ?>
          <?= $bbispu['so2'] ?>,
          <?= $bbispu['no2'] ?>
        <?php endforeach ?>
      ];
      const colours = data.map((value) => value > 0 && value <= 50 ? '#28a745' : value > 50 && value <= 100 ? '#007bff' : value > 100 && value <= 200 ? '#ffc107' : value > 200 && value <= 300 ? '#dc3545' : value > 300 ? '#343a40' : 'purple');

      var color = Chart.helpers.color;
      var UserVsMyAppsData = {
          labels: ["SO2", "NO2"],
          datasets: [{
              label: '# ISPU',
              // backgroundColor: color(window.chartColors.blue).alpha(0.5).rgbString(),
              // borderColor: window.chartColors.blue,
              backgroundColor: colours,
              borderColor: colours,
              borderWidth: 1,
              data: data
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
                    fontSize: 22
                  }
                }]
              }
          }
      });
    });
  </script>
  <script>
    $(function() {
       const data = [
        <?php foreach($balikpapanbbdata as $bbdata) : ?>
          <?= $bbdata['pm25'] ?>,
          <?= $bbdata['so2'] ?>,
          <?= $bbdata['no2'] ?>
        <?php endforeach ?>
      ];
      const colours = data.map((value) => value > 0 && value <= 50 ? '#28a745' : value > 50 && value <= 100 ? '#007bff' : value > 100 && value <= 200 ? '#ffc107' : value > 200 && value <= 300 ? '#dc3545' : value > 300 ? '#343a40' : 'purple');

      var color = Chart.helpers.color;
      var UserVsMyAppsData = {
          labels: ["PM2,5", "SO2", "NO2"],
          datasets: [{
              label: '# DATA',
              backgroundColor: colours,
              borderColor: colours,
              borderWidth: 1,
              data: data
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
                    fontSize: 22
                  }
                }]
              }
          }
      });
    });
  </script>
  <script>
    $(function() {
      const data = [
        <?php foreach($balikpapanpbispu as $pbispu) : ?>
          <?= $pbispu['so2'] ?>,
          <?= $pbispu['no2'] ?>
        <?php endforeach ?>
      ];
      const colours = data.map((value) => value > 0 && value <= 50 ? '#28a745' : value > 50 && value <= 100 ? '#007bff' : value > 100 && value <= 200 ? '#ffc107' : value > 200 && value <= 300 ? '#dc3545' : value > 300 ? '#343a40' : 'purple');

      var color = Chart.helpers.color;
      var UserVsMyAppsData = {
          labels: ["SO2", "NO2"],
          datasets: [{
              label: '# ISPU',
              backgroundColor: colours,
              borderColor: colours,
              borderWidth: 1,
              data: data
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
                    fontSize: 22
                  }
                }]
              }
          }
      });
    });
  </script>
  <script>
    $(function() {
      const data = [
        <?php foreach($balikpapanpbdata as $bbdata) : ?>
          <?= $bbdata['pm25'] ?>,
          <?= $bbdata['so2'] ?>,
          <?= $bbdata['no2'] ?>
        <?php endforeach ?>
      ];
      const colours = data.map((value) => value > 0 && value <= 50 ? '#28a745' : value > 50 && value <= 100 ? '#007bff' : value > 100 && value <= 200 ? '#ffc107' : value > 200 && value <= 300 ? '#dc3545' : value > 300 ? '#343a40' : 'purple');

      var color = Chart.helpers.color;
      var UserVsMyAppsData = {
          labels: ["PM2,5", "SO2", "NO2"],
          datasets: [{
              label: '# DATA',
              backgroundColor: colours,
              borderColor: colours,
              borderWidth: 1,
              data: data
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
                    fontSize: 22
                  }
                }]
              }
          }
      });
    });
  </script>
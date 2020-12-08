<div class="row d-flex align-items-stretch">

  <div class="col-sm-12">
    <div class="table-responsive">
        <table border="1" width="100%" class="text-center" style="">
            <thead>
                <tr>
                    <th class="">ISPU</th>
                    <th class="">RANGE NILAI</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="">Berbahaya &#128567;</td>
                    <td class=" bg-dark" style="color: #FFFFFF;"> >300 </td>
                </tr>                        
                <tr>
                    <td class="">Sangat Tidak Sehat &#129319;</td>
                    <td class=" bg-danger">201 - 300</td>
                </tr>    
                <tr>
                    <td class="">Tidak Sehat &#128552;</td>
                    <td class=" bg-warning">101 - 200</td>
                </tr> 
                <tr>
                    <td class="">Sedang &#128578;</td>
                    <td class=" bg-primary">51 - 100</td>
                </tr>   
                <tr>
                    <td class="">Baik &#128515;</td>
                    <td class=" bg-success">0 - 50</td>
                </tr>
            </tbody>
        </table>
    </div>
  </div>

  <div class="col-sm-6 p-3">
    <div class="row">
        <div class="col-sm-12 text-center">
          <h2 class="">STASIUN PELINDO II 01</h2>
          <div class="row bg-white">
              <div class="col-sm-6">
                <p style="font-size: 20px;"><b>ISPU <?php foreach($pelindoispu01 as $ispu01) : ?><?= '('.$ispu01['waktu'].')' ?><?php endforeach ?></b></p>
                <canvas id="pelindoispu01" width="100" height="100"></canvas>                            
              </div>
              <div class="col-sm-6">
                <p style="font-size: 20px;"><b>DATA<?php foreach($pelindodata01 as $data01) : ?><?= '('.$data01['waktu'].')' ?><?php endforeach ?></b></p>
                <canvas id="pelindodata01" width="100" height="100"></canvas>
              </div>
          </div>
          
          <?php foreach($pelindodata01 as $data01) : ?>
            <div class="row">
              <div class="col-sm">
                <div class="card bg-info">
                  <p>Tekanan</p>
                  <h1><?= $data01['pressure'] == null || $data01['pressure'] == '' ? '&nbsp' : $data01['pressure'] ?></h1>
                </div>
              </div>
              <div class="col-sm">
                <div class="card bg-info">
                  <p>Temperatur</p>
                  <h1><?= $data01['temperature'] == null || $data01['temperature'] == '' ? '&nbsp' : $data01['temperature'] ?>&deg;</h1>
                </div>
              </div>
              <div class="col-sm">
                <div class="card bg-info">
                  <p>Kec. Angin</p>
                  <h1><?= $data01['ws'] == null || $data01['ws'] == '' ? '&nbsp' : $data01['ws'] ?></h1>
                </div>
              </div>
              <div class="col-sm">
                <div class="card bg-info">
                  <p>Arah Angin</p>
                  <h1><?= $data01['wd'] == null || $data01['wd'] == '' ? '&nbsp' : $data01['wd'] ?></h1>
                </div>
              </div>
              <div class="col-sm">
                <div class="card bg-info">
                  <p>Kelembaban</p>
                  <h1><?= $data01['humidity'] == null || $data01['humidity'] == '' ? '&nbsp' : $data01['humidity'] ?></h1>
                </div>
              </div>
              <div class="col-sm">
                <div class="card bg-info">
                  <p>Curah Hujan</p>
                  <h1><?= $data01['rain_intensity'] == null || $data01['rain_intensity'] == '' ? '&nbsp' : $data01['rain_intensity'] ?></h1>
                </div>
              </div>
            </div>
          <?php endforeach ?>
        </div>
    </div>
  </div>

  <div class="col-sm-6 p-3">
    <div class="row">
        <div class="col-sm-12 text-center">
          <h2 class="">STASIUN PELINDO II 02</h2>
          <div class="row bg-white">
            <div class="col-sm-6">
              <p style="font-size: 20px;"><b>ISPU <?php foreach($pelindoispu02 as $ispu02) : ?><?= '('.$ispu02['waktu'].')' ?><?php endforeach ?></b></p>
              <canvas id="pelindoispu02" width="100" height="100"></canvas>
            </div>
            <div class="col-sm-6">
              <p style="font-size: 20px;"><b>DATA <?php foreach($pelindodata02 as $data02) : ?><?= '('.$data02['waktu'].')' ?><?php endforeach ?></b></p>
              <canvas id="pelindodata02" width="100" height="100"></canvas>
            </div>
          </div>          
          
          <?php foreach($pelindodata02 as $data02) : ?>
            <div class="row">
              <div class="col-sm">
                <div class="card bg-info">
                  <p>Tekanan</p>
                  <h1><?= $data02['pressure'] == null || $data02['pressure'] == '' ? '&nbsp' : $data02['pressure'] ?></h1>
                </div>
              </div>
              <div class="col-sm">
                <div class="card bg-info">
                  <p>Temperatur</p>
                  <h1><?= $data02['temperature'] == null || $data02['temperature'] == '' ? '&nbsp' : $data02['temperature'] ?>&deg;</h1>
                </div>
              </div>
              <div class="col-sm">
                <div class="card bg-info">
                  <p>Kec. Angin</p>
                  <h1><?= $data02['ws'] == null || $data02['ws'] == '' ? '&nbsp' : $data02['ws'] ?></h1>
                </div>
              </div>
              <div class="col-sm">
                <div class="card bg-info">
                  <p>Arah Angin</p>
                  <h1><?= $data02['wd'] == null || $data02['wd'] == '' ? '&nbsp' : $data02['wd'] ?></h1>
                </div>
              </div>
              <div class="col-sm">
                <div class="card bg-info">
                  <p>Kelembaban</p>
                  <h1><?= $data02['humidity'] == null || $data02['humidity'] == '' ? '&nbsp' : $data02['humidity'] ?></h1>
                </div>
              </div>
              <div class="col-sm">
                <div class="card bg-info">
                  <p>Curah Hujan</p>
                  <h1><?= $data02['rain_intensity'] == null || $data02['rain_intensity'] == '' ? '&nbsp' : $data02['rain_intensity'] ?></h1>
                </div>
              </div>
            </div>
          <?php endforeach ?>
        </div>
    </div>
  </div>

</div>

<script>
    $(function() {
      const data = [
        <?php foreach($pelindoispu01 as $ispu01) : ?>
          <?= $ispu01['pm10'] >= '350' ? '350' : $ispu01['pm10'] ?>,
          <?= $ispu01['so2'] >= '350' ? '350' : $ispu01['so2'] ?>,
          <?= $ispu01['co'] >= '350' ? '350' : $ispu01['co'] ?>,
          <?= $ispu01['o3'] >= '350' ? '350' : $ispu01['o3'] ?>,
          <?= $ispu01['no2'] >= '350' ? '350' : $ispu01['no2'] ?>,
        <?php endforeach ?>
      ];
      const colours = data.map((value) => value > 0 && value <= 50 ? '#28a745' : value > 50 && value <= 100 ? '#007bff' : value > 100 && value <= 200 ? '#ffc107' : value > 200 && value <= 300 ? '#dc3545' : value > 300 ? '#343a40' : 'purple');

      var color = Chart.helpers.color;
      var UserVsMyAppsData = {
          labels: ["PM10", "SO2", "CO", "O3", "NO2"],
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
   
      var UserVsMyAppsCtx = document.getElementById('pelindoispu01').getContext('2d');
      var UserVsMyApps = new Chart(UserVsMyAppsCtx, {
          type: 'bar',
          data: UserVsMyAppsData,
          options: {
              responsive: true,
              legend: {
                  position: 'top',
                  display: false,
   
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
        <?php foreach($pelindodata01 as $data01) : ?>
          <?= $data01['pm10'] >= '350' ? '350' : $data01['pm10'] ?>,
          <?= $data01['pm25'] >= '350' ? '350' : $data01['pm25'] ?>,
          <?= $data01['tsp'] >= '350' ? '350' : $data01['tsp'] ?>,
          <?= $data01['so2'] >= '350' ? '350' : $data01['so2'] ?>,
          <?= $data01['co'] >= '350' ? '350' : $data01['co'] ?>,
          <?= $data01['o3'] >= '350' ? '350' : $data01['o3'] ?>,
          <?= $data01['no2'] >= '350' ? '350' : $data01['no2'] ?>,
        <?php endforeach ?>
      ];
      const colours = data.map((value) => value > 0 && value <= 50 ? '#28a745' : value > 50 && value <= 100 ? '#28a745' : value > 100 && value <= 200 ? '#28a745' : value > 200 && value <= 300 ? '#28a745' : value > 300 ? '#28a745' : '#28a745');

      var color = Chart.helpers.color;
      var UserVsMyAppsData = {
          labels: ["PM10", "PM2,5", "TSP", "SO2", "CO", "O3", "NO2"],
          datasets: [{
              label: '# DATA',
              backgroundColor: colours,
              borderColor: colours,
              borderWidth: 1,
              data: data
          }]
   
      };
   
      var UserVsMyAppsCtx = document.getElementById('pelindodata01').getContext('2d');
      var UserVsMyApps = new Chart(UserVsMyAppsCtx, {
          type: 'bar',
          data: UserVsMyAppsData,
          options: {
              responsive: true,
              legend: {
                  position: 'top',
                  display: false,
   
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
        <?php foreach($pelindoispu02 as $ispu02) : ?>
          <?= $ispu02['pm10'] >= '350' ? '350' : $ispu02['pm10'] ?>,
          <?= $ispu02['so2'] >= '350' ? '350' : $ispu02['so2'] ?>,
          <?= $ispu02['co'] >= '350' ? '350' : $ispu02['co'] ?>,
          <?= $ispu02['o3'] >= '350' ? '350' : $ispu02['o3'] ?>,
          <?= $ispu02['no2'] >= '350' ? '350' : $ispu02['no2'] ?>,
        <?php endforeach ?>
      ];
      const colours = data.map((value) => value > 0 && value <= 50 ? '#28a745' : value > 50 && value <= 100 ? '#007bff' : value > 100 && value <= 200 ? '#ffc107' : value > 200 && value <= 300 ? '#dc3545' : value > 300 ? '#343a40' : 'purple');

      var color = Chart.helpers.color;
      var UserVsMyAppsData = {
        labels: ["PM10", "SO2", "CO", "O3", "NO2"],
          datasets: [{
              label: '# ISPU',
              backgroundColor: colours,
              borderColor: colours,
              borderWidth: 1,
              data: data
          }]
   
      };
   
      var UserVsMyAppsCtx = document.getElementById('pelindoispu02').getContext('2d');
      var UserVsMyApps = new Chart(UserVsMyAppsCtx, {
          type: 'bar',
          data: UserVsMyAppsData,
          options: {
              responsive: true,
              legend: {
                  position: 'top',
                  display: false,
   
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
        <?php foreach($pelindodata02 as $data02) : ?>
          <?= $data02['pm10'] >= '350' ? '350' : $data02['pm10'] ?>,
          <?= $data02['pm25'] >= '350' ? '350' : $data02['pm25'] ?>,
          <?= $data02['tsp'] >= '350' ? '350' : $data02['tsp'] ?>,
          <?= $data02['so2'] >= '350' ? '350' : $data02['so2'] ?>,
          <?= $data02['co'] >= '350' ? '350' : $data02['co'] ?>,
          <?= $data02['o3'] >= '350' ? '350' : $data02['o3'] ?>,
          <?= $data02['no2'] >= '350' ? '350' : $data02['no2'] ?>,
        <?php endforeach ?>
      ];
      const colours = data.map((value) => value > 0 && value <= 50 ? '#28a745' : value > 50 && value <= 100 ? '#28a745' : value > 100 && value <= 200 ? '#28a745' : value > 200 && value <= 300 ? '#28a745' : value > 300 ? '#28a745' : '#28a745');

      var color = Chart.helpers.color;
      var UserVsMyAppsData = {
        labels: ["PM10", "PM2,5", "TSP", "SO2", "CO", "O3", "NO2"],
          datasets: [{
              label: '# DATA',
              backgroundColor: colours,
              borderColor: colours,
              borderWidth: 1,
              data: data
          }]
   
      };
   
      var UserVsMyAppsCtx = document.getElementById('pelindodata02').getContext('2d');
      var UserVsMyApps = new Chart(UserVsMyAppsCtx, {
          type: 'bar',
          data: UserVsMyAppsData,
          options: {
              responsive: true,
              legend: {
                  position: 'top',
                  display: false,
   
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
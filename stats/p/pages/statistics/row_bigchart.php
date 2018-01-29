<div class="card">
  <div class="card-body">
    <div class="row">
      <div class="col-sm-5">
        <h4 class="card-title mb-0">Traffic</h4>
        <div class="small text-muted">November 2015</div>
      </div>
      <!--/.col-->
      <div class="col-sm-7 d-none d-md-block">
        <button type="button" class="btn btn-primary float-right"><i class="icon-cloud-download"></i></button>
        <div class="btn-toolbar float-right" role="toolbar" aria-label="Toolbar with button groups">
          <div class="btn-group mr-3" data-toggle="buttons" aria-label="First group">
            <!-- <label class="btn btn-outline-secondary">
              <input type="radio" name="options" id="option1"> Day
            </label>
            <label class="btn btn-outline-secondary active">
              <input type="radio" name="options" id="option2" checked=""> Month
            </label>
            <label class="btn btn-outline-secondary">
              <input type="radio" name="options" id="option3"> Year
            </label> -->
          </div>
        </div>
      </div>
      <!--/.col-->
    </div>
    <!--/.row-->
    <div class="chart-wrapper" style="height:300px;margin-top:40px;">
      <canvas id="main-chart" class="chart" height="300"></canvas>
      <script type="text/javascript">
      var lineChartData = {
          // labels : generateArray(" ", 7),
          datasets : [
              {
                  label: 'Total visitors',
                  backgroundColor : 'rgba(220,220,220,0.6)',
                  borderColor : 'rgba(220,220,220,1)',
                  pointBackgroundColor : 'rgba(220,220,220,1)',
                  pointBorderColor : '#fff',
                  data : [<?php echo $joined_total ?>]
              },
              {
                  label: 'Unique visitors',
                  backgroundColor : 'rgba(151,187,205,0.4)',
                  borderColor : 'rgba(151,187,205,1)',
                  pointBackgroundColor : 'rgba(151,187,205,1)',
                  pointBorderColor : '#fff',
                  data : [<?php echo $joined_unique ?>]
              }
          ]
      }


      lineChartData.labels = generateArray("", lineChartData.datasets[0].data.length);
          window.onload = function() {
              setupChart1();
              // setupChart2();
          }
      console.log(lineChartData);

          function setupChart1() {
              var ctx = document.getElementById('main-chart');
              console.log(ctx);
              var chart = new Chart(ctx, {
                  type: 'bar',
                  data: lineChartData,
                  options: {
                      responsive: true,
                      scales: {
                          yAxes: [{
                              ticks: {
                                  beginAtZero: true
                              }
                          }]
                      }
                  }
              });
          }

      </script>
    </div>
    </div>
    <div class="card-footer">
    <ul>
      <li>
        <div class="text-muted">Visits</div>
        <strong>29.703 Users (40%)</strong>
        <div class="progress progress-xs mt-2">
          <div class="progress-bar bg-success" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
      </li>
      <li class="d-none d-md-table-cell">
        <div class="text-muted">Unique</div>
        <strong>24.093 Users (20%)</strong>
        <div class="progress progress-xs mt-2">
          <div class="progress-bar bg-info" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
      </li>
      <li>
        <div class="text-muted">Pageviews</div>
        <strong>78.706 Views (60%)</strong>
        <div class="progress progress-xs mt-2">
          <div class="progress-bar bg-warning" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
      </li>
      <li class="d-none d-md-table-cell">
        <div class="text-muted">New Users</div>
        <strong>22.123 Users (80%)</strong>
        <div class="progress progress-xs mt-2">
          <div class="progress-bar bg-danger" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
      </li>
      <li class="d-none d-md-table-cell">
        <div class="text-muted">Bounce Rate</div>
        <strong>40.15%</strong>
        <div class="progress progress-xs mt-2">
          <div class="progress-bar" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
      </li>
    </ul>
    </div>
    </div>
    <!--/.card-->
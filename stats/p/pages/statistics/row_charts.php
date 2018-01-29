<div class="row">
  <div class="col-sm-6 col-lg-3">
    <div class="card text-white bg-primary">
      <div class="card-body pb-0">
        <div class="btn-group float-right">
          <button type="button" class="btn btn-transparent dropdown-toggle p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="icon-settings"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </div>
        <h4 class="mb-0">9.823</h4>
        <p>Members online</p>
      </div>
      <div class="chart-wrapper px-3" style="height:70px;">
        <canvas id="card-chart1" class="chart" height="70"></canvas>
      </div>
    </div>
  </div>
  <!--/.col-->

  <div class="col-sm-6 col-lg-3">
    <div class="card text-white bg-info">
      <div class="card-body pb-0">
        <button type="button" class="btn btn-transparent p-0 float-right">
          <i class="icon-location-pin"></i>
        </button>
        <h4 class="mb-0">9.823</h4>
        <p>Members online</p>
      </div>
      <div class="chart-wrapper px-3" style="height:70px;">
        <canvas id="card-chart2" class="chart" height="70"></canvas>
      </div>
    </div>
  </div>
  <!--/.col-->

  <div class="col-sm-6 col-lg-3">
    <div class="card text-white bg-warning">
      <div class="card-body pb-0">
        <div class="btn-group float-right">
          <button type="button" class="btn btn-transparent dropdown-toggle p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="icon-settings"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </div>
        <h4 class="mb-0">9.823</h4>
        <p>Members online</p>
      </div>
      <div class="chart-wrapper" style="height:70px;">
        <canvas id="card-chart3" class="chart" height="70"></canvas>
      </div>
    </div>
  </div>
  <!--/.col-->

  <div class="col-sm-6 col-lg-3">
    <div class="card text-white bg-danger">
      <div class="card-body pb-0">
        <div class="btn-group float-right">
          <button type="button" class="btn btn-transparent dropdown-toggle p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="icon-settings"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </div>
        <h4 class="mb-0">9.823</h4>
        <p>Members online</p>
      </div>
      <div class="chart-wrapper px-3" style="height:70px;">
        <canvas id="card-chart4" class="chart" height="70"></canvas>
        <!-- CHART TOTAL VISITORS -->
        <script type="text/javascript">
            var options = {
              maintainAspectRatio: false,
              legend: {
                display: false
              },
              scales: {
                xAxes: [{
                  display: false,
                  barPercentage: 0.6,
                }],
                yAxes: [{
                  display: false,
                }]
              },

            };
            var data = {
              datasets: [
                {
                  backgroundColor: 'rgba(255,255,255,.3)',
                  borderColor: 'transparent',
                  data: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]
                },
            ]
              // labels: generateArray("", this.datasets.data.length)
            };

            data.labels = generateArray("", data.datasets[0].data.length);

            function setupChart2() {
                var ctx = document.querySelector('#card-chart4');
                // var ctx = $('#card-chart4');
                var cardChart4 = new Chart(ctx, {
                    type: 'bar',
                    data: data,
                    options: options
                });
            }
        </script>

      </div>
    </div>
  </div>
  <!--/.col-->
</div>
<!--/.row-->
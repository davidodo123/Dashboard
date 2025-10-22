

<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard David Santiago</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="{{ url('assets/css/styles.css') }}" rel="stylesheet">
  </head>
  <body>

    <header class="navbar sticky-top bg-dark flex-md-nowrap p-0 shadow" data-bs-theme="dark">
      <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6 text-white" href="{{ route('main.index') }}">
        HOME - Dashboard David Santiago Bermúdez
      </a>

      <ul class="navbar-nav flex-row ms-auto me-3">
        @isset($navItems)
          @foreach($navItems as $item)
            <li class="nav-item px-2">
              <a class="nav-link text-white" href="{{ $item['url'] }}" target="_blank" rel="noopener">
                {{ $item['name'] }}
              </a>
            </li>
          @endforeach
        @endisset
      </ul>
    </header>

    <div class="container-fluid">
      <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-body-tertiary sidebar collapse">
          <div class="position-sticky pt-3 sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item"><a class="nav-link active" href="#">Dashboard</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Orders</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Products</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Customers</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Reports</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Integrations</a></li>
            </ul>

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-body-secondary text-uppercase">
              <span>Saved reports</span>
            </h6>
            <ul class="nav flex-column mb-2">
              <li class="nav-item"><a class="nav-link" href="#">Current month</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Last quarter</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Social engagement</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Year-end sale</a></li>
            </ul>
          </div>
        </nav>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Dashboard</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group me-2">
                <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
              </div>
              <button type="button" class="btn btn-sm btn-outline-secondary">This week</button>
            </div>
          </div>

          <canvas id="myChart" class="my-4 w-100" width="900" height="380"></canvas>

          <h2>Section title</h2>
          <div class="table-responsive small">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Header</th>
                  <th>Header</th>
                  <th>Header</th>
                  <th>Header</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1,001</td>
                  <td>random</td>
                  <td>data</td>
                  <td>placeholder</td>
                  <td>text</td>
                </tr>
                <tr>
                  <td>1,34134</td>
                  <td>random</td>
                  <td>data</td>
                  <td>placeholder</td>
                  <td>text</td>
                </tr>
                <tr>
                  <td>1,001235413451</td>
                  <td>random</td>
                  <td>data</td>
                  <td>placeholder</td>
                  <td>text</td>
                </tr>
                <tr>
                  <td>1,3454135001</td>
                  <td>random</td>
                  <td>data</td>
                  <td>placeholder</td>
                  <td>text</td>
                </tr>
                <tr>
                  <td>1,514351001</td>
                  <td>random</td>
                  <td>data</td>
                  <td>placeholder</td>
                  <td>text</td>
                </tr>
                <tr>
                  <td>1,1451345001</td>
                  <td>random</td>
                  <td>data</td>
                  <td>placeholder</td>
                  <td>text</td>
                </tr>
                <tr>
                  <td>1,15415001</td>
                  <td>random</td>
                  <td>data</td>
                  <td>placeholder</td>
                  <td>text</td>
                </tr>
                <tr>
                  <td>1,05134501</td>
                  <td>random</td>
                  <td>data</td>
                  <td>placeholder</td>
                  <td>text</td>
                </tr>
                <tr>
                  <td>1,0145141501</td>
                  <td>random</td>
                  <td>data</td>
                  <td>placeholder</td>
                  <td>text</td>
                </tr>
                <tr>
                  <td>1,001454611</td>
                  <td>random</td>
                  <td>data</td>
                  <td>placeholder</td>
                  <td>text</td>
                </tr>
                <tr>
                  <td>1,0375467301</td>
                  <td>random</td>
                  <td>data</td>
                  <td>placeholder</td>
                  <td>text</td>
                </tr>
                <tr>
                  <td>1,36737001</td>
                  <td>random</td>
                  <td>data</td>
                  <td>placeholder</td>
                  <td>text</td>
                </tr>

              </tbody>
            </table>
          </div>
        </main>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
    <script>
      var ctx = document.getElementById("myChart");
      var myChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
          datasets: [{
            data: [8166, 1515, 2462, 4315, 6754, 415, 1234],
            lineTension: 0.6,
            backgroundColor: 'transparent',
            borderColor: 'purple',
            borderWidth:  4,
            pointBackgroundColor: 'purple'
          }]
        },
        options: {
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: false
              }
            }]
          },
          legend: {
            display: false,
          }
        }
      });
    </script>
    <script src="dashboard.js"></script>
  </body>
</html>

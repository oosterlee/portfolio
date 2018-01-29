<!--
 * CoreUI - Open Source Bootstrap Admin Template
 * @version v1.0.6
 * @link http://coreui.io
 * Copyright (c) 2017 creativeLabs Łukasz Holeczek
 * @license MIT
 -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
  <meta name="author" content="Łukasz Holeczek">
  <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,AngularJS,Angular,Angular2,Angular 2,Angular4,Angular 4,jQuery,CSS,HTML,RWD,Dashboard,React,React.js,Vue,Vue.js">
  <link rel="shortcut icon" href="img/favicon.png">
  <title>Admin - User Statistics</title>

  <!-- Icons -->
  <link href="./css/font-awesome.min.css" rel="stylesheet">
  <!-- <link href="node_modules/simple-line-icons/css/simple-line-icons.css" rel="stylesheet"> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css">

  <!-- Main styles for this application -->
  <link href="css/style.css" rel="stylesheet">
  <!-- Styles required by this views -->


  <?php include_once "main.php" ?>

</head>

<body class="app header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden">
    <script type="text/javascript">
    function generateArray(t, n) {
        var r = [];
        for (var i = 0; i < n; i++) {
            r.push(t);
        }
        return r;
    }
    </script>


    <?php include "./pages/statistics/header.php" ?>

    <?php include "./pages/statistics/sidebar.php" ?>

    <!-- Main content -->
    <main class="main">

      <?php include "./pages/statistics/breadcrumbs.php" ?>

      <div class="container-fluid">

        <div class="animated fadeIn">

          <?php //include "./pages/statistics/row_charts.php" ?>
          <?php include "./pages/statistics/row_bigchart.php" ?>
          <?php //include "./pages/statistics/row_social.php" ?>
          <?php //include "./pages/statistics/row_trafficandsales.php" ?>

        </div>

      </div>
      <!-- /.conainer-fluid -->
    </main>

    <?php include "./pages/statistics/rightsidemenu.php" ?>

  <footer class="app-footer">
    <span><a href="http://coreui.io">CoreUI</a> © 2017 creativeLabs.</span>
    <span class="ml-auto">Powered by <a href="http://coreui.io">CoreUI</a></span>
  </footer>

  <!-- Bootstrap and necessary plugins -->
  <script src="./js/jquery.min.js"></script>
  <script src="./js/popper.min.js"></script>
  <script src="./js/bootstrap.min.js"></script>
  <script src="./js/pace.min.js"></script>

  <!-- Plugins and scripts required by all views -->
  <script src="./js/Chart.js"></script>

  <!-- CoreUI main scripts -->

  <script src="./js/app.js"></script>

  <!-- Plugins and scripts required by this views -->

  <!-- Custom scripts required by this view -->
  <script src="js/views/main.js"></script>

</body>
</html>

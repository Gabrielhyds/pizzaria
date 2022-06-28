
<?php
//session_start();
ob_start();
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" name="viewport">
  <title>Grant-Food admin</title>

  <link rel="stylesheet" href="view/templates/assets/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="view/templates/assets/modules/ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="view/templates/assets/modules/fontawesome/web-fonts-with-css/css/fontawesome-all.min.css">

  <link rel="stylesheet" href="view/templates/assets/modules/summernote/summernote-lite.css">
  <link rel="stylesheet" href="view/templates/assets/modules/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="view/templates/assets/css/style.css">
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="ion ion-navicon-round"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="ion ion-search"></i></a></li>
          </ul>
          
        </form>
        <ul class="navbar-nav navbar-right">
          
          
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg">
            <i class="ion ion-android-person d-lg-none"></i>
            <div class="d-sm-none d-lg-inline-block">Olá, <?php echo $_SESSION['login'];?></div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <a href="profile.html" class="dropdown-item has-icon">
                <i class="ion ion-android-person"></i> Profile
              </a>
              <a href="./Sair.php" class="dropdown-item has-icon">
                <i class="ion ion-log-out"></i> Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">Stisla Lite</a>
          </div>
          <div class="sidebar-user">
            <div class="sidebar-user-picture">
              <img alt="image" src="view/templates/assets/img/avatar/avatar-1.jpeg">
            </div>
            <div class="sidebar-user-details">
              <div class="user-name"><?php echo $_SESSION['login'];?></div>
              <div class="user-role">
                Administrador
              </div>
            </div>
          </div>
          <ul class="sidebar-menu">

            <li>
              <a href="#" class="has-dropdown"><i class="ion ion-ios-albums-outline"></i><span>Usuário</span></a>
              <ul class="menu-dropdown">
                <li><a href="index.php?page=usuario"><i class="ion ion-ios-circle-outline"></i>Cadastrar Usuário</a></li>
                <li><a href="index.php?action=listar&page=usuario"><i class="ion ion-ios-circle-outline"></i>Listar Usuário</a></li>
              </ul>
            </li>
            <li>
              <a href="#" class="has-dropdown"><i class="ion ion-flag"></i><span>Produto</span></a>
              <ul class="menu-dropdown">
                <li><a href="index.php?page=produto"><i class="ion ion-ios-circle-outline"></i>Cadastrar Produto</a></li>
                <li><a href="index.php?action=listar&page=produto"><i class="ion ion-ios-circle-outline"></i>Listar Produto</a></li>
              </ul>
            </li>
        </aside>
      </div>
      
    </div>
  </div>
  <script src="view/templates/assets/modules/jquery.min.js"></script>
  <script src="view/templates/assets/modules/popper.js"></script>
  <script src="view/templates/assets/modules/tooltip.js"></script>
  <script src="view/templates/assets/modules/bootstrap/js/bootstrap.min.js"></script>
  <script src="view/templates/assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="view/templates/assets/modules/scroll-up-bar/dist/scroll-up-bar.min.js"></script>
  <script src="view/templates/assets/js/sa-functions.js"></script>
  
  <script src="view/templates/assets/modules/chart.min.js"></script>
  <script src="view/templates/assets/modules/summernote/summernote-lite.js"></script>

  <script>
  var ctx = document.getElementById("myChart").getContext('2d');
  var myChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
      datasets: [{
        label: 'Statistics',
        data: [460, 458, 330, 502, 430, 610, 488],
        borderWidth: 2,
        backgroundColor: 'rgb(87,75,144)',
        borderColor: 'rgb(87,75,144)',
        borderWidth: 2.5,
        pointBackgroundColor: '#ffffff',
        pointRadius: 4
      }]
    },
    options: {
      legend: {
        display: false
      },
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero: true,
            stepSize: 150
          }
        }],
        xAxes: [{
          gridLines: {
            display: false
          }
        }]
      },
    }
  });
  </script>
  <script src="view/templates/assets/js/scripts.js"></script>
</body>
</html>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Data Karyawan</title>
    <meta name="description" content="Data Karyawan">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/lib/datatable/dataTables.bootstrap.min.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="assets/scss/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>
        <!-- Left Panel -->

        <aside id="left-panel" class="left-panel">
          <nav class="navbar navbar-expand-sm navbar-default">
  
              <div class="navbar-header">
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                      <i class="fa fa-bars"></i>
                  </button>
                  <a class="navbar-brand" href="./"><img src="images/logo1.png" alt="Logo"></a>
                  <a class="navbar-brand hidden" href="./"><img src="images/logo1.png" alt="Logo"></a>
              </div>
  
              <div id="main-menu" class="main-menu collapse navbar-collapse">
                  <ul class="nav navbar-nav">
                      <li class="active">
                          <a href="main.blade.php"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                      </li>
                      <li>
                          <a href="data.blade.php"> <i class="menu-icon ti-email"></i>Data Karyawan </a>
                      </li>
                      <li class="menu-item-has-children dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Absensi</a>
                          <ul class="sub-menu children dropdown-menu">
                              <li><i class="fa fa-table"></i><a href="qrview.blade..php">QR Code</a></li>
                              <li><i class="fa fa-table"></i><a href="absen.blade.php">Data Absensi</a></li>
                          </ul>
                      </li>
                      <li>
                          <a href="generate.blade.php"> <i class="menu-icon ti-email"></i>Generate Laporan</a>
                      </li>
                  </ul>
              </div><!-- /.navbar-collapse -->
          </nav>
      </aside><!-- /#left-panel -->
  
      <!-- Left Panel -->
  
      <!-- Right Panel -->
  
      <div id="right-panel" class="right-panel">
  
          <!-- Header-->
          <header id="header" class="header">
  
              <div class="header-menu">
  
                  <div class="col-sm-7">
                      <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                      <div class="header-left">
                          <button class="search-trigger"><i class="fa fa-search"></i></button>
                          <div class="form-inline">
                          </div>
  
                          <div class="dropdown for-notification">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="fa fa-bell"></i>
                              <span class="count bg-danger">5</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="notification">
                            </div>
                          </div>
  
                          <div class="dropdown for-message">
                            <button class="btn btn-secondary dropdown-toggle" type="button"
                                  id="message"
                                  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="ti-email"></i>
                              <span class="count bg-primary">9</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="message">
                            </div>
                          </div>
                      </div>
                  </div>
  
                  <div class="col-sm-5">
                      <div class="user-area dropdown float-right">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar">
                          </a>
  
                          <div class="user-menu dropdown-menu">
                                  <a class="nav-link" href="#"><i class="fa fa- user"></i>My Profile</a>
  
                                  <a class="nav-link" href="#"><i class="fa fa -cog"></i>Settings</a>
  
                                  <a class="nav-link" href="#"><i class="fa fa-power -off"></i>Logout</a>
                          </div>
                      </div>
  
                      <div class="language-select dropdown" id="language-select">
                          <a class="dropdown-toggle" href="#" data-toggle="dropdown"  id="language" aria-haspopup="true" aria-expanded="true">
                              <i class="flag-icon flag-icon-us"></i>
                          </a>
                          <div class="dropdown-menu" aria-labelledby="language" >
                              <div class="dropdown-item">
                                  <span class="flag-icon flag-icon-fr"></span>
                              </div>
                              <div class="dropdown-item">
                                  <i class="flag-icon flag-icon-es"></i>
                              </div>
                              <div class="dropdown-item">
                                  <i class="flag-icon flag-icon-us"></i>
                              </div>
                              <div class="dropdown-item">
                                  <i class="flag-icon flag-icon-it"></i>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
  
          </header><!-- /header -->
          <!-- Header-->

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Data Karyawan Desa Jatiendah</strong>
                        </div>
                        <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">ID Pegawai</th>
                        <th scope="col">Jabatan</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Aksi</th>
                      </tr>
                    </thead>
                        <?php
                      require 'connection.php';
                      $rows = mysqli_query($conn, "SELECT * FROM tb_data ORDER BY id DESC");
                      $i = 1;

                      foreach($rows as $row) :
                      ?>
                     <tr>
                        <th scope="row"><?php echo $row['id']; ?></th>
                        <th><?php echo $row['nm_pegawai']; ?></th>
                        <td><?php echo $row['id_pegawai']; ?></td>
                        <td><?php echo $row['jabatan']; ?></td>
                        <td><?php echo $row['jekel']; ?></td>
                        <td><?php echo $row['alamat']; ?></td>
                        <td>
                     <a href="./add.php?id=<?php echo $row['id']; ?>" class="add"><i class="fa-solid fa-user-plus text-success" data-toggle="tooltip" title="Add"></i></a>
                     <a href="./edit.php?id=<?php echo $row['id']; ?>" class="edit"><i class="fa-solid fa-pen text-warning" data-toggle="tooltip" title="Edit"></i></a>
                     <a href="./assets/database/delete.php?id_peserta=<?php echo $row['id']; ?>" class="delete"><i class="fa-solid fa-trash" title="Delete"></i></a>
                        </td>
                     </tr>
                        <?php endforeach; ?>
                  </table>
                        </div>
                    </div>
                </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->


    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="assets/js/lib/data-table/datatables.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/jszip.min.js"></script>
    <script src="assets/js/lib/data-table/pdfmake.min.js"></script>
    <script src="assets/js/lib/data-table/vfs_fonts.js"></script>
    <script src="assets/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.print.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.colVis.min.js"></script>
    <script src="assets/js/lib/data-table/datatables-init.js"></script>


    <script type="text/javascript">
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
        } );
    </script>


</body>
</html>
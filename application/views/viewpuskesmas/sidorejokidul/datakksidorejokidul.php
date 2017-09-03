<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Data KK</title>

  <!-- Bootstrap -->
  <link href="<?php echo base_url('vendors/bootstrap/dist/css/bootstrap.min.css');?>" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="<?php echo base_url('vendors/font-awesome/css/font-awesome.min.css');?>" rel="stylesheet">
  <!-- NProgress -->
  <link href="<?php echo base_url('vendors/nprogress/nprogress.css');?>" rel="stylesheet">
  <!-- iCheck -->
  <link href="<?php echo base_url('vendors/iCheck/skins/flat/green.css');?>" rel="stylesheet">
  <!-- Datatables -->
  <link href="<?php echo base_url('vendors/datatables.net-bs/css/dataTables.bootstrap.min.css');?>" rel="stylesheet">
  <link href="<?php echo base_url('vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css');?>" rel="stylesheet">
  <link href="<?php echo base_url('vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css');?>" rel="stylesheet">
  <link href="<?php echo base_url('vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css');?>" rel="stylesheet">
  <link href="<?php echo base_url('vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css');?>" rel="stylesheet">

  <!-- Custom Theme Style -->
  <link href="<?php echo base_url('build/css/custom.min.css');?>" rel="stylesheet">
</head>

<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Administrator</span></a>
          </div>

          <div class="clearfix"></div>

          <!-- menu profile quick info -->
          <div class="profile clearfix">
            <div class="profile_pic">
              <img src="<?php echo base_url('vendors/images/img.jpg');?>" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
              <span>Welcome,</span>
              <h2><?php echo $username;?></h2>
            </div>
          </div>
          <!-- /menu profile quick info -->

          <br />

          <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url('index.php/puskesmas/sidorejokidul/c_puskesmassidorejokidul/index');?>">Halaman Utama</a></li>                      
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Forms <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url('index.php/puskesmas/sidorejokidul/crudkelsidorejokidul/tambah');?>">Form Data Kelurahan</a></li>
                      <li><a href="<?php echo base_url('index.php/puskesmas/sidorejokidul/crudkksidorejokidul/tambah');?>">Form Data KK</a></li>                         
                    </ul>
                  </li>
                  <li><a><i class="fa fa-table"></i> Tables <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url('index.php/puskesmas/sidorejokidul/crudkelsidorejokidul/index');?>">List Data Kelurahan</a></li>                      
                      <li><a href="<?php echo base_url('index.php/puskesmas/sidorejokidul/crudkksidorejokidul/index');?>">List Data KK</a></li>                      
                    </ul>
                  </li>
                  <li><a><i class="fa fa-bar-chart-o"></i> Data Grafik <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?=base_url()?>index.php/puskesmas/sidorejokidul/chart/index" onclick="window.open(this.href,&quot;popupwindow&quot;,&quot;status=0, height=500, width=900, scrollbars=yes, resizable=0, top=0, left=0&quot;); return false;" target="_blank" style="text-decoration:none;" text-align="center">Grafik PHBS Per Kelurahan</a>
                      <li><a href="<?=base_url()?>index.php/puskesmas/sidorejokidul/chart/progress" onclick="window.open(this.href,&quot;popupwindow&quot;,&quot;status=0, height=500, width=900, scrollbars=yes, resizable=0, top=0, left=0&quot;); return false;" target="_blank" style="text-decoration:none;" text-align="center">Grafik Total Persentase PHBS</a>
                    </ul>
                  </li>
                </ul>
              </div>              
            </div>
            <!-- /sidebar menu -->
            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout"<a href="<?php echo site_url('index.php/puskesmas/sidorejokidul/c_puskesmassidorejokidul/logout'); ?>">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Sidorejo Kidul</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Data KK Sidorejo kIdul</h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Settings 1</a>
                        </li>
                        <li><a href="#">Settings 2</a>
                        </li>
                      </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <p class="text-muted font-13 m-b-30">
                    Responsive is an extension for DataTables that resolves that problem by optimising the table's layout for different screen sizes through the dynamic insertion and removal of columns from the table.
                  </p>

                  <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                    <thead>
                      <tr>
                        <th>Tahun</th>
                        <th>Nama Kelurahan</th>
                        <th>Kode Pos</th>
                        <th>Nomor KK</th>
                        <th>Nama Kepala Keluarga</th>
                        <th>RT</th>
                        <th>RW</th>
                        <th>Alamat Rumah</th>
                        <th>Status PHBS </th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      if($kk !=null){
                      foreach ($kk as $u)
                      {
                        ?>
                        <tr>
                          <td><?php echo $u->tahun ?></td>
                          <td><?php echo $u->namakelurahan ?></td>
                          <td><?php echo $u->kodepos ?></td>
                          <td><?php echo $u->nokk ?></td>
                          <td><?php echo $u->namakepala ?></td>
                          <td><?php echo $u->rt ?></td>
                          <td><?php echo $u->rw ?></td>
                          <td><?php echo $u->alamat ?></td>                    
                          <td><a href="<?=base_url()?>index.php/puskesmas/sidorejokidul/crudkksidorejokidul/detail/<?=$u->id?>" onclick="window.open(this.href,&quot;popupwindow&quot;,&quot;status=0, height=500, width=900, scrollbars=yes, resizable=0, top=0, left=0&quot;); return false;" target="_blank" class="btn btn-info btn-sm" style="text-decoration:none;">Detail Status PHBS</a></td>
                          <td>
                              <?php echo anchor('index.php/puskesmas/sidorejokidul/crudkksidorejokidul/edit/'.$u->id,'Edit'); ?>
                              <?php echo anchor('index.php/puskesmas/sidorejokidul/crudkksidorejokidul/hapus/'.$u->nokk,'Hapus'); ?>
                          </td>   
                        </tr>
                        <?php
                      }
                    }
                    else
                    {
                      echo "<font color='red'>data kosong</font>";
                    }
                      ?>
                    </tbody>            
                  </table>                 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /page content -->

      <!-- footer content -->
      <footer>
        <div class="pull-right">
          Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
        </div>
        <div class="clearfix"></div>
      </footer>
      <!-- /footer content -->
    </div>
  </div>

  <!-- jQuery -->
  <script src="<?php echo base_url('vendors/jquery/dist/jquery.min.js');?>"></script>
  <!-- Bootstrap -->
  <script src="<?php echo base_url('vendors/bootstrap/dist/js/bootstrap.min.js');?>"></script>
  <!-- FastClick -->
  <script src="<?php echo base_url('vendors/fastclick/lib/fastclick.js');?>"></script>
  <!-- NProgress -->
  <script src="<?php echo base_url('vendors/nprogress/nprogress.js');?>"></script>
  <!-- iCheck -->
  <script src="<?php echo base_url('vendors/iCheck/icheck.min.js');?>"></script>
  <!-- Datatables -->
  <script src="<?php echo base_url('vendors/datatables.net/js/jquery.dataTables.min.js');?>"></script>
  <script src="<?php echo base_url('vendors/datatables.net-bs/js/dataTables.bootstrap.min.js');?>"></script>
  <script src="<?php echo base_url('vendors/datatables.net-buttons/js/dataTables.buttons.min.js');?>"></script>
  <script src="<?php echo base_url('vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js');?>"></script>
  <script src="<?php echo base_url('vendors/datatables.net-buttons/js/buttons.flash.min.js');?>"></script>
  <script src="<?php echo base_url('vendors/datatables.net-buttons/js/buttons.html5.min.js');?>"></script>
  <script src="<?php echo base_url('vendors/datatables.net-buttons/js/buttons.print.min.js');?>"></script>
  <script src="<?php echo base_url('vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js');?>"></script>
  <script src="<?php echo base_url('vendors/datatables.net-keytable/js/dataTables.keyTable.min.js');?>"></script>
  <script src="<?php echo base_url('vendors/datatables.net-responsive/js/dataTables.responsive.min.js');?>"></script>
  <script src="<?php echo base_url('vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js');?>"></script>
  <script src="<?php echo base_url('vendors/datatables.net-scroller/js/dataTables.scroller.min.js');?>"></script>
  <script src="<?php echo base_url('vendors/jszip/dist/jszip.min.js');?>"></script>
  <script src="<?php echo base_url('vendors/pdfmake/build/pdfmake.min.js');?>"></script>
  <script src="<?php echo base_url('vendors/pdfmake/build/vfs_fonts.js');?>"></script>

  <!-- Custom Theme Scripts -->
  <script src="<?php echo base_url('build/js/custom.min.js');?>"></script>

</body>
</html>
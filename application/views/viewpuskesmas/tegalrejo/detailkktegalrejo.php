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

<body>       
       
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                   <?php foreach($kk as $u){?>
                  <h2>Detail KK<small><?php echo $u->namakepala;?></small></h2>
                  <?php }?>
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
                   Detail Status PHBS
                  </p>

                  <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                    <thead>
                      <tr>
                        <th>Nomor KK</th>
                        <th>Nama Kepala Keluarga</th>
                        <th>Status Persalinan</th>
                        <th>Status Kehamilan</th>
                        <th>Status ASI</th>
                        <th>Status Timbang</th>
                        <th>Status Gizi</th>
                        <th>Status Air Bersih</th>
                        <th>Status Jamban</th>
                        <th>Status Sampah</th>
                        <th>Status Lantai</th>
                        <th>Status Fisik</th>
                        <th>Status Merokok</th>
                        <th>Status Cuci Tangan</th>
                        <th>Status Gosok Gigi</th>
                        <th>Status Miras</th>
                        <th>Status JPK</th>
                        <th>Status PSN</th>
                        <th>Total Ya</th>
                        <th>Strata KK</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      foreach ($kk as $u)
                      {
                        ?>
                        <tr>
                          <td><?php echo $u->nokk ?></td>
                          <td><?php echo $u->namakepala ?></td>                    
                          <td><?php echo $u->persalinan ?></td>
                          <td><?php echo $u->kehamilan ?></td>
                          <td><?php echo $u->asi ?></td>
                          <td><?php echo $u->timbang ?></td>
                          <td><?php echo $u->gizi ?></td>
                          <td><?php echo $u->airbersih ?></td>
                          <td><?php echo $u->jamban ?></td>
                          <td><?php echo $u->sampah ?></td>
                          <td><?php echo $u->lantai ?></td>
                          <td><?php echo $u->fisik ?></td>
                          <td><?php echo $u->merokok ?></td>
                          <td><?php echo $u->cucitangan ?></td>
                          <td><?php echo $u->gosokgigi ?></td>
                          <td><?php echo $u->miras ?></td>
                          <td><?php echo $u->jpk ?></td>
                          <td><?php echo $u->psn ?></td>
                          <td><?php echo $u->totalYa ?></td>
                          <td><?php 
                              $nilai = $u->totalYa;
                              if($nilai>14)
                              {
                                  echo"Sehat Paripurna";
                              }
                              else if($nilai>10)
                              {
                                  echo"Sehat Utama";
                              }
                              else if($nilai>5)
                              {
                                  echo "Sehat Madya";
                              }
                              else
                              {
                                  echo "Sehat Pratama";
                              }
                              ?>
                          </td>                          
                        </tr>
                        <?php
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
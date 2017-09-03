<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Tambah Data Kelurahan </title>
    <script>var baseUrl = '<?php echo base_url(); ?>';</script>
    <script src="<?php echo base_url("public/js/jquery-1.8.1.min.js")?>"></script>
    <script type="text/javascript" src="<?php echo base_url("public/js/fungsi.js")?>"></script>

    <!-- Bootstrap -->
    <link href="<?php echo base_url('vendors/bootstrap/dist/css/bootstrap.min.css');?>" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url('vendors/font-awesome/css/font-awesome.min.css');?>" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url('vendors/nprogress/nprogress.css');?>" rel="stylesheet">
    
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
              <div class="profile_info">
                <span>Welcome,</span>
                <h2><?php echo $username;?></h2>
              </div>
            </div>            
            <!-- /menu profile quick info -->

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url('index.php/puskesmas/tegalrejo/c_puskesmastegalrejo/index');?>">Halaman Utama</a></li>                      
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Forms <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url('index.php/puskesmas/tegalrejo/crudkeltegalrejo/tambah');?>">Form Data Kelurahan</a></li>
                      <li><a href="<?php echo base_url('index.php/puskesmas/tegalrejo/crudkktegalrejo/tambah');?>">Form Data KK</a></li>                         
                    </ul>
                  </li>
                  <li><a><i class="fa fa-table"></i> Tables <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url('index.php/puskesmas/tegalrejo/crudkeltegalrejo/index');?>">List Data Kelurahan</a></li>                      
                      <li><a href="<?php echo base_url('index.php/puskesmas/tegalrejo/crudkktegalrejo/index');?>">List Data KK</a></li>                      
                    </ul>
                  </li>
                  <li><a><i class="fa fa-bar-chart-o"></i> Data Grafik <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?=base_url()?>index.php/puskesmas/tegalrejo/chart/index" onclick="window.open(this.href,&quot;popupwindow&quot;,&quot;status=0, height=500, width=900, scrollbars=yes, resizable=0, top=0, left=0&quot;); return false;" target="_blank" style="text-decoration:none;" text-align="center">Grafik PHBS Per Kelurahan</a>
                      <li><a href="<?=base_url()?>index.php/puskesmas/tegalrejo/chart/progress" onclick="window.open(this.href,&quot;popupwindow&quot;,&quot;status=0, height=500, width=900, scrollbars=yes, resizable=0, top=0, left=0&quot;); return false;" target="_blank" style="text-decoration:none;" text-align="center">Grafik Total Persentase PHBS</a>
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
              <a data-toggle="tooltip" data-placement="top" title="Logout"<a href="<?php echo site_url('index.php/puskesmas/tegalrejo/c_puskesmastegalrejo/logout'); ?>">
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
              <ul class="nav navbar-nav navbar-right">
                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                  </a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Form Validation</h3>
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

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Tambah Data <small>sub title</small></h2>
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
                    <?php foreach($kk as $u) {?>
                    <form name="kalkulasi" class="form-horizontal form-label-left" action="<?php echo base_url(). 'index.php/puskesmas/tegalrejo/crudkktegalrejo/update'; ?>" method="POST">
                      <span class="section">Personal Info</span>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Tahun</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <select name="pilhun" class="select2_single form-control" tabindex="-1">
                            <option value="2015">2015</option>
                            <option value="2016">2016</option>
                            <option value="2017">2017</option>
                            <option value="2018">2018</option>
                            <option value="2019">2019</option>
                            <option value="2020">2020</option>
                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
                            <option value="2023">2023</option>
                            <option value="2024">2024</option>
                            <option value="2025">2025</option>                           
                          </select>
                        </div>
                      </div>
                      <div class="item form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="hidden" name="admin" class="form-control col-md-7 col-xs-12" data-validate-length-range="20" value="<?php echo $u->admin;?>">
                          <input type="hidden" name="id" class="form-control col-md-7 col-xs-12" data-validate-length-range="20" value="<?php echo $u->id;?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Kelurahan</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <select name="pilihwil" id="wil" class="select2_single form-control" tabindex="-1">
                            <option value="Kumpulrejo" data-price="50734">Kumpulrejo</option>
                            <option value="Randuacir" data-price="50735">Randuacir</option>
                            <option value="Tegalrejo" data-price="50733">Tegalrejo</option>                    
                          </select>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="kodepos">Kodepos <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="pilkod" id="kodewil" class="form-control col-md-7 col-xs-12" required="required">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nokk">No KK <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="nokk" class="form-control col-md-7 col-xs-12" value="<?php echo $u->nokk;?>" onkeyup="this.value=this.value.replace(/[^0-9]/g,'');" required="required">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nokk">Nama KK
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="namakk" value="<?php echo $u->namakepala;?>" class="form-control col-md-7 col-xs-12"  required="required">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nokk">Alamat <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="alamat" value="<?php echo $u->alamat;?>" class="form-control col-md-7 col-xs-12"  required="required">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">RT</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <select name="rt" class="select2_single form-control" tabindex="-1">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>                   
                          </select>
                        </div>
                      </div>
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">RW</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <select name="rw" class="select2_single form-control" tabindex="-1">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>                   
                          </select>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="persalinan">Persalinan Tenaga Kerja
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <select name="persalinan" class="select2_single form-control" tabindex="-1">
                            <option value="ya">Ya</option>
                            <option value="tidak">Tidak</option>                   
                          </select>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="kehamilan">Kehamilan
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <select name="kehamilan" class="select2_single form-control" tabindex="-1">
                            <option value="ya">Ya</option>
                            <option value="tidak">Tidak</option>                   
                          </select>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="asi">ASI Ekslusif
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <select name="asi" class="select2_single form-control" tabindex="-1">
                            <option value="ya">Ya</option>
                            <option value="tidak">Tidak</option>                   
                          </select>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="persalinan">Timbang Balita
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <select name="timbang" class="select2_single form-control" tabindex="-1">
                            <option value="ya">Ya</option>
                            <option value="tidak">Tidak</option>                   
                          </select>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="gizi">Gizi
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <select name="gizi" class="select2_single form-control" tabindex="-1">
                            <option value="ya">Ya</option>
                            <option value="tidak">Tidak</option>                   
                          </select>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="air">Air Bersih
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <select name="air" class="select2_single form-control" tabindex="-1">
                            <option value="ya">Ya</option>
                            <option value="tidak">Tidak</option>                   
                          </select>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="gizi">Jamban
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <select name="jamban" class="select2_single form-control" tabindex="-1">
                            <option value="ya">Ya</option>
                            <option value="tidak">Tidak</option>                   
                          </select>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="sampah">Sampah
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <select name="sampah" class="select2_single form-control" tabindex="-1">
                            <option value="ya">Ya</option>
                            <option value="tidak">Tidak</option>                   
                          </select>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="gizi">Lantai
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <select name="lantai" class="select2_single form-control" tabindex="-1">
                            <option value="ya">Ya</option>
                            <option value="tidak">Tidak</option>                   
                          </select>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="gizi">Aktifitas Fisik
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <select name="aktif" class="select2_single form-control" tabindex="-1">
                            <option value="ya">Ya</option>
                            <option value="tidak">Tidak</option>                   
                          </select>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="gizi">Tidak Merokok
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <select name="rokok" class="select2_single form-control" tabindex="-1">
                            <option value="ya">Ya</option>
                            <option value="tidak">Tidak</option>                   
                          </select>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="gizi">Cuci Tangan
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <select name="cucitangan" class="select2_single form-control" tabindex="-1">
                            <option value="ya">Ya</option>
                            <option value="tidak">Tidak</option>                   
                          </select>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="gizi">Gosok Gigi
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <select name="gigi" class="select2_single form-control" tabindex="-1">
                            <option value="ya">Ya</option>
                            <option value="tidak">Tidak</option>                   
                          </select>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="gizi">Miras
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <select name="miras" class="select2_single form-control" tabindex="-1">
                            <option value="ya">Ya</option>
                            <option value="tidak">Tidak</option>                   
                          </select>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="gizi">JPK
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <select name="jpk" class="select2_single form-control" tabindex="-1">
                            <option value="ya">Ya</option>
                            <option value="tidak">Tidak</option>                   
                          </select>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="gizi">PSN
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <select name="psn" class="select2_single form-control" tabindex="-1">
                            <option value="ya">Ya</option>
                            <option value="tidak">Tidak</option>                   
                          </select>
                        </div>
                      </div>
                      
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button type="submit" class="btn btn-primary">Cancel</button>
                          <button id="send" type="submit" class="btn btn-success">Update</button>
                        </div>
                      </div>
                    </form>
                    <?php } ?>
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
    <!-- validator -->
    <script src="<?php echo base_url('vendors/validator/validator.js');?>"></script>

     <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url('build/js/custom.min.js');?>"></script>

	
  </body>
</html>
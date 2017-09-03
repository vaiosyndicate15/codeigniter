<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Edit Data Kelurahan </title>
    <script src="<?php echo base_url("public/js/jquery-1.8.1.min.js")?>"></script>
    <script type="text/javascript" src="<?php echo base_url("public/js/fungsi.js")?>"></script>
    <script type="text/javascript" src="<?php echo base_url("public/js/fungsi-hitung.js")?>"></script>

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
                      <li><a href="<?php echo base_url('index.php/puskesmas/sidorejolor/c_puskesmassidorejolor/index');?>">Halaman Utama</a></li>                      
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Forms <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url('index.php/puskesmas/sidorejolor/crudkelsidorejolor/tambah');?>">Form Data Kelurahan</a></li>
                      <li><a href="<?php echo base_url('index.php/puskesmas/sidorejolor/crudkksidorejolor/tambah');?>">Form Data KK</a></li>                         
                    </ul>
                  </li>
                  <li><a><i class="fa fa-table"></i> Tables <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url('index.php/puskesmas/sidorejolor/crudkelsidorejolor/index');?>">List Data Kelurahan</a></li>                      
                      <li><a href="<?php echo base_url('index.php/puskesmas/sidorejolor/crudkksidorejolor/index');?>">List Data KK</a></li>                      
                    </ul>
                  </li>
                  <li><a><i class="fa fa-bar-chart-o"></i> Data Grafik <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?=base_url()?>index.php/puskesmas/sidorejolor/chart/index" onclick="window.open(this.href,&quot;popupwindow&quot;,&quot;status=0, height=500, width=900, scrollbars=yes, resizable=0, top=0, left=0&quot;); return false;" target="_blank" style="text-decoration:none;" text-align="center">Grafik PHBS Per Kelurahan</a>
                      <li><a href="<?=base_url()?>index.php/puskesmas/sidorejolor/chart/progress" onclick="window.open(this.href,&quot;popupwindow&quot;,&quot;status=0, height=500, width=900, scrollbars=yes, resizable=0, top=0, left=0&quot;); return false;" target="_blank" style="text-decoration:none;" text-align="center">Grafik Total Persentase PHBS</a>
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
              <a data-toggle="tooltip" data-placement="top" title="Logout"<a href="<?php echo site_url('index.php/puskesmas/sidorejolor/c_puskesmassidorejolor/logout'); ?>">
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
                  <?php foreach($datawilayah as $u){ ?>
                    <form name="kalkulasi" class="form-horizontal form-label-left" action="<?php echo base_url(). 'index.php/puskesmas/sidorejolor/crudkelsidorejolor/update'; ?>" method="POST">
                      <span class="section">Data Kelurahan</span>
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
                            <option value="Blotongan" data-price="50715">Blotongan</option>
                            <option value="Salatiga" data-price="50711">Salatiga</option>
                            <option value="Sidorejo lor" data-price="50714">Sidorejo lor</option> 
                            <option value="Bugel" data-price="50713">Bugel</option>
                            <option value="Kauman kidul" data-price="50712">Kauman kidul</option>
                            <option value="Pulutan" data-price="50716">Pulutan</option>                 
                          </select>
                        </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="kodepos">Kodepos <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="pilkod" id="kodewil" class="form-control col-md-7 col-xs-12" required="required">
                        </div>
                      </div>
                       <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="sampel">Jumlah Sampel <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="sampel" value="<?php echo $u->sampel;?>" class="form-control col-md-7 col-xs-12" onFocus="startCalc();" onBlur="stopCalc();" onkeyup="this.value=this.value.replace(/[^0-9]/g,'');" required="required">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="persalinan">Persalinan Tenaga Kerja
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="persalinan" id="persalinan" value="<?php echo $u->persalinan;?>" onFocus="startCalc();" onBlur="stopCalc();" onkeyup="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="p1">Persentase Persalinan
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="persen1"  class="form-control col-md-7 col-xs-12" onkeyup="this.value=this.value.replace(/[^0-9]/g,'');"  required="required">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="kehamilan">Pemeriksaan Kehamilan
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="kehamilan" id="kehamilan" value="<?php echo $u->kehamilan;?>" onFocus="startCalc();" onBlur="stopCalc();" onkeyup="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="persen2">Persentase Kehamilan
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="persen2" onkeyup="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="asi">Asi Eksklusif
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="asi" id="asi" value="<?php echo $u->asi;?>" onFocus="startCalc();" onBlur="stopCalc();" onkeyup="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control col-md-7 col-xs-12" required="required">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="p3">Persentase ASI
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="persen3" onkeyup="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control col-md-7 col-xs-12" required="required">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="timbang">Timbang Balita
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="timbang" id="timbang" value="<?php echo $u->timbang;?>" onFocus="startCalc();" onBlur="stopCalc();" onkeyup="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control col-md-7 col-xs-12" required="required">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="p4">Persentase Timbang
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="persen4" onkeyup="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control col-md-7 col-xs-12" required="required">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="timbang">Gizi
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="gizi" id="gizi" value="<?php echo $u->gizi;?>" onFocus="startCalc();" onBlur="stopCalc();" onkeyup="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control col-md-7 col-xs-12" required="required">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="p5">Persentase Gizi
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="persen5" onkeyup="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control col-md-7 col-xs-12" required="required">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="timbang">Air Bersih
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="air" id="airbersih" value="<?php echo $u->air;?>" onFocus="startCalc();" onBlur="stopCalc();" onkeyup="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control col-md-7 col-xs-12" required="required">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="p6">Persentase Air
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="persen6" onkeyup="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control col-md-7 col-xs-12" required="required">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="timbang">Jamban
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="jamban" id="jamban" value="<?php echo $u->jamban;?>" onFocus="startCalc();" onBlur="stopCalc();" onkeyup="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control col-md-7 col-xs-12" required="required">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="p7">Persentase Jamban
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="persen7" onkeyup="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control col-md-7 col-xs-12" required="required">
                        </div>
                      </div>        
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="timbang">Sampah
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="sampah" id="sampah" value="<?php echo $u->sampah;?>" onFocus="startCalc();" onBlur="stopCalc();" onkeyup="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control col-md-7 col-xs-12" required="required">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="p8">Persentase Sampah
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="persen8" onkeyup="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control col-md-7 col-xs-12" required="required">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="timbang">Lantai
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="lantai" id="lantai" value="<?php echo $u->lantai;?>" onFocus="startCalc();" onBlur="stopCalc();" onkeyup="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control col-md-7 col-xs-12" required="required">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="p9">Persentase Lantai
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="persen9" onkeyup="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control col-md-7 col-xs-12" required="required">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="timbang">Aktifitas Fisik
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="aktif" id="fisik" value="<?php echo $u->fisik;?>" onFocus="startCalc();" onBlur="stopCalc();" onkeyup="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control col-md-7 col-xs-12" required="required">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="p10">Persentase Aktifitas Fisik
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="persen10"  onkeyup="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control col-md-7 col-xs-12" required="required">
                        </div>
                      </div>                      
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="timbang">Tidak Merokok
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="rokok" id="merokok" value="<?php echo $u->rokok;?>" onFocus="startCalc();" onBlur="stopCalc();" onkeyup="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control col-md-7 col-xs-12" required="required">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="p11">Persentase Tidak Merokok
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="persen11" onkeyup="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control col-md-7 col-xs-12" required="required">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="timbang">Cuci Tangan
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="cucitangan" id="cucitangan" value="<?php echo $u->cuci;?>" onFocus="startCalc();" onBlur="stopCalc();" onkeyup="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control col-md-7 col-xs-12" required="required">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="p12">Persentase Cuci Tangan
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="persen12" onkeyup="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control col-md-7 col-xs-12" required="required">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="timbang">Gosok Gigi
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="gigi" id="gosokgigi" value="<?php echo $u->gigi;?>" onFocus="startCalc();" onBlur="stopCalc();" onkeyup="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control col-md-7 col-xs-12" required="required">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="p13">Persentase Gosok Gigi
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="persen13" onkeyup="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control col-md-7 col-xs-12" required="required">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="timbang">Miras
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="miras" id="miras" value="<?php echo $u->miras;?>" onFocus="startCalc();" onBlur="stopCalc();" onkeyup="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control col-md-7 col-xs-12" required="required">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="p14">Persentase Gosok Gigi
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="persen14" onkeyup="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control col-md-7 col-xs-12" required="required">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="timbang">JPK
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="jpk" id="jpk" value="<?php echo $u->jpk;?>" onFocus="startCalc();" onBlur="stopCalc();" onkeyup="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control col-md-7 col-xs-12" required="required">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="p15">Persentase JPK
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="persen15" onkeyup="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control col-md-7 col-xs-12" required="required">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="timbang">PSN
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="psn" id="psn" value="<?php echo $u->psn;?>" onFocus="startCalc();" onBlur="stopCalc();" onkeyup="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control col-md-7 col-xs-12" required="required">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="p16">Persentase PSN
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="persen16" onkeyup="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control col-md-7 col-xs-12" required="required">
                        </div>
                      </div>                      
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button type="submit" class="btn btn-primary">Cancel</button>
                          <button id="send" type="submit" class="btn btn-success">Submit</button>
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
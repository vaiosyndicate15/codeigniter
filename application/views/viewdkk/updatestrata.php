<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sign-Up Admin Puskesmas </title>
    <script src="<?php echo base_url("public/js/jquery-1.8.1.min.js")?>"></script>
    <script>var baseUrl = '<?php echo base_url(); ?>';</script>
    <script src="<?php echo base_url("public/js/fungsi.js")?>"></script>
    <script src="<?php echo base_url("public/js/hitung_strata.js")?>"></script>

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
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Dashboard <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url('index.php/dkk/c_dkk/index');?>">Halaman Utama</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Forms <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url('index.php/dkk/daftar_c/index');?>">Form Admin Puskesmas</a></li>
                      <li><a href="<?php echo base_url('index.php/dkk/c_listdkk/tambah');?>">Form Memo</a></li>
                      <li><a href="<?php echo base_url('index.php/dkk/crud_strata/tambahstrata');?>">Form Strata</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-table"></i> Tabel <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url('index.php/dkk/c_listdkk/index');?>">List Memo</a></li>
                      <li><a href="<?php echo base_url('index.php/dkk/crud_strata/index');?>">List Strata</a></li>                      
                      <li><a href="<?php echo base_url('index.php/dkk/cruddkk/index');?>">List Data Kelurahan</a></li>                      
                    </ul>
                  </li>
                  <li><a><i class="fa fa-bar-chart-o"></i> Data Grafik <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">                      
                      <li><a href="<?=base_url()?>index.php/user/chart/index" onclick="window.open(this.href,&quot;popupwindow&quot;,&quot;status=0, height=500, width=900, scrollbars=yes, resizable=0, top=0, left=0&quot;); return false;" target="_blank" style="text-decoration:none;" text-align="center">Grafik Strata PHBS</a>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-table"></i> Daftar Admin<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url('index.php/dkk/c_kontak/index');?>">Kontak</a></li>
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
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="<?php echo site_url('index.php/dkk/c_dkk/logout'); ?>">
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
                    <h2>Tambah Memo <small>sub title</small></h2>
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
                    <?php foreach($strata as $u){ ?>
                    <form name="hitung" class="form-horizontal form-label-left" action="<?php echo base_url(). 'index.php/dkk/crud_strata/update'; ?>" method="POST">
                      <input type="hidden" name="id" class="form-control col-md-7 col-xs-12" data-validate-length-range="20" value="<?php echo $u->id;?>">

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
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Kecamatan</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <select name="pilkec" class="select2_single form-control" tabindex="-1">
                            <option value="Sidorejo">Sidorejo</option>
                            <option value="Sidomukti">Sidomukti</option>
                            <option value="Argomulyo">Argomulyo</option>
                            <option value="Tingkir">Tingkir</option>                                               
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Kelurahan</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <select name="pilihwil" id="wil" class="select2_group form-control">
                            <optgroup label="Sidorejo">
                              <option value="Blotongan" data-price="50715">Blotongan</option>
                              <option value="Bugel" data-price="50713">Bugel</option>
                              <option value="Kauman kidul" data-price="50712">Kauman kidul</option>
                              <option value="Pulutan" data-price="50716">Pulutan</option>
                              <option value="Salatiga" data-price="50711">Salatiga</option>
                              <option value="Sidorejo lor" data-price="50714">Sidorejo lor</option>
                            </optgroup>
                            <optgroup label="Sidomukti">
                              <option value="Dukuh" data-price="50722">Dukuh</option>
                              <option value="Kalicacing" data-price="50724">Kalicacing</option>
                              <option value="Kecandran" data-price="50723">Kecandran</option>
                              <option value="Mangunsari" data-price="50721">Mangunsari</option>
                            </optgroup>
                            <optgroup label="Argomulyo">
                              <option value="Cebongan" data-price="50736">Cebongan</option>
                              <option value="Kumpulrejo" data-price="50734">Kumpulrejo</option>
                              <option value="Ledok" data-price="50732">Ledok</option>
                              <option value="Noborejo" data-price="507365">Noborejo</option>
                              <option value="Randuacir" data-price="50735">Randuacir</option>
                              <option value="Tegalrejo" data-price="50733">Tegalrejo</option>
                            </optgroup>
                            <optgroup label="Tingkir">
                              <option value="Gendongan" data-price="50743">Gendongan</option>
                              <option value="Kalibening" data-price="50744">Kalibening</option>
                              <option value="Kutowinangun" data-price="50742">Kutowinangun</option>
                              <option value="Sidorejo kidul" data-price="50741">Sidorejo Kidul</option>
                              <option value="Tingkir lor" data-price="50746">Tingkir Lor</option>
                              <option value="Tingkir Tengah" data-price="50745">Tingkir Tengah</option>
                            </optgroup>
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
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="sampel">Jumlah Sampel <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="sample" class="form-control col-md-7 col-xs-12" onkeyup="this.value=this.value.replace(/[^0-9]/g,'');" value="<?php echo $u->sampel;?>" onFocus="startCalc();" onBlur="stopCalc();" required="required">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="pratama">Sehat Pratama
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="a" id="sehatpratama" onkeyup="this.value=this.value.replace(/[^0-9]/g,'');" value="<?php echo $u->pratama;?>" onFocus="startCalc();" onBlur="stopCalc();" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="p1">Persentase Sehat Pratama
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="pa" class="form-control col-md-7 col-xs-12" onkeyup="this.value=this.value.replace(/[^0-9]/g,'');"  required="required">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="madya">Sehat Madya
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="b" id="sehatmadya" onkeyup="this.value=this.value.replace(/[^0-9]/g,'');"  value="<?php echo $u->madya;?>" onFocus="startCalc();" onBlur="stopCalc();" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="p2">Persentase Sehat Madya
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="pb" onkeyup="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="utama">Sehat Utama<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="c" id="sehatutama" onkeyup="this.value=this.value.replace(/[^0-9]/g,'');"  value="<?php echo $u->utama;?>" onFocus="startCalc();" onBlur="stopCalc();" class="form-control col-md-7 col-xs-12" required="required">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="p3">Persentase Sehat Utama
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="pc" onkeyup="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control col-md-7 col-xs-12" required="required">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="paripurna">Sehat Paripurna<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="d" id="sehatparipurna" onkeyup="this.value=this.value.replace(/[^0-9]/g,'');"  value="<?php echo $u->paripurna;?>" onFocus="startCalc();" onBlur="stopCalc();" class="form-control col-md-7 col-xs-12" required="required">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="p4">Persentase Sehat Paripurna
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="pd" onkeyup="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control col-md-7 col-xs-12" required="required">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="total">Total Persentase(Utama+Paripurna)
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="e" id="sehatutama" onkeyup="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="strata">Strata
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="f" class="form-control col-md-7 col-xs-12">
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
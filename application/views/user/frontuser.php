<!DOCTYPE HTML>
<html>
    <head>
        <title>Pemetaan PHBS Rumah Tangga DKK Salatiga</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
        <link rel="stylesheet" href="<?php echo base_url('assets/css/main.css');?>" />
        <link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css');?>" />
        <!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
        <!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
    </head>
    <body>

        <!-- Header -->
            <div id="header">
                <div class="top">

                    <!-- Logo -->
                        <div id="logo">
                            <span class="image avatar48"><img src="<?php echo base_url('assets/images/logo.png');?>" alt="" /></span>
                            <h1 id="title">DKK Salatiga</h1>
                        </div>

                    <!-- Nav -->
                        <nav id="nav">
                            <ul>
                                <li><a href="#top" id="top-link" class="skel-layers-ignoreHref"><span class="icon fa-home">Intro</span></a></li>
                                <li><a href="#portfolio" id="portfolio-link" class="skel-layers-ignoreHref"><span class="icon fa-th">Pemetaan PHBS RT</span></a></li>
                                <li><a href="#about" id="about-link" class="skel-layers-ignoreHref"><span class="icon fa-user">Tentang PHBS</span></a></li>
                                <li><a href="#contact" id="contact-link" class="skel-layers-ignoreHref"><span class="icon fa-envelope">Kritik dan Saran</span></a></li>
                            </ul>
                        </nav>

                </div>

                <div class="bottom">

                    <!-- Social Icons -->
                        <ul class="icons">
                            <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                            <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                            <li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
                            <li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
                            <li><a href="#" class="icon fa-envelope"><span class="label">Email</span></a></li>
                        </ul>

                </div>

            </div>

        <!-- Main -->
            <div id="main">
                <!-- Intro -->
                    <section id="top" class="one dark cover">
                        <div class="container">
                            <header>
                                <h2 class="alt">Selamat datang di website PHBS Rumah Tangga DKK Salatiga
                            </header>
                            <footer>
                                <a href="#portfolio" class="button scrolly">Lihat Peta</a>
                            </footer>
                        </div>
                    </section>
                <!-- Portfolio -->
                    <section id="portfolio" class="two">
                        <div class="container" >
                            <header>
                                <h2>Pemetaan PHBS Rumah Tangga</h2>
                            </header>                            
                            <div class="row">
                                <p>Berikut peta dan grafik PHBS Rumah Tangga Per Kelurahan Kota Salatiga</p>
                                <a href="<?=base_url()?>index.php/c_map/peta" onclick="window.open(this.href,&quot;popupwindow&quot;,&quot;status=0, height=500, width=900, scrollbars=yes, resizable=0, top=0, left=0&quot;); return false;" target="_blank" class="btn btn-info btn-sm" style="text-decoration:none;" text-align="center">Lihat Peta</a></td>
                                <a href="<?=base_url()?>index.php/user/chart/index" onclick="window.open(this.href,&quot;popupwindow&quot;,&quot;status=0, height=500, width=900, scrollbars=yes, resizable=0, top=0, left=0&quot;); return false;" target="_blank" style="text-decoration:none;" text-align="center">Grafik Strata PHBS</a>

                            </div>
                        </div>
                    </section>
                <!-- About Me -->
                    <section id="about" class="three">
                        <div class="container">

                            <header>
                                <h2>Seputar PHBS</h2>
                            </header>                            
                            <p>PHBS di Rumah Tangga adalah upaya untuk memberdayakan anggota rumah tangga agar sadar, mau dan mampu mempraktikkan PHBS untuk memelihara dan meningkatkan kesehatannya, mencegah resiko terjadinya penyakit dan melindungi diri dari ancaman penyakit serta berperan aktif dalam gerakan kesehatan masyarakat. Oleh karena itu tatanan rumah tangga sehat dapat diwujudkan dengan perilaku sehat dan lingkungan sehat. 
                            Indikator PHBS tatanan rumah tangga yang digunakan di Jawa Tengah terdapat 16 variabel, yang terdiri dari 10 indikator nasional dan 6 indikator lokal Jawa Tengah. Keenam belas indikator PHBS tersebut, meliputi:</p>
                            
                            <ol>
                                 <li>Persalinan oleh Tenaga Kesehatan</li>
                                 <li>ASI ekslusif</li>
                                 <li>Gizi seimbang</li>
                                 <li>Menggunakan air bersih</li>
                                 <li>Menggunakan jamban sehat</li>
                                 <li>Kepadatan hunian rumah</li>
                                 <li>Lantai kedap air</li>
                                 <li>Aktifitas fisik/olah raga</li>
                                 <li>Bebas asap rokok</li>
                                 <li>Kepesertaan Jaminan Pemeliharaan Kesehatan</li>
                                 <li>Menimbang balita</li>
                                 <li>Membuang sampah</li>
                                 <li>Mencuci tangan pakai sabun</li>
                                 <li>Menggosok gigi</li>
                                 <li>Tidak menyalahgunakan Miras/Narkoba</li>
                                 <li>Melakukan Pemberantasan Sarang Nyamuk (PSN).</li>
                            </ol>
                            

                        </div>
                    </section>

                <!-- Contact -->
                    <section id="contact" class="four">
                        <div class="container">

                            <header>
                                <h2>Kritik dan Saran</h2>
                            </header>

                            <p>Kirim kritik dan saran kepada kami agar <i>website</i> ini semakin berkembang</p>

                            <form method="post" action="<?php echo base_url(). 'index.php/c_map/tambah_aksi'; ?>">
                                <div class="row">
                                    <div class="6u 12u$(mobile)"><input type="text" name="name" placeholder="Nama" /></div>
                                    <div class="6u$ 12u$(mobile)"><input type="text" name="email" placeholder="Email" /></div>
                                    <div class="12u$">
                                        <textarea name="message" placeholder="Kritik dan Saran"></textarea>
                                    </div>
                                    <div class="12u$">
                                        <input type="submit" value="Send Message" />
                                    </div>
                                </div>
                            </form>

                        </div>
                    </section>
                </div>

        <!-- Footer -->
            <div id="footer">
                <!-- Copyright -->
                    <ul class="copyright">
                        <li>&copy; Untitled. All rights reserved.</li><li>2017</a></li>
                    </ul>
            </div>

        <!-- Scripts -->
            <script src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
            <script src="<?php echo base_url('assets/js/jquery.scrolly.min.js');?>"></script>
            <script src="<?php echo base_url('assets/js/jquery.scrollzer.min.js');?>"></script>
            <script src="<?php echo base_url('assets/js/skel.min.js');?>"></script>
            <script src="<?php echo base_url('assets/js/util.js');?>"></script>
            <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js')"></script><![endif]-->
            <script src="<?php echo base_url('assets/js/main.js');?>"></script>
    </body>
</html>
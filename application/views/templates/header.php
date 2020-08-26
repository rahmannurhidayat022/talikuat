<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">


    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?= base_url();?>/assets/img/favicon.png" rel="icon">
    <link href="<?= base_url();?>/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url();?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url();?>/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="<?= base_url();?>/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= base_url();?>/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?= base_url();?>/assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="<?= base_url();?>/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="<?= base_url();?>/assets/vendor/aos/aos.css" rel="stylesheet">

    <!-- Vendor JS Files -->
    <script src="<?= base_url();?>/assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url();?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url();?>/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="<?= base_url();?>/assets/vendor/php-email-form/validate.js"></script>
    <script src="<?= base_url();?>/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="<?= base_url();?>/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?= base_url();?>/assets/vendor/venobox/venobox.min.js"></script>
    <script src="<?= base_url();?>/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="<?= base_url();?>/assets/vendor/counterup/counterup.min.js"></script>
    <script src="<?= base_url();?>/assets/vendor/aos/aos.js"></script>

    <!-- Template Main JS File -->
    <script src="<?= base_url();?>/assets/js/main.js"></script>

    <script src="<?= base_url();?>/assets/js/jquery.min.js"></script>
    <script src="<?= base_url();?>/assets/js/jquery-migrate-3.0.1.min.js"></script>
    <script src="<?= base_url();?>/assets/js/popper.min.js"></script>
    <script src="<?= base_url();?>/assets/js/bootstrap.min.js"></script>
    <script src="<?= base_url();?>/assets/js/jquery.easing.1.3.js"></script>
    <script src="<?= base_url();?>/assets/js/jquery.waypoints.min.js"></script>
    <script src="<?= base_url();?>/assets/js/jquery.stellar.min.js"></script>
    <script src="<?= base_url();?>/assets/js/owl.carousel.min.js"></script>
    <script src="<?= base_url();?>/assets/js/jquery.magnific-popup.min.js"></script>
    <script src="<?= base_url();?>/assets/js/jquery.animateNumber.min.js"></script>
    <script src="<?= base_url();?>/assets/js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="<?= base_url();?>/assets/js/google-map.js"></script>
    <script src="<?= base_url();?>/assets/js/main0.js"></script>
<!-- batas-->
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="<?= base_url();?>/assets/css/animate.css">

    <link rel="stylesheet" href="<?= base_url();?>/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url();?>/assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?= base_url();?>/assets/css/magnific-popup.css">

    <link rel="stylesheet" href="<?= base_url();?>/assets/css/flaticon.css">


    <!-- Template Main CSS File -->
    <link href="<?= base_url();?>/assets/css/style.css" rel="stylesheet">
    <!--link href="<?= base_url();?>/assets/css/style2.css" rel="stylesheet">-->


    <title><?= $judul; ?></title>
  </head>
  <body>
    <header id="header" class="fixed-top ">
      <div class="container d-flex align-items-center justify-content-between">

        <h1 class="logo"><a href="<?= base_url();?>">DBMPR<span>.</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav class="nav-menu d-none d-lg-block">
          <ul>
            <li class=""><a href="<?= base_url();?>">Home</a></li>
            <li class="drop-down"><a href="">Profil</a>
              <ul>
                <li><a  href="<?= base_url();?>profil/visimisi">Visi dan Misi</a></li>
                <li><a href="<?= base_url();?>profil/sejarah">Sejarah</a></li>
                <li><a href="<?= base_url();?>profil/tugasfungsi">Tugas dan Fungsi</a></li>
                <li><a href="<?= base_url();?>profil/strukturorganisasi">Struktur Organisasi</a></li>
                <li><a href="<?= base_url();?>profil/informasipejabat">Informasi Pejabat</a></li>
                <li><a href="<?= base_url();?>profil/lokasikontak">Lokasi dan Kontak</a></li>
              </ul>
            </li>
            <li class="drop-down"><a href="">Organisasi</a>
              <ul>
                <li><a href="<?= base_url();?>organisasi/sekretariat">Sekretariat Dinas</a></li>
                <li><a href="<?= base_url();?>organisasi/bidang">Bidang</a></li>
                <li><a href="<?= base_url();?>organisasi/uptd">UPTD</a></li>
              </ul>
            </li>
            <li class="drop-down"><a href="">Produk</a>
              <ul>
                <li><a  href="<?= base_url();?>produk/standarnasional">Standar Nasional</a></li>
                <li><a  href="<?= base_url();?>produk/informasianggaran">Informasi Anggaran</a></li>
                <li><a  href="<?= base_url();?>produk/renstra">RENSTRA, Perjanjian Kinerja, IKU</a></li>
                <li><a  href="<?= base_url();?>produk/kebijakan">Kebijakan/Peraturan</a></li>
                <li><a  href="<?= base_url();?>produk/egoverment">e-Goverment Kementrian</a></li>
                <li><a  href="<?= base_url();?>produk/datainformasijalan">Data dan Informasi Jalan</a></li>
              </ul>
            </li>
            <li class="drop-down"><a href="">Informasi Publik</a>
              <ul>
                <li><a  href="<?= base_url();?>informasipublik/dasarhukum">Dasar Hukum</a></li>
                <li><a  href="<?= base_url();?>informasipublik/daftarinformasipublik">Daftar Informasi Publik</a></li>
                <li><a  href="<?= base_url();?>informasipublik/rencanapengadaan">Rencana Pengadaan</a></li>
                <li><a  href="<?= base_url();?>informasipublik/eppid">e-PPID</a></li>
                <li><a  href="<?= base_url();?>informasipublik/permintaaninformasi">Permintaan Informasi</a></li>
              </ul>
            </li>
            <li class="drop-down"><a href="">Publikasi</a>
              <ul>
                <li><a  href="<?= base_url();?>publikasi/guntinganberita">Guntingan Berita</a></li>
                <li><a  href="<?= base_url();?>publikasi/magzsibima">Media Cetak Sibima</a></li>
                <li><a  href="<?= base_url();?>publikasi/glossary">Glossary</a></li>
                <li class="drop-down"><a href="">Berita</a>
                  <ul>
                    <li><a  href="">Peristiwa</a></li>
                    <li><a  href="">Laporan Utama</a></li>
                    <li><a  href="">Profil</a></li>
                  </ul>
                  </li>
              </ul>
            </li>
            <li class="drop-down"><a href="">GalerI</a>
              <ul>
                <li><a  href="<?= base_url();?>profil/foto">Foto</a></li>
                <li><a  href="https://www.youtube.com/channel/UCG3DZfZzo_E24S0dpfvcpHA">Video</a></li>
              </ul>
            </li>
            <li><a href="<?= base_url();?>profil/kontak">Kontak</a></li>

          </ul>
        </nav><!-- .nav-menu -->


      </div>
    </header><!-- End Header -->

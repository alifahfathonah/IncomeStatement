<?php
require 'functions.php';

$data = query("SELECT * FROM periode_laba_rugi ORDER BY created_at ASC");

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>IncomeStatement` </title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" />
  <link rel="stylesheet" href="css/all.min.css" />
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="slick/slick.css" />
  <link rel="stylesheet" type="text/css" href="slick/slick-theme.css" />
  <link rel="stylesheet" href="css/templatemo-style.css" />
</head>
<!--
Parallo Template
https://templatemo.com/tm-534-parallo
-->

<body id="servicesPage">
  <div class="parallax-window" data-parallax="scroll" data-image-src="img/bg-01.jpg">
    <div class="container-fluid">
      <div class="row tm-brand-row">
        <div class="col-lg-4 col-11">
          <div class="tm-brand-container tm-bg-white-transparent">
            <div class="tm-brand-texts">
              <h1 class="text-uppercase tm-brand-name"><b>Income <br>Statement</b></h1>
              <p class="small">Perhitungan Laba Rugi</p>
            </div>
          </div>
        </div>
        <div class="col-lg-8 col-1">
          <div class="tm-nav">
            <nav class="navbar navbar-expand-lg navbar-light tm-bg-white-transparent tm-navbar">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <div class="tm-nav-link-highlight"></div>
                    <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <div class="tm-nav-link-highlight"></div>
                    <a class="nav-link" href="about.php">Calculate</a>
                  </li>
                  <li class="nav-item">
                    <div class="tm-nav-link-highlight"></div>
                    <a class="nav-link" href="services.php">Informasi</a>
                  </li>
                  <li class="nav-item active">
                    <div class="tm-nav-link-highlight"></div>
                    <a class="nav-link" href="testimonials.php">History</a>
                  </li>
                </ul>
              </div>
            </nav>
          </div>
        </div>
      </div>

      <!-- Testimonials header -->
      <section class="row" id="tmServices">
        <div class="col-12 tm-tabs-container">
          <div class="tm-tab-links">
            <ul class="tabs clearfix" data-tabgroup="first-tab-group">
              <?php $i = 1;
              foreach ($data as $dt) : ?>
                <li><a href="#tab<?= $i ?>" class="active">
                    <div class="icon-wrap"><i class="fas fa-2x fa-leaf"></i></div>
                    <?= date('d F Y', strtotime($dt['created_at'])) ?>
                  </a></li>
                <?php $i++ ?>
              <?php endforeach; ?>
            </ul>
          </div>
          <div class="tm-tab-contents">
            <div id="first-tab-group" class="tabgroup">
              <?php $i = 1; ?>
              <?php foreach ($data as $dt) : ?>
                <div id="tab<?= $i ?>">
                  <div class="text-content">
                    <div class="card">
                      <div class="card-header text-dark">
                        Periode <?= date('d F Y', strtotime($dt['created_at'])) ?>
                      </div>
                      <div class="card-body">
                        <table class="table table-hover">
                          <tbody>
                            <tr>
                              <th scope="row">Pendapatan Penjualan</th>
                              <td></td>
                              <td></td>
                            </tr>
                            <tr>
                              <th scope="row pl-3">Penjualan</th>
                              <td></td>
                              <td><?= $dt['penjualan'] ?></td>
                            </tr>
                            <tr>
                              <th scope="row pl-3">Retur Penjualan</th>
                              <td></td>
                              <td class="text-danger">(<?= $dt['retur_penjualan'] ?>)</td>
                            </tr>
                            <tr>
                              <th scope="row pl-3">Diskon Penjualan</th>
                              <td></td>
                              <td class="text-danger">(<?= $dt['potongan_harga'] ?>)</td>
                            </tr>
                            <tr>
                              <th scope="row">Pendapatan Penjualan Bersih</th>
                              <td></td>
                              <?php $pendapatan_bersih = (float)$dt['penjualan'] - (float)$dt['retur_penjualan'] - (float)$dt['potongan_harga']; ?>
                              <td><strong><?= $pendapatan_bersih ?></strong></td>
                            </tr>
                            <tr>
                              <td></td>
                              <td></td>
                              <td></td>
                            </tr>
                            <tr>
                              <th scope="row">Harga Pokok Penjualan</th>
                              <td></td>
                              <td></td>
                            </tr>
                            <tr>
                              <th scope="row pl-3">Persediaan Awal</th>
                              <td><?= $dt['persediaan_barang_jadi_awal'] ?></td>
                              <td></td>
                            </tr>
                            <tr>
                              <th scope="row pl-3">Harga Pokok Produksi</th>
                              <td><?= $dt['harga_pokok_produksi'] ?></td>
                              <td></td>
                            </tr>
                            <tr>
                              <th scope="row pl-3">Persediaan Akhir</th>
                              <td></td>
                              <td class="text-danger">(<?= $dt['persediaan_barang_akhir'] ?>)</td>
                            </tr>
                            <tr>
                              <th scope="row">Harga Pokok Penjualan</th>
                              <td></td>
                              <?php $hpp = (float)$dt['persediaan_barang_jadi_awal'] + (float)$dt['harga_pokok_produksi'] - (float)$dt['persediaan_barang_akhir'] ?>
                              <td><strong><?= $hpp ?></strong></td>
                            </tr>
                            <tr>
                              <th scope="row">Laba Kotor</th>
                              <td></td>
                              <?php $laba_kotor = (float)$pendapatan_bersih - (float)$hpp; ?>
                              <td class="text-primary"><strong><?= $laba_kotor ?></strong></td>
                            </tr>
                            <tr>
                              <td></td>
                              <td></td>
                              <td></td>
                            </tr>
                            <tr>
                              <th scope="row">Beban Operasional</th>
                              <td></td>
                              <td></td>
                            </tr>
                            <tr>
                              <th scope="row pl-3">Total Biaya Penjualan</th>
                              <td class="text-danger">(<?= $dt['total_biaya_operasional'] ?>)</td>
                              <td></td>
                            </tr>
                            <tr>
                              <th scope="row pl-3">Total Biaya Administrasi dan Umum</th>
                              <td class="text-danger">(<?= $dt['total_biaya_administrasi_umum'] ?>)</td>
                              <td></td>
                            </tr>
                            <tr>
                              <th scope="row">Laba Operasional</th>
                              <td></td>
                              <?php $laba_operasional = (float)$laba_kotor - (float)$dt['total_biaya_operasional'] - (float)$dt['total_biaya_administrasi_umum']; ?>
                              <td class="text-primary"><strong><?= $laba_operasional ?></strong></td>
                            </tr>
                            <tr>
                              <td></td>
                              <td></td>
                              <td></td>
                            </tr>
                            <tr>
                              <th scope="row">Pendapatan dan Keuntungan Lain</th>
                              <td></td>
                              <td></td>
                            </tr>
                            <tr>
                              <th scope="row pl-3">Pendapatan Bunga</th>
                              <td></td>
                              <td><?= $dt['pendapatan_bunga']; ?></td>
                            </tr>
                            <tr>
                              <th scope="row pl-3">Keuntungan Penjualan Investasi</th>
                              <td></td>
                              <td><?= $dt['keuntungan_investasi']; ?></td>
                            </tr>
                            <tr>
                              <th scope="row pl-3">Pendapatan Lain-lain</th>
                              <td></td>
                              <td><?= $dt['pendapatan_lain']; ?></td>
                            </tr>
                            <?php $pendapatan_lain = (float)$dt['pendapatan_bunga'] + (float) $dt['keuntungan_investasi'] + (float)$dt['pendapatan_lain'] ?>
                            <tr>
                              <td></td>
                              <td></td>
                              <td></td>
                            </tr>
                            <tr>
                              <th scope="row">Beban dan Kerugian Lain</th>
                              <td></td>
                              <td></td>
                            </tr>
                            <tr>
                              <th scope="row pl-3">Beban Bunga</th>
                              <td></td>
                              <td class="text-danger">(<?= $dt['beban_bunga']; ?>)</td>
                            </tr>
                            <tr>
                              <th scope="row pl-3">Kerugian Atas Penjualan</th>
                              <td></td>
                              <td class="text-danger">(<?= $dt['kerugian_penjualan']; ?>)</td>
                            </tr>
                            <tr>
                              <th scope="row pl-3">Kerugian Lain-lain</th>
                              <td></td>
                              <td class="text-danger">(<?= $dt['kerugian_lain']; ?>)</td>
                            </tr>
                            <?php $beban_lain = (float)$dt['beban_bunga'] + (float) $dt['kerugian_penjualan'] + (float)$dt['kerugian_lain'] ?>
                            <tr>
                              <th scope="row">Laba Sebelum Pajak Penghasilan</th>
                              <td></td>
                              <?php $laba_sebelum_pajak = (float)$laba_operasional + (float)$pendapatan_lain - (float)$beban_lain ?>
                              <td class="text-primary"><strong><?= $laba_sebelum_pajak ?></strong></td>
                            </tr>
                            <tr>
                              <th scope="row pl-3">Pajak Penghasilan</th>
                              <td></td>
                              <td class="text-danger">(<?= $dt['pajak'] ?>)</td>
                            </tr>
                            <tr>
                              <th scope="row">Laba Bersih</th>
                              <td></td>
                              <?php $laba_bersih = (float)$laba_sebelum_pajak - (float)$dt['pajak'] ?>
                              <td class="text-primary"><strong><?= $laba_bersih ?></strong></td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
                <?php $i++; ?>
              <?php endforeach; ?>
            </div>
          </div>

        </div>
      </section>


      <!-- Page footer -->
      <footer class="row">
        <p class="col-12 text-white text-center tm-copyright-text">
          Copyright &copy; 2020 App Landing Page.
          Designed by <a href="#" class="tm-copyright-link">TemplateMo</a>
        </p>
      </footer>
    </div>
    <!-- .container-fluid -->
  </div>

  <script src="js/jquery.min.js"></script>
  <script src="js/parallax.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="slick/slick.min.js"></script>
  <script>
    $(function() {
      $('.tabgroup > div').hide();
      $('.tabgroup > div:first-of-type').show();
      $('.tabs a').click(function(e) {
        e.preventDefault();
        var $this = $(this),
          tabgroup = '#' + $this.parents('.tabs').data('tabgroup'),
          others = $this.closest('li').siblings().children('a'),
          target = $this.attr('href');
        others.removeClass('active');
        $this.addClass('active');
        $(tabgroup).children('div').hide();
        $(target).show();

        // Scroll to tab content (for mobile)
        if ($(window).width() < 992) {
          $('html, body').animate({
            scrollTop: $("#first-tab-group").offset().top
          }, 200);
        }
      })

      $('.tm-carousel').slick({
        dots: true,
        infinite: false,
        arrows: false,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 2,
        responsive: [{
            breakpoint: 1024,
            settings: {
              arrows: false,
              slidesToShow: 2,
              slidesToScroll: 1,
              infinite: true,
              dots: true
            }
          },
          {
            breakpoint: 600,
            settings: {
              arrows: false,
              slidesToShow: 1,
              slidesToScroll: 1
            }
          },
          {
            breakpoint: 480,
            settings: {
              arrows: false,
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
          // You can unslick at a given breakpoint now by adding:
          // settings: "unslick"
          // instead of a settings object
        ]
      });
    });
  </script>
</body>

</html>
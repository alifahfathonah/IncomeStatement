<?php
require 'functions.php';

if (isset($_POST['tambahData'])) {
  if (tambahData($_POST) > 0) {
    echo "  <script>
              alert('Data telah ditambahkan !');
              document.location.href = services.php;
            </script>
            ";
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>IncomeStatement</title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" />
  <link rel="stylesheet" href="css/all.min.css" />
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/templatemo-style.css" />
</head>

<body id="aboutPage">
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
                  <li class="nav-item active">
                    <div class="tm-nav-link-highlight"></div>
                    <a class="nav-link" href="about.php">Calculate</a>
                  </li>
                  <li class="nav-item">
                    <div class="tm-nav-link-highlight"></div>
                    <a class="nav-link" href="services.php">Informasi</a>
                  </li>
                  <li class="nav-item">
                    <div class="tm-nav-link-highlight"></div>
                    <a class="nav-link" href="testimonials.php">History</a>
                  </li>
                </ul>
              </div>
            </nav>
          </div>
        </div>
      </div>

      <!-- About -->
      <form action="" method="post" id="formLabaRugi">
        <section class="row" id="tmAbout">
          <div class="col-xl-6">
            <div class="tm-bg-black-transparent tm-about-box">
              <h3 class="tm-about-name">Pendapatan Penjualan</h3>
              <div class="form-group">
                <label for="penjualan">Penjualan</label>
                <input type="number" class="form-control" placeholder="Masukan disini.." id="penjualan" name="penjualan" value="0">
              </div>
              <div class="form-group">
                <label for="retur_penjualan">Retur Penjualan</label>
                <input type="number" class="form-control" placeholder="Masukan disini.." id="retur_penjualan" name="retur_penjualan" value="0">
              </div>
              <div class="form-group">
                <label for="potongan_harga">Potongan Harga</label>
                <input type="number" class="form-control" placeholder="Masukan disini.." id="potongan_harga" name="potongan_harga" value="0">
              </div>
              <div class="form-group">
                <label for="pendapatan_penjualan_bersih">Pendapatan Penjualan Bersih</label>
                <p id="pendapatan_penjualan_interface">0.00</p>
                <input type="hidden" class="form-control" value="0" readonly id="pendapatan_penjualan_bersih" name="pendapatan_penjualan_bersih">
              </div>
            </div>
          </div>

          <div class="col-xl-6">
            <div class="tm-bg-black-transparent tm-about-box">
              <h3 class="tm-about-name">Harga Pokok Penjualan</h3>
              <div class="form-group">
                <label for="persediaan_barang_jadi_awal">Persediaan Barang Jadi Awal</label>
                <input type="number" class="form-control" placeholder="Masukan disini.." id="persediaan_barang_jadi_awal" name="persediaan_barang_jadi_awal" value="0">
              </div>
              <div class="form-group">
                <label for="harga_pokok_produksi">Harga Pokok produksi</label>
                <input type="number" class="form-control" placeholder="Masukan disini.." id="harga_pokok_produksi" name="harga_pokok_produksi" value="0">
              </div>
              <div class="form-group">
                <label for="persediaan_barang_akhir">Persediaan Akhir</label>
                <input type="number" class="form-control" placeholder="Masukan disini.." id="persediaan_barang_akhir" name="persediaan_barang_akhir" value="0">
              </div>
              <div class="form-group">
                <label for="harga_pokok_penjualan">Harga Pokok Penjualan</label>
                <p id="harga_pokok_penjualan_interface">0.00</p>
                <input type="hidden" class="form-control" value="0" readonly id="harga_pokok_penjualan">
              </div>
            </div>
          </div>

          <div class="col-xl-12">
            <div class="tm-bg-white-transparent tm-app-feature-box">
              <div class="tm-app-feature-icon-container">
                <i class="fas fa-3x fa-air-freshener tm-app-feature-icon"></i>
              </div>
              <div class="tm-app-feature-description-box">
                <h3 class="mb-4 tm-app-feature-title">Laba Kotor</h3>
                <div class="form-group">
                  <h4 id="laba_kotor_interface">0.00</h4>
                  <input type="hidden" class="form-control" value="0" readonly id="laba_kotor" name="laba_kotor">
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-6">
            <div class="tm-bg-black-transparent tm-about-box">
              <h3 class="tm-about-name">Total Biaya Operasional</h3>
              <div class="form-group">
                <label for="total_biaya_operasional">Beban Penjualan</label>
                <input type="number" class="form-control" placeholder="Masukan total biaya operasional penjualan seperti : gaji, iklan, angkut dll.." name="total_biaya_operasional" id="total_biaya_operasional" value="0">
              </div>
              <div class="form-group">
                <label for="total_biaya_administrasi_umum">Beban Administrasi dan Umum</label>
                <input type="number" class="form-control" placeholder="Masukan total biaya administrasi dan umum seperti : asuransi, listrik dll.." name="total_biaya_administrasi_umum" id="total_biaya_administrasi_umum" value="0">
              </div>
            </div>
          </div>

          <div class="col-xl-6">
            <div class="tm-bg-white-transparent tm-app-feature-box">
              <div class="tm-app-feature-icon-container">
                <i class="fas fa-3x fa-fire tm-app-feature-icon"></i>
              </div>
              <div class="tm-app-feature-description-box">
                <h3 class="mb-4 tm-app-feature-title">Laba Operasional</h3>
                <div class="form-group">
                  <h4 id="laba_operasional_interface">0.00</h4>
                  <input type="hidden" class="form-control" value="0" readonly id="laba_operasional" name="laba_operasional">
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-6">
            <div class="tm-bg-black-transparent tm-about-box">
              <h3 class="tm-about-name">Pendapatan dan Keuntungan Lain</h3>
              <div class="form-group">
                <label for="pendapatan_bunga">Pendapatan Bunga</label>
                <input type="number" class="form-control" placeholder="Masukan disini.." id="pendapatan_bunga" name="pendapatan_bunga" value="0">
              </div>
              <div class="form-group">
                <label for="keuntungan_investasi">Keuntungan Penjualan Investasi</label>
                <input type="number" class="form-control" placeholder="Masukan disini.." id="keuntungan_investasi" name="keuntungan_investasi" value="0">
              </div>
              <div class="form-group">
                <label for="pendapatan_lain">Pendapatan Lain-lain</label>
                <input type="number" class="form-control" placeholder="Masukan disini.." id="pendapatan_lain" name="pendapatan_lain" value="0">
              </div>
            </div>
          </div>

          <div class="col-xl-6">
            <div class="tm-bg-black-transparent tm-about-box">
              <h3 class="tm-about-name">Biaya dan Kerugian Lain</h3>
              <div class="form-group">
                <label for="beban_bunga">Beban Bunga</label>
                <input type="number" class="form-control" placeholder="Masukan disini.." id="beban_bunga" name="beban_bunga" value="0">
              </div>
              <div class="form-group">
                <label for="kerugian_penjualan">Kerugian atas Penjualan</label>
                <input type="number" class="form-control" placeholder="Masukan disini.." id="kerugian_penjualan" name="kerugian_penjualan" value="0">
              </div>
              <div class="form-group">
                <label for="kerugian_lain">Kerugian Lain-lain</label>
                <input type="number" class="form-control" placeholder="Masukan disini.." id="kerugian_lain" name="kerugian_lain" value="0">
              </div>
            </div>
          </div>

          <div class="col-xl-12">
            <div class="tm-bg-white-transparent tm-app-feature-box">
              <div class="tm-app-feature-icon-container">
                <i class="fas fa-3x fa-binoculars tm-app-feature-icon"></i>
              </div>
              <div class="tm-app-feature-description-box">
                <h3 class="mb-4 tm-app-feature-title">Laba Bersih Sebelum Pajak</h3>
                <div class="form-group">
                  <h4 id="laba_sebelum_pajak_interface">0.00</h4>
                  <input type="hidden" class="form-control" value="0" readonly id="laba_sebelum_pajak" name="laba_sebelum_pajak">
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-6">
            <div class="tm-bg-black-transparent tm-about-box">
              <h3 class="tm-about-name">Pajak Penghasilan</h3>
              <div class="form-group">
                <label for="pajak">Biaya Pajak Penghasilan</label>
                <input type="number" class="form-control" placeholder="Masukan disini.." id="pajak" name="pajak" value="0">
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="tm-bg-white-transparent tm-app-feature-box">
              <div class="tm-app-feature-icon-container">
                <i class="fas fa-3x fa-campground tm-app-feature-icon"></i>
              </div>
              <div class="tm-app-feature-description-box">
                <div class="row">
                  <div class="col-12">
                    <h3 class="mb-4 tm-app-feature-title">Laba Bersih</h3>
                    <div class="form-group">
                      <h4 id="laba_bersih_interface">0.00</h4>
                      <input type="hidden" class="form-control" value="0" readonly id="laba_bersih" name="laba_bersih">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </div>

    <div class="col-xl-2 mx-auto">
      <button class="btn btn-light mx-3" id="simpanData" type="submit" name="tambahData">Simpan</button>
    </div>
    </section>
    </form>

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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script>
    function commafy(num) {
      var str = num.toString().split('.');
      if (str[0].length >= 5) {
        str[0] = str[0].replace(/(\d)(?=(\d{3})+$)/g, '$1,');
      }
      if (str[1] && str[1].length >= 5) {
        str[1] = str[1].replace(/(\d{3})/g, '$1 ');
      }
      return str.join('.');
    }

    $('#penjualan').on('mouseout', function() {
      var penjualan = $('#penjualan').val();
      var retur_penjualan = $('#retur_penjualan').val();
      var potongan_harga = $('#potongan_harga').val();
      var penjualan_bersih = parseFloat(penjualan) - parseFloat(retur_penjualan) - parseFloat(potongan_harga);
      var persediaan_barang_jadi_awal = $('#persediaan_barang_jadi_awal').val();
      var harga_pokok_produksi = $('#harga_pokok_produksi').val();
      var persediaan_barang_akhir = $('#persediaan_barang_akhir').val();
      var harga_pokok_penjualan = parseFloat(persediaan_barang_jadi_awal) + parseFloat(harga_pokok_produksi) - parseFloat(persediaan_barang_akhir);
      var laba_kotor = parseFloat(penjualan_bersih) - parseFloat(harga_pokok_penjualan);
      var total_biaya_operasional = $('#total_biaya_operasional').val();
      var total_biaya_administrasi_umum = $('#total_biaya_administrasi_umum').val();
      var laba_operasional = parseFloat(laba_kotor) - parseFloat(total_biaya_operasional) - parseFloat(total_biaya_administrasi_umum);
      var pendapatan_bunga = $('#pendapatan_bunga').val();
      var keuntungan_investasi = $('#keuntungan_investasi').val();
      var pendapatan_lain = $('#pendapatan_lain').val();
      var beban_bunga = $('#beban_bunga').val();
      var kerugian_penjualan = $('#kerugian_penjualan').val();
      var kerugian_lain = $('#kerugian_lain').val();
      var laba_sebelum_pajak = parseFloat(laba_operasional) + parseFloat(pendapatan_bunga) + parseFloat(keuntungan_investasi) + parseFloat(pendapatan_lain) - parseFloat(beban_bunga) - parseFloat(kerugian_penjualan) - parseFloat(kerugian_lain);
      var pajak = $('#pajak').val();
      var laba_bersih = parseFloat(laba_sebelum_pajak) - parseFloat(pajak);
      $('#pendapatan_penjualan_bersih').val(penjualan_bersih);
      $('#pendapatan_penjualan_interface').html(commafy(penjualan_bersih));

      $('#harga_pokok_penjualan').val(harga_pokok_penjualan);
      $('#harga_pokok_penjualan_interface').html(commafy(harga_pokok_penjualan));

      $('#laba_kotor').val(laba_kotor);
      $('#laba_kotor_interface').html(commafy(laba_kotor));

      $('#laba_operasional').val(laba_operasional);
      $('#laba_operasional_interface').html(commafy(laba_operasional));

      $('#laba_sebelum_pajak').val(laba_sebelum_pajak);
      $('#laba_sebelum_pajak_interface').html(commafy(laba_sebelum_pajak));

      $('#laba_bersih').val(laba_bersih);
      $('#laba_bersih_interface').html(commafy(laba_bersih));
    })

    $('#retur_penjualan').on('mouseout', function() {
      var penjualan = $('#penjualan').val();
      var retur_penjualan = $('#retur_penjualan').val();
      var potongan_harga = $('#potongan_harga').val();
      var penjualan_bersih = parseFloat(penjualan) - parseFloat(retur_penjualan) - parseFloat(potongan_harga);
      var persediaan_barang_jadi_awal = $('#persediaan_barang_jadi_awal').val();
      var harga_pokok_produksi = $('#harga_pokok_produksi').val();
      var persediaan_barang_akhir = $('#persediaan_barang_akhir').val();
      var harga_pokok_penjualan = parseFloat(persediaan_barang_jadi_awal) + parseFloat(harga_pokok_produksi) - parseFloat(persediaan_barang_akhir);
      var laba_kotor = parseFloat(penjualan_bersih) - parseFloat(harga_pokok_penjualan);
      var total_biaya_operasional = $('#total_biaya_operasional').val();
      var total_biaya_administrasi_umum = $('#total_biaya_administrasi_umum').val();
      var laba_operasional = parseFloat(laba_kotor) - parseFloat(total_biaya_operasional) - parseFloat(total_biaya_administrasi_umum);
      var pendapatan_bunga = $('#pendapatan_bunga').val();
      var keuntungan_investasi = $('#keuntungan_investasi').val();
      var pendapatan_lain = $('#pendapatan_lain').val();
      var beban_bunga = $('#beban_bunga').val();
      var kerugian_penjualan = $('#kerugian_penjualan').val();
      var kerugian_lain = $('#kerugian_lain').val();
      var laba_sebelum_pajak = parseFloat(laba_operasional) + parseFloat(pendapatan_bunga) + parseFloat(keuntungan_investasi) + parseFloat(pendapatan_lain) - parseFloat(beban_bunga) - parseFloat(kerugian_penjualan) - parseFloat(kerugian_lain);
      var pajak = $('#pajak').val();
      var laba_bersih = parseFloat(laba_sebelum_pajak) - parseFloat(pajak);
      $('#pendapatan_penjualan_bersih').val(penjualan_bersih);
      $('#pendapatan_penjualan_interface').html(commafy(penjualan_bersih));

      $('#harga_pokok_penjualan').val(harga_pokok_penjualan);
      $('#harga_pokok_penjualan_interface').html(commafy(harga_pokok_penjualan));

      $('#laba_kotor').val(laba_kotor);
      $('#laba_kotor_interface').html(commafy(laba_kotor));

      $('#laba_operasional').val(laba_operasional);
      $('#laba_operasional_interface').html(commafy(laba_operasional));

      $('#laba_sebelum_pajak').val(laba_sebelum_pajak);
      $('#laba_sebelum_pajak_interface').html(commafy(laba_sebelum_pajak));

      $('#laba_bersih').val(laba_bersih);
      $('#laba_bersih_interface').html(commafy(laba_bersih));
    })

    $('#potongan_harga').on('mouseout', function() {
      var penjualan = $('#penjualan').val();
      var retur_penjualan = $('#retur_penjualan').val();
      var potongan_harga = $('#potongan_harga').val();
      var penjualan_bersih = parseFloat(penjualan) - parseFloat(retur_penjualan) - parseFloat(potongan_harga);
      var persediaan_barang_jadi_awal = $('#persediaan_barang_jadi_awal').val();
      var harga_pokok_produksi = $('#harga_pokok_produksi').val();
      var persediaan_barang_akhir = $('#persediaan_barang_akhir').val();
      var harga_pokok_penjualan = parseFloat(persediaan_barang_jadi_awal) + parseFloat(harga_pokok_produksi) - parseFloat(persediaan_barang_akhir);
      var laba_kotor = parseFloat(penjualan_bersih) - parseFloat(harga_pokok_penjualan);
      var total_biaya_operasional = $('#total_biaya_operasional').val();
      var total_biaya_administrasi_umum = $('#total_biaya_administrasi_umum').val();
      var laba_operasional = parseFloat(laba_kotor) - parseFloat(total_biaya_operasional) - parseFloat(total_biaya_administrasi_umum);
      var pendapatan_bunga = $('#pendapatan_bunga').val();
      var keuntungan_investasi = $('#keuntungan_investasi').val();
      var pendapatan_lain = $('#pendapatan_lain').val();
      var beban_bunga = $('#beban_bunga').val();
      var kerugian_penjualan = $('#kerugian_penjualan').val();
      var kerugian_lain = $('#kerugian_lain').val();
      var laba_sebelum_pajak = parseFloat(laba_operasional) + parseFloat(pendapatan_bunga) + parseFloat(keuntungan_investasi) + parseFloat(pendapatan_lain) - parseFloat(beban_bunga) - parseFloat(kerugian_penjualan) - parseFloat(kerugian_lain);
      var pajak = $('#pajak').val();
      var laba_bersih = parseFloat(laba_sebelum_pajak) - parseFloat(pajak);
      $('#pendapatan_penjualan_bersih').val(penjualan_bersih);
      $('#pendapatan_penjualan_interface').html(commafy(penjualan_bersih));

      $('#harga_pokok_penjualan').val(harga_pokok_penjualan);
      $('#harga_pokok_penjualan_interface').html(commafy(harga_pokok_penjualan));

      $('#laba_kotor').val(laba_kotor);
      $('#laba_kotor_interface').html(commafy(laba_kotor));

      $('#laba_operasional').val(laba_operasional);
      $('#laba_operasional_interface').html(commafy(laba_operasional));

      $('#laba_sebelum_pajak').val(laba_sebelum_pajak);
      $('#laba_sebelum_pajak_interface').html(commafy(laba_sebelum_pajak));

      $('#laba_bersih').val(laba_bersih);
      $('#laba_bersih_interface').html(commafy(laba_bersih));
    })



    $('#persediaan_barang_jadi_awal').on('mouseout', function() {
      var penjualan = $('#penjualan').val();
      var retur_penjualan = $('#retur_penjualan').val();
      var potongan_harga = $('#potongan_harga').val();
      var penjualan_bersih = parseFloat(penjualan) - parseFloat(retur_penjualan) - parseFloat(potongan_harga);
      var persediaan_barang_jadi_awal = $('#persediaan_barang_jadi_awal').val();
      var harga_pokok_produksi = $('#harga_pokok_produksi').val();
      var persediaan_barang_akhir = $('#persediaan_barang_akhir').val();
      var harga_pokok_penjualan = parseFloat(persediaan_barang_jadi_awal) + parseFloat(harga_pokok_produksi) - parseFloat(persediaan_barang_akhir);
      var laba_kotor = parseFloat(penjualan_bersih) - parseFloat(harga_pokok_penjualan);
      var total_biaya_operasional = $('#total_biaya_operasional').val();
      var total_biaya_administrasi_umum = $('#total_biaya_administrasi_umum').val();
      var laba_operasional = parseFloat(laba_kotor) - parseFloat(total_biaya_operasional) - parseFloat(total_biaya_administrasi_umum);
      var pendapatan_bunga = $('#pendapatan_bunga').val();
      var keuntungan_investasi = $('#keuntungan_investasi').val();
      var pendapatan_lain = $('#pendapatan_lain').val();
      var beban_bunga = $('#beban_bunga').val();
      var kerugian_penjualan = $('#kerugian_penjualan').val();
      var kerugian_lain = $('#kerugian_lain').val();
      var laba_sebelum_pajak = parseFloat(laba_operasional) + parseFloat(pendapatan_bunga) + parseFloat(keuntungan_investasi) + parseFloat(pendapatan_lain) - parseFloat(beban_bunga) - parseFloat(kerugian_penjualan) - parseFloat(kerugian_lain);
      var pajak = $('#pajak').val();
      var laba_bersih = parseFloat(laba_sebelum_pajak) - parseFloat(pajak);
      $('#pendapatan_penjualan_bersih').val(penjualan_bersih);
      $('#pendapatan_penjualan_interface').html(commafy(penjualan_bersih));

      $('#harga_pokok_penjualan').val(harga_pokok_penjualan);
      $('#harga_pokok_penjualan_interface').html(commafy(harga_pokok_penjualan));

      $('#laba_kotor').val(laba_kotor);
      $('#laba_kotor_interface').html(commafy(laba_kotor));

      $('#laba_operasional').val(laba_operasional);
      $('#laba_operasional_interface').html(commafy(laba_operasional));

      $('#laba_sebelum_pajak').val(laba_sebelum_pajak);
      $('#laba_sebelum_pajak_interface').html(commafy(laba_sebelum_pajak));

      $('#laba_bersih').val(laba_bersih);
      $('#laba_bersih_interface').html(commafy(laba_bersih));
    })

    $('#harga_pokok_produksi').on('mouseout', function() {
      var penjualan = $('#penjualan').val();
      var retur_penjualan = $('#retur_penjualan').val();
      var potongan_harga = $('#potongan_harga').val();
      var penjualan_bersih = parseFloat(penjualan) - parseFloat(retur_penjualan) - parseFloat(potongan_harga);
      var persediaan_barang_jadi_awal = $('#persediaan_barang_jadi_awal').val();
      var harga_pokok_produksi = $('#harga_pokok_produksi').val();
      var persediaan_barang_akhir = $('#persediaan_barang_akhir').val();
      var harga_pokok_penjualan = parseFloat(persediaan_barang_jadi_awal) + parseFloat(harga_pokok_produksi) - parseFloat(persediaan_barang_akhir);
      var laba_kotor = parseFloat(penjualan_bersih) - parseFloat(harga_pokok_penjualan);
      var total_biaya_operasional = $('#total_biaya_operasional').val();
      var total_biaya_administrasi_umum = $('#total_biaya_administrasi_umum').val();
      var laba_operasional = parseFloat(laba_kotor) - parseFloat(total_biaya_operasional) - parseFloat(total_biaya_administrasi_umum);
      var pendapatan_bunga = $('#pendapatan_bunga').val();
      var keuntungan_investasi = $('#keuntungan_investasi').val();
      var pendapatan_lain = $('#pendapatan_lain').val();
      var beban_bunga = $('#beban_bunga').val();
      var kerugian_penjualan = $('#kerugian_penjualan').val();
      var kerugian_lain = $('#kerugian_lain').val();
      var laba_sebelum_pajak = parseFloat(laba_operasional) + parseFloat(pendapatan_bunga) + parseFloat(keuntungan_investasi) + parseFloat(pendapatan_lain) - parseFloat(beban_bunga) - parseFloat(kerugian_penjualan) - parseFloat(kerugian_lain);
      var pajak = $('#pajak').val();
      var laba_bersih = parseFloat(laba_sebelum_pajak) - parseFloat(pajak);
      $('#pendapatan_penjualan_bersih').val(penjualan_bersih);
      $('#pendapatan_penjualan_interface').html(commafy(penjualan_bersih));

      $('#harga_pokok_penjualan').val(harga_pokok_penjualan);
      $('#harga_pokok_penjualan_interface').html(commafy(harga_pokok_penjualan));

      $('#laba_kotor').val(laba_kotor);
      $('#laba_kotor_interface').html(commafy(laba_kotor));

      $('#laba_operasional').val(laba_operasional);
      $('#laba_operasional_interface').html(commafy(laba_operasional));

      $('#laba_sebelum_pajak').val(laba_sebelum_pajak);
      $('#laba_sebelum_pajak_interface').html(commafy(laba_sebelum_pajak));

      $('#laba_bersih').val(laba_bersih);
      $('#laba_bersih_interface').html(commafy(laba_bersih));
    })

    $('#persediaan_barang_akhir').on('mouseout', function() {
      var penjualan = $('#penjualan').val();
      var retur_penjualan = $('#retur_penjualan').val();
      var potongan_harga = $('#potongan_harga').val();
      var penjualan_bersih = parseFloat(penjualan) - parseFloat(retur_penjualan) - parseFloat(potongan_harga);
      var persediaan_barang_jadi_awal = $('#persediaan_barang_jadi_awal').val();
      var harga_pokok_produksi = $('#harga_pokok_produksi').val();
      var persediaan_barang_akhir = $('#persediaan_barang_akhir').val();
      var harga_pokok_penjualan = parseFloat(persediaan_barang_jadi_awal) + parseFloat(harga_pokok_produksi) - parseFloat(persediaan_barang_akhir);
      var laba_kotor = parseFloat(penjualan_bersih) - parseFloat(harga_pokok_penjualan);
      var total_biaya_operasional = $('#total_biaya_operasional').val();
      var total_biaya_administrasi_umum = $('#total_biaya_administrasi_umum').val();
      var laba_operasional = parseFloat(laba_kotor) - parseFloat(total_biaya_operasional) - parseFloat(total_biaya_administrasi_umum);
      var pendapatan_bunga = $('#pendapatan_bunga').val();
      var keuntungan_investasi = $('#keuntungan_investasi').val();
      var pendapatan_lain = $('#pendapatan_lain').val();
      var beban_bunga = $('#beban_bunga').val();
      var kerugian_penjualan = $('#kerugian_penjualan').val();
      var kerugian_lain = $('#kerugian_lain').val();
      var laba_sebelum_pajak = parseFloat(laba_operasional) + parseFloat(pendapatan_bunga) + parseFloat(keuntungan_investasi) + parseFloat(pendapatan_lain) - parseFloat(beban_bunga) - parseFloat(kerugian_penjualan) - parseFloat(kerugian_lain);
      var pajak = $('#pajak').val();
      var laba_bersih = parseFloat(laba_sebelum_pajak) - parseFloat(pajak);
      $('#pendapatan_penjualan_bersih').val(penjualan_bersih);
      $('#pendapatan_penjualan_interface').html(commafy(penjualan_bersih));

      $('#harga_pokok_penjualan').val(harga_pokok_penjualan);
      $('#harga_pokok_penjualan_interface').html(commafy(harga_pokok_penjualan));

      $('#laba_kotor').val(laba_kotor);
      $('#laba_kotor_interface').html(commafy(laba_kotor));

      $('#laba_operasional').val(laba_operasional);
      $('#laba_operasional_interface').html(commafy(laba_operasional));

      $('#laba_sebelum_pajak').val(laba_sebelum_pajak);
      $('#laba_sebelum_pajak_interface').html(commafy(laba_sebelum_pajak));

      $('#laba_bersih').val(laba_bersih);
      $('#laba_bersih_interface').html(commafy(laba_bersih));
    })

    $('#total_biaya_operasional').on('mouseout', function() {
      var penjualan = $('#penjualan').val();
      var retur_penjualan = $('#retur_penjualan').val();
      var potongan_harga = $('#potongan_harga').val();
      var penjualan_bersih = parseFloat(penjualan) - parseFloat(retur_penjualan) - parseFloat(potongan_harga);
      var persediaan_barang_jadi_awal = $('#persediaan_barang_jadi_awal').val();
      var harga_pokok_produksi = $('#harga_pokok_produksi').val();
      var persediaan_barang_akhir = $('#persediaan_barang_akhir').val();
      var harga_pokok_penjualan = parseFloat(persediaan_barang_jadi_awal) + parseFloat(harga_pokok_produksi) - parseFloat(persediaan_barang_akhir);
      var laba_kotor = parseFloat(penjualan_bersih) - parseFloat(harga_pokok_penjualan);
      var total_biaya_operasional = $('#total_biaya_operasional').val();
      var total_biaya_administrasi_umum = $('#total_biaya_administrasi_umum').val();
      var laba_operasional = parseFloat(laba_kotor) - parseFloat(total_biaya_operasional) - parseFloat(total_biaya_administrasi_umum);
      var pendapatan_bunga = $('#pendapatan_bunga').val();
      var keuntungan_investasi = $('#keuntungan_investasi').val();
      var pendapatan_lain = $('#pendapatan_lain').val();
      var beban_bunga = $('#beban_bunga').val();
      var kerugian_penjualan = $('#kerugian_penjualan').val();
      var kerugian_lain = $('#kerugian_lain').val();
      var laba_sebelum_pajak = parseFloat(laba_operasional) + parseFloat(pendapatan_bunga) + parseFloat(keuntungan_investasi) + parseFloat(pendapatan_lain) - parseFloat(beban_bunga) - parseFloat(kerugian_penjualan) - parseFloat(kerugian_lain);
      var pajak = $('#pajak').val();
      var laba_bersih = parseFloat(laba_sebelum_pajak) - parseFloat(pajak);
      $('#pendapatan_penjualan_bersih').val(penjualan_bersih);
      $('#pendapatan_penjualan_interface').html(commafy(penjualan_bersih));

      $('#harga_pokok_penjualan').val(harga_pokok_penjualan);
      $('#harga_pokok_penjualan_interface').html(commafy(harga_pokok_penjualan));

      $('#laba_kotor').val(laba_kotor);
      $('#laba_kotor_interface').html(commafy(laba_kotor));

      $('#laba_operasional').val(laba_operasional);
      $('#laba_operasional_interface').html(commafy(laba_operasional));

      $('#laba_sebelum_pajak').val(laba_sebelum_pajak);
      $('#laba_sebelum_pajak_interface').html(commafy(laba_sebelum_pajak));

      $('#laba_bersih').val(laba_bersih);
      $('#laba_bersih_interface').html(commafy(laba_bersih));
    })

    $('#total_biaya_administrasi_umum').on('mouseout', function() {
      var penjualan = $('#penjualan').val();
      var retur_penjualan = $('#retur_penjualan').val();
      var potongan_harga = $('#potongan_harga').val();
      var penjualan_bersih = parseFloat(penjualan) - parseFloat(retur_penjualan) - parseFloat(potongan_harga);
      var persediaan_barang_jadi_awal = $('#persediaan_barang_jadi_awal').val();
      var harga_pokok_produksi = $('#harga_pokok_produksi').val();
      var persediaan_barang_akhir = $('#persediaan_barang_akhir').val();
      var harga_pokok_penjualan = parseFloat(persediaan_barang_jadi_awal) + parseFloat(harga_pokok_produksi) - parseFloat(persediaan_barang_akhir);
      var laba_kotor = parseFloat(penjualan_bersih) - parseFloat(harga_pokok_penjualan);
      var total_biaya_operasional = $('#total_biaya_operasional').val();
      var total_biaya_administrasi_umum = $('#total_biaya_administrasi_umum').val();
      var laba_operasional = parseFloat(laba_kotor) - parseFloat(total_biaya_operasional) - parseFloat(total_biaya_administrasi_umum);
      var pendapatan_bunga = $('#pendapatan_bunga').val();
      var keuntungan_investasi = $('#keuntungan_investasi').val();
      var pendapatan_lain = $('#pendapatan_lain').val();
      var beban_bunga = $('#beban_bunga').val();
      var kerugian_penjualan = $('#kerugian_penjualan').val();
      var kerugian_lain = $('#kerugian_lain').val();
      var laba_sebelum_pajak = parseFloat(laba_operasional) + parseFloat(pendapatan_bunga) + parseFloat(keuntungan_investasi) + parseFloat(pendapatan_lain) - parseFloat(beban_bunga) - parseFloat(kerugian_penjualan) - parseFloat(kerugian_lain);
      var pajak = $('#pajak').val();
      var laba_bersih = parseFloat(laba_sebelum_pajak) - parseFloat(pajak);
      $('#pendapatan_penjualan_bersih').val(penjualan_bersih);
      $('#pendapatan_penjualan_interface').html(commafy(penjualan_bersih));

      $('#harga_pokok_penjualan').val(harga_pokok_penjualan);
      $('#harga_pokok_penjualan_interface').html(commafy(harga_pokok_penjualan));

      $('#laba_kotor').val(laba_kotor);
      $('#laba_kotor_interface').html(commafy(laba_kotor));

      $('#laba_operasional').val(laba_operasional);
      $('#laba_operasional_interface').html(commafy(laba_operasional));

      $('#laba_sebelum_pajak').val(laba_sebelum_pajak);
      $('#laba_sebelum_pajak_interface').html(commafy(laba_sebelum_pajak));

      $('#laba_bersih').val(laba_bersih);
      $('#laba_bersih_interface').html(commafy(laba_bersih));
    })

    $('#beban_bunga').on('mouseout', function() {
      var penjualan = $('#penjualan').val();
      var retur_penjualan = $('#retur_penjualan').val();
      var potongan_harga = $('#potongan_harga').val();
      var penjualan_bersih = parseFloat(penjualan) - parseFloat(retur_penjualan) - parseFloat(potongan_harga);
      var persediaan_barang_jadi_awal = $('#persediaan_barang_jadi_awal').val();
      var harga_pokok_produksi = $('#harga_pokok_produksi').val();
      var persediaan_barang_akhir = $('#persediaan_barang_akhir').val();
      var harga_pokok_penjualan = parseFloat(persediaan_barang_jadi_awal) + parseFloat(harga_pokok_produksi) - parseFloat(persediaan_barang_akhir);
      var laba_kotor = parseFloat(penjualan_bersih) - parseFloat(harga_pokok_penjualan);
      var total_biaya_operasional = $('#total_biaya_operasional').val();
      var total_biaya_administrasi_umum = $('#total_biaya_administrasi_umum').val();
      var laba_operasional = parseFloat(laba_kotor) - parseFloat(total_biaya_operasional) - parseFloat(total_biaya_administrasi_umum);
      var pendapatan_bunga = $('#pendapatan_bunga').val();
      var keuntungan_investasi = $('#keuntungan_investasi').val();
      var pendapatan_lain = $('#pendapatan_lain').val();
      var beban_bunga = $('#beban_bunga').val();
      var kerugian_penjualan = $('#kerugian_penjualan').val();
      var kerugian_lain = $('#kerugian_lain').val();
      var laba_sebelum_pajak = parseFloat(laba_operasional) + parseFloat(pendapatan_bunga) + parseFloat(keuntungan_investasi) + parseFloat(pendapatan_lain) - parseFloat(beban_bunga) - parseFloat(kerugian_penjualan) - parseFloat(kerugian_lain);
      var pajak = $('#pajak').val();
      var laba_bersih = parseFloat(laba_sebelum_pajak) - parseFloat(pajak);
      $('#pendapatan_penjualan_bersih').val(penjualan_bersih);
      $('#pendapatan_penjualan_interface').html(commafy(penjualan_bersih));

      $('#harga_pokok_penjualan').val(harga_pokok_penjualan);
      $('#harga_pokok_penjualan_interface').html(commafy(harga_pokok_penjualan));

      $('#laba_kotor').val(laba_kotor);
      $('#laba_kotor_interface').html(commafy(laba_kotor));

      $('#laba_operasional').val(laba_operasional);
      $('#laba_operasional_interface').html(commafy(laba_operasional));

      $('#laba_sebelum_pajak').val(laba_sebelum_pajak);
      $('#laba_sebelum_pajak_interface').html(commafy(laba_sebelum_pajak));

      $('#laba_bersih').val(laba_bersih);
      $('#laba_bersih_interface').html(commafy(laba_bersih));
    })
    $('#kerugian_penjualan').on('mouseout', function() {
      var penjualan = $('#penjualan').val();
      var retur_penjualan = $('#retur_penjualan').val();
      var potongan_harga = $('#potongan_harga').val();
      var penjualan_bersih = parseFloat(penjualan) - parseFloat(retur_penjualan) - parseFloat(potongan_harga);
      var persediaan_barang_jadi_awal = $('#persediaan_barang_jadi_awal').val();
      var harga_pokok_produksi = $('#harga_pokok_produksi').val();
      var persediaan_barang_akhir = $('#persediaan_barang_akhir').val();
      var harga_pokok_penjualan = parseFloat(persediaan_barang_jadi_awal) + parseFloat(harga_pokok_produksi) - parseFloat(persediaan_barang_akhir);
      var laba_kotor = parseFloat(penjualan_bersih) - parseFloat(harga_pokok_penjualan);
      var total_biaya_operasional = $('#total_biaya_operasional').val();
      var total_biaya_administrasi_umum = $('#total_biaya_administrasi_umum').val();
      var laba_operasional = parseFloat(laba_kotor) - parseFloat(total_biaya_operasional) - parseFloat(total_biaya_administrasi_umum);
      var pendapatan_bunga = $('#pendapatan_bunga').val();
      var keuntungan_investasi = $('#keuntungan_investasi').val();
      var pendapatan_lain = $('#pendapatan_lain').val();
      var beban_bunga = $('#beban_bunga').val();
      var kerugian_penjualan = $('#kerugian_penjualan').val();
      var kerugian_lain = $('#kerugian_lain').val();
      var laba_sebelum_pajak = parseFloat(laba_operasional) + parseFloat(pendapatan_bunga) + parseFloat(keuntungan_investasi) + parseFloat(pendapatan_lain) - parseFloat(beban_bunga) - parseFloat(kerugian_penjualan) - parseFloat(kerugian_lain);
      var pajak = $('#pajak').val();
      var laba_bersih = parseFloat(laba_sebelum_pajak) - parseFloat(pajak);
      $('#pendapatan_penjualan_bersih').val(penjualan_bersih);
      $('#pendapatan_penjualan_interface').html(commafy(penjualan_bersih));

      $('#harga_pokok_penjualan').val(harga_pokok_penjualan);
      $('#harga_pokok_penjualan_interface').html(commafy(harga_pokok_penjualan));

      $('#laba_kotor').val(laba_kotor);
      $('#laba_kotor_interface').html(commafy(laba_kotor));

      $('#laba_operasional').val(laba_operasional);
      $('#laba_operasional_interface').html(commafy(laba_operasional));

      $('#laba_sebelum_pajak').val(laba_sebelum_pajak);
      $('#laba_sebelum_pajak_interface').html(commafy(laba_sebelum_pajak));

      $('#laba_bersih').val(laba_bersih);
      $('#laba_bersih_interface').html(commafy(laba_bersih));
    })
    $('#kerugian_lain').on('mouseout', function() {
      var penjualan = $('#penjualan').val();
      var retur_penjualan = $('#retur_penjualan').val();
      var potongan_harga = $('#potongan_harga').val();
      var penjualan_bersih = parseFloat(penjualan) - parseFloat(retur_penjualan) - parseFloat(potongan_harga);
      var persediaan_barang_jadi_awal = $('#persediaan_barang_jadi_awal').val();
      var harga_pokok_produksi = $('#harga_pokok_produksi').val();
      var persediaan_barang_akhir = $('#persediaan_barang_akhir').val();
      var harga_pokok_penjualan = parseFloat(persediaan_barang_jadi_awal) + parseFloat(harga_pokok_produksi) - parseFloat(persediaan_barang_akhir);
      var laba_kotor = parseFloat(penjualan_bersih) - parseFloat(harga_pokok_penjualan);
      var total_biaya_operasional = $('#total_biaya_operasional').val();
      var total_biaya_administrasi_umum = $('#total_biaya_administrasi_umum').val();
      var laba_operasional = parseFloat(laba_kotor) - parseFloat(total_biaya_operasional) - parseFloat(total_biaya_administrasi_umum);
      var pendapatan_bunga = $('#pendapatan_bunga').val();
      var keuntungan_investasi = $('#keuntungan_investasi').val();
      var pendapatan_lain = $('#pendapatan_lain').val();
      var beban_bunga = $('#beban_bunga').val();
      var kerugian_penjualan = $('#kerugian_penjualan').val();
      var kerugian_lain = $('#kerugian_lain').val();
      var laba_sebelum_pajak = parseFloat(laba_operasional) + parseFloat(pendapatan_bunga) + parseFloat(keuntungan_investasi) + parseFloat(pendapatan_lain) - parseFloat(beban_bunga) - parseFloat(kerugian_penjualan) - parseFloat(kerugian_lain);
      var pajak = $('#pajak').val();
      var laba_bersih = parseFloat(laba_sebelum_pajak) - parseFloat(pajak);
      $('#pendapatan_penjualan_bersih').val(penjualan_bersih);
      $('#pendapatan_penjualan_interface').html(commafy(penjualan_bersih));

      $('#harga_pokok_penjualan').val(harga_pokok_penjualan);
      $('#harga_pokok_penjualan_interface').html(commafy(harga_pokok_penjualan));

      $('#laba_kotor').val(laba_kotor);
      $('#laba_kotor_interface').html(commafy(laba_kotor));

      $('#laba_operasional').val(laba_operasional);
      $('#laba_operasional_interface').html(commafy(laba_operasional));

      $('#laba_sebelum_pajak').val(laba_sebelum_pajak);
      $('#laba_sebelum_pajak_interface').html(commafy(laba_sebelum_pajak));

      $('#laba_bersih').val(laba_bersih);
      $('#laba_bersih_interface').html(commafy(laba_bersih));
    })
    $('#pendapatan_bunga').on('mouseout', function() {
      var penjualan = $('#penjualan').val();
      var retur_penjualan = $('#retur_penjualan').val();
      var potongan_harga = $('#potongan_harga').val();
      var penjualan_bersih = parseFloat(penjualan) - parseFloat(retur_penjualan) - parseFloat(potongan_harga);
      var persediaan_barang_jadi_awal = $('#persediaan_barang_jadi_awal').val();
      var harga_pokok_produksi = $('#harga_pokok_produksi').val();
      var persediaan_barang_akhir = $('#persediaan_barang_akhir').val();
      var harga_pokok_penjualan = parseFloat(persediaan_barang_jadi_awal) + parseFloat(harga_pokok_produksi) - parseFloat(persediaan_barang_akhir);
      var laba_kotor = parseFloat(penjualan_bersih) - parseFloat(harga_pokok_penjualan);
      var total_biaya_operasional = $('#total_biaya_operasional').val();
      var total_biaya_administrasi_umum = $('#total_biaya_administrasi_umum').val();
      var laba_operasional = parseFloat(laba_kotor) - parseFloat(total_biaya_operasional) - parseFloat(total_biaya_administrasi_umum);
      var pendapatan_bunga = $('#pendapatan_bunga').val();
      var keuntungan_investasi = $('#keuntungan_investasi').val();
      var pendapatan_lain = $('#pendapatan_lain').val();
      var beban_bunga = $('#beban_bunga').val();
      var kerugian_penjualan = $('#kerugian_penjualan').val();
      var kerugian_lain = $('#kerugian_lain').val();
      var laba_sebelum_pajak = parseFloat(laba_operasional) + parseFloat(pendapatan_bunga) + parseFloat(keuntungan_investasi) + parseFloat(pendapatan_lain) - parseFloat(beban_bunga) - parseFloat(kerugian_penjualan) - parseFloat(kerugian_lain);
      var pajak = $('#pajak').val();
      var laba_bersih = parseFloat(laba_sebelum_pajak) - parseFloat(pajak);
      $('#pendapatan_penjualan_bersih').val(penjualan_bersih);
      $('#pendapatan_penjualan_interface').html(commafy(penjualan_bersih));

      $('#harga_pokok_penjualan').val(harga_pokok_penjualan);
      $('#harga_pokok_penjualan_interface').html(commafy(harga_pokok_penjualan));

      $('#laba_kotor').val(laba_kotor);
      $('#laba_kotor_interface').html(commafy(laba_kotor));

      $('#laba_operasional').val(laba_operasional);
      $('#laba_operasional_interface').html(commafy(laba_operasional));

      $('#laba_sebelum_pajak').val(laba_sebelum_pajak);
      $('#laba_sebelum_pajak_interface').html(commafy(laba_sebelum_pajak));

      $('#laba_bersih').val(laba_bersih);
      $('#laba_bersih_interface').html(commafy(laba_bersih));
    })
    $('#keuntungan_investasi').on('mouseout', function() {
      var penjualan = $('#penjualan').val();
      var retur_penjualan = $('#retur_penjualan').val();
      var potongan_harga = $('#potongan_harga').val();
      var penjualan_bersih = parseFloat(penjualan) - parseFloat(retur_penjualan) - parseFloat(potongan_harga);
      var persediaan_barang_jadi_awal = $('#persediaan_barang_jadi_awal').val();
      var harga_pokok_produksi = $('#harga_pokok_produksi').val();
      var persediaan_barang_akhir = $('#persediaan_barang_akhir').val();
      var harga_pokok_penjualan = parseFloat(persediaan_barang_jadi_awal) + parseFloat(harga_pokok_produksi) - parseFloat(persediaan_barang_akhir);
      var laba_kotor = parseFloat(penjualan_bersih) - parseFloat(harga_pokok_penjualan);
      var total_biaya_operasional = $('#total_biaya_operasional').val();
      var total_biaya_administrasi_umum = $('#total_biaya_administrasi_umum').val();
      var laba_operasional = parseFloat(laba_kotor) - parseFloat(total_biaya_operasional) - parseFloat(total_biaya_administrasi_umum);
      var pendapatan_bunga = $('#pendapatan_bunga').val();
      var keuntungan_investasi = $('#keuntungan_investasi').val();
      var pendapatan_lain = $('#pendapatan_lain').val();
      var beban_bunga = $('#beban_bunga').val();
      var kerugian_penjualan = $('#kerugian_penjualan').val();
      var kerugian_lain = $('#kerugian_lain').val();
      var laba_sebelum_pajak = parseFloat(laba_operasional) + parseFloat(pendapatan_bunga) + parseFloat(keuntungan_investasi) + parseFloat(pendapatan_lain) - parseFloat(beban_bunga) - parseFloat(kerugian_penjualan) - parseFloat(kerugian_lain);
      var pajak = $('#pajak').val();
      var laba_bersih = parseFloat(laba_sebelum_pajak) - parseFloat(pajak);
      $('#pendapatan_penjualan_bersih').val(penjualan_bersih);
      $('#pendapatan_penjualan_interface').html(commafy(penjualan_bersih));

      $('#harga_pokok_penjualan').val(harga_pokok_penjualan);
      $('#harga_pokok_penjualan_interface').html(commafy(harga_pokok_penjualan));

      $('#laba_kotor').val(laba_kotor);
      $('#laba_kotor_interface').html(commafy(laba_kotor));

      $('#laba_operasional').val(laba_operasional);
      $('#laba_operasional_interface').html(commafy(laba_operasional));

      $('#laba_sebelum_pajak').val(laba_sebelum_pajak);
      $('#laba_sebelum_pajak_interface').html(commafy(laba_sebelum_pajak));

      $('#laba_bersih').val(laba_bersih);
      $('#laba_bersih_interface').html(commafy(laba_bersih));
    })
    $('#keuntungan_lain').on('mouseout', function() {
      var penjualan = $('#penjualan').val();
      var retur_penjualan = $('#retur_penjualan').val();
      var potongan_harga = $('#potongan_harga').val();
      var penjualan_bersih = parseFloat(penjualan) - parseFloat(retur_penjualan) - parseFloat(potongan_harga);
      var persediaan_barang_jadi_awal = $('#persediaan_barang_jadi_awal').val();
      var harga_pokok_produksi = $('#harga_pokok_produksi').val();
      var persediaan_barang_akhir = $('#persediaan_barang_akhir').val();
      var harga_pokok_penjualan = parseFloat(persediaan_barang_jadi_awal) + parseFloat(harga_pokok_produksi) - parseFloat(persediaan_barang_akhir);
      var laba_kotor = parseFloat(penjualan_bersih) - parseFloat(harga_pokok_penjualan);
      var total_biaya_operasional = $('#total_biaya_operasional').val();
      var total_biaya_administrasi_umum = $('#total_biaya_administrasi_umum').val();
      var laba_operasional = parseFloat(laba_kotor) - parseFloat(total_biaya_operasional) - parseFloat(total_biaya_administrasi_umum);
      var pendapatan_bunga = $('#pendapatan_bunga').val();
      var keuntungan_investasi = $('#keuntungan_investasi').val();
      var pendapatan_lain = $('#pendapatan_lain').val();
      var beban_bunga = $('#beban_bunga').val();
      var kerugian_penjualan = $('#kerugian_penjualan').val();
      var kerugian_lain = $('#kerugian_lain').val();
      var laba_sebelum_pajak = parseFloat(laba_operasional) + parseFloat(pendapatan_bunga) + parseFloat(keuntungan_investasi) + parseFloat(pendapatan_lain) - parseFloat(beban_bunga) - parseFloat(kerugian_penjualan) - parseFloat(kerugian_lain);
      var pajak = $('#pajak').val();
      var laba_bersih = parseFloat(laba_sebelum_pajak) - parseFloat(pajak);
      $('#pendapatan_penjualan_bersih').val(penjualan_bersih);
      $('#pendapatan_penjualan_interface').html(commafy(penjualan_bersih));

      $('#harga_pokok_penjualan').val(harga_pokok_penjualan);
      $('#harga_pokok_penjualan_interface').html(commafy(harga_pokok_penjualan));

      $('#laba_kotor').val(laba_kotor);
      $('#laba_kotor_interface').html(commafy(laba_kotor));

      $('#laba_operasional').val(laba_operasional);
      $('#laba_operasional_interface').html(commafy(laba_operasional));

      $('#laba_sebelum_pajak').val(laba_sebelum_pajak);
      $('#laba_sebelum_pajak_interface').html(commafy(laba_sebelum_pajak));

      $('#laba_bersih').val(laba_bersih);
      $('#laba_bersih_interface').html(commafy(laba_bersih));
    })
    $('#pajak').on('mouseout', function() {
      var penjualan = $('#penjualan').val();
      var retur_penjualan = $('#retur_penjualan').val();
      var potongan_harga = $('#potongan_harga').val();
      var penjualan_bersih = parseFloat(penjualan) - parseFloat(retur_penjualan) - parseFloat(potongan_harga);
      var persediaan_barang_jadi_awal = $('#persediaan_barang_jadi_awal').val();
      var harga_pokok_produksi = $('#harga_pokok_produksi').val();
      var persediaan_barang_akhir = $('#persediaan_barang_akhir').val();
      var harga_pokok_penjualan = parseFloat(persediaan_barang_jadi_awal) + parseFloat(harga_pokok_produksi) - parseFloat(persediaan_barang_akhir);
      var laba_kotor = parseFloat(penjualan_bersih) - parseFloat(harga_pokok_penjualan);
      var total_biaya_operasional = $('#total_biaya_operasional').val();
      var total_biaya_administrasi_umum = $('#total_biaya_administrasi_umum').val();
      var laba_operasional = parseFloat(laba_kotor) - parseFloat(total_biaya_operasional) - parseFloat(total_biaya_administrasi_umum);
      var pendapatan_bunga = $('#pendapatan_bunga').val();
      var keuntungan_investasi = $('#keuntungan_investasi').val();
      var pendapatan_lain = $('#pendapatan_lain').val();
      var beban_bunga = $('#beban_bunga').val();
      var kerugian_penjualan = $('#kerugian_penjualan').val();
      var kerugian_lain = $('#kerugian_lain').val();
      var laba_sebelum_pajak = parseFloat(laba_operasional) + parseFloat(pendapatan_bunga) + parseFloat(keuntungan_investasi) + parseFloat(pendapatan_lain) - parseFloat(beban_bunga) - parseFloat(kerugian_penjualan) - parseFloat(kerugian_lain);
      var pajak = $('#pajak').val();
      var laba_bersih = parseFloat(laba_sebelum_pajak) - parseFloat(pajak);
      $('#pendapatan_penjualan_bersih').val(penjualan_bersih);
      $('#pendapatan_penjualan_interface').html(commafy(penjualan_bersih));

      $('#harga_pokok_penjualan').val(harga_pokok_penjualan);
      $('#harga_pokok_penjualan_interface').html(commafy(harga_pokok_penjualan));

      $('#laba_kotor').val(laba_kotor);
      $('#laba_kotor_interface').html(commafy(laba_kotor));

      $('#laba_operasional').val(laba_operasional);
      $('#laba_operasional_interface').html(commafy(laba_operasional));

      $('#laba_sebelum_pajak').val(laba_sebelum_pajak);
      $('#laba_sebelum_pajak_interface').html(commafy(laba_sebelum_pajak));

      $('#laba_bersih').val(laba_bersih);
      $('#laba_bersih_interface').html(commafy(laba_bersih));
    })
  </script>
</body>

</html>
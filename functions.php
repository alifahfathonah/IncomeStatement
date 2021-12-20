<?php
$conn = mysqli_connect('localhost', 'root', '', 'incomestatement');

//fungsi query
function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}


function tambahData($data)
{
    global $conn;

    $penjualan = $data['penjualan'];
    $retur_penjualan = $data['retur_penjualan'];
    $potongan_harga = $data['potongan_harga'];
    $persediaan_barang_jadi_awal = $data['persediaan_barang_jadi_awal'];
    $harga_pokok_produksi = $data['harga_pokok_produksi'];
    $persediaan_barang_akhir = $data['persediaan_barang_akhir'];

    $total_biaya_operasional = $data['total_biaya_operasional'];
    $total_biaya_administrasi_umum = $data['total_biaya_administrasi_umum'];

    $pendapatan_bunga = $data['pendapatan_bunga'];
    $keuntungan_investasi = $data['keuntungan_investasi'];
    $pendapatan_lain = $data['pendapatan_lain'];
    $beban_bunga = $data['beban_bunga'];
    $kerugian_penjualan = $data['kerugian_penjualan'];
    $kerugian_lain = $data['kerugian_lain'];

    $pajak = $data['pajak'];

    $query = "INSERT INTO periode_laba_rugi VALUES ('', $penjualan, $retur_penjualan, $potongan_harga, $persediaan_barang_jadi_awal, $harga_pokok_produksi, $persediaan_barang_akhir, $total_biaya_operasional, $total_biaya_administrasi_umum, $pendapatan_bunga, $keuntungan_investasi, $pendapatan_lain, $beban_bunga, $kerugian_penjualan, $kerugian_lain, $pajak, now())";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

<?php

function insert($data){
    global $koneksi;

    $jenis_bahan        = mysqli_real_escape_string($koneksi, $data['jenis_bahan']);
    $nama_bahan         = mysqli_real_escape_string($koneksi, $data['nama_bahan']);
    $no_bets_lot        = mysqli_real_escape_string($koneksi, $data['no_bets_lot']);
    $jumlah_bahan       = mysqli_real_escape_string($koneksi, $data['jumlah_bahan']);
    $produsen_bahan     = mysqli_real_escape_string($koneksi, $data['produsen_bahan']);
    $pemasok_bahan      = mysqli_real_escape_string($koneksi, $data['pemasok_bahan']);
    $tanggal_datang     = mysqli_real_escape_string($koneksi, $data['tanggal_datang']);
    $no_sp_oc_kontrak   = mysqli_real_escape_string($koneksi, $data['no_sp_oc_kontrak']);
    $no_ppb             = mysqli_real_escape_string($koneksi, $data['no_ppb']);
    $no_lab             = mysqli_real_escape_string($koneksi, $data['no_lab']);
    $alasan_keluhan     = mysqli_real_escape_string($koneksi, $data['alasan_keluhan']);
    $rekomendasi_bidang = mysqli_real_escape_string($koneksi, $data['rekomendasi_bidang']);
    $catatan            = mysqli_real_escape_string($koneksi, $data['catatan']);
    $distribusi_bidang  = mysqli_real_escape_string($koneksi, $data['distribusi_bidang']);


    $sqlForm_KBA  = "INSERT INTO tbl_kba VALUES (null, '$jenis_bahan', '$nama_bahan', '$no_bets_lot', '$jumlah_bahan', '$produsen_bahan', '$pemasok_bahan', '$tanggal_datang', '$no_sp_oc_kontrak', '$no_ppb', '$no_lab', '$alasan_keluhan', '$rekomendasi_bidang', '$catatan', '$distribusi_bidang')";
    mysqli_query($koneksi, $sqlForm_KBA);

    return mysqli_affected_rows($koneksi);
}

?>
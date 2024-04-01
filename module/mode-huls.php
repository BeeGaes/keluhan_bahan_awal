<?php

function insert($data){
    global $koneksi;

    $no_huls                = mysqli_real_escape_string($koneksi, $data['no_huls']);
    $nama_bahan             = mysqli_real_escape_string($koneksi, $data['nama_bahan']);
    $no_bets                = mysqli_real_escape_string($koneksi, $data['no_bets']);
    $no_spesifikasi         = mysqli_real_escape_string($koneksi, $data['no_spesifikasi']);
    $no_metode_analisa      = mysqli_real_escape_string($koneksi, $data['no_metode_analisa']);
    $hasil_pengujian        = mysqli_real_escape_string($koneksi, $data['hasil_pengujian']);
    $persyaratan_hasil_uji  = mysqli_real_escape_string($koneksi, $data['persyaratan_hasil_uji']);
    $tanggal_sampling       = mysqli_real_escape_string($koneksi, $data['tanggal_sampling']);
    $tanggal_pengujian      = mysqli_real_escape_string($koneksi, $data['tanggal_pengujian']);
    $nama_analis            = mysqli_real_escape_string($koneksi, $data['nama_analis']);
    $file                   = mysqli_real_escape_string($koneksi, $data['file']);

    $sqlHuls = "INSERT INTO tbl_huls VALUES (null, '$no_huls', '$nama_bahan', '$no_bets', '$no_spesifikasi', '$no_metode_analisa', '$hasil_pengujian', '$persyaratan_hasil_uji', '$tanggal_sampling', '$tanggal_pengujian', '$nama_analis', '$file')";
    mysqli_query($koneksi, $sqlHuls);

    return mysqli_affected_rows($koneksi);
}

?>
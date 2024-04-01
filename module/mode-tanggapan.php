<?php

function insert($data){
    global $koneksi;

    $tanggapan_bidang_p4             = mysqli_real_escape_string($koneksi, $data['tanggapan_bidang_p4']);
    $tanggapan_bidang_pengadaan     = mysqli_real_escape_string($koneksi, $data['tanggapan_bidang_pengadaan']);
    $tanggal_penyelesaian           = mysqli_real_escape_string($koneksi, $data['tanggal_penyelesaian']);
    $tinjauan                       = mysqli_real_escape_string($koneksi, $data['tinjauan']);
    $status                         = mysqli_real_escape_string($koneksi, $data['status']);

    $sqlTanggapan = "INSERT INTO tbl_tanggapan VALUES (null, null, '$tanggapan_bidang_p4', '$tanggapan_bidang_pengadaan', '$tanggal_penyelesaian', '$tinjauan', '$status',')";
    mysqli_query($koneksi, $sqlTanggapan);

    return mysqli_affected_rows($koneksi);
}

?>
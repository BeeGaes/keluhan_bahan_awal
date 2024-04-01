<?php

session_start();

if (!isset($_SESSION["ssLogin"])) {
    header("location: ../auth/login.php");
    exit();
}

require "../config/config.php";
require "../config/functions.php";
require "../module/mode-form-kba.php";



$title = "Tambah Form Kba";
require "../template/header.php";
require "../template/navbar.php";
require "../template/sidebar.php";

$alert = '';

if (isset($_POST['simpan'])) {
    if (insert($_POST)) {
        $alert = '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <i class="icon fas fa-check"></i> Form KBA berhasil ditambahkan..
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
    }
}

?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Form KBA</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= $main_url ?>dashboard.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?= $main_url ?>form_kba/index.php">Form KBA</a></li>
                        <li class="breadcrumb-item active"> Add Form KBA</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <form action="" method="POST">
                    <div class="card-header">
                        <h3 class="card-title"><i class="fas fa-plus fa-sm"></i> Add Keluhan</h3>
                        <button type="submit" name="simpan" class="btn btn-primary btn-sm float-right"><i
                                class="fas fa-save"></i> Simpan</button>
                        <button type="reset" class="btn btn-danger btn-sm float-right mr-1"><i class="fas fa-times"></i>
                            Reset</button>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-8 mb-3">
                                <?php if ($alert != '') {
                                    echo $alert;
                                } ?>
                                <div class="form-group">
                                    <label for="jenis_bahan">Jenis Bahan :</label>
                                    <select name="jenis_bahan" id="jenis_bahan" class="form-control">
                                        <option value="">-- Jenis Bahan --</option>
                                        <option value="1">Bahan Aktif</option>
                                        <option value="2">Bahan Penolong</option>
                                        <option value="3">Bahan Kemas</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="name">Nama Bahan :</label>
                                    <input type="text" name="nama_bahan" class="form-control" id="nama_bahan" required>
                                </div>
                                <div class="form-group">
                                    <label for="no_bets_lot">No.Bets/Lot :</label>
                                    <input type="text" name="no_bets_lot" class="form-control" id="no_bets_lot"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label for="jumlah_bahan">Jumlah Bahan :</label>
                                    <input type="text" name="jumlah_bahan" class="form-control" id="jumlah_bahan"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label for="produsen_bahan">Produsen :</label>
                                    <input type="text" name="produsen_bahan" class="form-control" id="produsen_bahan"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label for="pemasok_bahan">Pemasok :</label>
                                    <input type="text" name="pemasok_bahan" class="form-control" id="pemasok_bahan"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label for="tanggal_datang">Tanggal Datang :</label>
                                    <input type="date" name="tanggal_datang" class="form-control" id="tanggal_datang"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label for="no_sp_oc_kontrak">No. SP/OC/Kontrak :</label>
                                    <input type="text" name="no_sp_oc_kontrak" class="form-control"
                                        id="no_sp_oc_kontrak" required>
                                </div>
                                <div class="form-group">
                                    <label for="no_ppb">No. PPB :</label>
                                    <input type="text" name="no_ppb" class="form-control" id="no_ppb" required>
                                </div>
                                <div class="form-group">
                                    <label for="no_lab">No. LAB :</label>
                                    <input type="text" name="no_lab" class="form-control" id="no_lab" required>
                                </div>
                                <div class="form-group">
                                    <label for="alasan_keluhan">Alasan keluhan :</label>
                                    <input type="text" name="alasan_keluhan" class="form-control" id="alasan_keluhan"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label for="rekomendasi_bidang">Rekomendasi Bidang Pengawas Mutu :</label>
                                    <textarea name="rekomendasi_bidang" id="rekomendasi_bidang" rows="1"
                                        class="form-control" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="catatan">Catatan :</label>
                                    <input type="text" name="catatan" class="form-control" id="catatan" required>
                                </div>
                                <div class="form-group">
                                    <label for="distribusi_bidang">Distribusi :</label>
                                    <select name="distribusi_bidang" id="distribusi_bidang" class="form-control">
                                        <option value="">-- Distribusi Bidang --</option>
                                        <option value="1">Bidang Pengadaan</option>
                                        <option value="2">Bidang SCM</option>
                                        <option value="3">Bidang LBA</option>
                                        <option value="3">Arsip</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </section>

    <?php

    require "../template/footer.php";

    ?>
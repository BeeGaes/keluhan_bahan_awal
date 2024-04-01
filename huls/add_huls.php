<?php

session_start();

if (!isset ($_SESSION["ssLogin"])) {
    header("location: ../auth/login.php");
    exit();
}

require "../config/config.php";
require "../config/functions.php";
require "../module/mode-huls.php";

$title = "Tambah Huls";
require "../template/header.php";
require "../template/navbar.php";
require "../template/sidebar.php";

$alert = '';

if (isset ($_POST['simpan'])) {
    if (insert($_POST)) {
        $alert = '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <i class="icon fas fa-check"></i> Huls berhasil ditambahkan..
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
    }
}

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Investigasi HULS</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= $main_url ?>dashboard.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?= $main_url ?>huls/index.phpa">Investigasi Huls</a>
                        </li>
                        <li class="breadcrumb-item active">Add Huls</li>
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
                        <h3 class="card-title"><i class="fas fa-plus fa-sm"></i> Add Huls</h3>
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
                                    <label for="no_huls">No. HULS :</label>
                                    <input type="text" name="no_huls" class="form-control" id="no_huls" required>
                                </div>
                                <div class="form-group">
                                    <label for="name">Nama Bahan :</label>
                                    <input type="text" name="nama_bahan" class="form-control" id="nama_bahan" required>
                                </div>
                                <div class="form-group">
                                    <label for="no_bets">No. Bets :</label>
                                    <input type="text" name="no_bets" class="form-control" id="no_bets" required>
                                </div>
                                <div class="form-group">
                                    <label for="no_spesifikasi">No. Spesifikasi :</label>
                                    <input type="text" name="no_spesifikasi" class="form-control" id="no_spesifikasi"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label for="no_metode_analisa">No. Metode Analisa :</label>
                                    <input type="text" name="no_metode_analisa" class="form-control"
                                        id="no_metode_analisa" required>
                                </div>
                                <div class="form-group">
                                    <label for="hasil_pengujian">Hasil Pengujian :</label>
                                    <input type="text" name="hasil_pengujian" class="form-control" id="hasil_pengujian"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label for="persyaratan_hasil_uji">Persyaratan Hasil Uji :</label>
                                    <input type="text" name="persyaratan_hasil_uji" class="form-control"
                                        id="persyaratan_hasil_uji" required>
                                </div>
                                <div class="form-group">
                                    <label for="tanggal_sampling">Tanggal Sampling :</label>
                                    <input type="date" name="tanggal_sampling" class="form-control"
                                        id="tanggal_sampling" required>
                                </div>
                                <div class="form-group">
                                    <label for="tanggal_pengujian">Tanggal Pengujian :</label>
                                    <input type="date" name="tanggal_pengujian" class="form-control"
                                        id="tanggal_pengujian" required>
                                </div>
                                <div class="form-group">
                                    <label for="name">Nama Analis :</label>
                                    <input type="text" name="nama_analis" class="form-control" id="nama_analis"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label for="file">Pilih File (Excel, Word, atau PDF):</label>
                                    <input type="file" id="file" name="file">
                                    <input type="submit" value="Upload" name="submit" required>
                                </div>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </section>

    <?php

    require "../template/footer.php"

        ?>
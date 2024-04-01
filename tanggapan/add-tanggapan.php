<?php

session_start();

if (!isset($_SESSION["ssLogin"])) {
    header("location: ../auth/login.php");
    exit();
}

require "../config/config.php";
require "../config/functions.php";
require "../module/mode-tanggapan.php";

$title = "Tambah Form Tanggapan";
require "../template/header.php";
require "../template/navbar.php";
require "../template/sidebar.php";

$alert ='';

if (isset($_POST['simpan'])){
    if(insert($_POST)){
        $alert = '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <i class="icon fas fa-check"></i> tanggapan berhasil ditambahkan..
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
                    <h1 class="m-0">Tanggapan</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= $main_url ?>dashboard.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?= $main_url ?>tanggapan">Tanggapan</a></li>
                        <li class="breadcrumb-item active"> Add Form Tanggapan</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"><i class="fas fa-plus fa-sm"></i> Add Tanggapan</h3>
                    <button type="submit" name="simpan" class="btn btn-primary btn-sm float-right"><i
                            class="fas fa-save"></i> Simpan</button>
                    <button type="reset" class="btn btn-danger btn-sm float-right mr-1"><i class="fas fa-times"></i>
                        Reset</button>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-8 mb-3 pr-3">
                            <div class="form-group">
                                <label for="tanggapan_bidang_p4">Bidang PPPP :</label>
                                <input type="text" name="tanggapan_bidang_p4" class="form-control" id="tanggapan_bidang_p4" required>
                            </div>
                            <div class="form-group">
                                <label for="tanggapan_bidang_pengadaan">Bidang Pengadaan :</label>
                                <input type="text" name="tanggapan_bidang_pengadaan" class="form-control" id="tanggapan_bidang_pengadaan" required>
                            </div>
                            <div class="form-group">
                                <label for="tanggal_penyelesaian">Rencana Tanggal Penyelesaian :</label>
                                <input type="date" name="tanggal_penyelesaian" class="form-control" id="tanggal_penyelesaian" required>
                            </div>
                            <div class="form-group">
                                <label for="tinjauan">Tinjauan Terhadap Tanggapan :</label>
                                <input type="text" name="tinjauan" class="form-control" id="tinjauan" required>
                            </div>
                            <div class="form-group">
                                    <label for="status">Status :</label>
                                    <select name="status" id="status" class="form-control">
                                        <option value="">-- Status --</option>
                                        <option value="1">Selesai</option>
                                        <option value="2">Tidak Selesai</option>
                                    </select>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php

    require "../template/footer.php";

    ?>
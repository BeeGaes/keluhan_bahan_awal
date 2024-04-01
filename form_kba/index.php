<?php

session_start();

if (!isset($_SESSION["ssLogin"])) {
    header("location: ../auth/login.php");
    exit();
}

require "../config/config.php";
require "../config/functions.php";
require "../module/mode-form-kba.php";


$title = "Form KBA";
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
                    <h1 class="m-0">Formulir Keluhan Bahan Awal</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= $main_url ?>dashboard.php">Home</a></li>
                        <li class="breadcrumb-item active"> Form KBA</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"> Keluhan Bahan Awal</h3>
                    <a href="<?= $main_url ?>form_kba/add-form-kba.php"
                        class="mr-2 btn btn-sm tn-primary float-right"><i class="fas fa-plus fa-sm"></i> Add Keluhan</a>
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Jenis Bahan</th>
                            <th scope="col">Nama Bahan</th>
                            <th scope="col">No. Bets/lot</th>
                            <th scope="col">Jumlah</th>
                            <th scope="col">Produsen</th>
                            <th scope="col">Pemasok</th>
                            <th scope="col">Tanggal Datang</th>
                            <th scope="col">No. SP/OC/Kontrak</th>
                            <th scope="col">No. PPB</th>
                            <th scope="col">NO. LAB</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $form_kba = getData("SELECT * FROM tbl_kba");
                        foreach ($form_kba as $form_kba) { ?>
                            <tr>
                                <td>
                                    <?php
                                    if ($form_kba['jenis_bahan'] == 1) {
                                        echo "Bahan Aktif";
                                    } else if ($form_kba['jenis_bahan'] == 2) {
                                        echo "Bahan Penolong";
                                    } else if ($form_kba['jenis_bahan'] == 3) {
                                        echo "Bahan Kemas";
                                    }
                                    ?>
                                </td>
                                <td>
                                    <?= $form_kba['nama_bahan'] ?>
                                </td>
                                <td>
                                    <?= $form_kba['no_bets_lot'] ?>
                                </td>
                                <td>
                                    <?= $form_kba['jumlah_bahan'] ?>
                                </td>
                                <td>
                                    <?= $form_kba['produsen_bahan'] ?>
                                </td>
                                <td>
                                    <?= $form_kba['pemasok_bahan'] ?>
                                </td>
                                <td>
                                    <?= $form_kba['tanggal_datang'] ?>
                                </td>
                                <td>
                                    <?= $form_kba['no_sp_oc_kontrak'] ?>
                                </td>
                                <td>
                                    <?= $form_kba['no_ppb'] ?>
                                </td>
                                <td>
                                    <?= $form_kba['no_lab'] ?>
                                </td>
                            </tr>
                            <?php

                        }
                        ?>

                    </tbody>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Alasan Keluhan</th>
                                <th scope="col">Rekomendasi Bidang Pengawas Mutu</th>
                                <th scope="col">Catatan</th>
                                <th scope="col">Distribusi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $form_kba = getData("SELECT * FROM tbl_kba");
                            foreach ($form_kba as $form_kba) { ?>
                                <tr>
                                    <td>
                                        <?= $form_kba['alasan_keluhan'] ?>
                                    </td>
                                    <td>
                                        <?= $form_kba['rekomendasi_bidang'] ?>
                                    </td>
                                    <td>
                                        <?= $form_kba['catatan'] ?>
                                    </td>
                                    <td>
                                    <?php
                                    if ($form_kba['distribusi_bidang'] == 1) {
                                        echo "Bidang Pengadaan";
                                    } else if ($form_kba['distribusi_bidang'] == 2) {
                                        echo "Bidang SCM";
                                    } else if ($form_kba['distribusi_bidang'] == 3) {
                                        echo "Bidang LBA";
                                    } else if($form_kba['distribusi_bidang'] == 4) {
                                        echo "Arsip";
                                    }
                                    ?>
                                </td>
                                </tr>
                                <?php
                            }
                            ?>
                        </tbody>
                    </table>
            </div>
        </div>
</div>
</section>

<?php

require "../template/footer.php"

    ?>
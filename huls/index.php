<?php

session_start();

if (!isset($_SESSION["ssLogin"])) {
    header("location: ../auth/login.php");
    exit();
}

require "../config/config.php";
require "../config/functions.php";
require "../module/mode-huls.php";

$title = "Investigasi Huls";
require "../template/header.php";
require "../template/navbar.php";
require "../template/sidebar.php";

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
                <div class="card-header">
                    <h3 class="card-title"> Form Investigasi Huls</h3>
                    <a href="<?= $main_url ?>huls/add_huls.php" class="mr-2 btn btn-sm tn-primary float-right"><i class="fas fa-plus fa-sm"></i> Add
                        Huls</a>
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">No. Huls</th>
                            <th scope="col">Nama Bahan</th>
                            <th scope="col">No. Bets</th>
                            <th scope="col">No. Spesifikasi</th>
                            <th scope="col">No. Metode Analisa</th>
                            <th scope="col">Hasil Pengujian</th>
                            <th scope="col">Persyaratan Hasil Uji</th>
                            <th scope="col">Tanggal Sampling</th>
                            <th scope="col">Tanggal Pengujian</th>
                            <th scope="col">Nama Analis</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $huls = getData("SELECT * FROM tbl_huls");
                        foreach ($huls as $huls) { ?>
                            <tr>
                                <td>
                                    <?= $huls['no_huls'] ?>
                                </td>
                                <td>
                                    <?= $huls['nama_bahan'] ?>
                                </td>
                                <td>
                                    <?= $huls['no_bets'] ?>
                                </td>
                                <td>
                                    <?= $huls['no_spesifikasi'] ?>
                                </td>
                                <td>
                                    <?= $huls['no_metode_analisa'] ?>
                                </td>
                                <td>
                                    <?= $huls['hasil_pengujian'] ?>
                                </td>
                                <td>
                                    <?= $huls['persyaratan_hasil_uji'] ?>
                                </td>
                                <td>
                                    <?= $huls['tanggal_sampling'] ?>
                                </td>
                                <td>
                                    <?= $huls['tanggal_pengujian'] ?>
                                </td>
                                <td>
                                    <?= $huls['nama_analis'] ?>
                                </td>
                            </tr>
                            <?php

                        }
                        ?>

                    </tbody>
                </table>
            </div>
        </div>
    </section>


    <?php

    require "../template/footer.php";

    ?>
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
                    <h3 class="card-title"> Tanggapan</h3>
                    <a href="<?= $main_url ?>tanggapan/add-tanggapan.php"
                        class="mr-2 btn btn-sm tn-primary float-right"><i class="fas fa-plus fa-sm"></i> Add
                        Tanggapan</a>
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Bidang PPPP</th>
                            <th scope="col">Bidang Pengadaan</th>
                            <th scope="col">Rencana Tanggal Penyelesaian</th>
                            <th scope="col">Tinjauan Terhadap Tanggapan</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $tanggapan = getData("SELECT * FROM tbl_tanggapan");
                        foreach ($tanggapan as $tanggapan) { ?>
                            <tr>
                                <td>
                                    <?= $tanggapan['tanggapan_bidang_p4'] ?>
                                </td>
                                <td>
                                    <?= $tanggapan['tanggapan_bidang_pengadaan'] ?>
                                </td>
                                <td>
                                    <?= $tanggapan['tanggal_penyelesaian'] ?>
                                </td>
                                <td>
                                    <?= $tanggapan['tinjauan'] ?>
                                </td>
                                <td>
                                    <?php
                                    if ($tanggapan['status'] == 1) {
                                        echo "Selesai";
                                    } else if ($tanggapan['status'] == 2) {
                                        echo "Tidak Selesai";
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
    </section>

    <?php

    require "../template/footer.php";

    ?>
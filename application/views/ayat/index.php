<body>
    <!-- navbar -->
    <div class="container navigasi">
        <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
            <a class="navbar-brand nama" href="<?= base_url('home') ?>">Al-Quranku <span class="lead" style="font-weight:initial;">v1.0</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto khusus3">
                    <li class="nav-item">
                        <a class="nav-link active" href="<?= base_url() ?>"><button class="btn btn-outline-info">Cari Ayat</button></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active mt-2" href="<?= base_url('bantuan') ?>">Bantuan<i class="fas fa-fw fa-question"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <!-- jumbotron -->
    <div class="jumbotron khusus jumbotron-fluid mb-4 mx-4">
        <div class="container text-center col-10">
            <?php foreach ($surat as $srt) { ?>
                <h2><?php echo $srt->nama_surat; ?></h2>
                <p class="lead"><?php echo $srt->arti_nama; ?></p>
            <?php
            } ?>
        </div>
    </div>

    <!-- tampil ayat -->
    <div class="container">
        <div class="col">
            <?php foreach ($fix as $ayt) : ?>
                <div>
                    <h4 class="amiri"><?php echo $ayt->nomor_ayat; ?> </h4>
                    <h5 class="text-right arabic amiri mb-3" style="line-height:50px;">
                        <?php echo $ayt->teks_arab; ?>
                    </h5>
                    <h5 class="text-right">
                        <a href="<?php echo base_url(); ?>cari/detail/<?php echo $ayt->id; ?>" class="btn btn-info">Uji Bacaan</a>
                    </h5>
                    <p class="text-right arti"><?php echo $ayt->terjemahan_idn; ?></p>
                    <hr>
                </div>
            <?php
            endforeach; ?>
        </div>
        <hr>
    </div>
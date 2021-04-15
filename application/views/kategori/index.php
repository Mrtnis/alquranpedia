<body>
    <!-- navbar -->
    <div class="container navigasi">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="<?= base_url('home') ?>">Al-Quranku <span class="lead" style="font-weight:initial;">v1.0</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
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
    <div class="jumbotron jumbotron-fluid mb-4 mx-4">
        <div class="container text-center col-10">
            <?php foreach ($kategori as $ktg) { ?>
                <h2 class="mt-5"><?php echo $ktg->nama_kategori; ?></h2>
            <?php
            } ?>
        </div>
    </div>

    <!-- tampil ayat -->
    <div class="container">
        <?php foreach ($kategori as $ktg) { ?>
            <p class="mb-4 text-center amiri" style="font-size:23px;"><?php echo $ktg->keterangan; ?></p>
        <?php
        } ?>
        <div class="col">
            <?php foreach ($fix as $ayt) : ?>
                <div class="mb-4">
                    <h4 class="amiri">Surah <?php echo $ayt->nama_surat; ?> ayat <?php echo $ayt->nomor_ayat; ?></h4>
                    <h5 class="amiri arabic text-right mb-3" style="line-height:50px;">
                        <?php echo $ayt->teks_arab; ?>
                    </h5>
                    <p class="text-right">
                        <a href="<?php echo base_url(); ?>cari/detail/<?php echo $ayt->id; ?>" class="btn btn-info mr-2">Uji Bacaan</a>
                        <a href="<?= base_url() ?>ayat/index/<?= $ayt->nomor_surat; ?>" class="btn btn-success">Ke Surat</a>
                    </p>
                    <p class="text-right arti"><?php echo $ayt->terjemahan_idn; ?></p>
                    <hr>
                </div>
            <?php
            endforeach; ?>
        </div>
        <hr>
    </div>
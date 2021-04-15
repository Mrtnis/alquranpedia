<body>
    <?php if ($fix->num_rows() < 1) { ?>
        <!-- navbar -->
        <div class="container navigasi">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="<?= base_url('home') ?>">Al-Quranku <span class="lead" style="font-weight:initial;">v1.0</span></a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="<?= base_url() ?>"><button class="btn btn-outline-info">Kembali</button></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="container">
            <a class="balik ml-3" href="<?= base_url() ?>"><button class="btn btn-outline-info">Kembali</button></a>
            <h3 class="amiri text-danger text-center mt-5">Maaf Ayat yang anda cari tidak di temukan!</h3>
        </div>
    <?php } else { ?>
        <!-- navbar -->
        <div class="container navigasi">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="<?= base_url('home') ?>">Al-Quranku <span class="lead" style="font-weight:initial;">v1.0</span></a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="<?= base_url() ?>"><button class="btn btn-outline-info">Kembali</button></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>

        <!-- tampil -->
        <div class="container">
            <a class="balik ml-3" href="<?= base_url() ?>"><button class="btn btn-outline-info">Kembali</button></a>
            <div class="row justify-content-center">
                <div class="col">
                    <div class="row justify-content-center ml-4">
                        <?php foreach ($fix->result_array() as $ayt) : ?>
                            <div class="col-lg-12 col-sm-12 col-md-12 mt-4">
                                <h5 class="amiri text-right">QS. <?= $ayt['nama_surat']; ?> Ayat <?= $ayt['nomor_ayat']; ?></h5>
                                <h5 class="amiri arabic text-right mb-3" style="line-height:50px;">
                                    <?= $ayt['teks_arab']; ?>
                                </h5>
                                <h5 class="text-right">
                                    <a href="<?= base_url(); ?>cari/detail/<?= $ayt['id']; ?>"><button type="button" class="btn btn-info mr-2">Uji Bacaan</button></a>
                                    <a href="<?= base_url() ?>ayat/index/<?= $ayt['nomor_surat']; ?>" class="btn btn-success">Ke Surat</a>
                                </h5>
                                <p class="text-right"><?= $ayt['terjemahan_idn']; ?></p>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
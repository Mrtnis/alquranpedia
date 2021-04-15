<body>
    <!-- navbar -->
    <div class="container navigasi">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="<?= base_url('home') ?>">Al-Quranku <span class="lead" style="font-weight:initial;">v1.0</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Ayat tentang Nabi & Rasul
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <?php foreach ($kategori_ayat as $kategori) : ?>
                                <a class="dropdown-item" href="<?php echo base_url(); ?>kategori/index/<?= $kategori['id_kategori']; ?>"><?= $kategori['nama_kategori']; ?></a>
                            <?php endforeach; ?>
                        </div>
                    </li>
                </ul>
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
    <div class="jumbotron jumbotron-fluid mx-4">
        <div class="container text-center col-10 caricari">
            <form class="form-group" action="<?= base_url() ?>cari/tampil" method="post">
                <input class="form-control mr-sm-2" style="border-radius: 30px;" type="search" placeholder="Cari berdasarkan arti ayat. Contoh : surga" name="cariarti">
                <button class="btn btn-primary my-2" type="submit">Cari</button>
            </form>
        </div>
    </div>

    <!-- tampil surat -->
    <div class="text-center">
        <div class="row">
            <div class="col">
                <div class="row">
                    <?php foreach ($surat as $srt) : ?>
                        <div class="col-md-4">
                            <a class="bebas amiri" href="<?= base_url() ?>ayat/index/<?= $srt['nomor_surat']; ?>">
                                <h4 class="amiri"><?= $srt['nama_surat_arab']; ?></h4>
                                <h5><?= $srt['nomor_surat']; ?> <?= $srt['nama_surat']; ?></h5>
                                <p><?= $srt['arti_nama']; ?></p>
                            </a>
                        </div>

                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
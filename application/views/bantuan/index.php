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
                </ul>
            </div>
        </nav>
    </div>

    <!-- jumbotron -->
    <div class="jumbotron jumbotron-fluid mx-4">
        <div class="container text-center col-10 mt-5">
            <h2>Pusat Bantuan</h2>
        </div>
    </div>

    <!-- bantuan -->
    <div class="container">
        <div class="col">
            <h5 class="amiri"> 1. Klik tombol <button class="btn btn-outline-info">Cari Ayat</button> untuk menuju ke pencarian.</h5>
            <h5 class="amiri"> 2. Klik tulisan <span class="navbar-brand">Al-Quranku <span class="lead" style="font-weight:initial;">v1.0</span></span>untuk menuju ke menu bacaan.</h5>
            <h5 class="amiri"> 3. Pembacaan ayat untuk pencarian maupun pengujian bacaan, dianjurkan menggunakan headset.</h5>
            <h5 class="amiri"> 4. Ketika mengucapkan <ul>
                    <li>'Alif Laam Miim', maka yang muncul adalah "الف لام ميم" </li>
                    <li>'Alif Laam Miim Saad', maka yang muncul adalah "الف لام ميم صاد" </li>
                    <li>'Alif Laam Raa', maka yang muncul adalah "الف لام راء" </li>
                    <li>Dan kalimat sejenisnya yang Allahlah lebih tau artinya.</li>
                </ul>
                <span class="ml-4">Ini adalah bentuk pengucapan yang benar.</span></h5>
            <h5 class="amiri"> 5. Pada versi ini, pengujian bacaan baru menganalisis melalui makhrijal huruf.</h5>
            <h5 class="amiri"> 6. Pengucapan bacaan, jika ada kata-kata yang mendekati, maka dianggap benar.</h5>
        </div>
    </div>
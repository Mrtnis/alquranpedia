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

    <!-- tampil -->
    <div class="container">
        <div class="row mt-3">
            <div class="col-md">
                <div class="card">
                    <div class="card-header">
                        Detail Ayat
                    </div>
                    <div class="card-body">
                        <h2 class="card-title">Al-Quran Surat <?= $fix['nama_surat'] ?> Ayat <?= $fix['nomor_ayat'] ?></h2>
                        <h2 class="card-text arabic text-right" style="font-family:amiri; line-height:100px;"><?= $fix['teks_arab'] ?></h2>
                        <input type="hidden" id="text" value="<?= $fix['tanpa_baris'] ?>">
                        <p class="card-text" style="font-size:22px;"><?= $fix['terjemahan_idn'] ?></p>
                        <label for="ngaji">
                            <h5>Periksa Bacaan <i class="fas fa-fw fa-microphone"></i></h5>
                        </label>
                        <input class="detailbaca form-control amiri ml-0" id="ngaji" type="search" name="keyword" placeholder="baca ayat..." onclick=record()>
                        <p class="text-center"><button class="btn btn-primary mt-2" onclick=stop()>Uji</button></p>
                        <div id="result"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        var text = document.getElementById('text').value;
        var hasil;
        var result;

        function record() {
            var recognition = new webkitSpeechRecognition();
            recognition.lang = "ar-SA";
            recognition.start();
            recognition.onresult = function(event) {
                document.getElementById('ngaji').value += event.results[0][0].transcript + ' ';
                setInterval(function() {
                    hasil = document.getElementById('ngaji').value;
                }, 1000);
            }
        }


        function stop() {
            result = document.getElementById('result');
            var test = [hasil.trim(' ')];
            if (test.includes(text)) {
                result.innerHTML = " <div class='alert alert-success mt-2 detailbaca text-center alert-dismissible fade show' role='alert'>Alhamdulillah, bacaan anda sudah benar<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div> ";
            } else {
                result.innerHTML = " <div class='alert alert-danger mt-2 detailbaca text-center' style='border-radius:50px;'>Mohon maaf, bacaan anda masih kurang tepat<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div> ";
            }
            recognition.stop();
        }

        function hilang_spasi(string) {
            return string.split(' ').join('');
        }
    </script>
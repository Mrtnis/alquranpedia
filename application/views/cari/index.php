<body class="menu_baru">
    <!-- navbar -->
    <div class="container navigasi">
        <nav class="navbar navbar-expand-lg navbar-dark text-light">
            <a class="navbar-brand" href="<?= base_url('home') ?>">Alquranku <span class="lead" style="font-weight:initial;">v1.0</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="<?= base_url('bantuan') ?>">Bantuan<i class="fas fa-fw fa-question"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <div class="section">
        <!-- cari -->
        <div class="form container text-center text-light">
            <form action="<?= base_url() ?>cari/tampil" method="post" id="form" class="pencarian">
                <div class="form-group">
                    <input class="form-control amiri input-group-text mb-2" type="search" style="border-radius: 30px;" name="keyword" id="speechToText" placeholder="baca ayat yang ingin dicari" onclick=record()>
                </div>
                <label for="speechToText" style="size:300px;">
                    <span class="fas fa-fw fa-microphone"></span>
                </label>
                <button style="display:none;" class="btn btn-primary tombol" type="submit">Cari</button>
            </form>
        </div>
    </div>

    <script>
        function record() {
            var recognition = new webkitSpeechRecognition();
            recognition.lang = "ar-SA";
            recognition.start();
            recognition.onresult = function(event) {
                document.getElementById('speechToText').value = event.results[0][0].transcript;
                recognition.stop();
            }
        }
    </script>
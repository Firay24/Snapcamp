<body>
    <section id="header">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <a class="navbar-brand ml-lg-5" href="#">
                <!-- <img src="asset/hitam atas.svg"> -->
                <img src="<?= BASEURL; ?>/img/brand.png" alt="" width="150" height="45">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="color: black;">
                  <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto" style="font-weight: bold;">
                    <li class="nav-item active">
                        <a class="nav-link px-5 mr-3" id="text-link" href="#">BERANDA <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item" id="text-inactive">
                        <a class="nav-link px-5 mr-3 text-link " href="#">TENTANG</a>
                    </li>
                    <li class="nav-item" id="text-inactive">
                        <a class="nav-link px-5 mr-3 text-link" href="#">HUBUNGI KAMI</a>
                    </li>
                </ul>
            </div>

        </nav>
    </section>
    <div class="d-flex justify-content-center mt-5 mb-5">
        <div class="card" id="card-1">
            <div class="card-block">
                <div class="row">
                    <div class="col-lg-6 tags p-b-2" style=" border-right: 1px solid #333;">
                        <h5 class="mt-5 text-center" style="font-weight: bold; color:#383b40ff">WELCOME TO REGISTRATION FORM</h5>
                        <div class="d-flex justify-content-center">
                            <img class="mb-5 pb-5" src="<?= BASEURL; ?>/img/Frame.png" width="300px" style="margin-top: 20px;"> 
                            <img src="<?= BASEURL; ?>/img/Vector 1.png" width="450px" style="bottom: -1px; right: -1px; position:absolute;">
                        </div>
                    </div>
                    <div class="col-lg-6 tags p-b-2" style=" border-right: 1px solid #333;">
                        <div class="row justify-content-md-center mt-5">
                            <button id=button1 class="btn mt-3"><img class="mb-1" src="<?= BASEURL; ?>/img/google.png" width="20px">  Masuk Dengan Google</button>
                            <button id=button2 class="btn mt-3"><img class="mb-1" src="<?= BASEURL; ?>/img/logos_facebook.png" width="22px">  Masuk Dengan Facebook</button>
                            <p class="text-center mt-2" style="font-size: 12px;">Atau</p>
                            <form method="POST" class="row justify-content-md-center mb-5" action="<?= BASEURL; ?>/Daftar/proses_daftar">
                                <div class="form-floating text-center" id="form1">
                                    <input type="text" class="form-control" id="nama" name="nama"  style="font-size:15px; font-weight: normal; height:45px; border-radius:15px;">
                                    <label class="ml-3 align-baseline" style="font-size: 12px;" id="label1">Masukkan Nama</label>
                                </div>
                                <div class="form-floating text-center mt-2" id="form1">
                                    <input type="text" class="form-control" id="username" name="username" style="font-size:15px; font-weight: normal; height:45px; border-radius:15px;">
                                    <label class="ml-3 align-baseline" style="font-size: 12px;" id="label1">Masukkan Username</label>
                                </div>
                                <div class="form-floating text-center mt-2" id="form1">
                                    <input type="password" class="form-control" id="password" name="password"  style="font-size:15px; font-weight: normal; height:45px; border-radius:15px;">
                                    <label class="ml-3 align-baseline" style="font-size: 12px;" id="label1">Masukkan Password</label>
                                </div>
                                <div class="form-floating text-center mt-2" id="form1">
                                    <input type="password" class="form-control" id="konfirm" name="konfirm" style="font-size:15px; font-weight: normal; height:45px; border-radius:15px;">
                                    <label class="ml-3 align-baseline" style="font-size: 12px;" id="label1">Konfirmasi Password</label>
                                </div>
                                <div class="text-center mt-3">
                                    <a href="<?= BASEURL; ?>/Home"><button type="submit" class="btn btn-success text-dark" style="width: 120px; font-weight:bold; border-radius:15px;">Daftar</button></a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
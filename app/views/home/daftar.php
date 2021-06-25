<body>
    <!-- header -->
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

    <!-- form pendaftaran -->
    </section>
    <div class="d-flex justify-content-center mt-5 mb-5">
        <div class="card" id="card-1" style="height: 115.5vh;">
            <div class="card-block">
                <div class="row">
                    <div class="col-lg-6 tags p-b-2" style=" border-right: 1px solid #333;">
                        <h5 class="ml-5 mt-5" style="font-weight: bold; color:#383b40ff">WELCOME TO REGISTRATION FORM</h5>
                        <div class="d-flex justify-content-center flex-column">
                            <img class="align-items-center mb-5 ml-5" src="<?= BASEURL; ?>/img/Frame.png" width="300px" style="margin-top: 100px;">
                            <div class="align-text-bottom">
                                <img class="Card-img-bottom mt-5" src="<?= BASEURL; ?>/img/Vector 1.png" width="434px">
                            </div>
                        </div>
                        <div class="d-flex flex-column">
                        </div>
                    </div>
                    <div class="col-lg-6 tags p-b-2" style=" border-right: 1px solid #333;">
                        <div class="row justify-content-md-center">
                            <button id=button1 class="btn mt-3"><img class="mb-1" src="<?= BASEURL; ?>/img/google.png" width="20px">  Masuk Dengan Google</button>
                            <button id=button2 class="btn mt-3"><img class="mb-1" src="<?= BASEURL; ?>/img/logos_facebook.png" width="22px">  Masuk Dengan Facebook</button>
                            <p class="text-center mt-2" style="font-size: 12px;">Atau</p>
                            <form method="POST" class="row justify-content-md-center mb-5" action="<?= BASEURL; ?>/Home/daftar/proses-daftar" id="form-pendaftaran">
                                <div class="form-floating text-center" id="form1">
                                    <input type="text" class="form-control" id="nama" name="nama" style="font-size:15px; font-weight: normal; height:45px; border-radius:15px;">
                                    <label class="ml-3 align-baseline" style="font-size: 12px;" for="nama">Masukkan Nama</label>
                                </div>
                                <div class="form-floating text-center mt-2" id="form1">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" style="font-size:15px; font-weight: normal; height:45px; border-radius:15px;">
                                    <label class="ml-3 align-baseline" style="font-size: 12px;" for="email">Masukkan Email</label>
                                </div>
                                <div class="form-floating text-center mt-2" id="form1">
                                    <input type="text" class="form-control" id="username" name="username" style="font-size:15px; font-weight: normal; height:45px; border-radius:15px;">
                                    <label class="ml-3 align-baseline" style="font-size: 12px;" for="username">Masukkan Username</label>
                                </div>
                                <div class="form-floating text-center mt-2" id="form1">
                                    <input type="password" class="form-control" id="password" name="password" style="font-size:15px; font-weight: normal; height:45px; border-radius:15px;">
                                    <label class="ml-3 align-baseline" style="font-size: 12px;" for="password">Masukkan Password</label>
                                </div>
                                <div class="form-floating text-center mt-2" id="form1">
                                    <input type="text" class="form-control" id="tempatLahir" name="tempatLahir" style="font-size:15px; font-weight: normal; height:45px; border-radius:15px;">
                                    <label class="ml-3 align-baseline" style="font-size: 12px;" for="tempatLahir">Masukkan Tempat Lahir</label>
                                </div>
                                <div class="form-floating text-center mt-2" id="form1">
                                    <input type="text" class="form-control" id="tanggalLahir" name="tanggalLahir" placeholder="name@example.com" style="font-size:15px; font-weight: normal; height:45px; border-radius:15px;">
                                    <label class="ml-3 align-baseline" style="font-size: 12px;" for="tanggalLahir">Masukkan Tanggal Lahir</label>
                                </div>
                                <div class="form-floating text-center mt-2" id="form1">
                                    <input type="text" class="form-control" id="jenisKelamin" name="jenisKelamin" placeholder="name@example.com" style="font-size:15px; font-weight: normal; height:45px; border-radius:15px;">
                                    <label class="ml-3 align-baseline" style="font-size: 12px;" for="jenisKelamin">Masukkan Jenis Kelamin</label>
                                </div>
                                <div class="form-floating text-center mt-2" id="form1">
                                    <input type="text" class="form-control" id="noHP" name="noHP" placeholder="name@example.com" style="font-size:15px; font-weight: normal; height:45px; border-radius:15px;">
                                    <label class="ml-3 align-baseline" style="font-size: 12px;" for="noHP">Masukkan No Telepon</label>
                                </div>
                                <div class="form-floating text-center mt-2" id="form1">
                                    <input type="text" class="form-control" id="alamat" name="alamat" placeholder="name@example.com" style="font-size:15px; font-weight: normal; height:45px; border-radius:15px;">
                                    <label class="ml-3 align-baseline" style="font-size: 12px;" id="alamat">Masukkan Alamat</label>
                                </div>

                                <div class="text-center mt-3">
                                    <a><button type="submit" class="btn btn-success text-dark" style="width: 120px; font-weight:bold; border-radius:15px;">Daftar</button></a>
                                    
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
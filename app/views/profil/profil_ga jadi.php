<div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    <div>
                        Dashboard
                    </div>


                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                    <i class="fas fa-search fa-sm"></i>
                                                </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->



                        <!-- Nav Item - User Information -->

                    </ul>
                </nav>
                <img src="<?= BASEURL; ?>/img/Rectangle 29.png" width="1038px" style="position: absolute; top:70px;">
                <img src="<?= BASEURL; ?>/img/profil.png" class="ml-3" style="position: absolute; margin-top: 70px; object-fit: cover; border-radius: 10%; width: 200px;">

                <div class="container-fluid mb-5">
                    <div class="container mb-5">
                        <div style="margin-top: 250px;">
                            <h3 class="text-center">AKUN PROFIL ANDA</h3>
                        </div>
                        <form action="" method="POST">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Nama Pengguna <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" name="nama" placeholder="Siapa YA">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Email <span class="text-danger">*</span> </label>
                                        <input class="form-control" type="text" name="email" placeholder="siapaya@gmail.com">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label>No KTP <span class="text-danger">*</span> </label>
                                            <input class="form-control" type="text" name="no ktp" placeholder="123456789">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label>Nomor Telepon <span class="text-danger">*</span> </label>
                                            <input class="form-control" type="text" name="no telepon" placeholder="+6234566789">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label>Tempat, Tanggal Lahir <span class="text-danger">*</span></label>
                                            <input class="form-control" type="text" placeholder="Bandung, 12-05-2000 ">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label>Alamat <span class="text-danger">*</span></label>
                                            <input class="form-control" type="text" placeholder="Bandung Jawa Barat">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a class="scroll-to-top rounded " href="#page-top ">
        <i class="fas fa-angle-up "></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade " id="logoutModal " tabindex="-1 " role="dialog " aria-labelledby="exampleModalLabel " aria-hidden="true ">
        <div class="modal-dialog " role="document ">
            <div class="modal-content ">
                <div class="modal-header ">
                    <h5 class="modal-title " id="exampleModalLabel ">Ready to Leave?</h5>
                    <button class="close " type="button " data-dismiss="modal " aria-label="Close ">
                            <span aria-hidden="true ">×</span>
                        </button>
                </div>
                <div class="modal-body ">Select "Logout " below if you are ready to end your current session.</div>
                <div class="modal-footer ">
                    <button class="btn btn-secondary " type="button " data-dismiss="modal ">Cancel</button>
                    <a class="btn btn-primary " href="login.html ">Logout</a>
                </div>
            </div>
        </div>
    </div>
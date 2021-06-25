                <div class="container-fluid">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-md-6 mb-4">
                                <div class="card shadow h-100 py-2">
                                    <div class="card-body d-flex justify-content-between">
                                        <h5 class="h5 font-weight-bold" style="color:black ;"><i class="fas fa-exchange-alt"></i> PEMBAYARAN</h5>
                                        <button class="btn btn-danger font-weight-bold">Mohon Selesaikan Pembayaran</button>
                                    </div>
                                    <div class="card-body">
                                        <p class="font-weight-bold" style="color:black;">Jumlah Harga: Rp 200.000,00 </p>
                                        <p class="font-weight-bold" style="color:black;">Kode Pembayaran: 1218267253726</p>
                                        <h5 class="mb-1" style="color:black;">Cara Pembayaran</h5>

                                    </div>
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li class="nav-item nav-active col-lg-6">
                                            <a class="nav-link active text-center" href="#profile" role="tab" data-toggle="tab">ATM</a>

                                        </li>
                                        <li class="nav-item col-lg-6">
                                            <a class="nav-link text-center" href="#buzz" role="tab" data-toggle="tab">Mobile Banking</a>

                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active in ml-5 mt-4 " id="profile">
                                            <p class="text-left">01. Pada menu utama, pilih <a class="font-weight-bold text-dark">Bayar/Beli<a></a></p>
                                            <p class="text-left">02. Pilih <a class="font-weight-bold text-dark">Lainnya</a></p>
                                            <p class="text-left">03. Pilih <a class="font-weight-bold text-dark">Multipayment</a></p>
                                            <p class="text-left">04. Masukkan <a class="font-weight-bold text-dark">70012 (kode perusahaan)</a> lalu tekan <a class="font-weight-bold text-dark">benar</a></p>
                                            <p class="text-left">05. Masukkan <a class="font-weight-bold text-dark">Kode Pembayaran</a> Anda lalu tekan <a class="font-weight-bold text-dark">Benar</a></p>
                                            <p class="text-left">06. Pada halaman konfirmasi akan muncul detail pembayaran Anda. Jika informasi telah sesuai tekan <a class="font-weight-bold text-dark">Ya</a></p>
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade ml-5 mt-4" id="buzz"></div>
                                    </div>
                                    <div class="text-right">
                                        <a href="<?= BASEURL; ?>/transaksi/upload"><button class="mt-5 mb-5 mr-5 btn btn-success">Next</button></a>
                                        
                                    </div>
                                </div>
                            </div>

                        </div>
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
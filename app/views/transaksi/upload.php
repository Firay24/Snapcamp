<div class="container-fluid">
                    <div class="container">

                        <!-- Content Row -->
                        <div class="row">
                            <!-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                <h5 class="h5 font-weight-bold" style="color:black ;"><i class="fas fa-exchange-alt"></i> PEMBAYARAN</h5>
                            </div> -->

                            <!-- Earnings (Monthly) Card Example -->
                            <div class="col-lg-12 col-md-6 mb-4">
                                <div class="card shadow h-100 py-2">
                                    <div class="card-body d-flex justify-content-between">
                                        <h5 class="h5 font-weight-bold" style="color:black ;"><i class="fas fa-exchange-alt"></i> PEMBAYARAN</h5>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="text-center mb-4" style="color: black;">
                                            Upload Pembayaran Anda
                                        </h4>
                                        <form action="" method="">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="customFile">
                                                <label class="custom-file-label" for="customFile">Upload Gambar</label>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="text-right mt-3 mr-3 mb-3">
                                        <button type="button" data-toggle="modal" data-target="#exampleModal" class="btn btn-success" style="width: 100px;">Kirim</button>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color: #ffd713ff;">
                                            <h4 style="position: absolute;">Status</h4>
                                            <button type="button" class="close" aria-label="Close" style="background-color: red; height: 100%;">
                                            <a onclick="location.href='<?= BASEURL; ?>/transaksi'"><span aria-hidden="true">&times;</span></a>
                                            </button>
                                            
                                        </div>
                                        <div class="modal-body">
                                            Tunggu Konfirmasi Dari Admin
                                        </div>
                                        <div class="modal-footer">
                                        <a href="<?= BASEURL; ?>/transaksi"> <button type="button" class="btn btn-secondary" id="button-modal">Close</button></a>
                                            

                                        </div>
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
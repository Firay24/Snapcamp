 <!-- Begin Page Content -->
 <div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mt-3 text-gray-800">Riwayat Transaksi</h1>
    </div>

    <!-- Body Conten -->
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Kelas Saya</h6>
            </div>
            <div class="card-body">
                <div>
                    <a class="btn btn-primary mb-3" href="<?= BASEURL; ?>/dashboard" role="button">Tambah kelas</a>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Platform</th>
                                <th>Class</th>
                                <th>Price</th>
                                <th>Datetime</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                                <tr>
                                    <td>DQlab</td>
                                    <td>Belajar Data Science</td>
                                    <td>300000</td>
                                    <td>12-09-2021</td>
                                    <td>
                                        <a class="btn btn-success btn-sm" href="" role="button" >Lunas</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>SanberCode</td>
                                    <td>Introduction to Python</td>
                                    <td>250000</td>
                                    <td>25-12-2021</td>
                                    <td>
                                        <a class="btn btn-warning btn-sm" href="<?= BASEURL; ?>/transaksi/informasi" role="button">Bayar</a>
                                        <a class="btn btn-danger btn-sm" href="" role="button">Hapus</a>
                                    </td>
                                </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Modal Lunas -->
                <div class="modal fade" id="ModalLunas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Informasi</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>Terima Kasih Anda Sudah Membayar Kelas Ini</p>
                            </div>
                            <div class="modal-footer">
                                <a class="btn btn-outline-primary" href="" role="button">BELAJAR SEKARANG</a>
                                <button type="button" class="btn btn-primary" data-dismiss="modal" aria-label="Close">OK</button>
                            </div>
                        </div>
                    </div>
                </div>
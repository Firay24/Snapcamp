 <!-- Begin Page Content -->
 <div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mt-3 text-gray-800">Kelas Saya</h1>
    </div>

    <!-- Content -->
    <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div
            class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Daftar Kelas Saya</h6>
        </div>
        <!-- Card Body -->
        <div class="card-body">
            <div>
                <ol class="list-group list-group-numbered">
                    <?php foreach($data['kelas'] as $kelas) : ?>
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold"><?= $kelas['mitra'] ?></div>
                                <h5><?= $kelas['kelas']; ?></h5>
                            </div>
                            <span ><a href="" class="btn btn-success">Mulai Belajar</a></span>
                        </li>
                    <?php endforeach; ?>
                </ol>
            </div>
        </div>
    </div>
</div>
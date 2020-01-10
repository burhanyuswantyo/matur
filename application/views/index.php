<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <!-- basic table -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <!-- Column -->
                            <div class="col-md-6 col-lg-3 col-xlg-3">
                                <div class="card card-hover">
                                    <div class="p-2 bg-cyan text-center">
                                        <h1 class="font-light text-white"><?= $masuk; ?></h1>
                                        <h6 class="text-white">Laporan Masuk</h6>
                                    </div>
                                </div>
                            </div>
                            <!-- Column -->
                            <div class="col-md-6 col-lg-3 col-xlg-3">
                                <div class="card card-hover">
                                    <div class="p-2 bg-primary text-center">
                                        <h1 class="font-light text-white"><?= $terima; ?></h1>
                                        <h6 class="text-white">Laporan Diterima</h6>
                                    </div>
                                </div>
                            </div>
                            <!-- Column -->
                            <div class="col-md-6 col-lg-3 col-xlg-3">
                                <div class="card card-hover">
                                    <div class="p-2 bg-warning text-center">
                                        <h1 class="font-light text-white"><?= $proses; ?></h1>
                                        <h6 class="text-white">Laporan Diproses</h6>
                                    </div>
                                </div>
                            </div>
                            <!-- Column -->
                            <div class="col-md-6 col-lg-3 col-xlg-3">
                                <div class="card card-hover">
                                    <div class="p-2 bg-success text-center">
                                        <h1 class="font-light text-white"><?= $selesai; ?></h1>
                                        <h6 class="text-white">Laporan Selesai</h6>
                                    </div>
                                </div>
                            </div>
                            <!-- Column -->
                        </div>
                        <div class="table-responsive">
                            <table id="zero_config" class="table">
                                <thead class="thead-light">
                                    <tr>
                                        <th>#</th>
                                        <th>NIM</th>
                                        <th>Nama</th>
                                        <th>Tanggal</th>
                                        <th>Kategori</th>
                                        <th>Deskripsi</th>
                                        <th>Gambar</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($laporan as $l) : ?>
                                        <tr>
                                            <th scope="row"><?= $i; ?></th>
                                            <td><?= $l['nim']; ?></td>
                                            <td><?= $l['nama']; ?></td>
                                            <td><?= date('l, d F Y', $l['date_created']); ?></td>
                                            <td><?= $l['kategori']; ?></td>
                                            <td><?= $l['deskripsi']; ?></td>
                                            <td><img width="200px" src="<?= $l['gambar']; ?>" alt="image.jpg"></td>
                                            <td class="text-center">
                                                <?php if ($l['status_id'] == 0) { ?>
                                                    <label style="display:inline-block; width:80px" class="badge badge-danger">Ditolak</label>
                                                <?php } else if ($l['status_id'] == 1) { ?>
                                                    <label style="display:inline-block; width:80px" class="badge badge-cyan">Masuk</label>
                                                <?php } else if ($l['status_id'] == 2) { ?>
                                                    <label style="display:inline-block; width:80px" class="badge badge-primary">Diterima</label>
                                                <?php } else if ($l['status_id'] == 3) { ?>
                                                    <label style="display:inline-block; width:80px" class="badge badge-warning">Diproses</label>
                                                <?php } else { ?>
                                                    <label style="display:inline-block; width:80px" class="badge badge-success">Selesai</label>
                                                <?php } ?>
                                            </td>
                                        </tr>
                                        <?php $i++; ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                            <ul class="pagination float-right">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1">Previous</a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Next</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
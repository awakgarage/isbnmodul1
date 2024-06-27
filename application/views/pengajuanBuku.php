<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->
            <?php $this->load->view('layout/sidebar') ?>
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->

                <nav class="layout-navbar container-fluid navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                            <i class="bx bx-menu bx-sm"></i>
                        </a>
                    </div>

                    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">

                        <ul class="navbar-nav flex-row align-items-center ms-auto">
                            <!-- User -->
                            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                                    <div class="avatar avatar-online">
                                        <img src="<?php echo base_url('asset') ?>/assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar avatar-online">
                                                        <img src="<?php echo base_url('asset') ?>/assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <span class="fw-semibold d-block"><?php echo $this->session->userdata('username'); ?></span>
                                                    <small class="text-muted"><?php echo $this->session->userdata('role'); ?></small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <i class="bx bx-user me-2"></i>
                                            <span class="align-middle">My Profile</span>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="<?php echo base_url('Auth/logout') ?>">
                                            <i class="bx bx-power-off me-2"></i>
                                            <span class="align-middle">Log Out</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!--/ User -->
                        </ul>
                    </div>
                </nav>

                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->

                    <div class="container-xxl flex-grow-1 container-p-y">
                        <h4 class="fw-bold py-3 mb-1"><span class="text-muted fw-light">Pengajuan Buku
                        </h4>
                        <!--/ Bootstrap modals -->
                        <div class="row gy-3">
                            <!-- Modal Backdrop -->
                            <div class="col-lg-4 col-md-3 mb-3">
                                <div class="mt-3">
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#backDropModal">
                                        Tambah Pengajuan
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="backDropModal" data-bs-backdrop="static" tabindex="-1">
                                        <div class="modal-dialog modal-xl">
                                            <form class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="backDropModalTitle">Modal title
                                                    </h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col mb-3">
                                                            <label for="nameBackdrop" class="form-label">Judul</label>
                                                            <input type="text" id="nameBackdrop" class="form-control" placeholder="Judul" name="judul" />
                                                        </div>
                                                    </div>
                                                    <div class="row g-2">
                                                        <div class="col mb-3">
                                                            <label for="emailBackdrop" class="form-label">Pengarang</label>
                                                            <input type="text" id="emailBackdrop" class="form-control" placeholder="Nama Pengarang" name="pengarang" />
                                                        </div>
                                                        <div class="col mb-3">
                                                            <label for="dobBackdrop" class="form-label">Penerjemah</label>
                                                            <input type="text" id="dobBackdrop" class="form-control" placeholder="Nama Penerjemah" name="penerjemah" />
                                                        </div>
                                                    </div>
                                                    <div class="row g-5">
                                                        <div class="col mb-3">
                                                            <label for="emailBackdrop" class="form-label">Edisi</label>
                                                            <input type="text" id="emailBackdrop" class="form-control" placeholder="Edisi" name="edisi" />
                                                        </div>
                                                        <div class="col mb-3">
                                                            <label for="dobBackdrop" class="form-label">Seri</label>
                                                            <input type="text" id="dobBackdrop" class="form-control" placeholder="Seri" name="seri" />
                                                        </div>
                                                        <div class="col mb-3">
                                                            <label for="dobBackdrop" class="form-label">Tahun Terbit</label>
                                                            <input type="text" id="dobBackdrop" class="form-control" placeholder="Tahun Terbit" name="tahunTerbit" />
                                                        </div>
                                                        <div class="col mb-3">
                                                            <label for="dobBackdrop" class="form-label">Jumlah Halaman</label>
                                                            <input type="text" id="dobBackdrop" class="form-control" placeholder="Jumlah Halaman" name="jumlahHalaman" />
                                                        </div>
                                                        <div class="col mb-3">
                                                            <label for="dobBackdrop" class="form-label">Tinggi Buku (CM)</label>
                                                            <input type="text" id="dobBackdrop" class="form-control" placeholder="Tinggi Buku" name="tinggiBuku" />
                                                        </div>
                                                    </div>
                                                    <div class="row g-3">
                                                        <div class="col mb-3">
                                                            <label for="emailBackdrop" class="form-label">Kategori</label>
                                                            <input type="text" id="emailBackdrop" class="form-control" placeholder="Kategori" name="kategori" />
                                                        </div>
                                                        <div class="col mb-3">
                                                            <label for="dobBackdrop" class="form-label">Jenis</label>
                                                            <input type="text" id="dobBackdrop" class="form-control" placeholder="Jenis" name="jenis" />
                                                        </div>
                                                        <div class="col mb-3">
                                                            <label for="dobBackdrop" class="form-label">Media</label>
                                                            <input type="text" id="dobBackdrop" class="form-control" placeholder="Media" name="media" />
                                                        </div>
                                                    </div>
                                                    <div class="row g-3">
                                                        <div class="col mb-3">
                                                            <label for="emailBackdrop" class="form-label">File Buku</label>
                                                            <div class="input-group">
                                                                <input type="file" class="form-control" id="inputGroupFile02" />
                                                                <label class="input-group-text" for="inputGroupFile02">Upload</label>
                                                            </div>
                                                        </div>
                                                        <div class="col mb-3">
                                                            <label for="dobBackdrop" class="form-label">Lampiran Pendukung</label>
                                                            <div class="input-group">
                                                                <input type="file" class="form-control" id="inputGroupFile02" />
                                                                <label class="input-group-text" for="inputGroupFile02">Upload</label>
                                                            </div>
                                                        </div>
                                                        <div class="col mb-3">
                                                            <label for="dobBackdrop" class="form-label">Keterangan</label>
                                                            <textarea class="form-control" placeholder="Masukkan Keterangan" aria-label="With textarea"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                                        Close
                                                    </button>
                                                    <button type="button" class="btn btn-primary">Tambah</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ Bootstrap modals -->
                        <!-- Hoverable Table rows -->
                        <div class="card">
                            <h5 class="card-header">Pengajuan Buku</h5>
                            <div class="table-responsive text-nowrap">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Judul</th>
                                            <th>ISBN</th>
                                            <th>Editor</th>
                                            <th>Tanggal Pengajuan</th>
                                            <th>Proggres</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <?php
                                    $no = 1;
                                    foreach ($pengajuan as $pgj) :

                                    ?>
                                        <tbody class="table-border-bottom-0">
                                            <tr>
                                                <td><?php echo $no++ ?></td>
                                                <td><?php echo $pgj->judul ?></td>
                                                <td><?php echo $pgj->isbn ?></td>
                                                <td><?php echo $pgj->editor ?></td>
                                                <td><?php echo $pgj->tanggalPengajuan ?></td>
                                                <td><?php echo $pgj->status ?></td>
                                                <td>
                                                    <div class="dropdown">
                                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                            <i class="bx bx-dots-vertical-rounded"></i>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-2"></i> Edit</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php
                                    endforeach;
                                        ?>
                                </table>
                            </div>
                        </div>
                        <!--/ Hoverable Table rows -->
                    </div>
                    <!-- / Content -->

                    <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->
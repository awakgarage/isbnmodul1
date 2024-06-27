<body>
    <!-- Content -->

    <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-inner">
                <!-- Register Card -->
                <div class="card">
                    <div class="card-body">
                        <!-- Logo -->
                        <div class="app-brand justify-content-center">
                            <img src="<?php echo base_url('asset') ?>/assets/logo/logo.png" width="250" alt="" srcset="">
                        </div>
                        <?= $this->session->flashdata('message'); ?>
                        <form id="formAuthentication" class="mb-3" action="<?php echo  base_url('Auth/register') ?>" method="POST">
                            <div class="row g-2">
                                <div class="col mb-3">
                                    <label for="username" class="form-label">Username</label>
                                    <input type="text" class="form-control" id="username" name="username" placeholder="Enter your username" autofocus />
                                    <?= form_error('username', '<small class="text-danger" pl-3>', '</small>') ?>
                                </div>
                                <div class="col mb-3">
                                    <label for="username" class="form-label">Nama Lengkap</label>
                                    <input type="text" class="form-control" id="username" name="namalengkap" placeholder="Enter your Full Name" autofocus />
                                    <?= form_error('namalengkap', '<small class="text-danger" pl-3>', '</small>') ?>
                                </div>
                            </div>
                            <div class="row g-2">
                                <div class="col mb-3">
                                    <label for="username" class="form-label">NIP</label>
                                    <input type="text" class="form-control" id="username" name="nip" placeholder="Enter your NIP" autofocus />
                                    <?= form_error('nip', '<small class="text-danger" pl-3>', '</small>') ?>
                                </div>
                                <div class="col mb-3">
                                    <label for="username" class="form-label">No HP</label>
                                    <input type="text" class="form-control" id="username" name="nohp" placeholder="Enter your No Hp" autofocus />
                                    <?= form_error('nohp', '<small class="text-danger" pl-3>', '</small>') ?>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Alamat</label>
                                <input type="text" class="form-control" id="email" name="alamat" placeholder="Enter your Alamat" />
                                <?= form_error('alamat', '<small class="text-danger" pl-3>', '</small>') ?>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="text" class="form-control" id="email" name="email" placeholder="Enter your email" />
                                <?= form_error('email', '<small class="text-danger" pl-3>', '</small>') ?>
                            </div>
                            <div class="mb-3 form-password-toggle">
                                <label class="form-label" for="password">Password</label>
                                <div class="input-group input-group-merge">
                                    <input type="password" id="password" class="form-control" name="password1" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
                                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                </div>
                                <?= form_error('password1', '<small class="text-danger" pl-3>', '</small>') ?>
                            </div>
                            <div class="mb-3 form-password-toggle">
                                <label class="form-label" for="password">Password</label>
                                <div class="input-group input-group-merge">
                                    <input type="password" id="password" class="form-control" name="password2" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
                                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                </div>
                                <?= form_error('password2', '<small class="text-danger" pl-3>', '</small>') ?>
                            </div>
                            <button class="btn btn-primary d-grid w-100">Sign up</button>
                        </form>

                        <p class="text-center">
                            <span>Already have an account?</span>
                            <a href="../">
                                <span>Sign in instead</span>
                            </a>
                        </p>
                    </div>
                </div>
                <!-- Register Card -->
            </div>
        </div>
    </div>
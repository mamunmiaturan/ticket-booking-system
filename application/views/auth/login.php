<?php $this->load->view('layouts/admin/header.php'); ?>

<main>
    <div class="container">
        <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
                        <!-- Start Logo -->
                        <div class="d-flex justify-content-center py-4">
                            <a href="<?= base_url() ?>" class="logo d-flex align-items-center w-auto">
                                <img src="<?= base_url('assets/img/logo.png') ?>" alt="Logo">
                                <span class="d-none d-lg-block">TBS</span>
                            </a>
                        </div>
                        <!-- End Logo -->

                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="pt-2 pb-2">
                                    <h5 class="card-title text-center pb-0 fs-4">Welcome Back</h5>
                                    <p class="text-center small">Enter your username & password to login</p>
                                </div>
                                <!-- Start Form -->
                                <form class="row g-3 needs-validation" method="POST" action="<?= base_url('auth/login') ?>" novalidate>
                                    <!-- Email -->
                                    <div class="col-12">
                                        <label for="emailID" class="form-label">Email</label>
                                        <div class="input-group has-validation">
                                            <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                            <input type="email" name="email" class="form-control" id="emailID" placeholder="Enter your email" required>
                                            <div class="invalid-feedback">Please enter a valid email address.</div>
                                        </div>
                                    </div>
                                    <!-- Password -->
                                    <div class="col-12">
                                        <label for="passwordID" class="form-label">Password</label>
                                        <div class="input-group has-validation">
                                            <span class="input-group-text"><i class="bi bi-lock"></i></span>
                                            <input type="password" name="password" class="form-control" id="passwordID" placeholder="Enter your password" required>
                                            <div class="invalid-feedback">Please enter your password.</div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <button class="btn btn-primary w-100" type="submit">Login</button>
                                    </div>

                                    <div class="col-12">
                                        <p class="small mb-0 text-center">
                                            Don't have an account? <a href="<?= base_url('auth/register') ?>">Create an account</a>
                                        </p>
                                    </div>
                                </form>
                                <!-- End Form -->
                            </div>
                        </div>

                        <div class="credits">
                            Designed by <a href="#">Team Unicorn</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main><!-- End #main -->

<?php $this->load->view('layouts/admin/footer.php'); ?>
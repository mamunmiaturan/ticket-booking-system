<?php $this->load->view('layouts/header.php') ?>
<div class="wrapper">
    <!-- sidebar start -->
    <?php $this->load->view('layouts/admin/sidebar.php') ?>
    <!-- sidebar end -->
    <div class="main">
        <!-- navbar start -->
        <?php $this->load->view('layouts/admin/navbar.php') ?>
        <!-- navbar end -->
        <main class="content">
            <div class="container-fluid p-0">
                <div class="row">
                    <div class="col-6">
                        <h1 class="h3 mb-3"><strong>Bus All List</strong></h1>
                    </div>
                    <div class="col-6">
                        <a href="<?= base_url('bus/form') ?>" class="btn btn-success float-end"> Add Bus</a>
                    </div>
                </div>
                <?php if ($this->session->flashdata('success')): ?>
                    <div class="alert alert-success">
                        <?= $this->session->flashdata('success'); ?>
                    </div>
                <?php elseif ($this->session->flashdata('error')): ?>
                    <div class="alert alert-danger">
                        <?= $this->session->flashdata('error'); ?>
                    </div>
                <?php endif; ?>

                <div class="row">
                    <div class="col-12 col-lg-12 col-xxl-9 d-flex">
                        <div class="card flex-fill">
                            <table class="table table-hover my-0">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th class="d-none d-xl-table-cell">Start Date</th>
                                        <th class="d-none d-xl-table-cell">End Date</th>
                                        <th>Status</th>
                                        <th class="d-none d-md-table-cell">Assignee</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Project Apollo</td>
                                        <td class="d-none d-xl-table-cell">01/01/2023</td>
                                        <td class="d-none d-xl-table-cell">31/06/2023</td>
                                        <td>
                                            <span class="badge bg-success">Done</span>
                                        </td>
                                        <td class="d-none d-md-table-cell">Vanessa Tucker</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <?php $this->load->view('layouts/admin/footer.php') ?>
    </div>
</div>
<?php $this->load->view('layouts/footer.php') ?>
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
            <div class="row">
                <div class="col-6">
                    <h1 class="h3 mb-3"><strong>Add Bus</strong></h1>
                </div>
                <div class="col-6">
                    <a href="<?= base_url('bus/index') ?>" class="btn btn-info float-end">All Bus</a>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <?php if ($this->session->flashdata('success')): ?>
                        <div class="alert alert-success">
                            <?= $this->session->flashdata('success'); ?>
                        </div>
                    <?php elseif ($this->session->flashdata('error')): ?>
                        <div class="alert alert-danger">
                            <?= $this->session->flashdata('error'); ?>
                        </div>
                    <?php endif; ?>
                    <div class="m-sm-3">
                        <form method="POST">
                            <div class="mb-3">
                                <label class="form-label" id="busNumberID">Bus Number</label>
                                <input class="form-control form-control-lg" id="busNumberID" type="number" name="bus_number" placeholder="Enter bus number" />
                            </div>
                            <div class="mb-3">
                                <label class="form-label" id="originID">Origin</label>
                                <input class="form-control form-control-lg" id="originID" type="text" name="origin" placeholder="Enter bus origin" />
                            </div>
                            <div class="mb-3">
                                <label class="form-label" id="destinationID">Destination</label>
                                <input class="form-control form-control-lg" id="destinationID" type="text" name="destination" placeholder="Enter bus destination" />
                            </div>
                            <div class="mb-3">
                                <label class="form-label" id="departureTimeID">Departure Time</label>
                                <input class="form-control form-control-lg" id="departureTimeID" type="datetime-local" name="departure_time" placeholder="Enter bus departure time" />
                            </div>
                            <div class="mb-3">
                                <label class="form-label" id="arrivalTimeID">Arrival Time</label>
                                <input class="form-control form-control-lg" id="arrivalTimeID" type="datetime-local" name="arrival_time" placeholder="Enter bus arrival time" />
                            </div>

                            <div class="mb-3">
                                <label class="form-label" id="totalSeatNoID">Total Seat No</label>
                                <input class="form-control form-control-lg" id="totalSeatNoID" type="number" name="total_seat_no" placeholder="Enter bus departure time" />
                            </div>
                            <div class="d-grid gap-2 mt-3">
                                <button type="submit" class="btn btn-lg btn-success">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>
        <?php $this->load->view('layouts/admin/footer.php') ?>
    </div>
</div>
<?php $this->load->view('layouts/footer.php') ?>
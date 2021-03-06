
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Transactions
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">

                <div class="row">
                    <div class="col-xs-12">
                        <div class="box">
                            <div class="box-header">

                                <?= $this->session->flashdata('message'); ?>

                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <table id="dataTable" class="table table-bordered table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>Nama Toko</th>
                                            <th>Nama Produk</th>
                                            <th>Nama Pembeli</th>
                                            <th>Harga</th>
                                            <th>Alamat</th>
                                            <th>No Hp / Telp Pembeli</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php if(is_array($transactions)): ?>
                                        <?php foreach ($transactions as $transaction): ?>

                                        <tr>
                                            <td><?= $transaction['nama_toko'] ?></td>
                                            <td><?= $transaction['nama_kue'] ?></td>
                                            <td><?= $transaction['nama_depan'] . " " . $transaction['nama_belakang'] ?></td>
                                            <td width="100"><?= "Rp. ".number_format($transaction['harga_kue']) ?></td>
                                            <td><?= ($transaction['alamat']) ? $transaction['alamat'] : "Null" ; ?></td>
                                            <td><?= $transaction['no_handphone'] . " / " . $transaction['no_telp'] ?></td>
                                            <td>

                                                <?php if ($transaction['status_penerimaan'] == FALSE) : ?>

                                                <div class="alert alert-warning" style="padding: 4px; text-align: center;">
                                                    <p>Pending</p>
                                                </div>

                                                <?php endif; ?>

                                                <?php if ($transaction['status_penerimaan'] != FALSE && $transaction['status_pengiriman'] == FALSE) : ?>

                                                <div class="alert alert-success" style="padding: 4px; text-align: center;">
                                                    <p>Diterima</p>
                                                </div>

                                                <?php endif; ?>

                                                <?php if ($transaction['status_pengiriman'] != FALSE && $transaction['status_sampai'] == FALSE) : ?>

                                                <div class="alert alert-success" style="padding: 4px; text-align: center;">
                                                    <p>Dikirim</p>
                                                </div>

                                                <?php endif; ?>

                                                <?php if ($transaction['status_sampai'] != FALSE && $transaction['status_transaksi'] == TRUE) : ?>

                                                <div class="alert alert-success" style="padding: 4px; text-align: center;">
                                                    <p>Transaksi Berhasil</p>
                                                </div>

                                                <?php endif; ?>

                                            </td>
                                        </tr>

                                        <?php endforeach; ?>
                                        <?php endif; ?>

                                    </tbody>
                                </table>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
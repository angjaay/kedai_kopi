<?php
$data_trans = $trans->index();
?>
<div class="row">
    <!-- Column -->
    <!-- Column -->
    <div class="">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive align-items-center">
                    <table class="table table-bordered">
                        <thead>
                            <tr align="center">
                                <th class="border-top-0" style="width: 5%;">No Struk</th>
                                <th class="border-top-0" style="width: 20%;">Tanggal Pembelian</th>
                                <th class="border-top-0">Total</th>
                                <th class="border-top-0">Pembeli</th>
                                <th class="border-top-0">Kasir</th>
                                <th class="border-top-0" style="width:10%;">Status</th>
                                <th class="border-top-0" style="width:15%;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1;
                            foreach ($data_trans as $data) { ?>
                                <tr>
                                    <td><b></b>
                                        <?php echo $data['no_struk'] ?>
                                    </td>
                                    <td><b></b>
                                        <?php echo $data['tgl'] ?>
                                    </td>
                                    <td><b></b>
                                        <?php echo $data['total'] ?>
                                    </td>
                                    <td><b></b>
                                        <?php echo $data['pembeli'] ?>
                                    </td>
                                    <td><b></b>
                                        <?php echo $data['nama_kasir'] ?>
                                    </td>
                                    <td align="center" class="align-middle">
                                        <?php if ($data['status'] == 'Y') { ?>
                                            <button type="button" class="btn btn-success btn-sm align-items-right text-white" readonly>Confirmed</button>
                                        <?php } else { ?>
                                            <button type="button" class="btn btn-danger btn-sm align-items-right text-white" readonly>Not Confirmed</button>
                                        <?php  } ?>
                                    </td>
                                    <td align="center" class="align-middle">

                                        <button type="button" class="btn btn-info btn-block align-items-right text-white view_order" data-id="<?php echo $data['no_struk'] ?>" data-toggle="modal" data-target="#myModal">View Order</button>

                                    </td>
                                </tr>
                            <?php $i++;
                            } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Column -->
</div>
<!-- The Modal -->
<div class="modal fade" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Detail Transaksi</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-rounded">
                            <thead>
                                <th>Menu</th>
                                <th>Jumlah</th>
                            </thead>
                            <tbody>
                                <!-- isi tabel -->
                                <tr>
                                    <td><span><b>Ayam Goreng</b></span><br>
                                        <small>Rp. 14000</small>
                                    </td>
                                    <td>
                                        <p>6</p>
                                    </td>
                                </tr>
                                <!-- end isi tabel -->

                                <!-- total -->
                                <tr>
                                    <td>hr<b>Total</b></td>
                                    <td>Rp. 14000</td>
                                </tr>
                                <!-- end total -->

                            </tbody>
                        </table>
                    </div>
                </div>

            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-success">Konfirmasi</button>

                <button type="button" class="btn btn-danger" data-dismiss="modal">tutup</button>

            </div>

        </div>
    </div>
</div>
<script>
    $('.view_order').click(function() {
        uni_modal('Transaksi', 'view_order.php?id=' + $(this).attr('data-id'))
    })
</script>
<!-- Row -->
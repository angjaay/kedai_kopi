<?php
$data_kategori = $kategori->get_all();
$data_menu = $menu->get_all();
if (isset($_POST['submit'])) {
    if ($menu->store()) {
        echo "Menu berhasil ditambah";
    } else {
        echo "Menu gagal ditambahkan";
    }
}
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
                                <th class="border-top-0" style="width: 5%;">No</th>
                                <th class="border-top-0" style="width: 20%;">Nama</th>
                                <th class="border-top-0" >Address</th>
                                <th class="border-top-0" >E-mail</th>
                                <th class="border-top-0">Mobile</th>
                                <th class="border-top-0" style="width:10%;">Status</th>
                                <th class="border-top-0" style="width:15%;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1;
                            foreach ($data_menu as $data) { ?>
                                <tr>
                                    <td align="center" class="align-middle"><?php echo $i; ?></td>
                                    <td><b></b><!--?php echo $data['nama_pelanggan'] ?--></td>
                                    <td><b></b><!--?php echo $data['address'] ?--></td>
                                    <td><b></b><!--?php echo $data['email'] ?--></td>
                                    <td><b></b><!--?php echo $data['mobile'] ?--></td>
                                    <!--
                                    fungsi if
                                    -->
                                    <td align="center" class="align-middle">
                                        <button type="button" class="btn btn-success btn-sm align-items-right text-white" readonly>Confirmed</button>
                                    </td>
                                    <td align="center" class="align-middle">
                                        <button type="button" class="btn btn-info btn-block align-items-right text-white">View Order</button>
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
<!-- Row -->
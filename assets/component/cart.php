<?php
if (isset($_POST['tambah'])) {
    $id_menu = $_POST['id_menu'];
    $pembelian = $_POST['pembelian'];
    $data_menu = $menu->view($id_menu);

    if (!isset($_SESSION['cart'])) $_SESSION['cart'] = [];

    $index = -1;
    $cart = unserialize(serialize($_SESSION['cart']));

    // jika produk sudah ada dalam cart maka pembelian akan diupdate
    for ($i = 0; $i < count($cart); $i++) {
        if ($cart[$i]['id_menu'] == $id) {
            $index = $i;
            $_SESSION['cart'][$i]['pembelian'] = $pembelian;
            break;
        }
    }

    // jika produk belum ada dalam cart
    if ($index == -1) {
        $_SESSION['cart'][] = [
            'id_menu' => $id_menu,
            'nama_menu' => $data_menu['nama_menu'],
            'harga' => $data_menu['harga'],
            'pembelian' => $pembelian
        ];
    }
}
if (isset($_SESSION['cart'])) {
    $cart = unserialize(serialize($_SESSION['cart']));
    $index = 0;
    $no = 1;
    $total = 0;
    $total_bayar = 0;
}
?>
<div class="card" style="border-radius: 15px;">
    <div class="card-header cart">
        <h4> Pesanan Baru</h4>
        <small><?php echo $no; ?> barang di keranjang</small>
    </div>


    <div class="card-body">
        <?php for ($i = 0; $i < count($cart); $i++) {
            $total = $_SESSION['cart'][$i]['harga'] * $_SESSION['cart'][$i]['pembelian'];
            $total_bayar += $total;
        ?>
            <div class="row">
                <div class="col-md-1">
                    <a href="#"><i class="bi bi-trash align-self-center" style="font-size:1.5rem; color:red !important;"></i></a>
                </div>
                <div class="col-md-6">
                    <span><?php echo $cart[$i]['nama_menu'] ?></span><br>
                    <small><?php echo $cart[$i]['harga'] ?></small>
                </div>
                <div class="col-md-5">
                    <input class="float-right" style="width: 50px; text-align: center;" type="number" name="" idMenu="">
                </div>
            </div>
        <?php } ?>
    </div>
    <div class="card-footer">
        <div class="row">
            <div class="col-md-6 pull-left">Atasnama</div>
            <div class=" col-md-6 float-right">
                <button class="btn btn-success float-right">ubah</button>
            </div>
        </div>
        <div class="row ">
            <div class="col-md-6 float-left">Total</div>
            <div class=" col-md-6 text-right">
                <?php echo $total_bayar; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12"><button class="btn btn-danger btn-block">Bayar Pesanan</button></div>
        </div>
    </div>
</div>
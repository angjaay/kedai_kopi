<div class="row ">
    <div class="col-md-4 text-center">

        <div class="circle-tile ">
            <?php

            $data_menu = $menu->get_count();

            ?>
            <a href="index.php?p=menu">
                <div class="circle-tile-heading green "><i class="fa fa-utensils fa-fw fa-3x"></i></div>
            </a>
            <div class="circle-tile-content green ">
                <div class="circle-tile-description text-faded"> Data Menu </div>
                <div class="circle-tile-number text-faded "><?php
                                                            echo $data_menu['jmlMenu'];
                                                            ?></div>
                <a class="circle-tile-footer" href="index.php?p=menu">Lihat <i class="fa fa-chevron-circle-right"></i></a>
            </div>
        </div>

    </div>

    <div class="col-md-4 text-center">
        <div class="circle-tile ">
            <?php
            $data_transaksi = $trans->get_count();
            ?>
            <a href="index.php?p=transaksi">
                <div class="circle-tile-heading red"><i class="fa fa-credit-card fa-fw fa-3x"></i></div>
            </a>
            <div class="circle-tile-content red">
                <div class="circle-tile-description text-faded"> Transaksi</div>
                <div class="circle-tile-number text-faded "><?php
                                                            echo $data_transaksi['jmlTrans'];
                                                            ?></div>
                <a class="circle-tile-footer" href="index.php?p=transaksi">Lihat <i class="fa fa-chevron-circle-right"></i></a>
            </div>
        </div>

    </div>
    <div class="col-md-4 text-center">
        <div class="circle-tile ">
            <?php
            $data_kasir = $user->get_count();
            ?>
            <a href="index.php?p=user">
                <div class="circle-tile-heading blue "><i class="fa fa-users fa-fw fa-3x"></i></div>
            </a>
            <div class="circle-tile-content blue">
                <div class="circle-tile-description text-faded"> Kasir </div>
                <div class="circle-tile-number text-faded "><?php
                                                            echo $data_kasir['jmlKasir'];
                                                            ?></div>
                <a class="circle-tile-footer" href="index.php?p=user">Lihat <i class="fa fa-chevron-circle-right"></i></a>
            </div>
        </div>

    </div>
</div>
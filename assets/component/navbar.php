<?php
include_once('./controller/UserController.php');
$user = new User();
$id = $_SESSION['id'];
$kasir = $user->get_user($id);
?>
<div class="col-md-11 fluid p-3">
    <nav class="navbar navbar-default navbar-expand-lg navbar-light ">

        <div class="">
            <h2>KalaSenja</h2>
            <small>Coffe and Tea</small>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="navbar-nav">


            </ul>


            <ul class="navbar-nav ml-md-auto">
                <li class="nav-item">
                    <div>
                        <span><?php echo $kasir['nama_kasir'] ?></span>
                    </div>
                </li>

                <li class="nav-item ">

                    <div>
                        <button class="btn btn-success">
                            <span class="bi-cart-fill"></span>
                            <span>0</span>
                        </button>
                    </div>

                </li>

            </ul>
        </div>
    </nav>
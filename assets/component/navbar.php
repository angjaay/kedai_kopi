<?php
include_once('./controller/UserController.php');
$user = new User();
if (isset($_SESSION['id'])) {
    $id = $_SESSION['id'];
    $kasir = $user->get_user($id);
}
?>
<div class="col-md-11 fluid p-3">
    <nav class="navbar navbar-default navbar-expand-lg navbar-light ">

        <div class="">
            <h2>KalaSenja</h2>
            <small>Coffe and Tea</small>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <div class="container">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto my-2 my-lg-0">
                        <?php if (isset($id)) : ?>
                            <li class="nav-item"><a class="nav-link js-scroll-trigger" href=""><?php echo $kasir['nama_kasir'] ?> <i class="fa fa-power-off"></i></a></li>
                        <?php else : ?>
                            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="../../public/login.php">Login</a></li>
                        <?php endif; ?>
                        <li class="nav-item"><button class="btn btn-success">
                                <span class="bi-cart-fill"></span>
                                <span>0</span>
                            </button>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?q=logout">
                                <button class="btn btn-alert">
                                    <span>Logout</span>
                                </button>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
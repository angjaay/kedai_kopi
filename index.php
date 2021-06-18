<?php
session_start();
include_once('./controller/UserController.php');
include_once('./controller/MenuController.php');
if ($_SESSION['login']) {
    $id = $_SESSION['id'];
    $user = new User();
    $menu = new Menu();
    $kasir = $user->get_user($id);

    if (!$user->get_session()) {
        header("location:./public/login.php");
    }

    if (isset($_POST['tambah'])) {
    }

    if (isset($_GET['q'])) {
        $user->logout();
        header("location:./public/login.php");
    }
} else {
    header("location:./public/login.php");
    die();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Pemesanan Kopi</title>
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="assets/card.css">
    <link rel="stylesheet" href="assets/cart.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <style>
        #sidebar {
            min-height: 100vh;
        }

        .napbar {
            min-width: 90hv;
        }

        .cart {
            border-radius: 20px;
            background: rgb(17, 153, 142);
            background: linear-gradient(31deg, rgba(17, 153, 142, 1) 0%, rgba(56, 239, 125, 1) 100%);
            color: #fff;
        }

        .card-header {
            border-radius: 15px;
        }

        .cart h4 {

            margin-top: 2px;
            color: #fff;
        }
    </style>
</head>

<body>
    <div class="container-fluid bg-light">

        <div class="row">
            <!--Sidebar-->
            <?php include 'assets/component/sidebar.php' ?>
            <!--Navbar-->
            <?php include 'assets/component/navbar.php' ?>

            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        <?php
                        foreach ($menu->get_all() as $data) { ?>
                            <div class="col-md-4">
                                <div class="container">
                                    <div class="harga">Rp. <?php echo $data["harga"] ?></div>
                                    <div class="menu"><?php echo $data["nama_menu"] ?></div>
                                    <img src="assets/images/<?php echo $data["gambar"] ?>" class="image shadow-md">
                                    <form action="" method="POST">
                                        <input type="hidden" type="number" name="pembelian" value="1" min="1">
                                        <div class="overlay">
                                            <input type="hidden" name="id_menu" value="<?php echo $data['id_menu'] ?>">
                                            <input class="btn-grad" type="submit" name="tambah" value="tambah">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="col-md-4">

                    <?php include 'assets/component/cart.php' ?>
                </div>



            </div>
        </div>
    </div>



    </div>

</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

</html>
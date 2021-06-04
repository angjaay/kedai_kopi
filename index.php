<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Pemesanan Kopi</title>
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="assets/card.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <style>
        #sidebar {
            min-height: 100vh;
        }

        .napbar {
            min-width: 90hv;
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
                        <div class="col-md-4">
                            <div class="container">
                                <div class="harga">Rp. 26.000</div>
                                <div class="menu">Ayam Bakar</div>
                                <img src="assets/images/ayam bakar.jpeg" alt="ayam bakar" class="image shadow-md">
                                <div class="overlay">
                                    <button class="btn-grad">Tambah</button>
                                </div>
                            </div>
                        </div>

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
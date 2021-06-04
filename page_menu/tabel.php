<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Admin</title>
    <link rel="stylesheet" href="assets/style.css">
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
<div class="container w-25">         
  <table class="table table-bordered">
  <br>
    <thead>
      <tr>
        <th><center><h3>Form Menu</h3></center></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>
            <div>
                <form action="/action_page.php">
                <div class="form-group">
                    <label for="nama_menu">Nama Menu</label>
                    <input type="text" class="form-control" id="nama_menu" name="nama_menu">
                </div>
                <div class="form-group">
                    <label for="comment">Deskripsi Menu</label>
                    <textarea class="form-control" rows="5" id="comment"></textarea>
                </div>
            </div>
            <form>
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="switch1">
                    <label class="custom-control-label" for="switch1">Tersedia</label>
                </div>
                <br>Kategori
                <select name="makanan" class="custom-select">
                    <option selected>Makanan</option>
                    <option value="#">Ayam Bakar</option>
                    <option value="#">..</option>
                    <option value="#">..</option>
                </select>
            </form>
            <br><br>
                <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="text" class="form-control" id="harga" name="harga">
                </div>

                <form>Gambar
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="customFile">
                    <label class="custom-file-label" for="customFile">Pilih File</label>
                </div>
                </form>
                    <script>
                        $(".custom-file-input").on("change", function() {
                        var fileName = $(this).val().split("\\").pop();
                        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
                        });
                    </script>
                <br>
            <div>
                <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        
        
        
        </tbody>
        
        </td>
      </tr>
      </table>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

</html>
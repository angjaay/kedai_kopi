<div class="row">
    <!-- Column -->
    <div class="col-lg-4 col-xlg-3 col-md-12">
        <div class="white-box">
            <thead class="thead-dark">
                <tr>
                    <th>
                        <center>
                            <h3>Form Menu</h3>
                        </center>
                    </th>
                </tr>
            </thead>
            <tbody>
                <form action="/action_page.php">
                    <div>
                        <div class="form-group">
                            <label for="nama_menu">Nama Menu</label>
                            <input type="text" class="form-control" id="nama_menu" name="nama_menu">
                        </div>
                        <div class="form-group">
                            <label for="comment">Deskripsi Menu</label>
                            <textarea class="form-control" rows="5" id="comment" style="height: 50px;"></textarea>
                        </div>
                    </div>
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
                    <br><br>
                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="text" class="form-control" id="harga" name="harga">
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFile">

                    </div>
                    <script>
                        $(".custom-file-input").on("change", function() {
                            var fileName = $(this).val().split("\\").pop();
                            $(this).siblings(".custom-file-label").addClass("selected")
                                .html(fileName);
                        });
                    </script>
                    <br>
                    <div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </tbody>

        </div>
    </div>
    <!-- Column -->
    <!-- Column -->
    <div class="col-lg-8 col-xlg-9 col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive align-items-center">
                    <table class="table table-bordered">
                        <thead>
                            <tr align="center">
                                <th class="border-top-0" style="width: 10%;">No</th>
                                <th class="border-top-0" style="width: 20%;">Gambar</th>
                                <th class="border-top-0">Deskripsi</th>
                                <th class="border-top-0" style="width:24%;">Aksi</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td align="center" class="align-middle">1</td>
                                <td align="center">
                                    <img src="../assets/images/ayam bakar.jpeg" alt="" style="height: 100px; width: auto; border-radius: 15px;">
                                </td>
                                <td><b>Nama :</b> Ayam Bakar<br>
                                    <b>Deskripsi:</b> enak dan murah <br>
                                    <b>Harga:</b> Rp. 12.000
                                </td>
                                <td align="center" class="align-middle">
                                    <button type="button" class="btn btn-success btn-block align-items-right">edit</button>
                                    <button type="button" class="btn btn-danger btn-block">hapus</button>
                                </td>
                            </tr>

                            <tr>
                                <td align="center" class="align-middle">2</td>
                                <td align="center">
                                    <img src="../assets/images/ayam bakar.jpeg" alt="" style="height: 100px; width: auto; border-radius: 15px;">
                                </td>
                                <td>Nama : <br>
                                    Deskripsi: <br>
                                    Harga:

                                </td>
                                <td align="center" class="align-middle">
                                    <button type="button" class="btn btn-success btn-block align-items-right">edit</button>
                                    <button type="button" class="btn btn-danger btn-block">hapus</button>
                                </td>
                            </tr>


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Column -->
</div>
<!-- Row -->
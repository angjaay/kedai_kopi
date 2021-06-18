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
    <div class="col-lg-4 col-xlg-3 col-md-12">
        <div class="white-box">
            <thead class="thead-dark">
                <tr>
                    <th>
                        <center>
                            <h3>Category Form</h3>
                        </center>
                    </th>
                </tr>
            </thead>
            <tbody>
                <form method="POST" enctype="multipart/form-data">
                    <div>
                        <div class="form-group">
                            <label for="nama_menu">Category</label>
                            <input type="text" class="form-control" id="id_menu" name="id_menu">
                        </div>
                    <div>
                        <input type="submit" name="submit" value="Submit" class="btn btn-primary">
                        <input type="reset" name="cancel" value="Cancel" class="btn btn-light">
                    </div>
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
                                <th class="border-top-0" style="width: 40%;">Category Name</th>
                                <th class="border-top-0" style="width: 15%;">Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1;
                            foreach ($data_menu as $data) { ?>
                                <tr>
                                    <td align="center" class="align-middle"><?php echo $i; ?></td>
                                    <td><b></b> <!--?php echo $data[''] ?--> <br>
                                    </td>
                                    <td align="center" class="align-middle">
                                        <button type="button" class="btn btn-success btn-block align-items-right text-white">edit</button>
                                        <button type="button" class="btn btn-danger btn-block text-white">delete</button>
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
<?php $data_kasir = $user->get_all(); ?>



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
                                <th class="border-top-0" style="width: 20%;">Name</th>
                                <th class="border-top-0" style="width: 20%;">Username</th>
                                <th class="border-top-0" style="width: 10%;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1;
                            foreach ($data_kasir as $data) { ?>
                                <tr>
                                    <td align="center" class="align-middle"><?php echo $i; ?></td>
                                    <td align="center" class="align-middle"><?php echo $data['nama_kasir']; ?><br></td>
                                    <td align="center" class="align-middle"><?php echo $data['id_kasir']; ?><br></td>
                                    <td align="center" class="align-middle">
                                    <div class="btn-group">
                                        <?php
                                        $encry->word = $data['id_kasir'];
                                        $id_kasir = $encry->encr();
                                        ?>
                                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                        Action
                                        </button>
                                        <div class="dropdown-menu">
                                        <a class="dropdown-item" href="?p=edit_user&e=<?php echo $id_kasir?>">Edit</a>
                                        <a class="dropdown-item" href="delete_user.php">Delete</a>
                                        </div>
                                    </div>
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
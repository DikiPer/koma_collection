<?php include 'heading.php'; ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Products</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <!-- <h6 class="m-0 font-weight-bold text-primary">Data Users</h6> -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <a href="add_products.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                        class="fas fa-edit fa-sm text-white-50"></i> Add Products</a>
                <a href="add_users.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                        class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Description</th>
                            <th>Code</th>
                            <th>Stock</th>
                            <th>Picture</th>
                            <th>Category</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Description</th>
                            <th>Code</th>
                            <th>Stock</th>
                            <th>Picture</th>
                            <th>Category</th>
                            <th>Actions</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($database->selectOrder('data_produk', 'id_produk') as $load) {
                        ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $load['nama_produk']; ?></td>
                            <td><?= $load['harga_produk']; ?></td>
                            <td><?= $load['deskripsi']; ?></td>
                            <td><?= $load['kode_produk']; ?></td>
                            <td><?= $load['stok_produk']; ?></td>
                            <td><img src="assets/img/products/<?= $load['gambar_produk'];  ?>" alt="" width="100px">
                            </td>
                            <td><?= $load['category']; ?></td>
                            <td style="width: 100px;">
                                <a href="" class="btn btn-primary btn-circle btn-sm text-center" title="edit"
                                    data-toggle="modal" data-target="#exampleModal<?php echo $load['id_produk']; ?>">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <!-- Modal 1 -->
                                <div class="modal fade" id="exampleModal<?php echo $load['id_produk']; ?>" tabindex="-1"
                                    role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Edit
                                                    Product</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="edit_data_products.php" method="POST"
                                                    enctype="multipart/form-data">
                                                    <input type="hidden" class="form-control" name="id_produk"
                                                        value="<?php echo $load['id_produk']; ?>">
                                                    <div class="form-group">
                                                        <label for="email">Nama Produk
                                                        </label>
                                                        <input type="text" name="nama_produk" class="form-control"
                                                            value=" <?php echo $load['nama_produk']; ?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="Nama">Harga Produk
                                                        </label>
                                                        <input type="text" name="harga_produk" class="form-control"
                                                            Svalue=" <?php echo $load['harga_produk']; ?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="Nama">Deskripsi
                                                        </label>
                                                        <input type="text" name="deskripsi" class="form-control"
                                                            value=" <?php echo $load['deskripsi']; ?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="Nama">Kode Produk
                                                        </label>
                                                        <input type="text" class="form-control" name="kode_produk"
                                                            value="<?php echo $load['kode_produk']; ?>"></input>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="Nama">Stok Produk
                                                        </label>
                                                        <input type="text" class="form-control" name="stok_produk"
                                                            value="<?php echo $load['stok_produk']; ?>"></input>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="Nama">Category
                                                        </label>
                                                        <input type="text" class="form-control" name="category"
                                                            value="<?php echo $load['category']; ?>"></input>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="Nama">Gambar Produk
                                                        </label>
                                                        <input type="file" class="form-control" name="gambar_produk"
                                                            value="<?php echo $load['gambar_produk']; ?>"></input>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary"
                                                        name="submit">Edit</button>
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Back</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Modal 1 -->
                                <a href="delete_products.php?id=<?php echo $load['id_produk']; ?>"
                                    class="btn btn-danger btn-circle btn-sm" title="delete"
                                    onclick="return confirm('Hapus data ?')" ;> <i class="fas fa-trash"></i>
                                </a>
                                <a href="" class="btn btn-info btn-circle btn-sm text-center" title="detail"
                                    data-toggle="modal" data-target="#exampleModal1<?php echo $load['id_produk']; ?>">
                                    <i class="fas fa-info"></i>
                                </a>
                                <!-- Modal 2 -->
                                <div class="modal fade" id="exampleModal1<?php echo $load['id_produk']; ?>"
                                    tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Detail
                                                    Data</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="../crud_admin_it/edit.php" method="POST">
                                                    <div class="form-group">
                                                        <label for="Nama">Nama Produk
                                                        </label>
                                                        <input type="text" class="form-control" name="nama_produk"
                                                            value="<?php echo $load['nama_produk']; ?>" readonly>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="email">Harga Produk
                                                        </label>
                                                        <input type="text" name="harga_produk" class="form-control"
                                                            value=" <?php echo $load['harga_produk']; ?>" readonly>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="Nama">Deskripsi
                                                        </label>
                                                        <input type="text" name="harga_produk" class="form-control"
                                                            value=" <?php echo $load['deskripsi']; ?>" readonly>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="Nama">Kode Produk
                                                        </label>
                                                        <input type="text" name="kode_produk" class="form-control"
                                                            value=" <?php echo $load['kode_produk']; ?>" readonly>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="Nama">Stok Produk
                                                        </label>
                                                        <input type="text" class="form-control" name="stok_produk"
                                                            value="<?php echo $load['stok_produk']; ?>"
                                                            readonly></input>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="Nama">Category
                                                        </label>
                                                        <input type="text" class="form-control" name="category"
                                                            value="<?php echo $load['category']; ?>" readonly></input>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="Nama">Gambar Produk
                                                        </label>
                                                        <input type="text" class="form-control" name="gambar_produk"
                                                            value="<?php echo $load['gambar_produk']; ?>"
                                                            readonly></input>
                                                    </div>
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Back</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <?php
                        }
                            ?>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?php include 'footer.php'; ?>
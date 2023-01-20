<?php
require '../function/function.php';
$input = new database();
session_start();

if (isset($_POST['submit'])) {

    //gambar akan di simpan di folder gambar
    $id_produk = $_POST['id_produk'];
    $nama_produk = $_POST['nama_produk'];
    $harga_produk = $_POST['harga_produk'];
    $deskripsi = $_POST['deskripsi'];
    $kode_produk = $_POST['kode_produk'];
    $stok_produk = $_POST['stok_produk'];
    $category = $_POST['category'];

    $tempdir = "assets/img/products/";
    if (!file_exists($tempdir))
        mkdir($tempdir, 0755);
    //gambar akan di simpan di folder gambar
    $target_path = $tempdir . basename($_FILES['gambar_produk']['name']);

    //nama gambar
    $nama_gambar = $_FILES['gambar_produk']['name'];
    //ukuran gambar
    $ukuran_gambar = $_FILES['gambar_produk']['size'];

    $fileinfo = @getimagesize($_FILES["gambar_produk"]["tmp_name"]);
    //lebar gambar
    $width = $fileinfo[0];
    //tinggi gambar
    $height = $fileinfo[1];
    if ($ukuran_gambar > 5000000) {
        echo "<script>
        alert('Gambar melebihi 50Mb !');
        </script>";
    } else {
        if (move_uploaded_file($_FILES['gambar_produk']['tmp_name'], $target_path)) {

            $sql = mysqli_query($koneksi, "UPDATE data_produk SET nama_produk = '$nama_produk', harga_produk = '$harga_produk', deskripsi = '$deskripsi', kode_produk = '$kode_produk', stok_produk = '$stok_produk', category = '$category', gambar_produk = '$nama_gambar' WHERE id_produk = $id_produk");
            echo "<script>
            alert('Data berhasil diubah');
            document.location.href = 'data_products.php';
            </script>
            ";
        } else {
            echo "<script>
            alert('Gagal mengubah data');
            document.location.href = 'data_products.php';
            </script>
            ";
        }
    }
}
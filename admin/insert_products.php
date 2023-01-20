<?php
// memanggil file koneksi.php untuk melakukan koneksi database
require '../function/function.php';

// membuat variabel untuk menampung data dari form
$nama_produk   = $_POST['nama_produk'];
$harga_produk = $_POST['harga_produk'];
$deskripsi     = $_POST['deskripsi'];
$kode_produk    = $_POST['kode_produk'];
$stok_produk    = $_POST['stok_produk'];
$category      = $_POST['category'];
$gambar_produk = $_FILES['gambar_produk']['name'];


//cek dulu jika ada gambar produk jalankan coding ini
if ($gambar_produk != "") {
    $ekstensi_diperbolehkan = array('png', 'jpg'); //ekstensi file gambar yang bisa diupload 
    $x = explode('.', $gambar_produk); //memisahkan nama file dengan ekstensi yang diupload
    $ekstensi = strtolower(end($x));
    $file_tmp = $_FILES['gambar_produk']['tmp_name'];
    $angka_acak     = rand(1, 999);
    $nama_gambar_baru = $angka_acak . '-' . $gambar_produk; //menggabungkan angka acak dengan nama file sebenarnya
    if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
        move_uploaded_file($file_tmp, 'assets/' . $nama_gambar_baru); //memindah file gambar ke folder gambar
        // jalankan query INSERT untuk menambah data ke database pastikan sesuai urutan (id tidak perlu karena dibikin otomatis)
        $query = "INSERT INTO data_produk (nama_produk, harga_produk, deskripsi, kode_produk, stok_produk, category, gambar_produk) VALUES ('$nama_produk', '$harga_produk', '$deskripsi', '$kode_produk', '$stok_produk','$category' '$nama_gambar_baru')";
        $result = mysqli_query($this->conn, $query);
        // periska query apakah ada error
    } else {
        //tampil alert dan akan redirect ke halaman index.php
        //silahkan ganti index.php sesuai halaman yang akan dituju
        echo "<script>alert('Data berhasil ditambah.');window.location='add_products.php';</script>";
    }
} else {
    //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
    echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='add_products.php';</script>";
}

// else {
//     $query = "INSERT INTO produk (nama_produk, deskripsi, harga_beli, harga_jual, gambar_produk) VALUES ('$nama_produk', '$deskripsi', '$harga_beli', '$harga_jual', null)";
//     $result = mysqli_query($koneksi, $query);
//     // periska query apakah ada error
//     if (!$result) {
//         die("Query gagal dijalankan: " . mysqli_errno($koneksi) .
//             " - " . mysqli_error($koneksi));
//     } else {
//         //tampil alert dan akan redirect ke halaman index.php
//         //silahkan ganti index.php sesuai halaman yang akan dituju
//         echo "<script>alert('Data berhasil ditambah.');window.location='index.php';</script>";
//     }
// }
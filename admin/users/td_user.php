<?php
session_start();
include 'function/function.php';
$input = new database();
if (isset($_POST['submit'])) {
    $nama_user = $_POST['nama_user'];
    $email = $_POST['email'];
    $no_tlp = $_POST['no_tlp'];
    $username = $_POST['username'];
    $tgl_regist = $_POST['tgl_regist'];
    $password = md5($_POST['password']);
    $role = $_POST['role'];

    // if (empty($_FILES["foto"]["tmp_name"])) {
    //     //ketika kondisi data kosong
    //     $imgFile = "";
    //     $tmp_dir = "";
    //     $upload_dir = '';
    //     $item_foto = '';
    //     $foto = $tmp_dir;
    // } else {
    //     //ketika user mengsisi file upload
    //     $imgFile = $_FILES['foto']['name'];
    //     $tmp_dir = $_FILES['foto']['tmp_name'];
    //     $imgSize = $_FILES['foto_mahasiswa']['size'];
    //     $upload_dir = 'foto/';
    //     $imgExt = strtolower(pathinfo($imgFile, PATHINFO_EXTENSION));
    //     $valid_extensions = array('jpeg', 'jpg', 'png', 'gif');
    //     $item_foto = rand(1000, 1000000) . "." . $imgExt;
    //     if (in_array($imgExt, $valid_extensions)) {
    //         if ($imgSize > 400000) {
    //             $foto_mahasiswa_err = "Foto terlalu besar.Max 400KB";
    //         } else {
    //             $foto_mahasiswa = $tmp_dir;
    //         }
    //     } else {
    //         $foto_mahasiswa_err = "Ektensi Foto siswa tidak sesuai ketentuan upload, format JPEG, PNG";
    //     }
    // }


    $result = mysqli_query($input->conn, "INSERT INTO users VALUES ('', '$nama_user','$email', '$no_tlp', '$username', '$tgl_regist', '$password', '$role' )");
    if ($result) {
        $_SESSION['username'] = $username;
        echo "
        <script>
            alert('Berhasil registrasi, silahkan login');
            document.location.href = '../tambah_users.php';
        </script>
        ";
    } else {
        echo "
	<script>
		alert('Gagal registrasi, coba lagi');
		document.location.href = 'add_user.php';
	</script>
	";
    }
}

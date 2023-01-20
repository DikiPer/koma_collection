<?php
session_start();
include '../function/function.php';
$input = new database();
if (isset($_POST['submit'])) {
    $nama_user = htmlspecialchars($_POST['nama_user']);
    $email = $_POST['email'];
    $no_tlp = $_POST['no_tlp'];
    $username = $_POST['username'];
    $tgl_regist = $_POST['tgl_regist'];
    $password = md5($_POST['password']);
    $role = $_POST['role'];

    $result = mysqli_query($input->conn, "INSERT INTO users VALUES ('', '$nama_user','$email', '$no_tlp', '$username', '$tgl_regist', '$password', '$role' )");
    if ($result) {
        $_SESSION['username'] = $username;
        echo "
        <script>
            alert('Berhasil registrasi, silahkan login');
            document.location.href = 'index.php';
        </script>
        ";
    } else {
        echo "
	<script>
		alert('Gagal registrasi, coba lagi');
		document.location.href = 'signin.php';
	</script>
	";
    }
}

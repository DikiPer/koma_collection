<?php
require '../function/function.php';
$input = new database();
session_start();

if (isset($_POST['submit'])) {
    $id_user = $_POST['id_user'];
    $nama_user = htmlspecialchars($_POST['nama_user']);
    $email = htmlspecialchars($_POST['email']);
    $no_tlp = htmlspecialchars($_POST['no_tlp']);
    $username = htmlspecialchars($_POST['username']);

    $sql = "UPDATE users set 

    nama_user = '$nama_user',
    email = '$email',
    no_tlp = '$no_tlp',
    username = '$username'
    WHERE id_user = $id_user ";

    mysqli_query($input->conn, $sql);

    echo "
    <script>
    document.location.href = 'data_user.php';
    alert ('Berhasil Update Data');
    </script>";
} else {
    echo "
    <script>
    document.location.href = 'data_user.php';
    alert('Data gagal di update');
    </script>";
}

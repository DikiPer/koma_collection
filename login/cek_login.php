<?php
session_start();
include '../function/function.php';
$conn = new database;

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $data = $conn->selectWhere2('users', 'username', $username, 'password', $password);
    $cek = mysqli_num_rows($data);

    //kondisi
    //Jika data ditemukan lebih dari o
    if ($cek > 0) {
        //fetch data array tersebut dan masukan kedalam variable
        $hasil = mysqli_fetch_assoc($data);


        //buat if bersarang jika role adalah admin
        if ($hasil['role'] == 'admin') {
            $_SESSION['username'] = $username;
            $_SESSION['role'] = 'admin';
            header("Location:../admin/index.php");
        } elseif ($hasil['role'] == 'user') {
            $_SESSION['username'] = $username;
            $_SESSION['role'] = 'user';
            header("Location:../user/index.php");
        }
    } else {
        echo "<script>
        alert('Gagal Login !');
        document.location.href = '../login/index.php';
        </script>
        ";
    }
}
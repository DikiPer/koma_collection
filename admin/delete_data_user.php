<?php
include '../function/function.php';
$database = new database();
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = mysqli_query($database->conn, "DELETE FROM users WHERE id_user = $id");
    if ($query) {
        echo "
        <script>
            alert('data berhasil dihapus!');
            document.location.href = 'data_user.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('data gagal dihapus!');
            document.location.href = 'data_user.php';
        </script>
        ";
    }
}
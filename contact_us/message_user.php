<?php
session_start();
include '../function/function.php';
$input = new database();
if (isset($_POST['submit'])) {
    $nama_user = $_POST['nama_user'];
    $email_user = $_POST['email_user'];
    $subject_pesan = $_POST['subject_pesan'];
    $isi_pesan = $_POST['isi_pesan'];



    $result = mysqli_query($input->conn, "INSERT INTO contact_us VALUES ('', '$nama_user','$email_user', '$subject_pesan', '$isi_pesan' )");
    if ($result) {
        $_SESSION['username'] = $username;
        echo "
        <script>
            alert('Terima kasih atas masukan anda');
            document.location.href = '../index.php';
        </script>
        ";
    } else {
        echo "
	<script>
		alert('Gagal mengirim pesan, coba lagi');
		document.location.href = 'contact_us.php';
	</script>
	";
    }
}

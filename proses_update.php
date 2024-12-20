<?php
session_start();
include 'koneksi.php';

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $peran = $_POST['peran'];

    $query = "UPDATE tbpengguna SET nama_pengguna='$nama', email='$email', peran='$peran' WHERE id_pengguna=$id";
    $update = mysqli_query($conn, $query);

    if ($update) {
        $_SESSION['status'] = 'Berhasil';
        $_SESSION['message'] = 'Data pengguna berhasil diperbarui.';
        $_SESSION['icon'] = 'success';
    } else {
        $_SESSION['status'] = 'Gagal';
        $_SESSION['message'] = 'Gagal memperbarui data pengguna.';
        $_SESSION['icon'] = 'error';
    }
    header("Location:tampilPengguna.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
</head>
<body>
<?php
include "koneksi.php";

if (isset($_GET['kdhapus'])) {
    $id = $_GET['kdhapus'];
    $hapus = mysqli_query($conn, "DELETE FROM tbberita WHERE nomor='$id'");
    if ($hapus) {
        echo "<script>
                Swal.fire({
                    title: 'Berhasil!',
                    text: 'Berita berhasil dihapus.',
                    icon: 'success',
                    confirmButtonText: 'OK'
                }).then(() => {
                    window.location.href = 'tampilBeritaUser.php';
                });
              </script>";
    } else {
        echo "<script>
                Swal.fire({
                    title: 'Gagal!',
                    text: 'Gagal menghapus berita.',
                    icon: 'error',
                    confirmButtonText: 'OK'
                }).then(() => {
                    window.location.href = 'tampilBeritaUser.php';
                });
              </script>";
    }
} else {
    header("Location: tampilBeritaUser.php");
}
?>
</body>
</html>




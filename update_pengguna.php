<?php
include 'koneksi.php';

$id = $_POST['id_pengguna'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$peran = $_POST['peran'];

$query = "UPDATE tbpengguna SET nama_pengguna='$nama', email='$email', peran='$peran' WHERE id_pengguna=$id";
$update = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Pengguna</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
</head>
<body>
<?php
if ($update) {
    echo "<script>
            Swal.fire({
                title: 'Berhasil!',
                text: 'Pengguna berhasil diupdate.',
                icon: 'success',
                confirmButtonText: 'OK'
            }).then(() => {
                window.location.href = 'tampilPengguna.php';
            });
          </script>";
} else {
    echo "<script>
            Swal.fire({
                title: 'Gagal!',
                text: 'Gagal mengupdate pengguna.',
                icon: 'error',
                confirmButtonText: 'OK'
            }).then(() => {
                window.location.href = 'editPengguna.php?id=$id';
            });
          </script>";
}
?>
</body>
</html>

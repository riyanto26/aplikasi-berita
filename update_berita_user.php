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

    // Ambil data dari form
    $id       = $_POST['nomor'];
    $judul    = $_POST['judul'];
    $isiberita= $_POST['isiberita'];
    $penulis  = $_POST['penulis'];

    // Cek jika ada upload gambar baru
    if ($_FILES['fupload']['name']) {
        $vfoto = $_FILES['fupload']['name'];
        $tfoto = $_FILES['fupload']['tmp_name'];
        $dir   = "foto_berita/";

        $upload = $dir . $vfoto;
        move_uploaded_file($tfoto, $upload);

        // Update dengan gambar
        $query = "UPDATE tbberita SET judul='$judul', isiberita='$isiberita', gambar='$vfoto', penulis='$penulis' WHERE nomor='$id'";
    } else {
        // Update tanpa gambar
        $query = "UPDATE tbberita SET judul='$judul', isiberita='$isiberita', penulis='$penulis' WHERE nomor='$id'";
    }

    $update = mysqli_query($conn, $query);

    if ($update) {
        echo "<script>
                Swal.fire({
                    title: 'Berhasil!',
                    text: 'Berita berhasil di update.',
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
                    text: 'Gagal mengupdate berita.',
                    icon: 'error',
                    confirmButtonText: 'OK'
                }).then(() => {
                    window.location.href = 'tampilBeritaUser.php';
                });
              </script>";
    } 
?>

</body>
</html>

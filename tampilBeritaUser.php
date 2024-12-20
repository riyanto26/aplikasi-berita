<?php 
    include "koneksi.php";
    include 'headerUser.php';
    $sql = mysqli_query($conn, "SELECT * FROM tbberita ORDER BY nomor ASC");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil Berita</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
            background: linear-gradient(to bottom, #6a11cb, #2575fc);
            font-family: 'Poppins', sans-serif;
        }

        main {
            flex: 1;
            padding-top: 30px;
        }

        h1, p {
            color: #fff;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.3);
        }

        .table {
            background: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .table-hover tbody tr:hover {
            background-color: #f1f1f1;
        }

        .btn-primary {
            background-color: #6a11cb;
            border: none;
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #2575fc;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
        }

        .btn-outline-warning, .btn-outline-danger {
            border-radius: 10px;
        }
        footer {
            text-align: center;
            margin-top: auto;
            padding: 0px;
            color: #fff;
            font-size: 0.9rem;
        }
    </style>
</head>
<body>
<!-- Main Content -->
<main class="container mt-5">
    <h1 class="text-center">Daftar Berita</h1>
    <p class="text-center">Berikut ini adalah daftar berita yang paling populer.</p>

    <!-- Button Add Berita -->
    <div class="mb-4 text-center">
        <a href="tambah_berita_user.php">
            <button class="btn btn-primary btn-sm">Tambah Berita</button>
        </a>
    </div>

    <!-- Table Data Berita -->
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul Berita</th>
                    <th>Isi Berita</th>
                    <th>Gambar</th>
                    <th>Penulis</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $i = 1;
                    while ($data = mysqli_fetch_array($sql)) {
                ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $data['judul']; ?></td>
                        <td><?php echo substr($data['isiberita'], 0, 50); ?>...</td>
                        <td><img src="foto_berita/<?php echo $data['gambar']; ?>" alt="Gambar Berita" width="100" height="100"></td>
                        <td><?php echo $data['penulis']; ?></td>
                        <td>
                            <a href="edit_berita_user.php?kdberita=<?php echo $data['nomor']; ?>" class="btn btn-outline-warning btn-sm">Edit</a>
                            <a href="javascript:void(0);" onclick="confirmDeletion(<?= $data['nomor']; ?>);" class="btn btn-outline-danger btn-sm">Hapus</a>
                        </td>
                    </tr>
                <?php
                    $i++;
                    }
                ?>
            </tbody>
        </table>
    </div>
</main>
<footer>
    <?php include 'footer.php';?>
</footer>
<script>
function confirmDeletion(id) {
    Swal.fire({
        title: 'Apakah Anda yakin?',
        text: "Anda tidak akan dapat mengembalikan data ini!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, hapus!',
        cancelButtonText: 'Batal'
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = 'hapus_berita_user.php?kdhapus=' + id;
        }
    });
}
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
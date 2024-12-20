<?php
include 'headerAdmin.php';
include 'koneksi.php';
session_start();
if ($_SESSION['role'] != 'admin') {
    header("Location: index.php?pesan=belum_login");
    exit();
}
// Ambil data dari tabel tbpengguna
$query = "SELECT * FROM tbpengguna";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pengguna</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
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

        .container h1, .alert {
            color: #fff;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.3);
        }

        .card {
            border: none;
            border-radius: 10px;
            overflow: hidden;
            background: #ffffff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }


        .card-title {
            font-weight: bold;
            color: #333;
        }

        .card-text {
            color: #555;
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

        table th {
            background-color: #6a11cb;
            color: #fff;
            text-align: center;
        }

        table td {
            text-align: center;
        }

        .btn-danger:hover {
            background-color: #ef4444;
        }

        .btn-warning:hover {
            background-color: #f59e0b;
        }
    </style>
</head>
<body>
<main class="container mt-4">
    <h6 class="alert text-center"><b>Data Pengguna</b> - Kelola Informasi Pengguna</h6>
    <div class="text-end mb-3">
        <a href="tambahPengguna.php" class="btn btn-primary">Tambah Pengguna</a>
    </div>
    <div class="card p-4">
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Pengguna</th>
                    <th>Email</th>
                    <th>Peran</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                    <tr>
                        <td><?= htmlspecialchars($row['id_pengguna']); ?></td>
                        <td><?= htmlspecialchars($row['nama_pengguna']); ?></td>
                        <td><?= htmlspecialchars($row['email']); ?></td>
                        <td><?= htmlspecialchars($row['peran']); ?></td>
                        <td>
                            <a href="editPengguna.php?id=<?= $row['id_pengguna']; ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="javascript:void(0);" onclick="confirmDeletion(<?= $row['id_pengguna']; ?>);" class="btn btn-danger btn-sm">Hapus</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script>
    function confirmDeletion(id) {
        Swal.fire({
            title: 'Apakah Anda yakin?',
            text: "Data ini akan dihapus secara permanen!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, hapus!',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = 'hapusPengguna.php?id=' + id;
            }
        });
    }
</script>
<?php include 'footer.php'; ?>
</body>
</html>

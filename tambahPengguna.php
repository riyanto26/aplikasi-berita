<?php
include 'koneksi.php';

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $sandi = password_hash($_POST['sandi'], PASSWORD_DEFAULT);
    $peran = $_POST['peran'];

    $query = "INSERT INTO tbpengguna (nama_pengguna, email, kata_sandi, peran) VALUES ('$nama', '$email', '$sandi', '$peran')";
    mysqli_query($conn, $query);
    header("Location: tampilPengguna.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pengguna</title>
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

        .container {
            margin-top: 100px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            padding: 30px;
            max-width: 500px;
        }

        h2 {
            color: #333;
            font-weight: 900;
            text-align: center;
            margin-bottom: 30px;
        }

        label {
            font-weight: bold;
            color: #555;
        }

        input, select {
            border-radius: 5px;
            border: 1px solid #ddd;
            padding: 10px;
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

        .btn-secondary {
            background-color: #aaa;
            border: none;
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
        }

        .btn-secondary:hover {
            background-color: #888;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
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
    <div class="container">
        <h2>Tambah Pengguna</h2>
        <form method="POST" action="">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Pengguna</label>
                <input type="text" class="form-control" name="nama" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" required>
            </div>
            <div class="mb-3">
                <label for="sandi" class="form-label">Kata Sandi</label>
                <input type="password" class="form-control" name="sandi" required>
            </div>
            <div class="mb-3">
                <label for="peran" class="form-label">Peran</label>
                <select name="peran" class="form-select">
                    <option value="admin">Admin</option>
                    <option value="penulis">Penulis</option>
                    <option value="pembaca">Pembaca</option>
                </select>
            </div>
            <button type="submit" name="submit" class="btn btn-primary w-100 mb-2">Simpan</button>
            <button type="button" class="btn btn-secondary w-100" onclick="window.history.back()">Kembali</button>
        </form>
    </div>
    <footer>
        <?php include 'footer.php';?>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

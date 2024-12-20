<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <style>
        body {
            background: linear-gradient(to bottom, #6a11cb, #2575fc);
            font-family: 'Poppins', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        .card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            padding: 30px;
            width: 400px;
        }

        h3 {
            text-align: center;
            color: #333;
            font-weight: 900;
            margin-bottom: 30px;
        }

        label {
            font-weight: bold;
            color: #555;
        }

        input {
            border-radius: 5px;
            border: 1px solid #ddd;
            padding: 10px;
        }

        .btn-info {
            background-color: #2575fc;
            border: none;
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
        }

        .btn-info:hover {
            background-color: #6a11cb;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
        }

        .alert {
            font-size: 0.9rem;
            margin-bottom: 20px;
        }

        footer {
            text-align: center;
            padding: 10px;
            color: #fff;
            font-size: 0.9rem;
            margin-top: auto;
        }
    </style>
</head>
<body>
    <div class="card">
        <h3>Halaman Login</h3>
        
        <?php
        if (isset($_GET['pesan'])) {
            if ($_GET['pesan'] == "gagal") {
                echo "<div class='alert alert-danger'>Login Gagal! Username dan Password Salah.</div>";
            } else if ($_GET['pesan'] == "logout") {
                echo "<div class='alert alert-info'>Anda telah berhasil logout.</div>";
            } else if ($_GET['pesan'] == "belum_login") {
                echo "<div class='alert alert-warning'>Anda harus login untuk mengakses halaman admin.</div>";
            }
        }
        ?>

        <form action="login.php" method="post">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" name="username" id="username" placeholder="Masukkan Username" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Masukkan Password" required>
            </div>
            <button type="submit" class="btn btn-info w-100 mb-2">Login</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

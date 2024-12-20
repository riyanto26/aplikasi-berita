<?php
  include 'headerUser.php';
  session_start();
  if ($_SESSION['role'] != 'user') {
      header("Location: index.php?pesan=belum_login");
      exit();
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
            background: linear-gradient(to bottom, #6a11cb, #2575fc);
            font-family: 'Poppins', sans-serif;
        }

        .container h1 {
            color: #fff;
            font-weight: 900;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.3);
        }

        main {
            flex: 1;
            padding-top: 30px;
        }

        .alert {
            font-size: 1rem;
            background-color: #1e90ff;
            border: none;
            color: #fff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .card {
            border: none;
            border-radius: 10px;
            overflow: hidden;
            background: #ffffff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
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
    </style>
</head>
<body>
    <!-- Konten Utama -->
    <main class="container mt-4">
        <h6 class="alert text-center"><b>Selamat Datang!</b> Di Informasi Berita Terkini. </h6>
        <h1 class="text-center">Hi, <?php echo $_SESSION['username'];?> </h1>
        <div class="row mt-4">
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <div class="card-body text-center">
                        <h5 class="card-title">Informasi Berita</h5>
                        <p class="card-text">Manajemen Berita Terkini</p>
                        <a href="tampilBeritaAdmin.php" class="btn btn-primary">Lihat Berita</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> 
</body>
</html>
<?php include 'footer.php';?>


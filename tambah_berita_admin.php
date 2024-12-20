<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Form Tambah Berita</title>
    <style>
        body {
            background: linear-gradient(to bottom, #6a11cb, #2575fc);
            color: #ffffff;
            font-family: 'Poppins', sans-serif;
        }

        .form-container {
            margin: 8rem auto;
            background-color: #ffffff;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
            max-width: 600px;
            color: #333;
        }

        .form-title {
            font-weight: 700;
            color: #6a11cb;
            text-align: center;
        }

        .form-label {
            font-weight: 500;
            color: #555;
        }

        .form-control {
            border-radius: 8px;
            border: 1px solid #ccc;
        }

        .btn-primary {
            background-color: #6a11cb;
            border-color: #6a11cb;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #2575fc;
            border-color: #2575fc;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .btn-secondary {
            background-color: #555;
            border-color: #555;
            transition: all 0.3s ease;
        }

        .btn-secondary:hover {
            background-color: #333;
            border-color: #333;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>
    <!-- Form Container -->
    <div class="form-container">
        <h1 class="form-title">Form Tambah Berita</h1>
        <form action="simpanBeritaAdmin.php" method="post" enctype="multipart/form-data">
            <!-- Judul Berita -->
            <div class="mb-4">
                <label for="judul" class="form-label">Judul Berita</label>
                <input type="text" class="form-control" id="judul" name="judul" placeholder="Masukkan Judul Berita" required>
            </div>

            <!-- Isi Berita -->
            <div class="mb-4">
                <label for="isi" class="form-label">Isi Berita</label>
                <textarea class="form-control" id="isi" name="isi" rows="4" placeholder="Masukkan Isi Berita" required></textarea>
            </div>

            <!-- Gambar -->
            <div class="mb-4">
                <label for="fupload" class="form-label">Gambar</label>
                <input type="file" class="form-control" id="fupload" name="fupload" required>
            </div>

            <!-- Penulis -->
            <div class="mb-4">
                <label for="penulis" class="form-label">Penulis</label>
                <input type="text" class="form-control" id="penulis" name="penulis" placeholder="Masukkan Nama Penulis" required>
            </div>

            <!-- Tombol -->
            <div class="d-flex justify-content-between">
                <button type="button" class="btn btn-secondary px-4" onclick="window.history.back()">Kembali</button>
                <button type="reset" class="btn btn-secondary px-4">Reset</button>
                <button type="submit" class="btn btn-primary px-4">Submit</button>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ppRqxA3zW4k4pxCOQfAevPpN2G0A4kpi5fiHbgHhrkbfJHBgdnKP91IxbgWhV72g" crossorigin="anonymous"></script>
</body>
</html>
<?php include 'footer.php';?>

<?php
    include "koneksi.php";
    $id = $_GET['kdberita'];
    $query = mysqli_query($conn, "SELECT * FROM tbberita WHERE nomor='$id'");
    $data = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Berita</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
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

        .btn-success {
            background-color: #6a11cb;
            border-color: #6a11cb;
            transition: all 0.3s ease;
        }

        .btn-success:hover {
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
        <h1 class="form-title">Edit Berita</h1>
        <form action="update_berita_user.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="nomor" value="<?php echo $data['nomor']; ?>">

            <div class="mb-3">
                <label class="form-label">Judul Berita</label>
                <input type="text" name="judul" class="form-control" value="<?php echo $data['judul']; ?>" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Isi Berita</label>
                <textarea name="isiberita" class="form-control" rows="4" required><?php echo $data['isiberita']; ?></textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Gambar</label>
                <input type="file" name="fupload" class="form-control">
                <p>Gambar lama: <img src="foto_berita/<?php echo $data['gambar']; ?>" width="100" style="border-radius: 8px;"></p>
            </div>

            <div class="mb-3">
                <label class="form-label">Penulis</label>
                <input type="text" name="penulis" class="form-control" value="<?php echo $data['penulis']; ?>" required>
            </div>

            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-success px-4">Update Berita</button>
                <button type="button" class="btn btn-secondary px-4" onclick="window.history.back()">Kembali</button>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php include 'footer.php'; ?>

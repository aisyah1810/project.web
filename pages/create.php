<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Catatan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa; /* Warna latar belakang yang lembut */
        }
        .container {
            background-color: #ffffff; /* Warna latar belakang kontainer */
            padding: 30px;
            border-radius: 15px; /* Sudut yang lebih halus */
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1); /* Bayangan */
            max-width: 600px; /* Lebar maksimum */
            margin: auto; /* Pusatkan kontainer */
        }
        h2 {
            color: #6f42c1; /* Warna judul */
        }
    </style>
</head>

<body class="p-5" style="background-image: url('../background.jpeg');">
    <div class="container mt-5">
        <h2 class="text-center">Tambah Catatan Baru</h2>
        <form action="../actions/store.php" method="POST">
            <div class="form-group">
                <label for="judul">Judul:</label>
                <input class="form-control" type="text" id="judul" name="judul" required>
            </div>

            <div class="form-group">
                <label for="isi">Isi Catatan:</label>
                <textarea class="form-control" id="isi" name="isi" rows="5" required></textarea>
            </div>

            <button class="btn btn-primary btn-block" type="submit">Simpan</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>

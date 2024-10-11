<?php
$conn = new mysqli("localhost", "root", "", "aisyahsuci");
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM notes WHERE id = $id");
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
} else {
    echo "Catatan tidak ditemukan.";
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Catatan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
        }
        .container {
            background-image: url('background.jpeg'); /* Ganti dengan path ke gambarmu */
            background-color: #ffe6f0; /* Warna latar belakang form pastel */
            padding: 30px;
            border-radius: 15px; /* Radius sudut yang lebih halus */
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1); /* Bayangan yang lebih dalam */
            max-width: 600px; /* Lebar maksimum */
            margin: auto; /* Pusatkan kontainer */
        }
        h2 {
            color: #000000; /* Warna teks judul pastel */
        }
        .btn-primary {
            background-color: #6f42c1; /* Warna tombol pastel */
            border-color: #6f42c1; /* Warna border tombol */
        }
        .btn-primary:hover {
            background-color: #5a32a3; /* Warna saat hover */
            border-color: #5a32a3; /* Warna border saat hover */
        }
        label {
            color: #495057; /* Warna label pastel */
        }
        .form-control {
            background-color: #e8f0fe; /* Warna latar belakang input pastel */
        }
    </style>
</head>

<body class="p-5" style="background-image: url('../background.jpeg');">
    <div class="container mt-5">
        <h2 class="text-center">Edit Catatan</h2>
        <form action="../actions/store.php" method="POST">
            <input type="hidden" name="id" value="<?php echo htmlspecialchars($row['id']); ?>">
            <div class="form-group">
                <label for="judul">Judul:</label>
                <input class="form-control" type="text" id="judul" name="judul" value="<?php echo htmlspecialchars($row['judul']); ?>" required>
            </div>
            <div class="form-group">
                <label for="isi">Isi Catatan:</label>
                <textarea class="form-control" id="isi" name="isi" rows="5" required><?php echo htmlspecialchars($row['isi']); ?></textarea>
            </div>
            <button class="btn btn-primary btn-block" type="submit">Simpan</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>


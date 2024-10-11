<?php
$conn = new mysqli("localhost", "root", "", "aisyahsuci");

// Cek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM notes ORDER BY created_at DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Catatan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css">
    <style>
        body {
            background-image: url('background.jpeg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
        .container {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }
        h2 {
            color: #6F2DA8;
        }
        .btn-primary {
            background-color: #6f42c1;
            border-color: #6f42c1;
        }
        .btn-primary:hover {
            background-color: #5a32a3;
            border-color: #ffffff;
        }
        .table th {
            background-color: #e3d6ff;
        }
        .table-striped tbody tr:nth-of-type(odd) {
            background-color: #f9f9f9;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center mb-5">Daftar Catatan</h2>
        <div class="text-left mb-3">
            <a class="btn btn-primary" href="pages/create.php">Tambah Catatan Baru</a>
            <a class="btn btn-secondary" href="aboutme.php">Lihat About Me</a> <!-- Tautan diubah ke aboutme.php -->
        </div>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Isi Catatan</th>
                    <th>Tanggal Dibuat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    $no = 1;
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $no++ . "</td>";
                        echo "<td>" . htmlspecialchars($row['judul']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['isi']) . "</td>";
                        echo "<td>" . date('d-m-Y H:i', strtotime($row['created_at'])) . "</td>";
                        echo "<td>";
                        echo "<a href='./pages/edit.php?id=" . $row['id'] . "' class='btn btn-warning btn-sm'>Edit</a> ";
                        echo "<a href='./actions/delete.php?id=" . $row['id'] . "' class='btn btn-danger btn-sm' onclick='return confirm(\"Apakah anda yakin ingin menghapus catatan ini?\");'>Hapus</a>";
                        echo "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='5' class='text-center'>Belum ada catatan.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<?php
$conn->close();
?>
</body>
</html>

<?php
$conn = new mysqli("localhost", "root", "", "aisyahsuci");
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
} else {
    $result = $conn->query("SELECT * FROM notes");
}

if ($result->num_rows > 0) {
    echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>Judul</th>
                <th>Isi</th>
                <th>Tanggal Dibuat</th>
            </tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row['id'] . "</td>
                <td>" . $row['judul'] . "</td>
                <td>" . $row['isi'] . "</td>
                <td>" . $row['created_at'] . "</td>
            </tr>";
    }
    echo "</table>";
} else {
    echo "Tidak ada data.";
}
$conn->close();
?>
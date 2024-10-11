<?php
// Data portofolio dengan link detail
$projects = [
    [
        "title" => "Proyek 1",
        "description" => "Deskripsi singkat proyek 1.",
        "image" => "https://via.placeholder.com/800x400",
        "link" => "https://example.com/proyek1"
    ],
    [
        "title" => "Proyek 2",
        "description" => "Deskripsi singkat proyek 2.",
        "image" => "https://via.placeholder.com/800x400",
        "link" => "https://example.com/proyek2"
    ],
    [
        "title" => "Proyek 3",
        "description" => "Deskripsi singkat proyek 3.",
        "image" => "https://via.placeholder.com/800x400",
        "link" => "https://example.com/proyek3"
    ],
    // Tambah proyek lainnya sesuai kebutuhan
];

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio Saya</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-image: url('background.jpeg'); /* Ganti dengan path ke gambarmu */
            background-size: cover; /* Menutupi seluruh latar belakang */
            background-position: center; /* Posisi gambar di tengah */
            background-repeat: no-repeat; /* Tidak mengulang gambar */
        }
        .portfolio-title {
            font-size: 1.5rem;
            font-weight: bold;
            color: #333; /* Warna teks gelap */
        }
        .portfolio-item {
            margin-bottom: 30px;
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.6s ease, transform 0.6s ease;
            border-radius: 10px; /* Sudut melengkung */
            overflow: hidden; /* Menghindari gambar keluar dari batas */
        }
        .portfolio-item.visible {
            opacity: 1;
            transform: translateY(0);
        }
        footer {
            background-color: #343a40;
            color: white;
            padding: 20px 0;
        }
        .parallax {
            background-attachment: fixed;
            background-size: cover;
            height: 300px;
            position: relative;
            overflow: hidden;
        }
        .parallax::before {
            content: '';
            background-color: rgba(255, 255, 255, 0.7); /* Warna putih semi-transparan */
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: 1;
        }
        .parallax img {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 100%;
            height: auto;
            transform: translate(-50%, -50%);
            z-index: 0;
        }
        .card {
            background-color: #ffebcd; /* Warna pastel untuk kartu */
            border: none; /* Menghilangkan border */
            transition: transform 0.2s;
        }
        .card:hover {
            transform: scale(1.05);
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #ffe4e1;">
        <a class="navbar-brand" href="#">Portofolio Saya</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#projects">Proyek</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-5">
        <h1 class="text-center mb-4" style="color: #6a5acd;">Portofolio Saya</h1>
        <div class="row" id="projects">
            <?php foreach ($projects as $project): ?>
                <div class="col-md-4 portfolio-item">
                    <div class="parallax" style="background-image: url('<?php echo $project['image']; ?>');">
                        <img src="<?php echo $project['image']; ?>" alt="<?php echo $project['title']; ?>">
                    </div>
                    <div class="card shadow">
                        <div class="card-body">
                            <h5 class="portfolio-title"><?php echo $project['title']; ?></h5>
                            <p class="card-text"><?php echo $project['description']; ?></p>
                            <a href="<?php echo $project['link']; ?>" class="btn btn-secondary">Lihat Detail</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <footer class="text-center">
        <div class="container">
            <p>&copy; <?php echo date("Y"); ?> - Portofolio Saya. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            // Fungsi untuk menambahkan kelas "visible" saat proyek muncul di viewport
            function checkVisibility() {
                $('.portfolio-item').each(function() {
                    var elementTop = $(this).offset().top;
                    var windowBottom = $(window).scrollTop() + $(window).height();
                    if (elementTop < windowBottom) {
                        $(this).addClass('visible');
                    }
                });
            }
            $(window).on('scroll', checkVisibility);
            checkVisibility(); // Cek saat halaman dimuat
        });
    </script>
</body>
</html>








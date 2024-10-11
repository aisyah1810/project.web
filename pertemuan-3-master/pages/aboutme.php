<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio Saya</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .hero {
            background-image: url('background.jpg'); /* Ganti dengan path gambar latar belakang */
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-align: center;
        }

        .portfolio-item {
            margin: 20px 0;
        }

        .portfolio-item img {
            width: 100%;
            border-radius: 15px;
        }

        .portfolio-title {
            font-size: 24px;
            font-weight: bold;
            margin-top: 15px;
        }

        .portfolio-description {
            font-size: 16px;
            color: #555;
        }
    </style>
</head>

<body>

    <div class="hero">
        <h1>Selamat Datang di Portofolio Saya</h1>
        <p>Menjelajahi Karya dan Proyek Saya</p>
    </div>

    <div class="container mt-5">
        <h2 class="text-center">Proyek Saya</h2>

        <div class="row">
            <?php
            // Contoh data proyek
            $projects = [
                [
                    'title' => 'Proyek 1',
                    'description' => 'Deskripsi tentang proyek 1.',
                    'image' => 'project1.jpg' // Ganti dengan path gambar proyek
                ],
                [
                    'title' => 'Proyek 2',
                    'description' => 'Deskripsi tentang proyek 2.',
                    'image' => 'project2.jpg' // Ganti dengan path gambar proyek
                ],
                [
                    'title' => 'Proyek 3',
                    'description' => 'Deskripsi tentang proyek 3.',
                    'image' => 'project3.jpg' // Ganti dengan path gambar proyek
                ],
                // Tambahkan proyek lain sesuai kebutuhan
            ];

            foreach ($projects as $project) {
                echo '<div class="col-md-4 portfolio-item">';
                echo '<img src="' . $project['image'] . '" alt="' . $project['title'] . '">';
                echo '<div class="portfolio-title">' . $project['title'] . '</div>';
                echo '<div class="portfolio-description">' . $project['description'] . '</div>';
                echo '</div>';
            }
            ?>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>

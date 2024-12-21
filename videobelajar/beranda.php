<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda - VideoBelajar</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* General Styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f5f0; /* Warna krem muda */
            margin: 0;
            padding: 0;
        }

        /* Header */
        .header {
            background-color: #ffffff; /* Header putih */
            padding: 10px 20px;
            display: flex;
            align-items: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .header .logo {
            width: 150px;
        }

        .header .profile {
            margin-left: auto;
            display: flex;
            align-items: center;
            font-size: 14px;
        }

        .header .profile img {
            width: 35px;
            height: 35px;
            border-radius: 50%;
            margin-right: 10px;
        }

        .header .profile .kategori {
            margin-left: 20px;
            font-weight: bold;
            color: #333333;
            cursor: pointer;
        }

        /* Hero Section */
        .hero-section {
            text-align: center;
            background: url('assets/img/beranda.jpg') no-repeat center center;
            background-size: cover;
            color: white;
            padding: 40px;
        }

        .hero-section h1 {
            font-size: 30px;
            font-weight: bold;
        }

        .hero-section p {
            font-size: 18px;
        }

        .hero-section a {
            color: #4CAF50;
            text-decoration: none;
            font-weight: bold;
        }

        /* Course Cards Section */
        .course-cards {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin-top: 20px;
        }

        .course-card {
            background-color: #ffffff;
            border-radius: 8px;
            padding: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .course-card img {
            width: 100%;
            border-radius: 8px;
        }

        .course-card h4 {
            margin-top: 10px;
            font-weight: bold;
            color: #333333;
        }

        .course-card p {
            font-size: 14px;
            color: #555555;
        }

        .price {
            font-size: 16px;
            color: #4CAF50;
            font-weight: bold;
            margin-top: 10px;
        }

        .rating {
            color: gold;
            margin-top: 5px;
        }

        .course-card .profile-info {
            margin-top: 15px;
            font-size: 14px;
            color: #4CAF50;
        }

        .course-card .profile-info img {
            width: 20px;
            border-radius: 50%;
            margin-right: 8px;
        }

        /* Social Icons */
        .social-icons {
            position: fixed;
            bottom: 20px;
            right: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .social-icons img {
            width: 40px;
            margin-bottom: 10px;
            cursor: pointer;
        }

        /* Footer */
        .footer {
            text-align: center;
            background-color: #333333;
            color: #fff;
            padding: 20px;
            margin-top: 40px;
        }

        .footer a {
            color: #8BC34A;
            text-decoration: none;
        }

        /* CTA Button */
        .cta-button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 20px;
        }

        .cta-button:hover {
            background-color: #45a049;
        }

        /* Newsletter Section */
        .newsletter-section {
            background: url('assets/img/beranda.jpg') no-repeat center center;
            background-size: cover;
            color: white;
            padding: 40px;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            height: 300px;
        }

        .newsletter-section form {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .newsletter-section input {
            padding: 10px;
            width: 300px;
            height: 40px;
            border-radius: 5px;
            border: none;
            font-size: 16px;
        }

        .newsletter-section button {
            background-color: #FF9800;
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            height: 40px;
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            .course-cards {
                grid-template-columns: repeat(2, 1fr);
            }

            .hero-section h1 {
                font-size: 24px;
            }

            .hero-section p {
                font-size: 16px;
            }

            .header {
                flex-direction: column;
                text-align: center;
            }

            .header .profile {
                margin-left: 0;
            }

            .footer-container {
                flex-direction: column;
                align-items: center;
            }

            .footer-right {
                flex-direction: column;
                align-items: center;
            }
        }

        @media (max-width: 480px) {
            .course-cards {
                grid-template-columns: 1fr;
            }

            .hero-section h1 {
                font-size: 20px;
            }

            .hero-section p {
                font-size: 14px;
            }

            .cta-button {
                font-size: 14px;
                padding: 8px 16px;
            }

            .newsletter-section input {
                width: 250px;
            }
        }
    </style>
</head>
<body>

    <!-- Header -->
    <div class="header">
        <img src="assets/img/logo.jpg" alt="Logo Video Belajar" class="logo">
        <div class="profile">
            <img src="assets/img/login.jpg" alt="Profile Avatar">
            <div class="kategori">Kategori</div>
        </div>
    </div>

    <!-- Hero Section -->
    <div class="hero-section">
        <h1>Revolusi Pembelajaran: Temukan Ilmu Baru melalui Platform Video Interaktif!</h1>
        <p>Temukan ilmu baru yang menarik dan mendalam melalui koleksi video pembelajaran berkualitas tinggi. 
            Tidak hanya itu, Anda juga dapat berpartisipasi dalam latihan interaktif 
            yang akan meningkatkan pemahaman Anda.</p>
        <button class="cta-button">Temukan video course untuk dipelajari</button>
    </div>

    <!-- Course Cards Section -->
    <div class="section course-cards">
        <div class="course-card">
            <img src="assets/img/1.jpg" alt="Course Image">
            <h4>Big 4 Auditor Financial Analyst</h4>
            <p>Mulai transformasi dengan instruktur profesional, harga yang terjangkau, dan kurikulum terbaik.</p>
            <div class="rating">★★★★☆</div>
            <div class="profile-info">
                <img src="assets/img/login.jpg" alt="Profile">
                Senior Accountant - Gojek
            </div>
            <div class="price">Rp 300K</div>
        </div>
        
        <div class="course-card">
            <img src="assets/img/2.jpg" alt="Course Image">
            <h4>Digital Marketing Basics</h4>
            <p>Pelajari strategi pemasaran digital dengan instruktur berpengalaman dan metode yang terbukti efektif.</p>
            <div class="rating">★★★★★</div>
            <div class="profile-info">
                <img src="assets/img/login.jpg" alt="Profile">
                Marketing Specialist - Bukalapak
            </div>
            <div class="price">Rp 250K</div>
        </div>

        <div class="course-card">
            <img src="assets/img/3.jpg" alt="Course Image">
            <h4>Advanced Web Development</h4>
            <p>Pelajari teknik web development tingkat lanjut untuk memperdalam keterampilan Anda.</p>
            <div class="rating">★★★☆☆</div>
            <div class="profile-info">
                <img src="assets/img/login.jpg" alt="Profile">
                Senior Developer - Tokopedia
            </div>
            <div class="price">Rp 500K</div>
        </div>
    </div>

    <!-- Newsletter Section -->
    <div class="newsletter-section">
        <div>
            <h2>Mau Belajar Lebih Banyak?</h2>
            <p>Daftarkan dirimu untuk mendapatkan informasi terbaru dan penawaran spesial dari program-program terbaik hariesok.id</p>
            <form action="#" method="POST">
                <input type="email" placeholder="Masukkan Emailmu">
                <button type="submit">Subscribe</button>
            </form>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer">
        <div class="footer-container">
            <div class="footer-right">
                <div class="footer-section">
                    <p style="font-weight: bold;">Kategori</p>
                    <ul style="list-style: none; padding: 0; font-size: 14px;">
                        <li>Digital & Teknologi</li>
                        <li>Tentang Kami</li>
                        <li>Pemasaran</li>
                        <li>Pengembangan Diri</li>
                        <li>Desain</li>
                    </ul>
                </div>
                <div class="footer-section">
                    <p style="font-weight: bold;">Perusahaan</p>
                    <ul style="list-style: none; padding: 0; font-size: 14px;">
                        <li>FAQ</li>
                        <li>Manajemen Bisnis</li>
                        <li>Kebijakan Privasi</li>
                        <li>Ketentuan Layanan</li>
                        <li>Bantuan</li>
                    </ul>
                </div>
                <div class="footer-section">
                    <p style="font-weight: bold;">Komunitas</p>
                    <ul style="list-style: none; padding: 0; font-size: 14px;">
                        <li>Tips Sukses</li>
                        <li>Blog</li>
                    </ul>
                    <div style="display: flex; gap: 15px; margin-top: 20px;">
                        <img src="https://img.icons8.com/ios-filled/50/000000/facebook.png" alt="Facebook" style="width: 40px; cursor: pointer;">
                        <img src="https://img.icons8.com/ios-filled/50/000000/twitter.png" alt="Twitter" style="width: 40px; cursor: pointer;">
                        <img src="https://img.icons8.com/ios-filled/50/000000/instagram.png" alt="Instagram" style="width: 40px; cursor: pointer;">
                        <img src="https://img.icons8.com/ios-filled/50/000000/linkedin.png" alt="LinkedIn" style="width: 40px; cursor: pointer;">
                    </div>
                </div>
            </div>
        </div>
        <p style="text-align: left; margin-top: 20px;">&copy; 2024 VideoBelajar. Semua hak dilindungi.</p>
    </div>

</body>
</html>

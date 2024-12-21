<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk - VideoBelajar</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f5f0; /* Warna krem muda */
            margin: 0;
            padding: 0;
        }

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

        .container {
            max-width: 400px;
            margin: 20px auto;
            background-color: #ffffff;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            font-weight: bold;
            color: #333333;
        }

        p {
            text-align: center;
            color: #555555;
        }

        .imglogin img {
            display: block;
            margin: 0 auto 20px;
            width: 100px;
            height: auto;
        }

        label {
            font-weight: normal;
            display: block;
            margin-bottom: 5px;
            color: #333333;
        }

        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #cccccc;
            border-radius: 4px;
            font-size: 14px;
            box-sizing: border-box; /* Pastikan padding termasuk lebar */
        }

        .password-wrapper {
            position: relative;
        }

        .password-wrapper input {
            padding-right: 40px; /* Buat space untuk icon mata */
        }

        .password-wrapper .toggle-password {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            width: 24px;
            height: 24px;
        }

        .toggle-password svg {
            fill: none;
            stroke: #555;
            stroke-width: 2;
            stroke-linecap: round;
            stroke-linejoin: round;
        }

        .btn {
            display: block;
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 4px;
            margin-bottom: 10px;
            cursor: pointer;
            font-size: 16px;
        }

        .btn-login {
            background-color: #4CAF50;
            color: #ffffff;
        }

        .btn-register {
            background-color: #8BC34A;
            color: #ffffff;
        }

        .google-login {
            display: flex;
            align-items: center;
            justify-content: center;
            border: 1px solid #cccccc;
            padding: 10px;
            border-radius: 4px;
            cursor: pointer;
        }

        .google-login img {
            width: 20px;
            margin-right: 10px;
        }

        .separator {
            display: flex;
            align-items: center;
            margin: 20px 0;
        }

        .separator::before, .separator::after {
            content: '';
            flex: 1;
            height: 1px;
            background: #cccccc;
        }

        .separator span {
            margin: 0 10px;
            color: #555555;
        }

        .remember {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
        }

        .remember a {
            color: #4CAF50;
            text-decoration: none;
        }

        /* Responsif CSS */
        @media (max-width: 768px) {
            .container {
                padding: 15px;
                width: 90%; /* Agar kontainer lebih lebar di layar kecil */
            }

            .header .logo {
                width: 120px; /* Mengurangi ukuran logo di mobile */
            }

            .imglogin img {
                width: 80px; /* Menyesuaikan ukuran gambar di mobile */
            }

            .btn {
                font-size: 14px; /* Mengurangi ukuran font tombol */
                padding: 12px; /* Menyesuaikan ukuran tombol */
            }

            .google-login span {
                font-size: 14px; /* Menyesuaikan font pada tombol login Google */
            }
        }

        @media (max-width: 480px) {
            .header {
                padding: 8px 15px; /* Mengurangi padding pada header di perangkat lebih kecil */
            }

            .imglogin img {
                width: 60px; /* Ukuran gambar lebih kecil di layar kecil */
            }

            .btn {
                font-size: 14px;
                padding: 10px; /* Menyesuaikan ukuran tombol lebih kecil */
            }

            .google-login span {
                font-size: 12px; /* Mengurangi ukuran teks Google login */
            }
        }

    </style>
</head>
<body>

    <div class="header">
        <img src="assets/img/logo.jpg" alt="Logo Video Belajar" class="logo">
    </div>

    <div class="container">
        <h2>Masuk ke Akun</h2>
        <p>Ayo, lanjutkan belajarmu di VideoBelajar</p>

        <div class="imglogin">
            <img src="assets/img/login.jpg" alt="Foto User Login">
        </div>

        <form action="beranda.php" method="post">
            <label for="email">E-mail</label>
            <input type="text" id="email" name="email" placeholder="Masukkan E-mail" required>

            <label for="password">Kata Sandi</label>
            <div class="password-wrapper">
                <input type="password" id="password" name="password" placeholder="Masukkan Kata Sandi" required>
                <div class="toggle-password" onclick="togglePassword()">
                    <svg id="eye-icon" viewBox="0 0 24 24">
                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                        <circle cx="12" cy="12" r="3"></circle>
                    </svg>
                </div>
            </div>

            <div class="remember">
                <label><input type="checkbox" name="remember"> Ingat Aku</label>
                <a href="#">Lupa Kata Sandi?</a>
            </div>

            <button type="submit" class="btn btn-login">Masuk</button>
            <button type="button" class="btn btn-register">Daftar</button>
        </form>

        <div class="separator">
            <span>Atau</span>
        </div>

        <div class="google-login">
            <img src="assets/img/google.jpg" alt="Google Logo">
            <span>Masuk dengan Google</span>
        </div>
    </div>

    <script>
        function togglePassword() {
            const passwordField = document.getElementById('password');
            const eyeIcon = document.getElementById('eye-icon');

            if (passwordField.type === 'password') {
                passwordField.type = 'text';
                eyeIcon.innerHTML = `
                    <path d="M17.94 17.94A10.94 10.94 0 0112 20c-7 0-11-8-11-8a20.98 20.98 0 015.62-5.92M21 21l-5.62-5.62"/>
                    <circle cx="12" cy="12" r="3"></circle>
                `;
            } else {
                passwordField.type = 'password';
                eyeIcon.innerHTML = `
                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                    <circle cx="12" cy="12" r="3"></circle>
                `;
            }
        }
    </script>

</body>
</html>

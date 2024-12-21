<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - VideoBelajar</title>
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

        .profile-upload {
            text-align: center;
            margin-bottom: 20px;
        }

        .profile-upload label {
            cursor: pointer;
        }

        .profile-upload input {
            display: none;
        }

        .profile-upload .upload-icon {
            display: inline-block;
            width: 80px;
            height: 80px;
            border: 2px dashed #cccccc;
            border-radius: 50%;
            background-color: #f9f5f0;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            color: #cccccc;
        }

        input[type="text"], input[type="password"], select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #cccccc;
            border-radius: 4px;
            font-size: 14px;
            box-sizing: border-box;
        }

        .phone-wrapper {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .phone-wrapper select, .phone-wrapper input[type="text"] {
            flex: 1;
        }

        .phone-wrapper img {
            width: 24px;
            height: 24px;
            margin-right: 10px;
        }

        .password-wrapper {
            position: relative;
        }

        .password-wrapper input {
            padding-right: 40px;
        }

        .password-wrapper .toggle-password {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            width: 20px;
            height: 20px;
            background: no-repeat center;
            background-size: contain;
            background-image: url('data:image/svg+xml;charset=UTF-8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>');
        }

        .password-wrapper .toggle-password.active {
            background-image: url('data:image/svg+xml;charset=UTF-8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17.94 17.94A10.94 10.94 0 0112 20c-7 0-11-8-11-8a20.98 20.98 0 015.62-5.92M21 21l-5.62-5.62"/><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>');
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

        .btn-register {
            background-color: #4CAF50;
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
            margin-top: 20px;
        }

        .google-login img {
            width: 20px;
            margin-right: 10px;
        }

        .forgot-password {
            text-align: center;
            margin-top: 20px;
        }

        .forgot-password a {
            color: #4CAF50;
            text-decoration: none;
        }

        /* Media Queries */
        @media (max-width: 600px) {
            .container {
                padding: 15px;
                width: 90%;
            }

            .header .logo {
                width: 120px;
            }

            .phone-wrapper {
                flex-direction: column;
                align-items: flex-start;
            }

            .phone-wrapper img {
                margin-bottom: 10px;
            }

            .password-wrapper input {
                padding-right: 30px;
            }
        }

        @media (max-width: 400px) {
            .container {
                padding: 10px;
            }

            .btn-register {
                font-size: 14px;
            }
        }
    </style>
</head>
<body>

    <div class="header">
        <img src="assets/img/logo.jpg" alt="Logo Video Belajar" class="logo">
    </div>

    <div class="container">
        <h2>Pendaftaran Akun</h2>
        <p>Ayo, daftarkan akunmu sekarang juga!</p>

        <!-- Upload Foto Profil -->
        <div class="profile-upload">
            <label for="profile-picture">
                <div class="upload-icon">+</div>
            </label>
            <input type="file" id="profile-picture" name="profile-picture" accept="image/*">
        </div>

        <form action="login.php" method="post">
            <label for="namalengkap">Nama Lengkap</label>
            <input type="text" id="namalengkap" name="namalengkap" placeholder="Masukkan Nama Lengkap Kamu" required>

            <label for="email">E-mail</label>
            <input type="text" id="email" name="email" placeholder="Masukkan E-mail Kamu" required>

            <label for="phone">Nomor Telepon</label>
            <div class="phone-wrapper">
                <img src="assets/img/indo.png" alt="Indonesia">
                <select name="country-code" id="country-code">
                    <option value="+62">+62</option>
                </select>
                <input type="text" id="phone" name="phone" placeholder="Masukkan Nomor Telepon Kamu" required>
            </div>

            <label for="password">Kata Sandi</label>
            <div class="password-wrapper">
                <input type="password" id="password" name="password" placeholder="Masukkan Kata Sandi" required>
                <span class="toggle-password" onclick="togglePassword('password')"></span>
            </div>

            <label for="confirm-password">Konfirmasi Kata Sandi</label>
            <div class="password-wrapper">
                <input type="password" id="confirm-password" name="confirm-password" placeholder="Konfirmasi Kata Sandi" required>
                <span class="toggle-password" onclick="togglePassword('confirm-password')"></span>
            </div>

            <button type="submit" class="btn btn-register">Daftar</button>
        </form>

        <div class="forgot-password">
            <a href="login.php">Sudah punya akun? Masuk</a>
        </div>

        <div class="separator">
            <span>Atau</span>
        </div>

        <div class="google-login">
            <img src="assets/img/google.jpg" alt="Google Logo">
            <span>Masuk dengan Google</span>
        </div>
    </div>

    <script>
        function togglePassword(fieldId) {
            const passwordField = document.getElementById(fieldId);
            const toggleIcon = passwordField.nextElementSibling;

            if (passwordField.type === 'password') {
                passwordField.type = 'text';
                toggleIcon.classList.add('active');
            } else {
                passwordField.type = 'password';
                toggleIcon.classList.remove('active');
            }
        }
    </script>

</body>
</html>

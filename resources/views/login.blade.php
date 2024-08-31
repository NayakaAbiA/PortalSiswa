<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Sekolah</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
        }

        .container {
            display: flex;
            width: 90%;
            max-width: 1200px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: white;
            border-radius: 8px;
            overflow: hidden;
            flex-direction: row;
        }

        .left-section {
            flex: 1;
            background: linear-gradient(to right, #1e3c72, #2a5298, #ffffff);
            color: white;
            padding: 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            position: relative;
        }

        .content {
            position: relative;
            z-index: 1;
        }

        .icon {
            position: absolute;
            top: 20px;
            left: 20px;
        }

        .icon img {
            width: 75px;
            height: auto;
        }

        .content h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .content p {
            font-size: 16px;
        }

        .right-section {
            flex: 1;
            padding: 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .login-form h2 {
            color: #003366;
            font-size: 34px;
            margin-bottom: 5px;
            line-height: 1;
        }

        .login-form h3 {
            color: #003366;
            font-size: 30px;
            margin-bottom: 10px;
        }

        .login-form p {
            color: #666;
            margin-bottom: 20px;
        }

        .form-group {
            position: relative;
            display: flex;
            flex-direction: column;
            margin-bottom: 15px;
        }

        .form-group label {
            margin-bottom: 5px;
            color: #333;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .toggle-password {
            position: absolute;
            right: 15px;
            top: calc(50% - 12px);
            cursor: pointer;
            z-index: 1;
        }

        .radio-buttons {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .radio-buttons label {
            margin-right: 20px;
            display: flex;
            align-items: center;
        }

        .radio-buttons input {
            margin-right: 5px;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        .forgot-password {
            display: block;
            text-align: right;
            margin-top: 10px;
            color: #007bff;
            text-decoration: none;
        }

        .forgot-password:hover {
            text-decoration: underline;
        }

        @media (max-width: 768px) {
            .container {
                flex-direction: column;
            }

            .left-section,
            .right-section {
                padding: 20px;
            }

            .icon img {
                width: 120px;
            }

            .content h1 {
                font-size: 20px;
            }

            .content p {
                font-size: 14px;
            }

            .login-form h2 {
                font-size: 28px;
            }

            .login-form h3 {
                font-size: 24px;
            }

            .login-form p {
                font-size: 14px;
            }

            button {
                font-size: 14px;
            }
        }

        @media (max-width: 480px) {
            .content h1 {
                font-size: 18px;
            }

            .content p {
                font-size: 12px;
            }

            .login-form h2 {
                font-size: 24px;
            }

            .login-form h3 {
                font-size: 20px;
            }

            .login-form p {
                font-size: 12px;
            }

            button {
                font-size: 12px;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="left-section">
            <div class="icon">
                <img src="assets/img/kaw.png" alt="Icon" aria-hidden="true">
            </div>
            <div class="content">
                <h1>Solusi Transformasi Digital Sekolah Anda</h1>
                <p>Sistem Sekolah digital terpadu untuk memudahkan dan mengoptimalkan proses belajar mengajar bagi semua elemen pendidikan.</p>
            </div>
        </div>
        <div class="right-section">
            <div class="login-form">
                <h2>Portal Siswa</h2>
                <h3>Selamat Datang!</h3>
                <p>Masukkan username dan password Anda</p>
            @if($errors->any())
                <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $item )
                        <li>{{ $item}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
                <form id="loginForm" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="nis">Username</label>
                        <input type="text" id="username" name="nis" placeholder="Username" aria-label="Username">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <div style="position: relative;">
                            <input type="password" id="password" name="password" placeholder="Password" aria-label="Password">
                            <span class="toggle-password">👁</span>
                        </div>
                    </div>

                    <!-- <div class="radio-buttons">
                        <label for="siswa">
                            <input type="radio" id="siswa" name="role" value="Siswa">
                            Siswa
                        </label>
                        <label for="guru">
                            <input type="radio" id="guru" name="role" value="Guru">
                            Guru
                        </label>
                        <label for="orangtua">
                            <input type="radio" id="orangtua" name="role" value="Orangtua">
                            Orangtua
                        </label>
                    </div> -->
                    <a href="{{ route('login') }}"><button>Masuk</button></a>
                    <a href="" class="forgot-password">Lupa Password</a>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.querySelector('.toggle-password').addEventListener('click', function () {
            const passwordInput = document.querySelector('#password');
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                this.textContent = '🙈'; // Change icon to closed eyes
            } else {
                passwordInput.type = 'password';
                this.textContent = '👁'; // Change icon to open eyes
            }
        });
    </script>
</body>

</html>
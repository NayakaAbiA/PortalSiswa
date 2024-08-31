<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Materi Pelajaran</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #f7f8fc, #e0e7ff);
            color: #333;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
            margin: 0;
            box-sizing: border-box;
        }

        h1 {
            font-size: 2rem;
            margin-bottom: 30px;
            color: #2c3e50;
            margin-top: 120px; /* Menambahkan jarak dari bagian atas halaman */
        }

        .subject-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            width: 100%;
            max-width: 900px;
            margin-left: 0;
            padding: 0 10px;
        }

        .subject-box {
            background-color: #fff;
            border-radius: 12px;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.3);
            padding: 15px;
            text-align: center;
            position: relative;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            cursor: pointer;
            animation: fadeIn 0.8s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .subject-box:hover {
            transform: translateY(-8px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
        }

        .subject-box img {
            width: 40px;
            height: 40px;
            margin-bottom: 10px;
            transition: transform 0.3s ease;
        }

        .subject-box:hover img {
            transform: scale(1.1);
        }

        .subject-box h2 {
            font-size: 1.4rem;
            margin-bottom: 8px;
            color: #2980b9;
        }

        .subject-box p {
            font-size: 0.9rem;
            color: #7f8c8d;
        }

        .new-assignment {
            position: absolute;
            top: 8px;
            right: 8px;
            background-color: #e74c3c;
            color: #fff;
            border-radius: 50%;
            padding: 6px;
            font-size: 0.8rem;
            font-weight: bold;
        }

        @media (max-width: 1000px) {
            h1 {
                font-size: 1.8rem;
            }
            .subject-container {
                grid-template-columns: repeat(2, 1fr); /* Tampilkan 2 subject-box per baris di layar yang lebih kecil */
                max-width: 600px;
            }
        }

        @media (max-width: 600px) {
            h1 {
                font-size: 1.6rem;
            }
            .subject-container {
                grid-template-columns: 1fr; /* Tampilkan 1 subject-box per baris di layar yang lebih kecil */
                max-width: 300px;
            }
        }

        /* Delay untuk setiap box */
        .subject-box:nth-child(1) {
            animation-delay: 0.1s;
        }

        .subject-box:nth-child(2) {
            animation-delay: 0.2s;
        }

        .subject-box:nth-child(3) {
            animation-delay: 0.3s;
        }

        .subject-box:nth-child(4) {
            animation-delay: 0.4s;
        }

        .subject-box:nth-child(5) {
            animation-delay: 0.5s;
        }

        .subject-box:nth-child(6) {
            animation-delay: 0.6s;
        }

        .subject-box:nth-child(7) {
            animation-delay: 0.7s;
        }
    </style>
</head>
<body>
    @include('layout.app')
    <h1>Materi Pelajaran</h1>
    <div class="subject-container">
        <div class="subject-box" onclick="window.location.href='{{ route('add') }}'">
            <img src="{{asset('assets/img/mtk.png')}}" alt="">
            <h2>Matematika</h2>
        </div>
        <div class="subject-box" onclick="window.location.href='{{ route('add') }}'">
            <img src="{{asset('assets/img/pkn2.png')}}" alt="">
            <h2>Pendidikan Kewarganegaraan</h2>
        </div>
        <div class="subject-box" onclick="window.location.href='{{ route('add') }}'">
            <img src="{{asset('assets/img/indo2.png')}}" alt="">
            <h2>Bahasa Indonesia</h2>
        </div>
        <div class="subject-box" onclick="window.location.href='{{ route('add') }}'">
            <img src="{{asset('assets/img/sejarah2.png')}}" alt="">
            <h2>Sejarah</h2>
        </div>
        <div class="subject-box" onclick="window.location.href='{{ route('add') }}'">
            <img src="{{asset('assets/img/sunda2.png')}}" alt="">
            <h2>Bahasa Sunda</h2>
        </div>
        <div class="subject-box" onclick="window.location.href='{{ route('add') }}'">
            <img src="{{asset('assets/img/aceng.png')}}" alt="">
            <h2>Pendidikan Kewirausahaan</h2>
        </div>
        <div class="subject-box" onclick="window.location.href='{{ route('add') }}'">
            <img src="{{asset('assets/img/inggris2.png')}}" alt="">
            <h2>Bahasa Inggris</h2>
        </div>
    </div>
</body>
</html>

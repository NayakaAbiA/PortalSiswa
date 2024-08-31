<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal Pelajaran</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
    font-family: 'Poppins', sans-serif;
    background: linear-gradient(135deg, #e0e7ff, #f5f7fa);
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.schedule-container {
    background-color: #fff;
    border-radius: 20px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
    padding: 50px;
    width: 100%;
    max-width: 1200px;
    margin: 20px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    animation: fadeIn 1s ease-in-out;
    margin-top: 140px; /* Jarak dari bagian atas halaman */
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

h2 {
    color: #2c3e50;
    margin-bottom: 40px;
    font-size: 38px;
    letter-spacing: 1px;
    text-align: center;
    text-transform: uppercase;
    font-weight: 700;
}

.schedule-row {
    width: 100%;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: flex-start;
    gap: 25px;
    flex-wrap: wrap; /* Agar elemen bisa membungkus pada layar kecil */
}

.schedule-box {
    flex: 1;
    padding: 25px;
    background-color: #f1f3f5;
    border-radius: 15px;
    display: flex;
    flex-direction: column;
    align-items: center;
    transition: background-color 0.3s ease-in-out, transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
    cursor: pointer;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    max-width: 500px; /* Membatasi lebar maksimum */
    margin-bottom: 20px; /* Jarak antar kotak */
}

.schedule-box:hover {
    background-color: #e2e6ea;
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
}

.schedule-box img {
    width: 100%;
    height: auto;
    border-radius: 15px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
    transition: transform 0.3s ease-in-out;
}

.schedule-box:hover img {
    transform: scale(1.05);
}

.schedule-box h3 {
    font-size: 26px;
    color: #444;
    text-align: center;
    margin-top: 10px;
    font-weight: 600;
}

/* Modal styling */
.modal {
    display: none;
    position: fixed;
    z-index: 1000;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0, 0, 0, 0.8);
}

.modal-content {
    margin: 15% auto;
    display: block;
    width: 80%;
    max-width: 700px;
    animation: zoomIn 0.5s ease;
}

@keyframes zoomIn {
    from {
        transform: scale(0);
    }
    to {
        transform: scale(1);
    }
}

.close {
    position: absolute;
    top: 20px;
    right: 35px;
    color: white;
    font-size: 40px;
    font-weight: bold;
    transition: 0.3s;
}

.close:hover,
.close:focus {
    color: #bbb;
    text-decoration: none;
    cursor: pointer;
}

/* Responsif untuk tablet dan layar lebih kecil */
@media (max-width: 1024px) {
    .schedule-container {
        padding: 40px;
    }

    .schedule-row {
        flex-direction: column;
        gap: 30px;
    }
}

/* Responsif untuk layar ponsel */
@media (max-width: 768px) {
    h2 {
        font-size: 32px;
    }

    .schedule-box h3 {
        font-size: 24px;
    }
}

    </style>
</head>
<body>
    @include('layout.app')
    <div class="schedule-container">
        <h2>Jadwal Pelajaran</h2>
        <div class="schedule-row">
            <div class="schedule-box">
                <h3>Minggu Ganjil</h3>
                <img src="{{asset('assets/img/Ganjil.png')}}" alt="Jadwal Minggu Ganjil" onclick="openModal(this)">
            </div>
            <div class="schedule-box">
                <h3>Minggu Genap</h3>
                <img src="{{asset('assets/img/Genap.png')}}" alt="Jadwal Minggu Genap" onclick="openModal(this)">
            </div>
        </div>
    </div>

    <!-- The Modal -->
    <div id="myModal" class="modal">
        <span class="close" onclick="closeModal()">&times;</span>
        <img class="modal-content" id="img01">
    </div>

    <script>
          // Function to expand sidebar on hover
        function expandSidebar() {
            var sidebar = document.getElementById('sidebar');
            sidebar.classList.remove('collapsed');
            document.getElementById('main-content').classList.add('full-width');
        }

        // Function to collapse sidebar when not hovering
        function collapseSidebar() {
            var sidebar = document.getElementById('sidebar');
            sidebar.classList.add('collapsed');
            document.getElementById('main-content').classList.remove('full-width');
        }

        // Attach event listeners for hover
        document.getElementById('sidebar').addEventListener('mouseover', expandSidebar);
        document.getElementById('sidebar').addEventListener('mouseout', collapseSidebar);

        function openModal(img) {
            var modal = document.getElementById("myModal");
            var modalImg = document.getElementById("img01");
            modal.style.display = "block";
            modalImg.src = img.src;
        }

        function closeModal() {
            var modal = document.getElementById("myModal");
            modal.style.display = "none";
        }
    </script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* Global Styles */
        * {
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Navbar Styles */
        .container {
            display: flex;
            align-items: center;
            background: blue;
            height: 80px;
            padding-left: 20px;
            box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.3);
            position: relative;
            z-index: 2;
        }

        .foto img {
            height: 70px;
            width: 70px;
        }

        .foto {
            display: flex;
            align-items: center;
        }

        .foto h1 {
            margin-left: 10px;
            font-size: 35px;
            color: white;
        }

        .portal h2 {
            margin-left: 11px;
            font-size: 19px;
            color: white;
            margin-top: -5px;
        }

        /* Sidebar Styles */
        .saidbar {
            width: 200px; /* Set default width to expanded size */
            height: calc(100vh - 80px);
            background-color: #ffffff;
            position: fixed;
            top: 80px;
            left: 0;
            padding-top: 20px;
            overflow-x: hidden;
            z-index: 1;
            box-shadow: 5px 5px 10px rgba(102, 34, 34, 0.3);
        }

        .saidbar a, .saidbar .dropdown-btn {
            display: flex;
            align-items: center;
            padding: 15px 10px;
            font-size: 18px;
            color: rgb(0, 0, 0);
            text-decoration: none;
            transition: background-color 0.3s;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            cursor: pointer;
            width: 100%; /* Ensures buttons take full width of sidebar */
            box-sizing: border-box;
        }

        .saidbar a i, .saidbar .dropdown-btn i {
            font-size: 20px;
            margin-right: 15px;
            color: rgb(0, 0, 0);
            transition: margin-right 0.3s;
        }

        .saidbar a:hover, .saidbar .dropdown-btn:hover {
            background-color: #ffffff;
        }

        .saidbar a span {
            display: inline;
        }

        .dropdown-container {
            display: none;
            background-color: #ffffff;
            padding-left: 8px;
            padding-bottom: 10px; /* Add padding for consistency */
        }

        .dropdown-container a {
            padding: 10px 20px;
            font-size: 16px;
            color: black;
            text-decoration: none;
            display: block;
        }

        .dropdown-container a:hover {
            background-color: #575757;
        }

        .dropdown-container.show {
            display: block;
        }

        /* Main Content Styles */
        .main-content {
            margin-left: 200px; /* Adjust margin to accommodate expanded sidebar */
            padding: 20px;
            margin-top: 10px;
            transition: margin-left 0.3s;
        }
    </style>
</head>
<body>
    <nav class="navbar1">
        <div class="container">
            <div class="foto">
                <img src="logo.jpeg" alt="logo">
                <div>
                    <h1>Portal Siswa</h1>
                    <div class="portal">
                        <h2>SMKN 1 KAWALI</h2>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="saidbar">
        <a href="#"><i class="fas fa-home"></i><span>Beranda</span></a>
        <a href="{{ route('profil') }}"><i class="fas fa-user"></i><span>Profil</span></a>
        <button class="dropdown-btn"><i class="fas fa-book"></i><span>Pembelajaran</span>
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
            <a href="{{ route('jadwal') }}"><i class="fas fa-calendar-alt"></i> Jadwal Pelajaran</a>
            <a href="{{ route('materi') }}"><i class="fas fa-book-open"></i> Materi Pelajaran</a>
            <a href="#"><i class="fas fa-tasks"></i> Tugas</a>
            <a href="#"><i class="fas fa-chart-bar"></i> Nilai</a>
        </div>
        <button class="dropdown-btn"><i class="fas fa-comments"></i><span>Forum</span>
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
            <a href="#"><i class="fas fa-comments"></i> Forum Diskusi</a>
            <a href="#"><i class="fa-solid fa-user-plus"></i> Tambah Akun</a>
        </div>
        <a href="{{ route('logout') }}"><i class="fas fa-sign-out-alt"></i><span>Logout</span></a>
    </div>

    <div class="main-content">
        <h2>Main Content Area</h2>
        <p>This is where your main content will go.</p>
    </div>

    <script>
        // Handle dropdown functionality
        document.querySelectorAll('.dropdown-btn').forEach(btn => {
            btn.addEventListener('click', function(event) {
                // Prevent sidebar collapse when clicking on dropdown
                event.stopPropagation();

                const dropdownContent = this.nextElementSibling;
                dropdownContent.classList.toggle('show');
            });
        });

        // Ensure dropdown stays open when hovering over it
        document.querySelectorAll('.dropdown-container').forEach(container => {
            container.addEventListener('mouseover', function() {
                this.classList.add('show');
            });

            container.addEventListener('mouseout', function() {
                // Keep it open if the user wants, otherwise it will toggle on click
            });
        });

        // Close dropdowns when clicking outside the sidebar
        document.addEventListener('click', function(event) {
            const sidebar = document.querySelector('.saidbar');
            const dropdowns = document.querySelectorAll('.dropdown-container');

            if (!sidebar.contains(event.target)) {
                dropdowns.forEach(dropdown => {
                    dropdown.classList.remove('show');
                });
            }
        });
    </script>
</body>
</html>

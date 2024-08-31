  <link rel="stylesheet" href="{{asset('assets/css/dashboard.css')}}">
<nav class="navbar navbar-expand-lg navbar-dark">
  <a class="navbar-brand">
    <img src="{{asset('assets/img/logoo.png')}}" alt="Logo"> <!-- Replace with your logo image -->
    <div class="portal-info">
      <h1>Portal Siswa</h1>
      <h2>SMKN 1 KAWALI</h2>
    </div>
  </a>
</nav>

<div class="sidebar collapsed" id="sidebar" onmouseover="expandSidebar()" onmouseout="collapseSidebar()">
  <a href="/dashboard"><i class="fas fa-home"></i> Beranda</a>
  <a href="{{ route('profil') }}"><i class="fas fa-user"></i> Profil</a>
  <a href="{{route('jadwal')}}"><i class="fas fa-calendar-alt"></i> Jadwal Pelajaran</a>
  <a href="#"><i class="fas fa-tasks"></i> Tugas</a>
  <a href="#grades"><i class="fas fa-graduation-cap"></i> Nilai</a>
  <a href="{{route('materi')}}"><i class="fas fa-book"></i> Materi Pelajaran</a>
  <a href="/logout"  document.getElementById>
    <i class="fas fa-sign-out-alt"></i> Log Out</a>
</div>

<script>
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
    </script>
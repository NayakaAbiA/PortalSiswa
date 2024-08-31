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
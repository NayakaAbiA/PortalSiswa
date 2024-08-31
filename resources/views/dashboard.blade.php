<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" href="assets/css/dashboard.css">
  
</head>
<body>
@include('layout.app')

<div class="main-content" id="main-content">
  <div class="container">
    <div class="title">
      <h1>Beranda</h1>
      <p>Selamat datang di beranda</p>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="card">
          <div class="card-header">
            <i class="fas fa-calendar-alt"></i>
            <h3>Jadwal Pelajaran</h3>
          </div>
          <div class="card-body">
            <p>Informasi mengenai jadwal pelajaran Anda.</p>
          </div>
          <div class="card-footer">
            <a href="#schedule" class="btn btn-primary">Lihat Jadwal</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <div class="card-header">
            <i class="fas fa-tasks"></i>
            <h3>Tugas</h3>
          </div>
          <div class="card-body">
            <p>Informasi mengenai tugas-tugas Anda.</p>
          </div>
          <div class="card-footer">
            <a href="#assignments" class="btn btn-primary">Lihat Tugas</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <div class="card-header">
            <i class="fas fa-graduation-cap"></i>
            <h3>Nilai</h3>
          </div>
          <div class="card-body">
            <p>Informasi mengenai nilai-nilai Anda.</p>
          </div>
          <div class="card-footer">
            <a href="#grades" class="btn btn-primary">Lihat Nilai</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<a href="#forum" class="forum-link">
  <i class="fas fa-comments"></i> Forum Diskusi
</a>

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
</script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

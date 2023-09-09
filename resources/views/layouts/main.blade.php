<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="css/app.css" rel="stylesheet">
  {{-- <title>DCKTRP | {{ $title }}</title> --}}
</head>
<body>
  <nav>
    <input type="checkbox" id="check">
    <label for="check" class="checkbtn">
      <i class="fa fa-bars"></i>
    </label>
    <label class="logo">DINAS CIPTA KARYA TATA RUANG DAN PERTANAHAN </label>
  <ul>
  <li><a href="#"><i class="fa fa-fw fa-home"></i>Beranda</a></li>
  <li><a href="#"><i class="fa fa-university"></i>Profil</a></li>
  <li><a href="#"><i class="fa fa-file-text"></i>PPID</a></li>
  <li><a href="#"><i class="fa fa-info-circle"></i>Informasi</a></li>
  <li><a href="#"><i class="fa fa-question-circle"></i>F.A.Q</a></li>
  </ul>
</nav>
<div class="container mt-4">
  @yield('container')
</div>
</body>
</html>
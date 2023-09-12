@extends('layouts.main')
@section('container')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<body>
    <div id="carouselStandar" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="img/slider/1.jpg" class="d-block w-100" alt="gambar" border-radius="100px" width="1000px" height="400px">
        </div>
        <div class="carousel-item">
          <img src="img/slider/2.jpg" class="d-block w-100" alt="gambar" border-radius="100px" width="1000px" height="400px">
        </div>
        <div class="carousel-item">
          <img src="img/slider/3.jpg" class="d-block w-100" alt="gambar" border-radius="100px" width="1000px" height="400px">
        </div>
      </div>
    </div>
</body>
@endsection

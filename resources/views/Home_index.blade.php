@extends('Layouts.main')
@section('container')
<div class="container mt-4 justify-content:center">
    @yield('container')
</div>
<style>
        .circle-image {
            width: 200px; /* Ubah sesuai kebutuhan Anda */
            height: 200px; /* Ubah sesuai kebutuhan Anda */
            border-radius: 50%; /* Membuat gambar menjadi lingkaran */
            object-fit: cover; /* Memastikan gambar menyesuaikan dengan baik */
        }
    </style>
    <body>
<div class="col-lg-*" style="background-color: yellow">
      <div class="position-sticky" style="top: 4rem;">
        <div class="p-4 col-lg-* bg-body-tertiary rounded">
          <h4 class="fst-italic">About</h4>
          <img src="assets/img/Photo.jpeg" alt="Photo" width="400" height="300" class="circle-image">
          <p class="mb-8">Perkenalkan nama saya Ahmad Farhan, saya merupakan lulusan sarjana teknik informatika dari Universitas Inraprasta PGRI. Saya orang yang mudah beradaptasi terhadap lingkungan dan saya juga profesional dalam bekerja.</p>
          <p class="mb-1">Pengalaman bekerja :</p>
          <p>PT.FKA Global Desember 2021 - Januari 2024</p>
        </div>
        </body>
@endsection

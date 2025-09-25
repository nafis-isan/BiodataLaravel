<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portfolio - Nafis Ikhsan</title>
  <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}" />

  <style>
    body {
      font-family: "Segoe UI", sans-serif;
      scroll-behavior: smooth;
    }

    /* Navbar */
    .navbar-brand img {
      height: 40px;
      width: 40px;
      object-fit: cover;
      border-radius: 50%;
      margin-right: 10px;
    }
    .navbar-nav .nav-link {
      transition: 0.3s;
    }
    .navbar-nav .nav-link:hover {
      color: #f8d210 !important;
    }

    /* Jumbotron */
    .jumbotron {
      background: linear-gradient(to bottom, #f8f9fa, #ffffff);
      padding: 3rem 1rem;
    }
    .jumbotron img {
      border: 4px solid #ddd;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }

    /* Parallax sections */
    .parallax {
      background-attachment: fixed;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      min-height: 300px;
      position: relative;
    }
    .bg1 { background-image: url("{{asset('gambar/bg1.jpg')}}"); }
    .bg2 { background-image: url("{{asset('gambar/bg2.jpg')}}"); }
    .bg3 { background-image: url("{{asset('gambar/bg3.jpg')}}"); }
    .parallax::before {
      content: "";
      position: absolute;
      top: 0; left: 0; right: 0; bottom: 0;
      background: rgba(0,0,0,0.4);
    }

    /* Content sections */
    .content {
      padding: 3rem 1rem;
      text-align: center;
    }
    .content h2 {
      margin-bottom: 1rem;
      font-weight: bold;
    }
    .content p {
      max-width: 700px;
      margin: auto;
      color: #555;
    }

    /* Cards */
    .card {
      border: none;
      transition: transform 0.3s, box-shadow 0.3s;
    }
    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 20px rgba(0,0,0,0.15);
    }
    .card img {
      height: 200px;
      object-fit: cover;
    }
    .card-body {
      padding: 1.5rem;
    }

    /* Footer */
    footer {
      background: #212529;
      color: white;
      padding: 1rem;
      text-align: center;
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-secondary shadow-sm">
    <div class="container">
      <a class="navbar-brand d-flex align-items-center" href="#">
        <img src="{{asset('gambar/logo.png')}}" alt="Logo">
        Nafis Ikhsan
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
              aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item"><a class="nav-link active" href="#home">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
          <li class="nav-item"><a class="nav-link" href="#projects">Projects</a></li>
          <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Jumbotron -->
  <section id="home" class="jumbotron text-center">
    <img src="{{asset('gambar/Nafis Ikhsan2.jpg')}}"class="img-fluid rounded-circle mb-3" style="max-width: 200px;" alt="Nafis Ikhsan"/>
    <h1 class="display-4 fw-bold">Nafis Ikhsan</h1>
    <p class="lead text-muted">Programmer | Artist | Gamer</p>
  </section>

  <!-- Parallax 1 -->
  <section id="about">
    <div class="parallax bg1"></div>  
    <div class="content">
      <h2>About Me</h2>
      <p>Hi, perkenalkan nama ku Nafis Ikhsan, aku berasal dari Garut. Aku memiliki hobi menggambar, bermain game, dan membaca novel. Saat ini aku bersekolah di SMKN 1 Garut.</p>
    </div>
  </section>

  <!-- Cards -->
  <section>
    <div class="container my-5">
      <div class="row g-4 justify-content-center">
        <div class="col-md-4 col-sm-6">
          <div class="card h-100 shadow-sm">
            <img src="{{asset('gambar/game.png')}}"class="card-img-top" alt="Gamer">
            <div class="card-body text-center">
              <h5 class="card-title">Gamer</h5>
              <p class="card-text">Aku sangat suka bermain game RPG open world. Aku juga bermain game competitive seperti Valorant dan ML, tapi tetap lebih suka RPG.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="card h-100 shadow-sm">
            <img src="{{asset('gambar/gambar.jpg')}}" class="card-img-top" alt="Artist">
            <div class="card-body text-center">
              <h5 class="card-title">Artist</h5>
              <p class="card-text">Aku suka menggambar karakter anime, terutama dari Boku no Hero. Aku juga membuat karakter original (OC) karyaku sendiri.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="card h-100 shadow-sm">
            <img src="{{asset('gambar/novel.jpg')}}"class="card-img-top" alt="Membaca Novel">
            <div class="card-body text-center">
              <h5 class="card-title">Membaca Novel</h5>
              <p class="card-text">Aku suka membaca novel, favoritku adalah Percy Jackson and the Olympians.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Parallax 2 -->
  <section id="projects">
    <div class="parallax bg2"></div>
    <div class="content">
      <h2>Riwayat Pendidikan</h2>
      <p>Berikut adalah riwayat pendidikan saya dari SD hingga SMK.</p>
    </div>
  
    <div class="container my-5">
      <div class="row g-4 justify-content-center">
        <div class="col-md-4 col-sm-6">
          <div class="card h-100 shadow-sm">
            <img src="{{asset('gambar/Sekolah dasar.png')}}"class="card-img-top" alt="Sekolah dasar">
            <div class="card-body text-center">
              <h5 class="card-title">SD IT DARUL ABROR</h5>
              <p class="card-text">Lulusan SD IT DARUL ABROR Tahun 2020.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="card h-100 shadow-sm">
            <img src="{{asset('gambar/Smp saya.jpg')}}"class="card-img-top" alt="Sekolah Menengah Pertama">
            <div class="card-body text-center">
              <h5 class="card-title">SMP IT ALWASILAH INTELEGENSIA</h5>
              <p class="card-text">Lulusan SMP IT ALWASILAH INTELEGENSIA Tahun 2023</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="card h-100 shadow-sm">
            <img src="{{asset('gambar/logo.png')}}"class="card-img-top" alt="Sekolah Menengah Kejuruan">
            <div class="card-body text-center">
              <h5 class="card-title">SMK NEGERI 1 Garut</h5>
              <p class="card-text">Sekarang bersekolah di SMKN 1 GARUT</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Parallax 3 -->
  <section id="contact" class="py-5 bg-light">
  <div class="parallax bg3"></div>
  <div class="content">
    <div class="container">
      <h2 class="mb-4 text-center">Contact Me</h2>
      <p class="text-center mb-5">Feel free to reach out through the form below.</p>

      <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8">
          <!-- Contact Form -->
          <form action="https://formspree.io/f/yourFormID" method="POST" class="p-4 shadow rounded bg-white">
            <div class="mb-3">
              <label for="name" class="form-label">Name</label>
              <input type="text" class="form-control" id="name" name="name" placeholder="Your name" required>
            </div>

            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" name="_replyto" placeholder="Your email" required>
            </div>

            <div class="mb-3">
              <label for="message" class="form-label">Message</label>
              <textarea class="form-control" id="message" name="message" rows="4" placeholder="Write your message..." required></textarea>
            </div>

            <button type="submit" class="btn btn-secondary w-100">Send Message</button>
          </form>
        </div>
      </div>
  </div>
</section> 

  <!-- Footer -->
  <footer>
    <p>&copy; 2025 Nafis Ikhsan | All Rights Reserved</p>
  </footer>

  <script src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>
  
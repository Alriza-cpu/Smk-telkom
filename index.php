<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SMK Telkom Purwokerto</title>
  <!-- <link rel="stylesheet" href="style.css"> -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
    nav{
      background-color: #B90000;
    }

    .navbar-nav .btn {
      font-size: 16px;
      color: #fff;
      background-color: transparent;
      border: 1px solid #fff;
      transition: all 0.3s ease;
    }

    .navbar-nav .btn:hover {
      background-color: #fff;
      color: #B90000;
    }

    .hero {
      background-image: url('2020-11-04.png');
      display: flex;
      align-items: center;
      overflow: hidden;
        -webkit-mask-image: linear-gradient(
          rgb(255, 255, 255) 70%,
          rgba(255, 255, 255, 0)
        );
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        position: relative;
        opacity: 0.8;
        width: 100%;
        height: 500px;
        z-index: 5;
    }
    .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100px; 
        }
    .content {
      background-color: white;
      padding: 50px 0;
      margin: auto;
    }

    .content img {
      width: 100%;
    }

    footer {
      background-color: #B90000;
      padding: 20px 0;
      text-align: center;
      color: #fff;
    }
    h2 {
      color: black;
      margin: auto;
    }
  </style>
</head>
<body class="bg-light">
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">
        <img src="Logo-SMK-Telkom-Purwokerto-200x57.png" alt="SMK Telkom Purwokerto" width="auto" height="auto">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="btn" href="daftar.php">Daftar</a>
          </li>
          <li class="nav-item">
            <a class="btn" href="list-siswa.php">Pendaftar</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <section class="hero">
    <h2 class="text-center">Selamat datang di Website SMK Telkom Purwokerto</h2>
  </section>

  <section class="content ">
    <div class="container ">
      <div class="row justify-content-center">
        <div class="col-md-6">
          <img src="images-removebg-preview (1).png" alt="">
        </div>
      </div>
    </div>
  </section>

  <footer>
    <p>&copy; 2024 SMK Telkom Purwokerto</p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

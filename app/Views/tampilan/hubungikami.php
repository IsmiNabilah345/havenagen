<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Caffe HAVENAGE</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../Engine/styleHK.css">
  <link rel="icon" href="Img/Logo2.png" type="image/x-icon"/>
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href=".<?= base_url('landing'); ?>"><img class="logo" src="../Img/Logo2.png" alt=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('landing'); ?>">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('menu'); ?>">Menu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="<?= base_url('hubungikami'); ?>">Hubungi Kami</a>
          </li>
        </ul>
      </div>
      <div class="text-right">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('keranjang'); ?>"><button type="button" class="btn btn-light">Keranjang
                <i class="fa-solid fa-cart-shopping"></i></button></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('login'); ?>">Login/SignUp</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <br><br>
  <h1 class="address">Alamat Kami</h1>

  <br>
  <iframe
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.1492662260666!2d107.54435447424248!3d-6.872712067243736!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e503087ec521%3A0x5544e9cb1a1e03aa!2sHavenagen!5e0!3m2!1sid!2sid!4v1736430874426!5m2!1sid!2sid"
    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
    referrerpolicy="no-referrer-when-downgrade"></iframe>

  <br> <br> <br>

  <h1 class="address">Hubungi Kami</h1>
  <br>
  <p class="form-contact">Ada pertanyaan atau komentar? Cukup isi formulir dibawah!</p>

  <br> <br>

  <div class="container px-4">
    <div class="row gx-3">
      <div class="col">
        <div class="p-3">
          <div class="card text-bg-dark">
            <img src="../Img/Cardsss.png" class="img-fluid" alt="...">
            <div class="card-img-overlay">
              <h5 class="card-title" style="font-family: poppins; font-size: 30px; font-weight: bold;
      margin-top: 20px; margin-left: 20px;">Informasi Kontak</h5>
              <p class="card-text" style="margin-left: 20px; margin-top: 20px; font-family: poppins; 
      font-weight: 400; font-size: 14px;">Jika Anda mempunyai pertanyaan atau kekhawatiran,
                Anda dapat menghubungi kami dengan mengisi formulir kontak, menelepon kami, atau
                Anda dapat mengirim email pribadi kepada kami di:</p>
              <ul>
                <i style="width: 20; height: auto; margin-top: 12px; margin-right: 7px;" class="fa-solid fa-phone"></i>
                <span style="font-family: poppins;">08123456789</span>
                <br>
                <i style="width: 20; height: auto; margin-top: 12px; margin-right: 7px;"
                  class="fa-regular fa-envelope"></i>
                <span style="font-family: poppins;">Havenagen@gmail.com</span>
                <br>
                <div style="display: flex; align-items: center;">
                  <i style="width: 20; height: 50; margin-top: 12px; margin-right: 15px;"
                    class="fa-solid fa-location-dot"></i>
                  <span style="font-family: poppins; margin-top: 12px;">Jl. Terusan No.52, Cimahi,
                    Kec. Cimahi Tengah, Kota Cimahi, Jawa Barat 40525</span>
                </div>
              </ul>
            </div>
          </div>
        </div>

      </div>
      <div class="col">
        <div class="p-3">
          <form>
            <div class="mb-3">
              <label for="InputText" class="form-label">Name</label>
              <input type="text" class="form-control" id="InputText">
            </div>
            <div class="mb-3">
              <label for="InputText" class="form-label">Email</label>
              <input type="email" class="form-control" id="InputText">
            </div>
            <div class="mb-3">
              <label for="InputText" class="form-label">Phone Number</label>
              <input type="Phonenumber" class="form-control" id="InputText">
            </div>
            <div class="mb-3">
              <label for="InputTextarea" class="form-label">Message</label>
              <textarea class="form-control" id="floatingTextarea2" style="height: 150px"></textarea>
            </div>
            <br>
            <button type="submit" class="btn btn-primary w-100">Send</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  </div>

  <br> <br> <br> <br>
  <footer class="bg-dark text-light py-4">
    <div class="container">
      <div class="row">
        <!-- Logo Section -->
        <div class="col-md-4 mb-3" style="text-align: left;"><br><br>
          <img src="../Img/Logo.jpeg" alt="" style="width: 230px; margin-bottom: 50px;">
          <p class="mt-2">© 2025 All Rights Reserved</p>
        </div>

        <!-- Lokasi -->
        <div class="col-md-4 mb-3" style="text-align: left;">
          <h6>Customer Center</h6>
          <p>Havenagen</p>
          Jl. Terusan No.52, Cimahi, <br>
          Kec. Cimahi Tengah, Kota Cimahi, Jawa Barat 40525</p>
          <p><i class="fa-brands fa fa-whatsapp"> </i> 0812-3456-7890</p>
        </div>

        <div class="col-md-4 mb-3" style="text-align: left;">
          <h6>Available at</h6>
          <img src="../Img/gofood-logo.png" alt="" style="width: 90px;"><br>
          <img src="../Img/grab-logo.png" alt="" style="width: 90px;"><br>
          <img src="../Img/shp-logo.png" alt="" style="width: 90px;"><br><br>
        </div>
      </div>
    </div>
    </div>
  </footer>
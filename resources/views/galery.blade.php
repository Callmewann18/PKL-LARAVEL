<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GALERY</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<style>
  body {
    overflow-x: hidden;
  }
  
</style>

<body>
  <section style="background-image: url('img/Group 70.png'); background-repeat: no-repeat;
                  background-size: cover; background-position: center; height: 490px; filter: w-100 p-3; brightness (50%);" class="img-fluid darkened-image">
    <div class="container abot text-center px-2 py-5">
        <div class="row gx-5 overflow-hidden items-center">
    </div>


    <div class="container mt-1">
      <div class="jumbotron">
          <nav class="navbar navbar-expand-lg">
              <div class="container-fluid">
                <h4 class="fw-bolder text-center text-light">TASTY FOOD</h4>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
                  <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">TASTY FOOD</h5>
                    <button type="button" class="btn-light btn-light" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                  </div>
                  <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                      <li class="nav-item">
                          <a class="nav-link active text-light  fw-bolder" aria-current="page" href="home">Home</a>
                          <br>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active text-light  fw-bolder" aria-current="page" href="tentang">Tentang</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link active text-light  fw-bolder" aria-current="page" href="berita">Berita</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link active text-light fw-bolder" aria-current="page" href="galery">Galeri</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link active text-light fw-bolder" aria-current="page" href="kontak">Kontak</a>
                          </li>
                      </ul>

              </div>
             </div>
          </nav>
      </div>
    </div>
  </div>
    <br>
    <br>
    <div class="container mt-5">
      <div class="jumbotron">
        <div class="text-start mg-top-40 fs-1 fw-bolder text-light">GALERY KAMI</div>
  </nav>
</section>
  <br>
  <br>
  <style>
  .carousel-container {
    position: relative;
    width: 100%;
    max-width: 900px;
    margin: 50px auto;
    overflow: hidden;
    border-radius: 10px;
  }
  
  .carousel {
    display: flex;
    scroll-behavior: smooth;
    overflow-x: auto;
    scroll-snap-type: x mandatory;
  }
  
  .carousel-slide {
    flex: 0 0 100%;
    scroll-snap-align: start;
    position: relative;
  }
  
  .carousel-slide img {
    width: 100%;
    height: auto;
    object-fit: cover;
    border-radius: 10px;
  }
  
  .carousel-nav {
    text-align: center;
    margin-top: 15px;
  }
  
  .carousel-nav a:active, .carousel-nav a:hover {
    background-color: #333;
  }
  
  .carousel {
    -ms-overflow-style: none;  
    scrollbar-width: none; 
  }
  
  .carousel::-webkit-scrollbar {
    display: none; 
  }
  
  /* Responsive */
  @media (max-width: 768px) {
    .carousel-slide img {
      border-radius: 0;
    }
  }
      </style>
        <div class="carousel-container">
          <div class="carousel">
            <div class="carousel-slide">
              <img src="img/ella-olsson-mmnKI8kMxpc-unsplash.jpg" style="height: 350px; width: 400" alt="Image 1">
            </div>
            <div class="carousel-slide">
              <img src="img/anna-pelzer-IGfIGP5ONV0-unsplash.jpg" style="height: 350px; width: 400" alt="Image 2">
            </div>
            <div class="carousel-slide">
              <img src="img/luisa-brimble-HvXEbkcXjSk-unsplash.jpg" style="height: 350px; width: 400" alt="Image 3">
            </div>
            <div class="carousel-slide">
              <img src="img/fathul-abrar-T-qI_MI2EMA-unsplash.jpg" style="height: 350px; width: 400" alt="Image 3">
            </div>
            <div class="carousel-slide">
              <img src="img/Group 70.png" style="height: 350px; width: 400" alt="Image 3">
            </div>
          </div>
        
          <!-- Navigation Dots -->
          <div class="carousel-nav">
            <a href="#slide1"></a>
            <a href="#slide2"></a>
            <a href="#slide3"></a>
            <a href="#slide4"></a>
            <a href="#slide5"></a>
          </div>
        </div>
      </div>
  <br>

  <style>
    .grid-container {
        display: grid;
        grid-template-columns: repeat(4, 1fr); 
        gap: 10px;
        padding: 10px;
    }

    .grid-container img {
        width: 100%;
        height: auto;
        border-radius: 15px;
        object-fit: cover;
    }

    
    .container-image {
        display: flex;
        justify-content: center; 
        align-items: center;
    }

    
    @media (max-width: 1024px) {
        .grid-container {
            grid-template-columns: repeat(3, 1fr); 
        }
    }

    @media (max-width: 768px) {
        .grid-container {
            grid-template-columns: repeat(2, 1fr); 
        }
    }

    @media (max-width: 480px) {
        .grid-container {
            grid-template-columns: repeat(1, 1fr);
        }
    }
</style>

</head>
<div class="container-image my-5">
  <div class="card-container">
    <div class="center">
      <div class="grid-container">
          <img src="img/monika-grabkowska-P1aohbiT-EY-unsplash.jpg" style="width: 270px; height: 270px" alt="Image 1">
          <img src="img/jonathan-borba-Gkc_xM3VY34-unsplash.jpg" style="width: 270px; height: 270px" alt="Image 2">
          <img src="img/michele-blackwell-rAyCBQTH7ws-unsplash.jpg" style="width: 270px; height: 270px" alt="Image 3">
          <img src="img/mariana-medvedeva-iNwCO9ycBlc-unsplash.jpg" style="width: 270px; height: 270px" alt="Image 4">
      </div>
      <div class="grid-container">
        <img src="img/Chefsolo.jpg" style="width: 270px; height: 270px" alt="Image 1">
        <img src="img/sanket-shah-SVA7TyHxojY-unsplash.jpg" style="width: 270px; height: 270px" alt="Image 2">
        <img src="img/anh-nguyen-kcA-c3f_3FE-unsplash.jpg" style="width: 270px; height: 270px" alt="Image 3">
        <img src="img/fathul-abrar-T-qI_MI2EMA-unsplash.jpg" style="width: 270px; height: 270px" alt="Image 4">
      </div>
      <div class="grid-container">
        <img src="img/ella-olsson-mmnKI8kMxpc-unsplash.jpg" style="width: 270px; height: 270px" alt="Image 1">
        <img src="img/eiliv-aceron-ZuIDLSz3XLg-unsplash.jpg" style="width: 270px; height: 270px" alt="Image 2">
        <img src="img/jimmy-dean-Jvw3pxgeiZw-unsplash.jpg" style="width: 270px; height: 270px" alt="Image 3">
        <img src="img/luisa-brimble-HvXEbkcXjSk-unsplash.jpg" style="width: 270px; height: 270px" alt="Image 4">
      </div>
    </div>
  </div>
</div>
</body>
<br>
<br>
<br>
<style>
  footer {
      padding: 20px 0;
      background-color: #000000;
  }

  .footer-container {
      max-width: 1200px;
      margin: 0 auto;
      display: flex;
      flex-wrap: wrap; 
      justify-content: space-between;
      padding: 20px;
  }

  .footer-column {
      flex: 1;
      margin: 0 15px;
      min-width: 200px;
  }

  .footer-column h2, .footer-column h3 {
      margin-bottom: 15px;
      font-size: 18px;
  }

  .footer-column p {
      line-height: 1.4;
      font-size: 11px;
  }

  .footer-column ul {
      list-style-type: none;
      padding: 10px;
  }

  .footer-column ul li {
      margin-bottom: 10px;
  }

  .footer-column ul li a {
      text-decoration: none;
      color: #fff;
      font-size: 12px;
      transition: color 0.3s;
  }

  .footer-column ul li a:hover {
      color: #2f07f3;
  }

  .social-icons {
      margin-top: 10px;
      padding-top: 10px;
  }

  .social-icons a {
      margin-right: 10px;
      display: inline-block;
  }

  .icon {
      width: 30px;
      height: 30px;
  }

  @media (max-width: 768px) {
      .footer-container {
          flex-direction: column; 
          align-items: center; 
          text-align: center; 
      }

      .footer-column {
          margin-bottom: 20px;
      }
  }
</style>

<footer>
  <div class="container mt-5">
      <div class="jumbotron">
          <div class="footer-container">
              <div class="footer-column">
                  <h2 class="fw-bolder text-light">Tasty Food</h2>
                  <p class="fw-bolder text-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                  <div class="social-icons">
                      <a href="https://www.bing.com/ck/a?!&&p=b460a9380f582810JmltdHM9MTcyNTE0ODgwMCZpZ3VpZD0wYWY1MWEzOC02NDAwLTZmM2QtMThlYS0wOWRhNjU1NjZlZTImaW5zaWQ9NTIwNw&ptn=3&ver=2&hsh=3&fclid=0af51a38-6400-6f3d-18ea-09da65566ee2&psq=facebook&u=a1aHR0cHM6Ly93d3cuZmFjZWJvb2suY29tL2luZGV4LnBocC8&ntb=1"><img src="img/001-facebook.png" alt="Facebook" class="icon"></a>
                      <a href="https://www.bing.com/ck/a?!&&p=3af03bccfbcdf613JmltdHM9MTcyNTE0ODgwMCZpZ3VpZD0wYWY1MWEzOC02NDAwLTZmM2QtMThlYS0wOWRhNjU1NjZlZTImaW5zaWQ9NTE5Mw&ptn=3&ver=2&hsh=3&fclid=0af51a38-6400-6f3d-18ea-09da65566ee2&psq=twitter&u=a1aHR0cHM6Ly90d2l0dGVyLmNvbS8_bGFuZz1lbi1pZA&ntb=1"><img src="img/002-twitter.png" alt="Twitter" class="icon"></a>
                  </div>
              </div>
              <div class="footer-column">
                  <h3 class="fw-bolder text-light">Useful links</h3>
                  <ul>
                      <li><a href="https://wannmee.blogspot.com/2023/08/pemasaran-online.html">Blog</a></li>
                      <li><a href="https://kateonconservation.com/2021/01/05/100-wildlife-bloggers-who-are-bettering-the-world/">Hewan</a></li>
                      <li><a href="galery">Galeri</a></li>
                      <li><a href="#">Testimonial</a></li>
                  </ul>
              </div>
              <div class="footer-column">
                  <h3 class="fw-bolder text-light">Privacy</h3>
                  <ul>
                      <li><a href="#">Karir</a></li>
                      <li><a href="tentang">Tentang Kami</a></li>
                      <li><a href="#">Kontak Kami</a></li>
                      <li><a href="#">Servis</a></li>
                  </ul>
              </div>
              <div class="footer-column">
                  <h3 class="fw-bolder text-light">Contact Info</h3>
                  <ul>
                      <li class="text-light"><a href="https://www.instagram.com/p/C-fiXCHCrc9/"><img src="img/Group 66.png" style="height: 30px; width: 20px"> tastyfood@gmail.com</a></li>
                      <li class="text-light"><a href="#"><img src="img/Group 67.png" style="height: 30px; width: 20px"> +62 812 3456 7890</a></li>
                      <li class="text-light"><a href="https://cyberlabs.co.id/"><img src="img/Group 68.png" style="height: 30px; width: 20px"> Cyberlabs, Jawa Barat</a></li>
                  </ul>
              </div>
          </div>
      </div>
  </div>
</footer>
        
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
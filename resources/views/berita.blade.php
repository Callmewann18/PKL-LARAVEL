<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BERITA</title>
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
                            <a class="nav-link active text-light  fw-bolder" aria-current="page" href="#">Berita</a>
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
    <div class="container mt-5">
      <div class="jumbotron">
        <div class="text-start mg-top-40 fs-1 fw-bolder text-light">BERITA KAMI</div>
  </nav>
</section>
  <style>
  .container {
    max-width: 1200px;
    margin: auto;
    padding: 20px;
}

.section {
    background-color: #f4f4f4;
    padding: 20px 0; 
    width: 100vw; 
    margin-left: calc((100vw - 100%) / -2); 
    margin-right: calc((100vw - 100%) / -2); 
}

.container {
    max-width: 1200px;
    margin: auto;
    padding: 0 20px; 
}

.content-wrapper {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    gap: 20px;
}

.content-wrapper img {
    width: 100%;
    max-width: 450px;
    height: auto;
    object-fit: cover;
    border-radius: 10px;
}

.text-section {
    flex: 1;
    padding-left: 20px;
}

.text-section h2 {
    font-size: 18px;
    margin-top: 15%;
    margin-bottom: 15px;
    line-height: 1.3;
}

.text-section p {
    font-size: 14px;
    line-height: 1.6;
}

.text-section button {
    padding: 10px 20px;
    background-color: #000;
    color: #fff;
    border: none;
    cursor: pointer;
    font-style: italic;
}

/* Responsive styles */
@media (max-width: 1024px) {
    .content-wrapper {
        flex-direction: column;
        text-align: center;
    }

    .content-wrapper img {
        max-width: 100%;
        margin-bottom: 20px;
    }

    .text-section {
        padding-left: 0;
    }

    .text-section h2 {
        font-size: 24px;
    }

    .text-section p {
        font-size: 14px;
    }
}

@media (max-width: 768px) {
    .section {
        padding: 15px 0;
    }

    .text-section h2 {
        font-size: 22px;
    }

    .text-section p {
        font-size: 13px;
    }
}

@media (max-width: 576px) {
    .text-section h2 {
        font-size: 20px;
    }

    .text-section p {
        font-size: 12px;
    }

    .text-section button {
        width: 100%;
    }
}

</style>

<div class="section">
    <div class="container">
        <div class="content-wrapper">
            <div>
                <img src="img/eiliv-aceron-ZuIDLSz3XLg-unsplash.jpg" style="width: 500px; height: 500px" alt="Image 1">
            </div>
            <div class="text-section">
                <h2 class="fw-bolder">APA SAJA MAKANAN KHAS<br> NUSANTARA?</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce scelerisque magna aliquet cursus tempus. Duis viverra metus et turpis elementum elementum. Aliquam rutrum placerat tellus et suscipit. Curabitur facilisis lectus vitae eros malesuada eleifend. Mauris eget tellus odio. Phasellus vestibulum turpis ac sem commodo, at posuere eros consequat.
                <br><br>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce scelerisque magna aliquet cursus tempus. Duis viverra metus et turpis elementum elementum. Aliquam rutrum placerat tellus et suscipit. Curabitur facilisis lectus vitae eros malesuada eleifend. Mauris eget tellus odio. Phasellus vestibulum turpis ac sem commodo, at posuere eros consequat.</p>
                <br>
                <div class="d-grid gap-3 d-md-block">
                    <button class="btn btn-dark fs-6 fst-italic" type="button">BACA SELENGKAPNYA</button>
                </div>
            </div>
        </div>
    </div>
</div>


<style>
.card-container {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 20px;
  padding: 20px;
  max-width: 1200px;
  gap: 16px; 
  width: 100%;
}

.card {
  background-color: #fff;
  border-radius: 15px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  overflow: hidden;
  transition: transform 0.3s;
}

.card:hover {
  transform: translateY(-7px);
}

.card img {
  width: 100%;
  height: 180px;
  object-fit: cover;
}

.card-content {
  padding: 15px;
}

.card-title {
  font-size: 1.5em;
  margin: 0;
  color: #333;
}

.card-description {
  margin: 15px 0;
  color: #777;
  font-size: 0.9em;
  line-height: 1.5em;
}

.card-link {
  text-decoration: none;
  color: #ffbc00;
  font-weight: bold;
  font-size: 0.9em;
}

.card-footer {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 0 15px 15px 15px;
}

.card-footer .titik {
  font-size: 1.5em;
  color: #ccc;
}

</style>
</head>
<body>
<br>
<div class="container mt-5">
    
  <div class="jumbotron">
      <h4>BERITA LAINYA</h4>
        <div class="card-container">
            @if ($posts->count() > 1)
                @for ($i = 1; $i < $posts->count(); $i++)
                    <div class="card">
                        <img src="/storage/{{ $posts[$i]->image }}" alt="Image 2">
                        <div class="card-content">
                            <div class="card-body">
                                <h3 class="card-title">{{ $posts[$i]->title }}</h3>
                                <p class="card-description">{{ $posts[$i]->description }}</p>
                                <div class="card-footer">
                                    <a href="#" class="card-link">Baca selengkapnya</a>
                                    <span class="titik">•••</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endfor
            @endif
        </div>
        <div class="card-container">
            @if ($posts->count() > 1)
                @for ($i = 1; $i < $posts->count(); $i++)
                    <div class="card">
                        <img src="/storage/{{ $posts[$i]->image }}" alt="Image 2">
                        <div class="card-content">
                            <div class="card-body">
                                <h3 class="card-title">{{ $posts[$i]->title }}</h3>
                                <p class="card-description">{{ $posts[$i]->description }}</p>
                                <div class="card-footer">
                                    <a href="#" class="card-link">Baca selengkapnya</a>
                                    <span class="titik">•••</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endfor
            @endif
        </div>
  </div>
        
</div>
</body>
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
    
    footer .copyright {
        text-align: center;
        color: #fff;
        font-size: 14px;
        margin-top: 20px;
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
        <p class="copyright">Copyright © 2024 All rights reserved</p>
    </div>
</div>
</footer>
    
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KONTAK</title>
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
                            <a class="nav-link active text-light fw-bolder " aria-current="page" href="home">Home</a>
                            <br>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link active text-light fw-bolder " aria-current="page" href="tentang">Tentang</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link active text-light fw-bolder  " aria-current="page" href="berita">Berita</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link active text-light fw-bolder" aria-current="page" href="galery">Galeri</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link active text-light fw-bolder " aria-current="page" href="#">Kontak</a>
                            </li>
                        </ul>

                </div>
               </div>
            </nav>
        </div>
      </div>
      <div class="container mt-5">
        <div class="jumbotron">
          <div class="text-start mg-top-40 fs-1 fw-bolder text-light">KONTAK KAMI</div>
    </nav>
  </section>
  <br>
  <br>
  <style>
    h2 {
        text-align: left;
        font-size: 24px;
    }

    form {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
        margin-bottom: 10px;
    }

    input[type="text"],
    input[type="email"],
    textarea {
        width: calc(100% - 10px);
        padding: 10px;
        border: 1px solid #000000;
        border-radius: 10px;
        font-size: 16px;
    }

    textarea {
        width: 100%;
        height: 150px;
    }

    .form-container {
        max-width: 900px;
        width: 100%;
        padding: 20px;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .left,
    .right {
        flex: 1;
    }

    .left {
        display: flex;
        flex-direction: column;
        gap: 15px;
    }

    input[type="submit"] {
        width: 100%;
        padding: 15px;
        border: none;
        background-color: black;
        color: white;
        font-size: 18px;
        border-radius: 5px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #333;
    }

    .contact-info {
        display: flex;
        justify-content: space-between;
        text-align: center;
    }

    .contact-info div {
        flex: 1;
        padding: 10px;
    }

    .contact-info div img {
        display: block;
        margin: 0 auto 5px;
    }

    .contact-info p {
        margin: 0;
        font-size: 14px;
    }

    .container map {
        width: 100%;
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
    }

    
    @media (max-width: 600px) {
        form {
            flex-direction: column; 
        }

        .left,
        .right {
            width: 100%; 
        }

        input[type="text"],
        input[type="email"] {
            width: 100%;
        }

        textarea {
            width: 100%;
        }

        .contact-info {
            flex-direction: column;
        }

        .contact-info div {
            margin-bottom: 10px;
        }
    }
</style>


    <div class="container">
        <h2>KONTAK KAMI</h2>
        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success')}}
        </div>
        @endif
        <br>
        <form action="{{ route('contact.send') }}" method="POST">
            @csrf
            <div class="left">
                <input type="text" placeholder="Subject" name="subject" required>
                <input type="text" placeholder="Name" name="name" required>
                <input type="email" placeholder="Email" name="email" required>
            </div>
            <div class="right">
                <textarea placeholder="Message" name="message" required></textarea>
            </div>
            <input type="submit" value="KIRIM">
        </form>
        

    <br>
    <br>
    <br>

    <div class="contact-info">
        <div>
            <img src="img/Group 66.png" style="height: 100px; width: 100px" alt="Email">
            <p>tastyfood@gmail.com</p>
        </div>
        <div>
            <img src="img/Group 67.png" style="height: 100px; width: 100px" alt="Phone">
            <p>+62 812 3456 7890</p>
        </div>
        <div>
            <img src="img/Group 68.png"  style="height: 100px; width: 100px" alt="Location">
            <p>Cyberlabs, Jawa Barat</p>
        </div>
    </div>
</div>
<br>
<br>
  <div class="container map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.558806840512!2d107.66141237356842!3d-6.943211393056869!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e7c381e3c323%3A0x5f5160f6c9796e4b!2sCYBERLABS%20-%20Jasa%20Digital%20Marketing%20%7C%20Jasa%20Pembuatan%20Website%20%7C%20Jasa%20Pembuatan%20Aplikasi!5e0!3m2!1sid!2sid!4v1725405206633!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
    <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    overflow-x: hidden;
}

/* Navbar */
header {
    background-color: #ffffff;
    padding: 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

nav {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.logo h1 {
    font-size: 24px;
    font-weight: bold;
}

.nav-links {
    list-style: none;
    display: flex;
}

.nav-links li {
    margin-left: 20px;
}

.nav-links a {
    text-decoration: none;
    color: black;
    font-size: 16px;
}

/* Hero Section */
.hero {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 50px 20px;
    background-color: #f4f4f4;
}

.hero-text {
    max-width: 50%;
}

.hero-text h2 {
    font-size: 48px;
    font-weight: normal;
    margin-bottom: 20px;
}

.hero-text h2 span {
    font-weight: bold;
}

.hero-text p {
    font-size: 16px;
    color: #555;
    margin-bottom: 30px;
}

.cta-button {
    display: inline-block;
    background-color: black;
    color: white;
    padding: 10px 20px;
    text-decoration: none;
    font-weight: bold;
}

.hero-image img {
    width: 100px;
    height: auto;
    border-radius: 15px;
}

/* Tentang Kami Section */
.about-us {
    text-align: center;
    padding: 50px 20px;
    background-color: #fff;
}

.about-us h3 {
    font-size: 32px;
    margin-bottom: 20px;
}

.about-us p {
    font-size: 16px;
    color: #555;
    max-width: 800px;
    margin: 0 auto;
    line-height: 1.6;
}

.about-us hr {
    width: 100px;
    margin: 20px auto;
    border: 1px solid black;
}

@media (max-width: 768px) {
    .hero {
        flex-direction: column;
        text-align: center;
    }

    .hero-text {
        max-width: 100%;
    }

    .hero-image img {
        width: 30%;
        margin-top: 50px;
    }
}

    </style>
<div class="container">
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
          <a class="navbar-brand fw-bolder" href="#">TASTY FOOD</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="#">HOME</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="tentang">TENTANG</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="berita">BERITA</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="galery">GALERY</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="kontak">KONTAK</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>
    <section class="hero">
            <div class="hero-text">
                <h2>HEALTHY <br><span>TASTY FOOD</span></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu rutrum commodo, dui diam convallis arcu, eget consectetur ex sem eget lacus. Nullam vitae dignissim neque, vel luctus ex. Fusce sit amet viverra ante.</p>
                <a href="tentang" class="cta-button">TENTANG KAMI</a>
            </div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
        <div class="hero-image">
            <img src="img/img-4.png" style="position: static; width: 145%; margin-left: -22%; margin-top: -60%" alt="Tasty Food">
        </div>
    </section>

</div>
    <section class="about-us">
        <h5 class="fw-bolder">TENTANG KAMI</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu rutrum commodo, dui diam convallis arcu, eget consectetur ex sem eget lacus. Nullam vitae dignissim neque, vel luctus ex. Fusce sit amet viverra ante.</p>
        <hr>
    </section>
            
        
    
    </body>

    <style>
        .food-container {
            display: flex;
            justify-content: center;
            background-image: url('img/Group 70@2x.png');
            background-size: cover; 
            background-position: center;
            align-items: center;
            flex-wrap: wrap;
            padding: 40px; 
            gap: 1px;
            min-height: 500px;
        }
    
        .food-card {
            background-color: white;
            border-radius: 15px;
            width: 250px;
            height: 300px;
            padding: 20px;
            margin: 20px 10px; 
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s ease-in-out;
        }
    
        .food-card:hover {
            transform: translateY(-7px);
        }
    
        .food-card img {
            width: 185px; 
            height: 185px; 
            margin-top: -100px;
            margin-bottom: 15px; 
            border-radius: 50%;
        }
    
        h3 {
            font-size: 20px;
            margin-bottom: 10px;
        }
    
        p {
            font-size: 14px;
            color: #555;
        }
    
       
        @media (max-width: 768px) {
            .food-container {
                flex-direction: column; 
                align-items: center;
                padding: 40px 10px;
            }
    
            .food-card {
                width: 100%;
                max-width: 350px;
                margin: 20px 0; 
            }
        }
    
        
        @media (max-width: 480px) {
            .food-card {
                width: 100%; 
                max-width: 300px;
                margin: 20px 0;
            }
        }
    </style>
    
    <section class="food-container">
        <div class="food-card">
            <img src="img/img-1.png" alt="Food Image 1">
            <h3 class="fw-bolder">LOREM IPSUM</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellusornare, augue eu rutrum commodo.</p>
        </div>
        <div class="food-card">
            <img src="img/img-2.png" alt="Food Image 2">
            <h3 class="fw-bolder">LOREM IPSUM</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellusornare, augue eu rutrum commodo.</p>
        </div>
        <div class="food-card">
            <img src="img/img-3.png" alt="Food Image 3">
            <h3 class="fw-bolder">LOREM IPSUM</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellusornare, augue eu rutrum commodo.</p>
        </div>
        <div class="food-card">
            <img src="img/img-4.png" alt="Food Image 4">
            <h3 class="fw-bolder">LOREM IPSUM</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellusornare, augue eu rutrum commodo.</p>
        </div>
    </section>
    
<br>
<br>
<br>
<style>
    .crop {
        object-fit: cover;
    }

    .card-img-top {
        width: 100%;
        height: auto; 
        object-fit: cover; 
    }

    .card {
        border-radius: 10px;
        overflow: hidden;
    }

    .card:hover {
        transform: translateY(-7px);
        }

    .card-footer {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .titik {
        font-size: 18px;
        color: #999;
    }

    .card-link {
        text-decoration: none;
        color: #ffbc00;
        font-weight: bold;
        font-size: 0.9em;
        }


</style>
<div class="container news-section">
    <h4 class="mb-4 text-center fw-bolder">BERITA KAMI</h4>
    <div class="row">
        <div class="col-lg-6">
            <div class="card card-large mb-4">
                <img src="img/fathul-abrar-T-qI_MI2EMA-unsplash.jpg" style="height: 460px; widht: 550px" class="crop" alt="Image 1">
                <div class="card-body">
                    <h5 class="card-title fw-bolder">LOREM IPSUM DOLOR SIT AMET, CONSECUTETUR ADIPISCING ELIT</h5>
                    <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos perspiciatis eum esse aut officiis quas ipsam cum, dicta reprehenderit pariatur aperiam harum consequuntur fuga laudantium accusantium quibusdam, quo alias. Ab animi expedita deleniti! Commodi, accusamus a illum ex dolorem qui modi harum minima corporis quasi porro excepturi inventore quam perferendis neque tenetur expedita nam sapiente. Quam voluptatibus dolorum quidem quo in itaque expedita, molestias distinctio reprehenderit sapiente, eveniet a optio.</p>
                    <div class="card-footer">
                        <a href="#" class="card-link">Baca selengkapnya</a>
                        <span class="titik">•••</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <img src="img/sanket-shah-SVA7TyHxojY-unsplash.jpg" style="height: 200px; widht: 300px"  class="card-img-top" alt="Image 5">
                        <div class="card-body">
                            <h5 class="card-title fw-bolder">LOREM IPSUM</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                            <div class="card-footer">
                                <a href="#" class="card-link">Baca selengkapnya</a>
                                <span class="titik">•••</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <img src="img/Chefsolo.jpg" class="card-img-top" style="height: 200px; widht: 300px" alt="Image 5">
                        <div class="card-body">
                            <h5 class="card-title fw-bolder">LOREM IPSUM</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                            <div class="card-footer">
                                <a href="#" class="card-link">Baca selengkapnya</a>
                                <span class="titik">•••</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <img src="img/jimmy-dean-Jvw3pxgeiZw-unsplash.jpg" style="height: 200px; widht: 300px" class="card-img-top" alt="Image 5">
                        <div class="card-body">
                            <h5 class="card-title fw-bolder">LOREM IPSUM</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                            <div class="card-footer">
                                <a href="#" class="card-link">Baca selengkapnya</a>
                                <span class="titik">•••</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <img src="img/luisa-brimble-HvXEbkcXjSk-unsplash.jpg" style="height: 200px; widht: 300px" class="card-img-top" alt="Image 5">
                        <div class="card-body">
                            <h5 class="card-title fw-bolder">LOREM IPSUM</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                            <div class="card-footer">
                                <a href="#" class="card-link">Baca selengkapnya</a>
                                <span class="titik">•••</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<br>
            <div class="cards">
                <br>
                <h4 class="mb-4 text-center fw-bolder">GALERY KAMI</h4>
                <style>
                    .cards{
                        background-color: #ffffff;
                    }

                    .grid-container {
                    display: grid;
                    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
                    gap: 20px;
                    padding: 10px;
                    }
                
                    .grid-container img {
                    width: 100%; 
                    height: 350px; 
                    border-radius: 15px;
                    object-fit: cover; 
                    }
                
                
                    @media (max-width: 768px) {
                    .grid-container img {
                        height: 200px;
                    }
                    }
                
                    @media (max-width: 480px) {
                    .grid-container {
                        grid-template-columns: 1fr; 
                    }
                    .grid-container img {
                        height: 280px; 
                    }
                    }
                </style>
                
                <div class="container my-5">
                    <div class="card-container">
                    <div class="center">
                        <div class="grid-container">
                        <img src="img/monika-grabkowska-P1aohbiT-EY-unsplash.jpg" alt="Image 1">
                        <img src="img/jonathan-borba-Gkc_xM3VY34-unsplash.jpg" alt="Image 2">
                        <img src="img/michele-blackwell-rAyCBQTH7ws-unsplash.jpg" alt="Image 3">
                        </div>
                        <div class="grid-container">
                        <img src="img/anna-pelzer-IGfIGP5ONV0-unsplash.jpg" alt="Image 4">
                        <img src="img/brooke-lark-1Rm9GLHV0UA-unsplash.jpg" alt="Image 5">
                        <img src="img/eiliv-aceron-ZuIDLSz3XLg-unsplash.jpg" alt="Image 6">
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="d-grid gap-2 col-4 mx-auto">
                        <a href="galery" class="btn btn-dark" type="button">LIHAT LEBIH BANYAK</a>
                    </div>
                    <br>
                    </div>
                
                </div>
            </div>
          

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
                  
</html>   
           
            

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TENTANG</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<style>
    body {
        overflow-x: hidden;
    }

  .tasty-food-section {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    padding: 20px;
    background-color: #fff;
}

.text-content {
    flex: 1;
    max-width: 85%;
}

.text-content h2 {
    font-size: 2em;
    margin-bottom: 10px;
}

.text-content p {
    font-size: 1em;
    line-height: 1.6;
    margin-bottom: 20px;
}

.image-gallery {
    display: flex;
    flex-wrap: wrap;
    max-width: 40%;
}

.image-item {
    flex: 1;
    margin-left: 20px;
}

.image-item img {
    width: 100%;
    border-radius: 10px;
    object-fit: cover;
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
</body>
      <div class="container mt-5">
            <div class="jumbotron">
            <div class="text-start mg-top-40 fs-1 fw-bolder text-light">TENTANG KAMI</div>
            </div>
      </div>
    </section>
    <style>
       .tasty-food-section {
            background-color: #f4f4f4;
            background-repeat: repeat-x;
            padding-top: 100px; 
            padding-bottom: 80px; 
            width: 100vw;
            position: relative;
            left: 50%;
            right: 50%;
            margin-left: -50vw;
            margin-right: -50vw;
        }


        .content-wrapper {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            display: flex; 
            justify-content: space-between;
            align-items: center;
        }
        
        .text-content h2 {
            font-size: 22px;
            margin-bottom: 15px;
        }
        
        .text-content p {
            font-size: 16px;
            line-height: 1.6;
            margin-bottom: 15px;
        }
        
        .image-gallery {
            display: flex;
            gap: 10px;
        }
        
        .image-item img {
            width: 180px;
            height: 305px;
            object-fit: cover;
            border-radius: 10px;
        }
        
        @media (max-width: 1024px) {
            .content-wrapper {
                flex-direction: column;
                text-align: center;
            }
        
            .image-gallery {
                justify-content: center;
                align-items: center;
            }
        }
    </style>        
        
    </head>
    
        <div class="container mt-5 mb-5">
            <div class="jumbotron">
                <section class="tasty-food-section">
                    <div class="content-wrapper">
                        <div class="text-content">
                            <h2 class="fw-bolder">TASTY FOOD</h2>
                            <p class="fw-bolder">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu rutrum commodo, dui diam convallis arcu, eget consectetur ex sem eget lacus. Nullam vitae dignissim neque, vel luctus ex. Fusce sit amet viverra ante.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu rutrum commodo, dui diam convallis arcu, eget consectetur ex sem eget lacus. Nullam vitae dignissim neque, vel luctus ex. Fusce sit amet viverra ante.</p>
                        </div>
            
                        <div class="image-gallery">
                            <div class="image-item">
                                <img src="img/brooke-lark-oaz0raysASk-unsplash.jpg" alt="Food Image 1">
                            </div>
                            <div class="image-item">
                                <img src="img/Chefsolo.jpg" style="height: 303px" alt="Food Image 2">
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            
        </div>
    
        
        <br>
        <br>
        <br>
        
        
        <style>
            .container.visi {
                max-width: 1200px;
                margin: auto;
                padding: 20px;
            }
    
            .section {
                display: flex;
                justify-content: space-between;
                align-items: center;
                margin-bottom: 50px;
                gap: 20px;
                padding: 20px;
                border-radius: 10px;
            }
    
            .section img {
                width: 100%;
                max-width: 200px;
                object-fit: cover;
                height: auto;
                border-radius: 10px;
            }
    
            .text-section {
                flex: 1;
            }
    
            .text-section h2 {
                font-size: 22px;
                margin-bottom: 15px;
            }
    
            .text-section p {
                font-size: 16px;
                line-height: 1.6;
            }
    
            .section:nth-child(even) {
                flex-direction: row-reverse;
            }
    
            @media (max-width: 1024px) {
                .section {
                    flex-direction: column;
                    text-align: center;
                }
    
                .section img {
                    max-width: 100%;
                    margin-bottom: 20px;
                }
    
                .text-section h2 {
                    font-size: 28px;
                }
    
                .text-section p {
                    font-size: 14px;
                }
            }
    
            @media (max-width: 768px) {
                .section {
                    padding: 15px;
                }
    
                .text-section h2 {
                    font-size: 24px;
                }
    
                .text-section p {
                    font-size: 13px;
                }
            }
        </style>
    <div class="container">
        <div class="container-visi">
            <div class="section">
                <img src="img/fathul-abrar-T-qI_MI2EMA-unsplash.jpg" style="height: 250px" class="responsive-img" alt="Image 1">
                <img src="img/michele-blackwell-rAyCBQTH7ws-unsplash.jpg" style="height: 250px" class="responsive-img" alt="Image 2">
                <div class="text-section">
                    <h2 class="fw-bolder">VISI</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce scelerisque magna aliquet cursus tempus. Duis viverra metus et turpis elementum elementum. Aliquam rutrum placerat tellus et suscipit. Curabitur facilisis lectus vitae eros malesuada eleifend. Mauris eget tellus odio. Phasellus vestibulum turpis ac sem commodo, at posuere eros consequat. Lorem ipsum dolor sit amet consectetur adipisicing elit. A accusamus in voluptatem ducimus repudiandae neque minus possimus natus suscipit rerum dicta aliquid praesentium sit laudantium doloremque nulla rem, ea itaque.</p>
                </div>
        </div>
        <style>
            .container-misi {
                max-width: 1200px;
                margin: auto;
                padding: 20px;
            }
        
            .section-misi {
                display: flex;
                justify-content: space-between;
                align-items: center;
                gap: 20px;
                padding: 20px;
                border-radius: 10px;
            }
        
            .section-misi img {
                width: 100%;
                max-width: 500px;
                object-fit: cover;
                border-radius: 10px;
            }
        
            .text-section-misi {
                flex: 1;
            }
        
            .text-section-misi h2 {
                font-size: 22px;
                margin-bottom: 15px;
            }
        
            .text-section-misi p {
                font-size: 16px;
                line-height: 1.6;
            }
        
            @media (max-width: 1024px) {
                .section-misi {
                    flex-direction: column-reverse; 
                    text-align: center;
                }
        
                .section-misi img {
                    max-width: 100%;
                    margin-bottom: 20px;
                }
        
                .text-section-misi h2 {
                    font-size: 28px;
                }
        
                .text-section-misi p {
                    font-size: 14px;
                }
            }
        
            @media (max-width: 768px) {
                .section-misi {
                    padding: 15px;
                }
        
                .text-section-misi h2 {
                    font-size: 24px;
                }
        
                .text-section-misi p {
                    font-size: 13px;
                }
            }
        </style>
    
     </head>
    
        <div class="container-misi">
            <div class="section-misi">
                <div class="text-section-misi">
                    <h2 class="fw-bolder">MISI</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce scelerisque magna aliquet cursus tempus. Duis viverra metus et turpis elementum elementum. Aliquam rutrum placerat tellus et suscipit. Curabitur facilisis lectus vitae eros malesuada eleifend. Mauris eget tellus odio. Phasellus vestibulum turpis ac sem commodo, at posuere eros consequat. Lorem ipsum dolor sit amet consectetur adipisicing elit. A accusamus in voluptatem ducimus repudiandae neque minus possimus natus suscipit rerum dicta aliquid praesentium sit laudantium doloremque nulla rem, ea itaque.</p>
                </div>
                <img src="img/luisa-brimble-HvXEbkcXjSk-unsplash.jpg" style="height: 200px; width: 500px" class="responsive-img" alt="Image 2">
            </div>
        </div>
    </div>
        <br>
        <br>
        <br>
        <br>
        
        <style>
            footer {
                background-color: #000000;
                background-repeat: repeat-x;
                padding: 20px 0;
                width: 100vw;
                position: relative;
                left: 50%;
                right: 50%;
                margin-left: -50vw;
                margin-right: -50vw;
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


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>

    <!-- swiper css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

    <!-- box icons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- custom css -->
    <link rel="stylesheet" href="style.css">

   
</head>


<body>

    <!-- header design -->
    <header class="header">
        <a href="#" class="logo">sovietra</a>

        <nav class="navbar">
            <a href="#home" class="active">Home</a>
            <a href="#about">About</a>
            <a href="#services">Hobbies</a>
            <a href="#portfolio">Portfolio</a>
            <a href="#contact">Contact</a>
        </nav>

        <div class="bx bx-moon" id="darkMode-icon"></div>

        <div class="bx bx-menu" id="menu-icon"></div>
    </header>

    <!-- home section design -->
    <section class="home" id="home">
        <div class="home-content">
            <h3>Portfolio Showcase</h3>
            <h1>Shanya Korver</h1>
            <p>In this portfolio website i'm gonna show you what i've made over the years and what i'm currently doing.</p>

            <div class="social-media">
                <a href="https://www.facebook.com/vkay.oke.5"><i class='bx bxl-facebook'></i></a>
                <a href="#"><i class='bx bxl-twitter'></i></a>
                <a href="https://www.instagram.com/shanya.korver/?next=%2F"><i class='bx bxl-instagram-alt'></i></a>
                <a href="#"><i class='bx bxl-linkedin'></i></a>
            </div>

        </div>

        <div class="profession-container">
            <div class="profession-box">
                <div class="profession" style="--i:0;">
                    <i class='bx bx-code-alt'></i>
                    <h3>Web Developer</h3>
                </div>
                <div class="profession" style="--i:1;">
                    <i class='bx bxl-blender'></i>
                    <h3>3D Modeler</h3>
                </div>
                <div class="profession" style="--i:2;">
                    <i class='bx bx-palette'></i>
                    <h3>Web Designer</h3>
                </div>
                <div class="profession" style="--i:3;">
                    <i class='bx bxs-color-fill' ></i>
                    <h3>Image Designer</h3>
                </div>

                <div class="circle"></div>
            </div>

            <div class="overlay"></div>
        </div>

        <div class="home-img">
            <img src="images/home.png" alt="">
        </div>
    </section>

    <!-- about section design -->
    <section class="about" id="about">
        <div class="about-img">
            <img src="images/about.png" alt="">
        </div>

        <div class="about-content">
            <h2 class="heading">About <span>Me</span></h2>
            <h3>Here I tell a little about myself</h3>
            <p>My name is Shanya Korver and I'm 17 years old. I currently work in a supermarket restocking things for almost 2 years.</p>
            <a href="#" class="btn">Read More</a>
        </div>
    </section>

    <!-- services section design -->
    <section class="services" id="services">
        <h2 class="heading">My <span>Hobbies</span></h2>

        <div class="services-container">
            <div class="services-box">
                <i class='bx bx-code-alt'></i>
                <h3>Web Development</h3>
                <p></p>
            </div>
            <div class="services-box">
                <i class='bx bxl-blender'></i>
                <h3>3D Modeler</h3>
                <p></p>
            </div>
            <div class="services-box">
                <i class='bx bxs-color-fill' ></i>
                <h3>Image Designer</h3>
                <p></p>
            </div>
        </div>
    </section>

    <!-- portfolio section design -->
    <section class="portfolio" id="portfolio">
        <h2 class="heading">Latest <span>Project</span></h2>

        <div class="portfolio-container">
            <div class="portfolio-box">
                <img src="images/portfolio1.jpg" alt="">

                <div class="portfolio-layer">
                    <h4>Sprint 3</h4>
                    <p>Website gemaakt voor Sepelin Kids.</p>
                    <a href="http://127.0.0.1:5502/sepelin%20kids.html"><i class='bx bx-link-external'></i></a>
                </div>
            </div>
            <div class="portfolio-box">
                <img src="images/portfolio2.jpg" alt="">

                <div class="portfolio-layer">
                    <h4>Sprint 7</h4>
                    <p>24 Hr Le mans website zonder PHP (Oud).</p>
                    <a href="http://localhost/sprint7/project.24.heures.du.mans/index.html"><i class='bx bx-link-external'></i></a>
                </div>
            </div>
            <div class="portfolio-box">
                <img src="images/portfolio3.jpg" alt="">

                <div class="portfolio-layer">
                    <h4>Levensverhaal</h4>
                    <p>Begin van 2023 heb ik over mezelf verteld en wat ik doe.</p>
                    <a href="https://eduofficenl-my.sharepoint.com/:w:/r/personal/517274_vistacollege_nl/_layouts/15/Doc.aspx?sourcedoc=%7BECF45FAB-2D4E-4462-972F-7231396000B6%7D&file=Levensverhaal%20.docx&action=default&mobileredirect=true"><i class='bx bx-link-external'></i></a>
                </div>
            </div>
            <div class="portfolio-box">
                <img src="images/portfolio4.jpg" alt="">

                <div class="portfolio-layer">
                    <h4>Sprint 4.2</h4>
                    <p>Portfolio Website gemaakt voor Mitch Moll.</p>
                    <a href="http://127.0.0.1:5501/Website/HTML%20en%20CSS/portfolio.html#Study"><i class='bx bx-link-external'></i></a>
                </div>
            </div>
            <div class="portfolio-box">
                <img src="images/portfolio5.jpg" alt="">

                <div class="portfolio-layer">
                    <h4>Sprint 7</h4>
                    <p>24 Hr Le Mans website Met PHP.</p>
                    <a href="http://localhost/sprint7/home.php"><i class='bx bx-link-external'></i></a>
                </div>
            </div>
            <div class="portfolio-box">
                <img src="images/portfolio6.jpg" alt="">

                <div class="portfolio-layer">
                    <h4>VISTA Karting</h4>
                    <p>Hier hebben we een project gemaakt voor VISTA Karting.</p>
                    <a href=""><i class='http://localhost/vista-karting-main/index.php'></i></a>
                </div>
            </div>
        </div>
    </section>

       
    <!-- contact section design -->
    <section class="contact" id="contact">
        <h2 class="heading">Contact <span>Me!</span></h2>

        <form action="#">
            <div class="input-box">
                <input type="text" placeholder="Full Name">
                <input type="email" placeholder="Email Address">
            </div>
            <div class="input-box">
                <input type="number" placeholder="Mobile Number">
                <input type="text" placeholder="Email Subject">
            </div>
            <textarea name="" id="" cols="30" rows="10" placeholder="Your Message"></textarea>
            <input type="submit" value="Send Message" class="btn">
        </form>
    </section>

    <!-- footer design -->
    <footer class="footer">
        <div class="footer-text">
            <p>Portfolio Showcase Shanya Korver 2024</p>
        </div>

        <div class="footer-iconTop">
            <a href="#home"><i class='bx bx-up-arrow-alt'></i></a>
        </div>
    </footer>


    <!-- scroll reveal -->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!-- swiper js -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <!-- custom js -->
    <script src="script.js"></script>
</body>

</html>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="Malgorzata Pick" />
    <meta
      name="description"
      content="Malgorzata Pick | Web design | E-handel | E-commerce | Online shop | Online boutique | Onlinebutik"
    />
    <meta
      name="keywords"
      content="web design, webbdesign, e-commerce, e-handel, online shop, online boutique, onlinebutik, web developer, webbutvecklare, front-end developer, front-end-utvecklare, utvecklare, front-end, frontend, HTML, CSS, JavaScript, Malgorzata Pick"
    />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="js/main.js" defer></script>
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Quantico&family=Roboto&family=Varela+Round&display=swap"
      rel="stylesheet"
    />
    <script src="https://kit.fontawesome.com/3318035e44.js"></script>
    <link rel="icon" href="img/camera-logo-16.png" type="image/png" />
    <title>best photo shot</title>
  </head>
  <body onload="displayProducts()">
    <!-- Navbar -->
    <nav class="nav-container">
      <!-- Website nav-menu -->
      <ul class="nav-web">
        <li>
          <a href="index.html" id="logo" title="Home"
            ><img src="img/camera-logo-24.png" alt="logo"
          /></a>
        </li>
        <li><a href="products.html">Cameras</a></li>
        <li><a href="#">Lences</a></li>
        <li><a href="#">Accesories</a></li>
        <li><a href="#">Tripods</a></li>
        <li><a href="#">Lighting</a></li>
        <li><a href="#">Video</a></li>
        <li><a href="#">Drones</a></li>
        <li><a href="#">Brands</a></li>
        <li><a href="#">Special</a></li>
      </ul>
      <!-- Mobile nav-menu -->
      <div class="nav-mobile">
        <a href="index.html" id="logo" title="Home"
          ><img src="img/camera-logo-24.png" alt="logo"
        /></a>
        <div id="myLinks">
          <a href="products.html">Cameras</a>
          <a href="#">Lences</a>
          <a href="#">Tripods</a>
          <a href="#">Lighting</a>
          <a href="#">Video</a>
          <a href="#">Drones</a>
          <a href="#">Brands</a>
          <a href="#">Special</a>
        </div>
        <a href="javascript:void(0);" class="icon" onclick="hamburgerMenu()">
          <i class="fa fa-bars"></i>
        </a>
      </div>
    </nav>
    <main>
      <!-- Header -->
      <header class="header">
        <h1 class="company-name">best photo shot</h1>
        <div class="header-spans">
          <span class="search"
            ><i class="fas fa-search"></i
            ><input
              type="search"
              id="search-input"
              name="search"
              placeholder="Search"
          /></span>
          <span class="user-wrapper">
            <i class="fa-solid fa-heart"></i>
            <i class="fa-solid fa-user"></i>
            <a href="shopping-cart.html"
              ><i class="fa-solid fa-cart-shopping" value="2"></i
            ></a>
          </span>
        </div>
      </header>
      <section class="products-section">
        <!-- Products container -->
        <div class="products-container" id="products"></div>
      </section>
    </main>
    <!-- Footer -->
    <footer>
      <div class="footer-menu">
        <nav class="footer-nav-column">
          <ul class="footer-nav-container">
            <li class="li-title">SHOP</li>
            <li><a href="#">Digital cameras</a></li>
            <li><a href="#">Film cameras</a></li>
            <li><a href="#">Lences</a></li>
            <li><a href="#">Accesories</a></li>
            <li><a href="#">Tripods</a></li>
            <li><a href="#">Lighting</a></li>
            <li><a href="#">Video & Drones</a></li>
            <li><a href="#">Brands</a></li>
            <li><a href="#">Special</a></li>
          </ul>
        </nav>
        <nav class="footer-nav-column">
          <ul class="footer-nav-container">
            <li class="li-title">COMPANY INFO</li>
            <li><a href="#">About us</a></li>
            <li><a href="#">Our stores</a></li>
            <li><a href="#">Contact Us</a></li>
            <li><a href="#">Careers</a></li>
            <li><a href="#">Press</a></li>
          </ul>
        </nav>
        <nav class="footer-nav-column">
          <ul class="footer-nav-container">
            <li class="li-title">SHOPPING INFO</li>
            <li><a href="#">Help Center</a></li>
            <li><a href="#">Account</a></li>
            <li><a href="#">Shipping</a></li>
            <li><a href="#">Return Policy</a></li>
            <li><a href="#">Privacy and Security</a></li>
            <li><a href="#">Terms of Service</a></li>
            <li><a href="#">Gift Cards</a></li>
          </ul>
        </nav>
        <nav class="footer-nav-column subscribe">
          <ul class="footer-nav-container">
            <li class="li-title">SUBSCRIBE</li>
            <p>
              Take 5% off your first order when you sign up for our newsletter.
            </p>
            <span class="email"
              ><input
                type="email"
                id="subscribe-input"
                name="email"
                placeholder="Email"
              /><button id="subscribe-btn">Subscribe</button></span
            >
          </ul>
        </nav>
      </div>
      <!-- Social media -->
      <div class="social-media">
        <a href="https://www.facebook.com/" target="_blank"
          ><i class="fab fa-facebook-square"></i
        ></a>
        <a href="https://twitter.com/" target="_blank"
          ><i class="fab fa-twitter-square"></i
        ></a>
        <a href="https://www.instagram.com/" target="_blank"
          ><i class="fab fa-instagram"></i
        ></a>
        <a href="https://www.youtube.com/" target="_blank"
          ><i class="fab fa-youtube-square"></i
        ></a>
        <a href="https://www.pinterest.com/" target="_blank"
          ><i class="fab fa-pinterest-square"></i
        ></a>
      </div>
      <div class="lang-pay">
        <!-- Language -->
        <div class="language">
          <i class="fa-solid fa-globe" title="Choose language"></i>
        </div>
        <!-- Paying methods -->
        <div class="paying-methods">
          <i class="fa-brands fa-cc-visa"></i>
          <i class="fa-brands fa-cc-mastercard"></i>
          <i class="fa-brands fa-cc-paypal"></i>
          <i class="fa-brands fa-cc-apple-pay"></i>
          <p>Klarna.</p>
        </div>
      </div>
      <p class="copyright">Copyright &copy; 2023 | Malgorzata Pick</p>
    </footer>
  </body>
</html>

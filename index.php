<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="Venuri Himasha" />
    <meta
      name="description"
      content="online store | Web design | E-handel | E-commerce "
    />
    
    <link href="css/styles.css" rel="stylesheet" />
    <script src="js/main.js" defer></script>
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Quantico&family=Roboto&family=Varela+Round&display=swap"
      rel="stylesheet"
    />
    <script src="https://kit.fontawesome.com/3318035e44.js"></script>
    <link rel="icon" href="img/mini.png" type="image/png" />
    <title>VisionGear Pro</title>

    <style>
        

        .container {
            background: rgba(30, 30, 30, 0.95);
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0px 10px 30px rgba(255, 204, 0, 0.1);
            text-align: center;
            width: 400px;
            backdrop-filter: blur(10px);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .container:hover {
            transform: scale(1.02);
            box-shadow: 0px 15px 40px rgba(255, 204, 0, 0.2);
        }

       

        .btn {
            display: inline-block;
            width: 100%;
            padding: 12px;
            margin-top: 15px;
            text-decoration: none;
            font-size: 1rem;
            font-weight: bold;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.3s ease-in-out;
            text-align: center;
            border: none;
        }

        .btn-primary {
            background: linear-gradient(45deg, #ffcc00, #ff9900);
            color: #121212;
        }

        .btn-primary:hover {
            background: linear-gradient(45deg, #ff9900, #ffcc00);
            transform: scale(1.05);
            box-shadow: 0px 8px 20px rgba(255, 204, 0, 0.4);
        }

        .btn-secondary {
            background: linear-gradient(45deg, #007bff, #0056b3);
            color: #ffffff;
        }

        .btn-secondary:hover {
            background: linear-gradient(45deg, #0056b3, #007bff);
            transform: scale(1.05);
            box-shadow: 0px 8px 20px rgba(0, 123, 255, 0.4);
        }

        .btn-danger {
            background: linear-gradient(45deg, #ff4b5c, #d32f2f);
            color: #ffffff;
        }

        .btn-danger:hover {
            background: linear-gradient(45deg, #d32f2f, #ff4b5c);
            transform: scale(1.05);
            box-shadow: 0px 8px 20px rgba(255, 75, 92, 0.4);
        }
    </style>

  </head>
  <body onload="displayProdIndex()">
  
    <!-- Navbar -->
    <nav class="nav-container">

    
      <!-- Website nav-menu -->
      <ul class="nav-web">
        <li>
          <a href="index.php" id="logo" title="Home"
            ><img src="img/camera-logo-24.png" alt="logo"
          /></a>
        </li>
        <li><a href="products.php">Cameras</a></li>
        <li><a href="#lenses">Lences</a></li>
        <li><a href="#accessories">Accesories</a></li>
        <li><a href="#tripods">Tripods</a></li>
        <li><a href="#drones">Drones</a></li>
        
      </ul>
      <!-- Mobile nav-menu -->
      <div class="nav-mobile">
        <a href="index.php" id="logo" title="Home"
          ><img src="img/camera-logo-24.png" alt="logo"
        /></a>
        <div id="myLinks">
          <a href="products.php">Cameras</a>
          <a href="#lenses">Lences</a>
          <a href="#accessories">Accesories</a>
          <a href="#tripods">Tripods</a>
          <a href="#drones">Drones</a>
          
        </div>
        <a href="javascript:void(0);" class="icon" onclick="hamburgerMenu()">
          <i class="fa fa-bars"></i>
        </a>
      </div>
    </nav>
   
    <!-- Main -->
    <main>
      <!-- Header -->
      <header class="header">
        <h1 class="company-name">VisionGear Pro – Drones, Cameras & Accessories</h1>
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
            <a href="shopping-cart.php"
              ><i class="fa-solid fa-cart-shopping" value="2"></i
            ></a>
          </span>
          <div class="container">
        <?php if (isset($_SESSION["user"])): ?>
            <h2>Welcome, <?php echo $_SESSION["user"]; ?>!</h2>
            <a href="logout.php" class="btn btn-danger">Logout</a>
        <?php else: ?>
            <h2>Welcome! Please Register or Login</h2>
            <a href="register_form.php" class="btn btn-primary">Register</a>
            <a href="login_form.php" class="btn btn-secondary">Login</a>
        <?php endif; ?>
    </div>
        </div>
      </header>
      <!-- Hero image -->
      <section class="hero-section">
        <div class="hero-image">
          <img src="img/111.jpg" />
          <div class="hero-overlay">
            <div class="hero-content">
              <h1 class="hero-title">Capture. Create. Elevate.</h1>
              <button class="hero-btn" id="checkout-btn">Check out</button>
            </div>
          </div>
        </div>
      </section>
      <!-- Hero image 2 -->
      <section class="hero-section-2">
        <div class="hero-image-2">
          <img src="img/black-friday-concept-with-alarm-cart-space-2.jpg" />
          <div class="hero-overlay">
            <div class="hero-content-2">
              <h1 class="hero-title-2">BLACK FRIDAY IS COMING!</h1>
              <button class="hero-btn"  id="buy-now-btn">Buy now</button>
              <h1 class="hero-title-3">GREAT DEALS!</h1>
              <p class="hero-desc">Priority access to Black Week</p>
              <p class="hero-desc">for members </p>
            </div>
          </div>
        </div>
      </section>
      <!-- Products section -->
      <section class="products-section">
        <h1 class="title">TRENDING NOW</h1>
        <div class="products-container" id="prod-index"></div>
      </section>
      <!-- Categories icons section -->
      <section class="icons-section">
        <h1 class="title">OUR POPULAR CATEGORIES....</h1>
        <div class="container-icons">
          <div class="cat-icon">
            <img src="img/drone_96.png" class="icon-circle" />
            <h5 class="icon-title">Drones</h5>
          </div>
          <div class="cat-icon">
            <img src="img/camera_96.png" class="icon-circle" />
            <h5 class="icon-title">Digital Cameras</h5>
          </div>
          <div class="cat-icon">
            <img src="img/camera_lens_96.png" class="icon-circle" />
            <h5 class="icon-title">Lens</h5>
          </div>
          <div class="cat-icon">
            <img src="img/flash_light_96.png" class="icon-circle" />
            <h5 class="icon-title">Flash lamps</h5>
          </div>
          <div class="cat-icon">
            <img src="img/sling_bag_96.png" class="icon-circle" />
            <h5 class="icon-title">Bags</h5>
          </div>
        </div>
      </section>

      <section class="lenses-section"  id="lenses">
    <h1 class="title">Lenses</h1>
    <div class="lenses-container">
        <div class="lens-item">
            <img src="img/1.jpg" alt="Lens 1" class="lens-image">
            <div class="lens-info">
                <h3 class="lens-title">Wide Angle Lens</h3>
                <p class="lens-description">Perfect for landscapes and architecture photography.</p>
            </div>
        </div>
        <div class="lens-item">
            <img src="img/2.jpg" alt="Lens 2" class="lens-image">
            <div class="lens-info">
                <h3 class="lens-title">Telephoto Lens</h3>
                <p class="lens-description">Capture distant objects with stunning detail.</p>
            </div>
        </div>
        <div class="lens-item">
            <img src="img/3.jpg" alt="Lens 3" class="lens-image">
            <div class="lens-info">
                <h3 class="lens-title">Macro Lens</h3>
                <p class="lens-description">Get up close and personal with tiny subjects.</p>
            </div>
        </div>
    </div>
</section>

<section class="accessories-section" id="accessories">
    <h1 class="title">Accessories</h1>
    <div class="accessories-container">
        <div class="accessory-item">
            <img src="img/6.jpg" alt="Accessory 1" class="accessory-image">
            <div class="accessory-info">
                <h3 class="accessory-title">Tripod</h3>
                <p class="accessory-description">Sturdy and adjustable tripod for stable shots.</p>
            </div>
        </div>
        <div class="accessory-item">
            <img src="img/4.jpg" alt="Accessory 2" class="accessory-image">
            <div class="accessory-info">
                <h3 class="accessory-title">Lens Cleaning Kit</h3>
                <p class="accessory-description">Keep your lenses clean for clear, sharp photos.</p>
            </div>
        </div>
        <div class="accessory-item">
            <img src="img/5.jpg" alt="Accessory 3" class="accessory-image">
            <div class="accessory-info">
                <h3 class="accessory-title">Camera Bag</h3>
                <p class="accessory-description">Protect your camera gear with a padded camera bag.</p>
            </div>
        </div>
    </div>
</section>

<section class="drones-section" id="drones">
    <h1 class="title">Drones</h1>
    <div class="drones-container">
        <div class="drone-item">
            <img src="img/7.jpg" alt="Drone 1" class="drone-image">
            <div class="drone-info">
                <h3 class="drone-title">DJI Mavic Air 2</h3>
                <p class="drone-description">Capture stunning 4K video and 48MP photos with advanced stabilization technology.</p>
            </div>
        </div>
        <div class="drone-item">
            <img src="img/10.jpg" alt="Drone 2" class="drone-image">
            <div class="drone-info">
                <h3 class="drone-title">Parrot Anafi</h3>
                <p class="drone-description">A compact drone with 4K HDR camera and exceptional image quality.</p>
            </div>
        </div>
        <div class="drone-item">
            <img src="img/9.jpg" alt="Drone 3" class="drone-image">
            <div class="drone-info">
                <h3 class="drone-title">Autel Robotics EVO II</h3>
                <p class="drone-description">Professional-grade drone with 8K video and 48MP camera for high-quality content creation.</p>
            </div>
        </div>
    </div>
</section>

<section class="tripod-section" id="tripods">
    <h1 class="title">Tripods</h1>
    <div class="tripods-container">
        <div class="tripod-item">
            <img src="img/11.jpg" alt="Tripod 1" class="tripod-image">
            <div class="tripod-info">
                <h3 class="tripod-title">Manfrotto MT190XPRO3</h3>
                <p class="tripod-description">A versatile tripod with 90-degree center column and exceptional stability for photography and video.</p>
            </div>
        </div>
        <div class="tripod-item">
            <img src="img/12.jpg" alt="Tripod 2" class="tripod-image">
            <div class="tripod-info">
                <h3 class="tripod-title">Joby GorillaPod 5K</h3>
                <p class="tripod-description">Flexible tripod designed for stability and creative shots, perfect for smartphones and cameras.</p>
            </div>
        </div>
        <div class="tripod-item">
            <img src="img/13.jpg" alt="Tripod 3" class="tripod-image">
            <div class="tripod-info">
                <h3 class="tripod-title">Benro Travel Angel</h3>
                <p class="tripod-description">Lightweight and portable tripod ideal for travel photography with easy-to-use locking mechanisms.</p>
            </div>
        </div>
    </div>
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
           
          </ul>
        </nav>
        <nav class="footer-nav-column">
          <ul class="footer-nav-container">
            <li class="li-title">COMPANY INFO</li>
            <li><a href="#">About us</a></li>
            <li><a href="#">Our stores</a></li>
            <li><a href="#">Contact Us</a></li>
            
          </ul>
        </nav>
        <nav class="footer-nav-column">
          <ul class="footer-nav-container">
            <li class="li-title">SHOPPING INFO</li>
            <li><a href="#">Help Center</a></li>
            <li><a href="#">Account</a></li>
           <li><a href="#">Privacy and Security</a></li>
            <li><a href="#">Terms of Service</a></li>
           
          </ul>
        </nav>
        <nav class="footer-nav-column subscribe">
          <ul class="footer-nav-container">
            <li class="li-title">SUBSCRIBE</li>
            
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
         
        </div>
      </div>
      <p class="copyright">Copyright &copy; 2025 |  Venuri Himasha(owner)</p>
    </footer>

    <script>
document.getElementById("checkout-btn").addEventListener("click", function() {
    window.location.href = "checkout.php"; // Redirect to the checkout page
});
</script>
  </body>
</html>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- 
      Site by Karan Desai 
    -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Change User Info</title>
    <style>
      body {
        background-color: #141414;
      }
      .user__info {
            width: 50%;
            margin : 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            display: flex;
            flex-wrap: wrap;
            flex-direction: column;
            align-items: center;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
        }

        .input_child {
          flex: 1 0 31%; /* explanation below */
          margin: 5px;
          height: 70px;
        }        

        .user__info label {
            margin-bottom: 5px;
            color: #333;
        }
        
        .user__info input[type="text"],
        .user__info input[type="password"],
        .user__info input[type="email"],
        .user__info input[type="tel"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
        }
        
        .user__info input[type="submit"] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        
        .user__info input[type="submit"]:hover {
            background :#4347ff
            transition: all 0.35s;
            border-radius: 3px;
        }
    </style>
    <link rel="stylesheet" href="styles.css" />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.14.0/css/all.css"
      integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc"
      crossorigin="anonymous"
    />
    <link
    href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@400;700&display=swap"
    rel="stylesheet"
  />
  </head>
  <body>
    <!-- Navbar Section-->
    <nav class="navbar">
      <div class="navbar__container">
        <a href="/" id="navbar__logo"<i class="fas fa-gem"></i>NEXT</a>
        <div class="navbar__toggle" id="mobile-menu">
          <span class="bar"></span>
          <span class="bar"></span>
          <span class="bar"></span>
        </div>
        <ul class="navbar__menu">
          <li class="navbar__item">
            <a href="/" class="navbar__links">Home</a>
          </li>
          <li class="navbar__item">
            <a href="user.html" class="navbar__links">User</a>
          </li>
          <li class="navbar__item">
            <a href="products.php" class="navbar__links">Products</a>
          </li>
          <li class="navbar__item">
            <a href="contact.php" class="navbar__links">Contacts</a>
          </li>
          <li class="navbar__btn"><a href="/signup.php" class="button">Sign Up</a></li>
        </ul>
      </div>
    </nav>

    <!-- Hero section -->
    <div class="main">
      <div class="main__container">
        <div class="main__content">
          <h1>NEXT GENERATION</h1>
          <h2>TECHNOLOGY</h2>
          <p>See what makes us different.</p>
          <button class="main__btn"><a href="/">GET Started</a></button>
        </div>
        <div class="main__img--container">
          <img src="images/pic1.svg" alt="pic" id="main__img"/>
        </div>
      </div>
    </div>


    <!-- User info section -->
    <div class="user__info">
    <form action="save_user.php" method="post">
      <div class="input_child">
        <label for="first_name">First Name:</label>
        <input type="text" id="first_name" name="first_name" required><br><br>
      </div>
      <div class="input_child">
        <label for="last_name">Last Name:</label>
        <input type="text" id="last_name" name="last_name" required><br><br>
      </div>
      <div class="input_child">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
      </div>
      <div class="input_child">
        <label for="home_address">Home Address:</label>
        <input type="text" id="home_address" name="home_address" required><br><br>
      </div>
      <div class="input_child">
        <label for="home_phone">Home Phone:</label>
        <input type="tel" id="home_phone" name="home_phone"><br><br>
      </div>
      <div class="input_child">
        <label for="cell_phone">Cell Phone:</label>
        <input type="tel" id="cell_phone" name="cell_phone" required><br><br>
      </div>
        <input type="submit" value="Submit">
    </form>
    </div>
    
    <!-- Footer Section -->
    <div class="footer__container">
      <div class="footer__links">
        <div class="footer__link--wrapper">
          <div class="footer__link--items">
            <h2>About Us</h2>
            <a href="/">How it works</a>
            <a href="/">Testimonals</a>
            <a href="/">Careers</a>
            <a href="/">Investments</a>
            <a href="/">Terms of Service</a>
          </div>
          <div class="footer__link--items">
            <h2>Contant Us</h2>
            <a href="/">Contact</a>
            <a href="/">Support</a>
            <a href="/">Destinations</a>
            <a href="/">Sponsorship</a>
          </div>
        </div>
        <div class="footer__link--wrapper">
          <div class="footer__link--items">
            <h2>Videos</h2>
            <a href="/">Submit Videos</a>
            <a href="/">Ambassadors</a>
            <a href="/">Agency</a>
            <a href="/">Influencers</a>
          </div>
          <div class="footer__link--items">
            <h2>Social Media</h2>
            <a href="/">Instagram</a>
            <a href="/">Facebook</a>
            <a href="/">Youtube</a>
            <a href="/">Twitter</a>
          </div>
        </div>
      </div>
      <div class="social__media">
        <div class="social__media--wrap">
          <div class="footer__logo">
            <a href="/" id="footer__logo"><i class="fas fa-gem"></i>NEXT</a>
          </div>
          <p class="website__rights">NEXT 2022. All rights revesered</p>
          <div class="social__icons">
            <a href="/" class="social__icon--link" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="/" class="social__icon--link" target="_blank"><i class="fab fa-facebook"></i></a>
            <a href="/" class="social__icon--link" target="_blank"><i class="fab fa-youtube"></i></a>
            <a href="/" class="social__icon--link" target="_blank"><i class="fab fa-twitter"></i></a>
          </div>
        </div>
      </div>
    </div>
    <script src="app.js"></script>
  </body>
</html>
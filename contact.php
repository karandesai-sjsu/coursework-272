<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- 
      Site by Karan Desai 
    -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contacts</title>
    <link rel="stylesheet" href="styles.css" />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.14.0/css/all.css"
      integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc"
      crossorigin="anonymous"
    />
    <style>
        .table_container {
            display: flex;
            justify-content: center;
            align-items: center;
            background-color : #141414
        }
        table {
            border-collapse: collapse;
            width: 50%;
            justify : center;
            align-items: center
            border: 5px solid #dddddd;
        }
        th, td {
            border: 1px solid #dddddd;
            background-color: #8093f1;
            text-align: center;
            justify-content: center;
            align-items: center;
            padding: 8px;
        }
        th {
            background-color: #ff8177;
        }
    </style>
    <link
    href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@400;700&display=swap"
    rel="stylesheet"
  />
  </head>
  <body>
    <!-- Navbar Section-->
    <nav class="navbar">
      <div class="navbar__container">
        <a href="/demo" id="navbar__logo"<i class="fas fa-gem"></i>NEXT</a>
        <div class="navbar__toggle" id="mobile-menu">
          <span class="bar"></span>
          <span class="bar"></span>
          <span class="bar"></span>
        </div>
        <ul class="navbar__menu">
          <li class="navbar__item">
            <a href="/demo" class="navbar__links">Home</a>
          </li>
          <li class="navbar__item">
            <a href="user.php" class="navbar__links">User</a>
          </li>
          <li class="navbar__item">
            <a href="products.php" class="navbar__links">Products</a>
          </li>
          <li class="navbar__item">
            <a href="contact.php" class="navbar__links">Contacts</a>
          </li>
          <li class="navbar__btn">
            <a href="signup.php" class="button">Sign Up</a></li>
        </ul>
      </div>
    </nav>

    <!-- Hero section -->
    <div class="main">
      <div class="main__container">
        <div class="main__content">
          <h1>Contacts</h1>
          <!-- <p>See what makes us different.</p> -->
          <button class="main__btn"><a href="#contacts">GET Started</a></button>
        </div>
        <div class="main__img--container">
          <img src="images/pic1.svg" alt="pic" id="main__img"/>
        </div>
      </div>
    </div>

</head>
<body>
    <div class="table_container">
    <table>
        <tr>
            <th>Name</th>
            <th>Contact</th>
            <!-- Add more column headers if needed -->
        </tr>
        <?php
        // Open the text file for reading
        $filename = 'contact.txt'; // Change 'your_file.txt' to your file name
        $file = fopen($filename, 'r');

        // Loop through each line in the file
        while (!feof($file)) {
            // Read a line from the file
            $line = fgets($file);
            // Split the line into elements using space as delimiter
            $elements = explode(' ', $line);
            // Output each element within a table row
            echo "<tr>";
            foreach ($elements as $element) {
                echo "<td>$element</td>";
            }
            echo "</tr>";
        }

        // Close the file
        fclose($file);
        ?>
    </table>   
    
    //curl req


    </div>
 
    <div>
      <!-- database fetch -->
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
            <h2>Social Media</h2>
            <a href="/">Instagram</a>
            <a href="/">Facebook</a>
            <a href="/">Youtube</a>
            <a href="/">Twitter</a>
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
          <h2>Contant Us</h2>
            <a href="/">Contact</a>
            <a href="/">Support</a>
            <a href="/">Destinations</a>
            <a href="/">Sponsorship</a>
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
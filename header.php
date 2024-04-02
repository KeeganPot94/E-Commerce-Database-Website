<!--
  REFERENCES:
    Krossing, D. (2023). 12 | CREATE A WEBSITE MENU BAR IN HTML | 2023 | Learn HTML and CSS Full Course for Beginners.
    YouTube. Available at: https://www.youtube.com/watch?v=HkNNyDtm7mg&t=1791s
    [Accessed 10 Jun. 2023].
-->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Page Header</title>
  <link rel="stylesheet" href="css/reset.css" />
  <link rel="stylesheet" href="css/main.css" />
  <link rel="stylesheet" href="css/index-style.css" />
</head>

<!-- Container Body start -->

<body>
  <!-- Header Section start -->
  <header class="header-main">
    <!-- Logo -->
    <div class="header-main-logo">
      <a href="index.html"><img src="_img/Logo.png" alt="Company Logo" /></a>
    </div>
    <!-- Search -->
    <nav class="header-main-nav">
      <div class="search">
        <input type="text" class="searchbar" placeholder="search" />
        <button class="search-btn">search</button>
      </div>
    </nav>
    <!-- Icons -->
    <div class="header-main-icons">
      <nav class="icons">
        <a href="pages/registration.html"><img src="_img/icons/user.png" alt="User Profile" /></a>
        <a href="pages/shopping-cart.html"><img src="_img/icons/shopping-cart.png" alt="Shopping Cart" /></a>
        <nav>
    </div>
  </header>
  <!-- Header Section end -->
  <!-- Header-Sub: Category start -->
  <header class="header-category">
    <nav>
      <ul>
        <li><a href="pages/security-gates.php">SECURITY GATES</a></li>
        <li><a href="pages/burglar-bars.php">BURGLAR BARS</a></li>
        <li><a href="pages/fencing.php">FENCING</a></li>
        <li><a href="pages/safes.php">SAFES</a></li>
        <li><a href="pages/contact-us.php">CONTACT US</a></li>
      </ul>
    </nav>
  </header>
  <!-- Header-Sub: Category end -->
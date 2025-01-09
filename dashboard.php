<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Control Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            <a class="navbar-brand" href="#">
              <img src="logo.png" width="70" height="70" alt="Logo">
            </a>
          </div>
  
          <div class="col-md-6 d-flex align-items-center">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="anasayfa.html">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="hakkımızda.html">About Us</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Dropdown
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="urunler.html">Products&Services</a></li>
                    <li><a class="dropdown-item" href="iletisim.html">Contact</a></li>
                    
                  </ul>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="login.php">User Login</a>
                </li>
              </ul>
              <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </nav>
    </header>

    <h1>Welcome, <?php echo $_SESSION['username']; ?></h1>
    <a href="recordproperties.php" class="btn btn-info" role="button">Record Properties</a>
    <a href="display.php" class="btn btn-info" role="button">Dislay Forms</a>
    <a href="logout.php" class="btn btn-info" role="button">Log Out</a>
   

    <footer class="footer ">
        <div class="container mt-5 mb-5">
          <div class="row">

            <div class="col-md-4">
              <div class="logo">
                <img src="logo.png" width="150" height="150" alt="Logo">
              </div>
            </div>

            <div class="col-md-4">
              <h4> Adres</h4>
              <p> Cevizli Mah. Tugay Yolu Cad. Ofisim İstanbul A Blok No:20 Kat:17 34846 Maltepe / İstanbul </p>
            </div>

            <div class="col-md-4">
              <h4> Contact us</h4>
              <p>Tel: +90 (216) 577 51 00
                E-Posta: info.tr@codevista.com</p>
            </div>
          </div>


        </div>
    </footer>

</body>
</html>

 <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=$pageTitle?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
      .navbar {
        background-color: #87CEFA !important;
      }
      .navbar-brand img {
        height: 40px; 
        margin-right: 10px;
      }
      .navbar .nav-link {
        color: white !important; 
      }
      .navbar .nav-link:hover {
        color: #4682B4 !important; 
      }
    </style>
  </head>
  <body>
    <div class="container">
      <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="https://thumbs.dreamstime.com/b/red-cross-vector-icon-hospital-sign-medical-health-first-aid-symbol-isolated-vhite-modern-gradient-design-141217893.jpg" alt="Hospital Logo">
            Navbar
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="doctors.php">Doctors</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="clients.php">Clients</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="hospitals.php">Hospitals</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="doctors-with-clients.php">Doctors with clients</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+AMvyZqU1zL0vb6+AMfum13BjuGlk" crossorigin="anonymous"></script>
  </body>
</html>

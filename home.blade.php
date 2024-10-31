<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="tyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Document</title>
</head>
<body> 

<!--navbar-->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#home">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about us">About us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact us">Contact us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#gallery">Gallery</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
  <!-- tutup navbar-->

    
    
<!--header-->
      
      <div class="section">
        <section id="home" class="home">
          <div class="container-fluid bg-black">
            <div class="container">
              <a href="home.blade.php">
              <div class="row">
                <div class="col-sm-12 col-md-4">
                  <div class="card s-1">
                    <img
                  src="pe.jpeg"
                  alt=""
                  class="img-fluid"
                      />
                  </div>
                </div>
                <div class="col-sm-12 col-md-4 t-1">
                  <div class="text-light text-start"><h3>Selamat Datang di web diirastia</h3>
                    <div class="text-start"><h6>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro molestiae harum quos ad maiores architecto nam deleniti ea rem qui.</h6></div>
                  </div>
                </div>
                <div class="col-sm-12 col-md-4">
                  <div class="card s-2">
                    <img src="po.jpeg" class="card-img-top" alt="...">
                  </div>
                </div>
                <div class="d-flex justify-content-center mb-5 mt-4">
                  <button type="button" class="btn btn-outline-primary">View Profile</button>
                </div>
              </div>
            </div>
          </div>
      </div>
  <!-- tutup header -->

  <!--about us-->
  <section id="about us" class="about us">
    <div class="container-fluid py-5 dark-white">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6 col-xl-4">
            <div class="card-header">
              <div class="card s-3">
                <img
                  src="pe.jpeg"
                  alt=""
                  class="thumbnail"
                />
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-6 col-xl-8 mt-5 dark-white">
            <h5 class="text-black">Hello My name is</h5>
            <h1 class="text-black">DiiiDekk.</h1>
            <p class="text-black">
              saya i kadek budi juli raditya 
              XI
              PPLG
            </p>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12 col-md-6 col-xl-4">
            <div class="card-header">
              <div class="card s-3">
                <img
                  src="po.jpeg"
                  alt=""
                  class="thumbnail"
                />
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-6 col-xl-8 mt-5 dark-white">
            <h5 class="text-black">Hello My name is</h5>
            <h1 class="text-black">rarastiaa.</h1>
            <p class="text-black">
              saya i luh rasti alfina damayanti
              X
              AKL
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--tutup about us -->

  <!--contact us-->
  <section id="contact us" class="contact us">
    <div class="container-fluid bg-primary">
      <div class="container">
        <h3 class="text-center text-light">CONTACT US</h3>
        <div class="row">
          <div class="col">
            <h5 class="text-light">no Telp : 081675478423</h5>
            <h5 class="text-light">no Telp : 081675478423</h5>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- tutup contact us-->

  <!-- gallery-->
  <section id="gallery" class="gallery">
    <section class="portopolio">
      <div class="container-fluid dark-blue">
        <div class="container">
          <h3 class="text-center text-dark">gallery</h3>
          <div class="row mt-3">
            <div class="col-sm-12 mb-4 col-md-4">
              <img
                src="DR.jpeg"
                alt=""
                class="img-fluid"
              />
            </div>
            <div class="col-sm-12 mb-4 col-md-4">
              <img
                src="DR.jpeg"
                alt=""
                class="img-fluid"
              />
            </div>
            <div class="col-sm-12 mb-4 col-md-4">
              <img
                src="DR.jpeg"
                alt=""
                class="img-fluid"
              />
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12 mb-4 col-md-4">
              <img
                src="DR.jpeg"
                alt=""
                class="img-fluid"
              />
            </div>
            <div class="col-sm-12 mb-4 col-md-4">
              <img
                src="DR.jpeg"
                alt=""
                class="img-fluid"
              />
            </div>
            <div class="col-sm-12 mb-4 col-md-4">
              <img
                src="DR.jpeg"
                alt=""
                class="img-fluid"
              />
            </div>
        </div>
      </div>
    </section>
  </section>

  <!--tutup gallery -->
</body>
</html>
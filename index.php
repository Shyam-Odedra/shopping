<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <title>Shopping</title>

  <style>
    html{
      scroll-behavior: smooth;
    }
    .form-control:focus,
    button:focus {
        border-color: rgba(0, 0, 0, 0.8);
        box-shadow: none;
        outline: 0 none;
    }
    button{
      background: #ffe500; 
      color: black;
    }
    .navbarsearch{
      width: 450px;
    }
</style>
</head>

<body>
  <?php include './assets/navbar.php'; ?>

      <div id="carouselExampleIndicators" class="carousel slide mx-2 my-2 rounded-2" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="images/banner13.jpg" style="heixght: 300px; width: 1500px; object-fit: cover;" class="d-block w-100 rounded-2" alt="...">
          </div>
          <div class="carousel-item">
            <img src="images/banner12.jpg"  style="height: 300px; width: 1500px; object-fit: cover;" class="d-block w-100 rounded-2" alt="...">
          </div>
          <div class="carousel-item">
            <img src="images/banner13.jpg"  style="height: 300px; width: 1500px; object-fit: cover;" class="d-block w-100 rounded-2" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
          data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
          data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      <div class="d-flex container my-3 flex-wrap justify-content-between">
        <div class="card text-white mx-2 overflow-hidden" onclick="location.href='/shopping/search.php?cat=mobile';" style="cursor: pointer;">
          <img src="images/mobiles.jpg" style="height: 100px; width: 200px; object-fit: fill;" class="card-img" alt="...">
          <div class="card-img-overlay d-flex align-items-center justify-content-center">
            <h4 class="card-title .fs-6 text-center mt-3 bg-light text-dark p-1 d-inline-block rounded-2 px-2">Mobiles</h4>
          </div>
        </div>
        <div class="card text-white mx-2 overflow-hidden" onclick="location.href='/shopping/search.php?cat=fashion';" style="cursor: pointer;">
          <img src="images/fashion.jpg" style="height: 100px; width: 200px; object-fit: fill;" class="card-img" alt="...">
          <div class="card-img-overlay d-flex align-items-center justify-content-center">
            <h4 class="card-title .fs-6 text-center mt-3 bg-light text-dark p-1 d-inline-block rounded-2 px-2">Fashion</h4>
          </div>
        </div>
        <div class="card text-white mx-2 overflow-hidden" onclick="location.href='/shopping/search.php?cat=gaming';" style="cursor: pointer;">
          <img src="images/gaming.jpg" style="height: 100px; width: 200px; object-fit: fill;" class="card-img" alt="...">
          <div class="card-img-overlay d-flex align-items-center justify-content-center">
            <h4 class="card-title .fs-6 text-center mt-3 bg-light text-dark p-1 d-inline-block rounded-2 px-2">Gaming</h4>
          </div>
        </div>
        <div class="card text-white mx-2 overflow-hidden" onclick="location.href='/shopping/search.php?cat=sports';" style="cursor: pointer;">
          <img src="images/sports.jpg" style="height: 100px; width: 200px; object-fit: fill;" class="card-img" alt="...">
          <div class="card-img-overlay d-flex align-items-center justify-content-center">
            <h4 class="card-title .fs-6 text-center mt-3 bg-light text-dark p-1 d-inline-block rounded-2 px-2">Sports</h4>
          </div>
        </div>
        <div class="card text-white mx-2 overflow-hidden" onclick="location.href='/shopping/search.php?cat=laptops';" style="cursor: pointer;">
          <img src="images/laptop.jpg" style="height: 100px; width: 200px; object-fit: fill;" class="card-img" alt="...">
          <div class="card-img-overlay d-flex align-items-center justify-content-center">
            <h4 class="card-title .fs-6 text-center mt-3 bg-light text-dark p-1 d-inline-block rounded-2 px-2">Laptops</h4>
          </div>
        </div>
       
      </div>

      <div class=" overflow-hidden mx-5">
        <h2 class="text-center my-4">Products</h2>
        <div class="d-flex m-2 flex-wrap justify-content-around">

          <div class="card overflow-hidden m-2 " style="width: 190px;" >
            <div onclick="location.href='/shopping/product.php';" style="cursor: pointer;">
              <img src="images/mobile1.jpeg" style="width: 180px; object-fit: fill;" class="card-img-top px-5 pt-3 mx-auto" alt="...">
              <div class="card-body d-flex align-items-center justify-content-center flex-column">
                <h6 class="card-title text-center"><b>Redmi Note 10 Pro</b></h6>
                <h6>Price : 15999/-</h6>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-center">
              <a href="./buynow.php" class="btn btn-primary my-1 border-0" style="background: #ffe500; color: black;">Buy Now</a>
            </div>
          </div>
          <div class="card overflow-hidden m-2 " style="width: 190px;">
            <img src="images/s1.jpeg" style="width: 180px; object-fit: fill;" class="card-img-top px-5 pt-3 mx-auto" alt="...">
            <div class="card-body d-flex align-items-center justify-content-center flex-column">
              <h6 class="card-title text-center"><b>Samsung Galaxy M31</b></h6>
              <h6>Price : 15999/-</h6>
              <a href="./buynow.php" class="btn btn-primary my-1 border-0" style="background: #ffe500; color: black;">Buy Now</a>
            </div>
          </div>
          <div class="card overflow-hidden m-2 " style="width: 190px;">
            <img src="images/s2.jpeg" style="width: 180px; object-fit: fill;" class="card-img-top px-5 pt-3 mx-auto" alt="...">
            <div class="card-body d-flex align-items-center justify-content-center flex-column">
              <h6 class="card-title text-center"><b>Samsung Galaxy F62</b></h6>
              <h6>Price : 15999/-</h6>
              <a href="./buynow.php" class="btn btn-primary my-1 border-0" style="background: #ffe500; color: black;">Buy Now</a>
            </div>
          </div>
          <div class="card overflow-hidden m-2 " style="width: 190px;">
            <img src="images/a1.jpeg" style="width: 180px; object-fit: fill;" class="card-img-top px-5 pt-3 mx-auto" alt="...">
            <div class="card-body d-flex align-items-center justify-content-center flex-column">
              <h6 class="card-title text-center"><b>Apple iPhone 12</b></h6>
              <h6>Price : 15999/-</h6>
              <a href="./product.php" class="btn btn-primary my-1 border-0" style="background: #ffe500; color: black;">Buy Now</a>
            </div>
          </div>
          <div class="card overflow-hidden m-2 " style="width: 190px;">
            <img src="images/a2.jpeg" style="width: 180px; object-fit: fill;" class="card-img-top px-5 pt-3 mx-auto" alt="...">
            <div class="card-body d-flex align-items-center justify-content-center flex-column">
              <h6 class="card-title text-center"><b>Apple iPhone 11</b></h6>
              <h6>Price : 15999/-</h6>
              <a href="./product.php" class="btn btn-primary my-1 border-0" style="background: #ffe500; color: black;">Buy Now</a>
            </div>
          </div>
          <div class="card overflow-hidden m-2 " style="width: 190px;">
            <img src="images/r1.jpeg" style="width: 180px; object-fit: fill;" class="card-img-top px-5 pt-3 mx-auto" alt="...">
            <div class="card-body d-flex align-items-center justify-content-center flex-column">
              <h6 class="card-title text-center"><b>Realme Narzo 30A</b></h6>
              <h6>Price : 15999/-</h6>
              <a href="./product.php" class="btn btn-primary my-1 border-0" style="background: #ffe500; color: black;">Buy Now</a>
            </div>
          </div>
          <div class="card overflow-hidden m-2 " style="width: 190px;">
            <img src="images/r2.jpeg" style="width: 180px; object-fit: fill;" class="card-img-top px-5 pt-3 mx-auto" alt="...">
            <div class="card-body d-flex align-items-center justify-content-center flex-column">
              <h6 class="card-title text-center"><b>Realme Narzo 20</b></h6>
              <h6>Price : 15999/-</h6>
              <a href="./product.php" class="btn btn-primary my-1 border-0" style="background: #ffe500; color: black;">Buy Now</a>
            </div>
          </div>
          <div class="card overflow-hidden m-2 " style="width: 190px;">
            <img src="images/o1.jpeg" style="width: 180px; object-fit: fill;" class="card-img-top px-5 pt-3 mx-auto" alt="...">
            <div class="card-body d-flex align-items-center justify-content-center flex-column">
              <h6 class="card-title text-center"><b>Oppo A12 </b></h6>
              <h6>Price : 15999/-</h6>
              <a href="./product.php" class="btn btn-primary my-1 border-0" style="background: #ffe500; color: black;">Buy Now</a>
            </div>
          </div> <div class="card overflow-hidden m-2 " style="width: 190px;">
            <img src="images/o2.jpeg" style="width: 180px; object-fit: fill;" class="card-img-top px-5 pt-3 mx-auto" alt="...">
            <div class="card-body d-flex align-items-center justify-content-center flex-column">
              <h6 class="card-title text-center"><b>Oppo A53</b></h6>
              <h6>Price : 15999/-</h6>
              <a href="./product.php" class="btn btn-primary my-1 border-0" style="background: #ffe500; color: black;">Buy Now</a>
        </div>
          </div> <div class="card overflow-hidden m-2 " style="width: 190px;">
            <img src="images/mi2.jpeg" style="width: 180px; object-fit: fill;" class="card-img-top px-5 pt-3 mx-auto" alt="...">
            <div class="card-body d-flex align-items-center justify-content-center flex-column">
              <h6 class="card-title text-center"><b>Redmi Note 9 Pro</b></h6>
              <h6>Price : 15999/-</h6>
              <a href="./product.php" class="btn btn-primary my-1 border-0" style="background: #ffe500; color: black;">Buy Now</a>
            </div>
          </div> <div class="card overflow-hidden m-2 " style="width: 190px;">
            <img src="images/mi3.jpeg" style="width: 180px; object-fit: fill;" class="card-img-top px-5 pt-3 mx-auto" alt="...">
            <div class="card-body d-flex align-items-center justify-content-center flex-column">
              <h6 class="card-title text-center"><b>Redmi Note 9</b></h6>
              <h6>Price : 15999/-</h6>
              <a href="./product.php" class="btn btn-primary my-1 border-0" style="background: #ffe500; color: black;">Buy Now</a>
            </div>
          </div> <div class="card overflow-hidden m-2 " style="width: 190px;">
            <img src="images/s2.jpeg" style="width: 180px; object-fit: fill;" class="card-img-top px-5 pt-3 mx-auto" alt="...">
            <div class="card-body d-flex align-items-center justify-content-center flex-column">
              <h6 class="card-title text-center"><b>Samsung Galaxy F62</b></h6>
              <h6>Price : 15999/-</h6>
              <a href="./product.php" class="btn btn-primary my-1 border-0" style="background: #ffe500; color: black;">Buy Now</a>
            </div>
          </div>
         
          
         
          
         
        </div>
      </div>
     


  <?php include './assets/footer.php'; ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
    crossorigin="anonymous"></script>

</body>

</html>
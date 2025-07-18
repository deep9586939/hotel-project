<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DH hotel - ABOUT</title>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
      <?php require('inc/links.php');?>
    <style>
      .h-line{
          width: 150px;
          margin: 0 auto;
          height: 1.7px;
        }
        .box{
          border-top-color: #2ec1ac !important;
        }
        .same-size{
          width:400px;
          height:500px;
         
        }
    </style>
    
</head>
<body class="bg-light">
     
     <?php require('inc/header.php');?>

    <div class="my-5 px-4">
      <h2 CLASS="fw-bold text-center">ABOUT US</h2>
      <div class="h-line bg-dark"></div>
      <p class="text-center mt-3">
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
        Temporibus quos, impedit amet officiis a optio inventore 
        non aut voluptas at?
      </p>
    </div>

    <div class="container">
      <div class="row justify-content-between align-items-center">
        <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-md-1 order-2">
          <h3 class="mb-3">Lorem ipsum dolor sit.</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Atque veniam, eum iste minus eius debitis id.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Atque veniam, eum iste minus eius debitis id.
          </p>
        </div>
        <div class="col-lg-5 col-md-5 mb-4 order-lg-2 order-md-2 order-1">
          <img src="images/about/head.jpg" class="w-100">
        </div>
      </div>
    </div>
     
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4 px-4">
              <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                <img src="images/about/hotel.svg"width="70px">
                <h4 class="mt-3">100+ ROOMS</h4>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4">
              <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                <img src="images/about/customers.svg"width="70px">
                <h4 class="mt-3">200+ CUSTOMERS</h4>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4">
              <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                <img src="images/about/rating.svg"width="70px">
                <h4 class="mt-3">150+ REVIEWS</h4>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4">
              <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                <img src="images/about/staff.svg"width="70px">
                <h4 class="mt-3">200+ STAFFS</h4>
              </div>
            </div>
          </div>
    </div>

    <h3 class="my-5 fw-bold h-font text-center">MANAGEMENT TEAM</h3>

    <div class="container px-4">
      <div class="swiper mySwiper">
        <div class="swiper-wrapper mb-5">
          <div class="swiper-slide bg-white text-center overflow-hidden rounded">
            <img src="images/about/vikash.jpg" class="w-100 same-size">
            <h5 class="mt-2"> Vikash Khanna</h5>
          </div>
          <div class="swiper-slide bg-white text-center overflow-hidden rounded">
            <img src="images/about/ranveer.jpg" class="w-100 same-size">
            <h5 class="mt-2"> Ranveer Brar</h5>
          </div>
          <div class="swiper-slide bg-white text-center overflow-hidden rounded">
            <img src="images/about/garima.jpg" class="w-100 same-size">
            <h5 class="mt-2"> Garima Arora</h5>
          </div>
          <div class="swiper-slide bg-white text-center overflow-hidden rounded">
            <img src="images/about/sanjiv.jpg" class="w-100 same-size">
            <h5 class="mt-2"> Sanjiv Kapoor</h5>
          </div>
          <div class="swiper-slide bg-white text-center overflow-hidden rounded">
            <img src="images/about/kunal.jpg" class="w-100 same-size">
            <h5 class="mt-2"> Kunal Kapoor</h5>
          </div>
          <div class="swiper-slide bg-white text-center overflow-hidden rounded">
            <img src="images/about/loire.png" class="w-100 same-size">
            <h5 class="mt-2"> Loire Valley</h5>
          </div>
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </div>

      <?php require('inc/footer.php');?>

  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <script>
    var swiper = new Swiper(".mySwiper", {
      spaceBetween: 40,
      pagination: {
        el: ".swiper-pagination",
      },
      breakpoints:{
          320:{
            slidesPerView:1,
          },
          640:{
            slidesPerView:1,
          },
          768:{
            slidesPerView:2,
          },
          1024:{
            slidesPerView:3,
          },
        }
    });
  </script>

  </body>
</html>
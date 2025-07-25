<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DH hotel HOME</title>
    
    <?php require('inc/links.php');?>

    <style>
        .custom-bg{
          background-color:  #2ec1ac;
          border: 1px solid  #2ec1ac;
        }
        .custom-bg:hover{
          background-color: #279e8c;
          border-color: #279e8c;
        }       
        .availability-form{
          margin-top: -50px;
          z-index: 2;
          position:relative;
        }
        @media screen and (max-width:575px){
          .availability-form{
          margin-top: 25px;
          padding:0 35px;
        }
        }
    </style>
</head>
<body class="bg-light">
     
     <?php require('inc/header.php');?>

     <!--carousel-->

    <div class="container-fluid px-lg-4 mt-4">
      <div class="swiper swiper-container">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img src="images/carousel/1.png" class="w-100 d-block" />
          </div>
          <div class="swiper-slide">
            <img src="images/carousel/2.png" class="w-100 d-block" />
          </div>
          <div class="swiper-slide">
            <img src="images/carousel/3.png" class="w-100 d-block" />
          </div>
          <div class="swiper-slide">
            <img src="images/carousel/4.png" class="w-100 d-block" />
          </div>
          <div class="swiper-slide">
            <img src="images/carousel/5.png" class="w-100 d-block" />
          </div>
          <div class="swiper-slide">
            <img src="images/carousel/6.png" class="w-100 d-block" />
          </div>
        </div>
      </div>
    </div>

    <!--check availability form-->

    <div class="container availability-form">
      <div class="row">
        <div class="col-lg-12 bg-white shadow p-4 rounded">
          <h5 class="mb-4">Check Booking Availability</h5>
          <form>
            <div class="row align-items-end">
              <div class="col-lg-3 mb-3">
                <label  class="form-label" style="font-weight:500">Check-in</label>
                <input type="date" class="form-control shadow-none">
              </div>
              <div class="col-lg-3 mb-3">
                <label  class="form-label" style="font-weight:500">Check-out</label>
                <input type="date" class="form-control shadow-none">
              </div>
              <div class="col-lg-3 mb-3">
                <label  class="form-label" style="font-weight:500">Adult</label>
                <select class="form-select shadow-none">
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
              </div>
              <div class="col-lg-2 mb-3">
                <label  class="form-label" style="font-weight:500">Children</label>
                <select class="form-select shadow-none">
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
              </div>
              <div class="col-lg-1 mb-lg-3 mt-2">
                <button type="submit" class=" btn text-white shadow-none custom-bg">Submit</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

      <!--our Rooms -->

      <h2 class="mt-5 pt-5 mb-4 text-center fw-bold">OUR ROOMS</h2>

      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6 my-3">
            <div class="card border-0 shadow" style="max-width: 350px; margin:auto">
              <img src="images/rooms/1.jpg" class="card-img-top">
              <div class="card-body">
                <h5>Simple Room name</h5>
                <h6 class="mb-4">₹200 per night</h6>
                <div class="features mb-4">
                  <h6 class=" mb-1">Features</h6>
                    <span class="badge rounded-pill bg-light text-dark text wrap lh-base">
                      2 Rooms
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text wrap lh-base">
                      1 Bathroom
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text wrap lh-base">
                      1 Balcony
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text wrap lh-base">
                      3 sofa
                    </span>
                </div>
                <div class="facilities mb-4">
                  <h6 class=" mb-1">Facilities</h6>
                  <span class="badge rounded-pill bg-light text-dark text wrap lh-base">
                      Wifi
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text wrap lh-base">
                      Television
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text wrap lh-base">
                      Air-Conditioner
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text wrap lh-base">
                      Room heater
                    </span>
                </div>
                <div class="guests mb-4">
                  <h6 class=" mb-1">Guests</h6>
                  <span class="badge rounded-pill bg-light text-dark text wrap lh-base">
                      5 Adults
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text wrap lh-base">
                      4 Children
                    </span>
                </div>
                <div class="rating mb-4">
                  <h6 class=" mb-1">Features</h6>
                    <span class=" badge rounded-pill bg-light">
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                    </span>
                </div>
                <div class="d-flex justify-content-evenly mb-2">
                  <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                  <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
                </div>  
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 my-3">
            <div class="card border-0 shadow" style="max-width: 350px; margin:auto">
              <img src="images/rooms/2.png" class="card-img-top">
              <div class="card-body">
                <h5>Simple Room name</h5>
                <h6 class="mb-4">₹200 per night</h6>
                <div class="features mb-4">
                  <h6 class=" mb-1">Features</h6>
                    <span class="badge rounded-pill bg-light text-dark text wrap lh-base">
                      2 Rooms
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text wrap lh-base">
                      1 Bathroom
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text wrap lh-base">
                      1 Balcony
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text wrap lh-base">
                      3 sofa
                    </span>
                </div>
                <div class="facilities mb-4">
                  <h6 class=" mb-1">Facilities</h6>
                  <span class="badge rounded-pill bg-light text-dark text wrap lh-base">
                      Wifi
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text wrap lh-base">
                      Television
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text wrap lh-base">
                      Air-Conditioner
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text wrap lh-base">
                      Room heater
                    </span>
                </div>
                <div class="guests mb-4">
                  <h6 class=" mb-1">Guests</h6>
                  <span class="badge rounded-pill bg-light text-dark text wrap lh-base">
                      5 Adults
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text wrap lh-base">
                      4 Children
                    </span>
                </div>
                <div class="rating mb-4">
                  <h6 class=" mb-1">Features</h6>
                    <span class=" badge rounded-pill bg-light">
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                    </span>
                </div>
                <div class="d-flex justify-content-evenly mb-2">
                  <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                  <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
                </div>  
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 my-3">
            <div class="card border-0 shadow" style="max-width: 350px; margin:auto">
              <img src="images/rooms/3.png" class="card-img-top">
              <div class="card-body">
                <h5>Simple Room name</h5>
                <h6 class="mb-4">₹200 per night</h6>
                <div class="features mb-4">
                  <h6 class=" mb-1">Features</h6>
                    <span class="badge rounded-pill bg-light text-dark text wrap lh-base">
                      2 Rooms
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text wrap lh-base">
                      1 Bathroom
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text wrap lh-base">
                      1 Balcony
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text wrap lh-base">
                      3 sofa
                    </span>
                </div>
                <div class="facilities mb-4">
                  <h6 class=" mb-1">Facilities</h6>
                  <span class="badge rounded-pill bg-light text-dark text wrap lh-base">
                      Wifi
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text wrap lh-base">
                      Television
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text wrap lh-base">
                      Air-Conditioner
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text wrap lh-base">
                      Room heater
                    </span>
                </div>
                <div class="guests mb-4">
                  <h6 class=" mb-1">Guests</h6>
                  <span class="badge rounded-pill bg-light text-dark text wrap lh-base">
                      5 Adults
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text wrap lh-base">
                      4 Children
                    </span>
                </div>
                <div class="rating mb-4">
                  <h6 class=" mb-1">Features</h6>
                    <span class=" badge rounded-pill bg-light">
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                    </span>
                </div>
                <div class="d-flex justify-content-evenly mb-2">
                  <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                  <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
                </div>  
              </div>
            </div>
          </div>
          

          <div class="col-lg-12 text-center mt-5">
            <a href="rooms.php" class=" btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms->>></a>
          </div>
        </div>
      </div>

      <!--Our Facilities-->

      <h2 class="mt-5 pt-5 mb-4 text-center fw-bold">OUR FACILITIES</h2>

      <div class="container">
        <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
          <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
            <img src="images/features/wifi.svg" width="80px">
            <h5 class="mt-3">Wifi</h5>
          </div>
          <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
            <img src="images/features/heater.svg" width="80px">
            <h5 class="mt-3">Heater</h5>
          </div>
          <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
            <img src="images/features/tv.svg" width="80px">
            <h5 class="mt-3">Television</h5>
          </div>
          <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
            <img src="images/features/ac.svg" width="80px">
            <h5 class="mt-3">Air-Conditioner</h5>
          </div>
          <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
            <img src="images/features/spa.svg" width="80px">
            <h5 class="mt-3">Spa</h5>
          </div>
          <div class="col-lg-12 text-center mt-5">
            <a href="facilities.php" class=" btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Facilities->>></a>
          </div>
        </div>
      </div>

      <!--Testimonials-->

      <h2 class="mt-5 pt-5 mb-4 text-center fw-bold">TESTIMONIALS</h2>

      <div class="container mt-5">
        <div class="swiper swiper-testimonials">
          <div class="swiper-wrapper mb-5">
            
            <div class="swiper-slide bg-white p-4">
              <div class="profile d-flex align-items-center mb-3">
                <img src="images/features/food.jpeg" width="30px">
                <h6 class="m-0 ms-2">Random User1</h6>
              </div>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Necessitatibus dolore maxime facere officiis culpa provident 
                molestiae consequuntur accusamus temporibus fuga?
              </p>
              <div class="rating">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
              </div>
            </div>
            <div class="swiper-slide bg-white p-4">
              <div class="profile d-flex align-items-center mb-3">
                <img src="images/features/food.jpeg" width="30px">
                <h6 class="m-0 ms-2">Random User1</h6>
              </div>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Necessitatibus dolore maxime facere officiis culpa provident 
                molestiae consequuntur accusamus temporibus fuga?
              </p>
              <div class="rating">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
              </div>
            </div>
            <div class="swiper-slide bg-white p-4">
              <div class="profile d-flex align-items-center mb-3">
                <img src="images/features/food.jpeg" width="30px">
                <h6 class="m-0 ms-2">Random User1</h6>
              </div>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Necessitatibus dolore maxime facere officiis culpa provident 
                molestiae consequuntur accusamus temporibus fuga?
              </p>
              <div class="rating">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
              </div>
            </div>
            <div class="swiper-slide bg-white p-4">
              <div class="profile d-flex align-items-center mb-3">
                <img src="images/features/food.jpeg" width="30px">
                <h6 class="m-0 ms-2">Random User1</h6>
              </div>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Necessitatibus dolore maxime facere officiis culpa provident 
                molestiae consequuntur accusamus temporibus fuga?
              </p>
              <div class="rating">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
              </div>
            </div>
            <div class="swiper-slide bg-white p-4">
              <div class="profile d-flex align-items-center mb-3">
                <img src="images/features/food.jpeg" width="30px">
                <h6 class="m-0 ms-2">Random User1</h6>
              </div>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Necessitatibus dolore maxime facere officiis culpa provident 
                molestiae consequuntur accusamus temporibus fuga?
              </p>
              <div class="rating">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
              </div>
            </div>


          </div>
          <div class="swiper-pagination"></div>
        </div>
        <div class="col-lg-12 text-center mt-5">
            <a href="about.php" class=" btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">Know More->>></a>
        </div>
      </div>

      <!--Reach us-->
      
      <h2 class="mt-5 pt-5 mb-4 text-center fw-bold">REACH US</h2>

      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
            <iframe class="w-100 rounded" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d118147.82106511467!2d70.7388944931172!3d22.27346616666724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3959c98ac71cdf0f%3A0x76dd15cfbe93ad3b!2sRajkot%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1752152025705!5m2!1sen!2sin"  loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
          <div class="col-lg-4 col-md-4">
            <div class="bg-white p-4 rounded mb-4">
              <h5>Call us</h5>
              <a href="tel: +919846896732" class="d-line-block mb-2 text-decoration-none text-dark">
                <i class="bi bi-telephone-fill"></i>+919846896732
              </a>
              <br>
              <a href="tel: +919846896732" class="d-line-block text-decoration-none text-dark">
                <i class="bi bi-telephone-fill"></i>+919586939760
              </a>
            </div>
            <div class="bg-white p-4 rounded mb-4">
              <h5>Follow us</h5>
              <a href="#" class="d-line-block ">
                <span class="badge bg-light text-dark mb-3 fs-6 p-2">
                  <i class="bi bi-twitter me-1"></i>Twitter
                </span>
              </a>
              <br>
              <a href="#" class="d-line-block ">
                <span class="badge bg-light text-dark  mb-3 fs-6 p-2">
                  <i class="bi bi-facebook me-1"></i>Facebook
                </span>
              </a>
              <br>
              <a href="#" class="d-line-block">
                <span class="badge bg-light text-dark fs-6 p-2">
                  <i class="bi bi-instagram me-1"></i>Instagram
                </span>
              </a>  
            </div>
          </div>
        </div>
      </div>

      <?php require('inc/footer.php');?>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


    <script>
      var swiper = new Swiper(".swiper-container", {
        spaceBetween: 30,
        effect: "fade",
        loop:true,
        autoplay:{
          delay: 3500,
          disableOnInteraction: false,
        }
      });

      var swiper = new Swiper(".swiper-testimonials", {
          effect: "coverflow",
          loop: true,
          grabCursor: true,
          centeredSlides: true,
          slidesPerView: "auto",
          slidesPerView:"3",
          coverflowEffect: {
            rotate: 50,
            stretch: 0,
            depth: 100,
            modifier: 1,
            slideShadows: false,
        },
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
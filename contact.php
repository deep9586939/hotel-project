<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DH hotel - Contact</title>
    
    <?php require('inc/links.php');?>
    <style>
      .h-line{
          width: 150px;
          margin: 0 auto;
          height: 1.7px;
        }
        .custom-bg{
          background-color: #2ec1ac; 
          border: 1px solid #2ec1ac; 
        }
        .custom-bg:hover{
          background-color: #279e8c; 
          border-color: #279e8c; 
        }
    </style>
</head>
<body class="bg-light">
     
     <?php require('inc/header.php');?>

     <div class="my-5 px-4">
      <h2 CLASS="fw-bold text-center">CONTACT-US</h2>
      <div class="h-line bg-dark"></div>
      <p class="text-center mt-3">
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
        Temporibus quos, impedit amet officiis a optio inventore 
        non aut voluptas at?
      </p>
     </div>
     <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6 mb-5 px-4">
          <div class="bg-white rounded shadow p-4">
            <iframe class="w-100 rounded mb-4" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d118147.82106511467!2d70.7388944931172!3d22.27346616666724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3959c98ac71cdf0f%3A0x76dd15cfbe93ad3b!2sRajkot%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1752152025705!5m2!1sen!2sin"  loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <h5>Address</h5>
            <a href="https://maps.app.goo.gl/jZwJva9SkLcEKArv9" target="_blank" class="d-inline-block text-decoration-none text-dark mb-2">
              <i class="bi bi-geo-alt-fill"></i>XYZ,Rajkot,Gujarat
            </a>
            <h5 class="mt-4">Call us</h5>
              <a href="tel: +919846896732" class="d-line-block mb-2 text-decoration-none text-dark">
                <i class="bi bi-telephone-fill"></i>+919846896732
              </a>
              <br>
              <a href="tel: +919846896732" class="d-line-block text-decoration-none text-dark">
                <i class="bi bi-telephone-fill"></i>+919586939760
              </a>
              <h5 class="mt-4">Email</h5>
              <a href="mailto:ask.dh_hotel@gmail.com" class="d-line-block text-decoration-none text-dark">
                <i class="bi bi-envelope-fill me-2"></i>ask.dh_hotel@gmail.com
              </a>
              <h5 class="mt-4">Follow us</h5>
              <a href="#" class="d-line-block text-dark fs-5 me-2">
                <i class="bi bi-twitter me-1 "></i>
              </a>
              <a href="#" class="d-line-block text-dark fs-5 me-2 ">
                  <i class="bi bi-facebook me-1"></i>
              </a>
              <a href="#" class="d-line-block text-dark fs-5">
                  <i class="bi bi-instagram me-1"></i>
              </a>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 px-4">
          <div class="bg-white rounded shadow p-4">
            <form>
              <h5 class="text-center">SEND A MESSAGE</h5>
                <div class="mt-3">
                  <label  class="form-label" style="font-weight:500">Name</label>
                  <input type="text" class="form-control shadow-none">
              </div>
              <div class="mt-3">
                  <label  class="form-label" style="font-weight:500">Email</label>
                  <input type="email" class="form-control shadow-none">
              </div>
              <div class="mt-3">
                  <label  class="form-label" style="font-weight:500">Subject</label>
                  <input type="text" class="form-control shadow-none">
              </div>
              <div class="mt-3">
                  <label  class="form-label" style="font-weight:500">message</label>
                  <textarea class="form-control shadow-none" rows="5" style="resize:none"></textarea>
              </div>
              <button type="submit" class="btn text-white custom-bg mt-4 w-100">SEND</button>
            </form>
          </div>
        </div>
      </div>
     </div>

      <?php require('inc/footer.php');?>

  </body>
</html>
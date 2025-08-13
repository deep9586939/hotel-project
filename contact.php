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

    <?php  
      $contact_q = "SELECT * FROM `contact_details` WHERE `sr_no`=?";
      $values = [1];
      $contact_r =mysqli_fetch_assoc(select($contact_q,$values,'i'));
    ?>

     <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6 mb-5 px-4">
          <div class="bg-white rounded shadow p-4">
            <iframe class="w-100 rounded mb-4" height="320px" src="<?php echo $contact_r['iframe'] ?>"  loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <h5>Address</h5>
            <a href="<?php echo $contact_r['gmap'] ?>" target="_blank" class="d-inline-block text-decoration-none text-dark mb-2">
              <i class="bi bi-geo-alt-fill"></i><?php echo $contact_r['address'] ?>
            </a>
            <h5 class="mt-4">Call us</h5>
              <a href="tel: +<?php echo $contact_r['pn1'] ?>" class="d-line-block mb-2 text-decoration-none text-dark">
                <i class="bi bi-telephone-fill"></i>+<?php echo $contact_r['pn1'] ?>
              </a>
              <br>
              <?php 
                if($contact_r['pn2']!='')
                {
                  echo<<<data
                    <a href="tel: +$contact_r[pn2]" class="d-line-block text-decoration-none text-dark">
                      <i class="bi bi-telephone-fill"></i>+$contact_r[pn2]
                    </a>
                  data;
                }
              ?>
              <h5 class="mt-4">Email</h5>
              <a href="<?php echo $contact_r['email'] ?>" class="d-line-block text-decoration-none text-dark">
                <i class="bi bi-envelope-fill me-2"></i><?php echo $contact_r['email'] ?>
              </a>
              <h5 class="mt-4">Follow us</h5>
              <?php 
                if($contact_r['tw']!='')
                {
                  echo<<<data
                  <a href="$contact_r[tw]" class="d-line-block text-dark fs-5 me-2">
                    <i class="bi bi-twitter me-1 "></i>
                  </a>
                  data;
                }
              ?>
              
              
              <a href="<?php echo $contact_r['fb'] ?>" class="d-line-block text-dark fs-5 me-2 ">
                  <i class="bi bi-facebook me-1"></i>
              </a>
              <a href="<?php echo $contact_r['insta'] ?>" class="d-line-block text-dark fs-5">
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
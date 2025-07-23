<?php 

    require('inc/essentials.php');
    adminlogin();
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel-Dashboard</title>
</head>
<?php require('inc/links.php'); ?>
<body class="bg-light">
  
    <div class="container-fluid  bg-dark text-light p-3 d-flex align-items-center justify-content-between">
        <h3 class="mb-o">ADMIN PANEL</h3>
        <a href="logout.php" class="btn btn-light btn-sm ">LOG OUT</a>
    </div>

    <?php require('inc/scripts.php');  ?>
</body>
</html>
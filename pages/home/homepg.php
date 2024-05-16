<?php
session_start();
$ROUTE = '../../';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@800&family=Roboto:ital,wght@1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Login Page</title>
</head>
<?php include ('../../includes/header/header.php') ?>
<body>
<h1 class="user text-center"> Welcome <?php echo $_SESSION['username']?> </h1>
<h1 class="invalid text-center"> Invalid Username and password </h1>
<section class="gradient-custom" >
  <div class="container-fluid pt-3 pb-3 ">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong cardborder" >
          <div class="card-body p-5 text-center">

            <h3 class="mb-5">Sign in</h3>

            <div class="form-outline mb-4">
            <label class="form-label text-start">Email</label>
              <input type="email" id="email_input" class="form-control form-control-lg" placeholder="Username" />
            </div>

            <div class="form-outline mb-4">
              <label class="form-label">Password</label>
              <input type="password" id="password_input" class="form-control form-control-lg" placeholder="Password"/>
            </div>

            <button class="btn btn-primary btn-lg btn-block"  id="login" type="submit">Login</button>

            <hr class="my-4">

            <button class="btn btn-lg btn-block btn-primary" type="submit"> Sign Up</button>
           

          </div>
        </div>
      </div>
    </div>
  </div>
</section>

</body>
<script src="<?php $_SERVER['DOCUMENT_ROOT']?>/frontend3/pages/login/js/loginjs.js"></script>


</html>
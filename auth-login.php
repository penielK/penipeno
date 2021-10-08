<!DOCTYPE html>
<html lang="en">


<!-- auth-login.html  21 Nov 2019 03:49:32 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Otika - Admin Dashboard Template</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="assets/css/app.min.css">
  <link rel="stylesheet" href="assets/bundles/bootstrap-social/bootstrap-social.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="assets/css/custom.css">
  <link rel='shortcut icon' type='image/x-icon' href='assets/img/favicon.ico' />
</head>

<body>
  <!DOCTYPE html>
  <html lang="en">
  <head>
  	<meta charset="UTF-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<title>Maxweb</title>
  	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  	<link rel="stylesheet" href="style.css">
  </head>
  <body>

  	  <div class="d-flex justify-content-center align-items-center" style="min-height: 100vh;">
  	  	<form class="p-5 rounded shadow"
  	  	      action="auth.php"
  	  	      method="post"
  	  	      style="width: 30rem">
  	  		<h1 class="text-center pb-5 display-4">Maxweb.edu</h1>
  	  		<?php if (isset($_GET['error'])) { ?>
  	  		<div class="alert alert-danger" role="alert">
  			  <?=htmlspecialchars($_GET['error'])?>
  			</div>
  		    <?php } ?>
  		  <div class="mb-3">
  		    <label for="exampleInputEmail1"
  		           class="form-label">Email
  		    </label>
  		    <input type="email"
  		           name="email"
  		           value="<?php if(isset($_GET['email']))echo(htmlspecialchars($_GET['email'])) ?>"
  		           class="form-control"
  		           id="exampleInputEmail1" aria-describedby="emailHelp">
  		  </div>
  		  <div class="mb-3">
  		    <label for="exampleInputPassword1"
  		           class="form-label">Mot de passe
  		    </label>
  		    <input type="password"
  		           class="form-control"
  		           name="password"
  		           id="exampleInputPassword1">
  		  </div>
  		  <button type="submit"
  		          class="btn btn-primary w-100">LOGIN
  		  </button>
  		</form>
  	  </div>
  </body>
  </html>
</div>
    </section>
  </div>
  <!-- General JS Scripts -->
  <script src="assets/js/app.min.js"></script>
  <!-- JS Libraies -->
  <!-- Page Specific JS File -->
  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="assets/js/custom.js"></script>
</body>
<!-- auth-login.html  21 Nov 2019 03:49:32 GMT -->
</html>

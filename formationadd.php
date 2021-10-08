<?php
include ('formationsaddaction.php');
 ?>
<!DOCTYPE html>
<html lang="en">


<!-- index.html  21 Nov 2019 03:44:50 GMT -->
<head>
<?php include ("includes/head.php");
 ?>
</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>

      <?php include ("includes/nav.php"); ?>

      <div class="main-sidebar sidebar-style-2">
      <?php include ("includes/sideBar.php"); ?>
    </div>
    <div class="main-content">
    <div class="card">
                  <div class="card-header">
                  <form action="formationsaddaction.php" method="POST" enctype="multipart/form-data">
                    <h4>Formation Add</h4>
                  </div>
                  <div class="card-body">
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <input type="hidden" name="id" value="<?php if(isset($_GET["edit"])){echo $resultat["id_form"];} ?>">
                        <input type="text" name="name" value="<?php if(isset($_GET["edit"])){echo $resultat["nom_formation"];} ?>"class="form-control" placeholder="Nom - formation" required="required">
                      </div>
                      <div class="form-group col-md-6">
                      <input type="text" name="modules" value="<?php if(isset($_GET["edit"])){echo $resultat["nom_modules"];} ?>"class="form-control" placeholder="Nom - Modules" required="required">
                    </div>
                    <div class="form-group col-md-6">
                      <label>Debut de la formations :</label>
                    <input name ="date" value="<?php if(isset($_GET["edit"])){echo $resultat["debut_form"];} ?>"type="date" class="form-control col-md-15">
                  </div>
                  <div class="form-group col-md-6">
                    <label>Fin de la formations :</label>
                  <input name ="dateFin" value="<?php if(isset($_GET["edit"])){echo $resultat["fin_form"];} ?>"type="date" class="form-control col-md-15">
                </div>
                <?php
                    if ($update==true){ ?>
                    <input type="submit" name="update" class="btn btn-success btn-success" value="Modifier"style="width: 920px; height: 40px;">
                  <?php } else{ ?>
                <input type="submit" name="add" class="btn btn-primary btn-block" value="Ajouter">
                 <?php } ?>
              </div>



      </footer>
    </div>
  </div>
  <!-- General JS Scripts -->
  <?php  include ("includes/footer.php"); ?>
</body>


<!-- index.html  21 Nov 2019 03:47:04 GMT -->
</html>

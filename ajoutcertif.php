
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
                  <form action="" method="POST" enctype="multipart/form-data">
                    <h4>Certifications Add</h4>
                  </div>
                  <div class="card-body">
                    <div class="form-row">
                      <div class="form-group col-md-12">
                      <div class="form-row">
                      <div class="form-group col-md-12">
                        <select id="" class="custom-select" name="formation">
                          <option >--Certification--</option>
                          <?php
                            try {
                              $pdo = new pdo("mysql:host=localhost;dbname=maxweb", "root", "");
                              $pdo->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
                              $rep=$pdo->prepare("SELECT id_certifications , nom_certification FROM certifications");
                              $rep->execute();
                              $tab = $rep->fetchAll();
                              foreach ($tab as $element){
                            ?>
                            <option value="<?= $element['nom_certification']; ?>"> <?php echo $element['nom_certification']; ?> </option>
                            <?php
                                      }
                          } catch (PDOExceptiom $e) {
                              echo "erreur: ".$e->getMessage();
                            }
                            ?>
                      </select>
                      <option></option>
                      <input type="submit" name="add" class="btn btn-primary btn-block" value="Ajouter">
                 
              </div>



      </footer>
    </div>
  </div>
  <!-- General JS Scripts -->
  <?php  include ("includes/footer.php"); ?>
</body>


<!-- index.html  21 Nov 2019 03:47:04 GMT -->
</html>

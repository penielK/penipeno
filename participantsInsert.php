<?php include 'actionP.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
<?php include ("includes/head.php"); ?>
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
                      <form action="actionP.php" method="POST" enctype="multipart/form-data">
                        <h4>Participants</h4>
                      </div>
                      <div class="card-body">
                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <input type="hidden" name="id" value="<?php if(isset($_GET["edit"])){echo $resultat["id_participants"];} ?>">
                            <input type="text" name="name" value="<?php if(isset($_GET["edit"])){echo $resultat["nom_participants"];} ?>"class="form-control" placeholder="Nom" required="required">
                          </div>
                          <div class="form-group col-md-6">
                            <input type="text" name="prenom" value="<?php if(isset($_GET["edit"])){echo $resultat["prenom_participants"];} ?>" class="form-control"  placeholder="Prenom" required="required">
                          </div>
                          <div class="form-group col-md-6">
                            <input type="email" name="email" value="<?php if(isset($_GET["edit"])){echo $resultat["email_participants"];} ?>" class="form-control"  placeholder="Email" required="required">
                          </div>
                          <div class="form-group col-md-6">
                            <input type="tel" pattern="(\+225|0)([ \-_/]*)(\d[ \-_/]*){10}" name="phone" value="<?php if(isset($_GET["edit"])){echo $resultat["tel_participants"];} ?>" class="form-control"  placeholder="telephone" required="required">
                          </div>
                          <div class="form-group col-md-6">
                            <input type="text" name="habitation" value="<?php if(isset($_GET["edit"])){echo $resultat["lieux_habitations"];} ?>" class="form-control" placeholder="Habitation" required="required">
                          </div>
                          <div class="form-group col-md-6">
                            <select id="" class="custom-select" name="formation">
                              <option >--types Formations--</option>
                              <?php
                                try {
                                  $pdo = new pdo("mysql:host=localhost;dbname=maxweb", "root", "");
                                  $pdo->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
                                  $rep=$pdo->prepare("SELECT id , nom_formation FROM type_formations");
                                  $rep->execute();
                                  $tab = $rep->fetchAll();
                                  foreach ($tab as $element){
                                ?>
                                <option value="<?= $element['nom_formation']; ?>"> <?php echo $element['nom_formation']; ?> </option>
                                <?php
                                          }
                              } catch (PDOExceptiom $e) {
                                  echo "erreur: ".$e->getMessage();
                                }
                                ?>
                              <option></option>
                            </select>
                          </div>
                        </div>
                      <br>
                      <div class="form-group">
                      <input type="file" name="image" class="custom-file">
                      <br>
                      <br>
                     <div class="form-group">
                     <?php
                         if ($update==true){ ?>
                         <input type="submit" name="update" class="btn btn-success btn-success" value="Modifier"style="width: 320px; height: 40px;">
                       <?php } else{ ?>
                     <input type="submit" name="add" class="btn btn-primary btn-block" value="Ajouter">
                     <?php } ?>
                     
                       </div>
                    </form>
                    </div>
</div>



    </div>

  <!-- General JS Scripts -->
  <?php  include ("includes/footer.php"); ?>
  </body>
  </html>

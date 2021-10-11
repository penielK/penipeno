<?php
include 'actionF.php';


?>
<!DOCTYPE html>
<html lang="en">


<!-- index.html  21 Nov 2019 03:44:50 GMT -->
<head>
<?php include ("includes/head.php"); ?>
<meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <link rel="stylesheet" href="assets/css/app.min.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="assets/css/custom.css">
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
                  <form action="actionF.php" method="POST" enctype="multipart/form-data">
                    <h4>Formateurs</h4>
                    <i id="sousCate"></i>

    
                    </div>
                    <div class="card-body">
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <input type="hidden" name="id" value="<?php if(isset($_GET["edit"])){echo $resultat["id_formateur"];} ?>">
                        <input type="text" pattern="[aA-z]{1,15}"  name="name" value="<?php if(isset($_GET["edit"])){echo $resultat["nom_formateur"];} ?>"class="form-control" placeholder="Nom" required="required">
                      </div>
                      <div class="form-group col-md-6">
                        <input type="text" pattern="[aA-z]{1,15}" name="prenom" value="<?php if(isset($_GET["edit"])){echo $resultat["prenom_formateur"];} ?>" class="form-control"  placeholder="Prenom" required="required">
                      </div>
                      <div class="form-group col-md-6">

                        <input type="text" pattern="[a-zA-Z][\w\-\.]+@([\w\-]+\.)+[\w\-]{2,4}" name="email" value="<?php if(isset($_GET["edit"])){echo $resultat["email_formateur"];} ?>" class="form-control"  placeholder="Email" required="required">
                      </div>
                      <div class="form-group col-md-6">
                        <input type="tel" pattern="(\+225|0)([ \-_/]*)(\d[ \-_/]*){10}" name="phone"value="<?php if(isset($_GET["edit"])){echo $resultat["tel_formateur"];} ?>" class="form-control"  placeholder="telephone" required="required">
                      </div>
                    </div>
                    <div class="form-group col-md-15">
                      <input type="text" name="habitation" value="<?php if(isset($_GET["edit"])){echo $resultat["lieux_habitations"];} ?>" class="form-control" placeholder="Habitation" required="required">
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <select onchange="getmodules(this.value)" class="custom-select" name="formation" id='formations'>
                          <option >--types Formations-</option>
                          <?php
                            try {
                              $pdo = new pdo("mysql:host=localhost;dbname=maxweb", "root", "");
                              $pdo->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
                              $rep=$pdo->prepare("SELECT id , nom_formation FROM type_formations");
                              $rep->execute();
                              $tab = $rep->fetchAll();
                              foreach ($tab as $element){
                            ?>
                            <option value="<?= $element['id']; ?>"> <?php echo $element['nom_formation']; ?> </option>
                            <?php
                                      }
                          } catch (PDOExceptiom $e) {
                              echo "erreur: ".$e->getMessage();
                            }
                      
                           
                            ?>


                          <option></option>
                        </select>
                      </div>
                      <div class="form-group col-md-6">
                        <b id='spiner'></b>
                        <select id="modules" class="form-control" name="modules">
                        <option>Modules</option>
                        </select>
                      </div>
                      <div class="form-group col-md-15">
                        <label>Date (debut de la formations)</label>
                        <input name ="date" value="<?php if(isset($_GET["edit"])){echo $resultat["date_debutdform"];} ?>"type="date" class="form-control col-md-15">
                      </div>

                </div>
                <div class="form-group">
                  <?php
                      if ($update==true){ ?>
                      <input type="submit" name="update" class="btn btn-success btn-success" value="Modifier"style="width: 855px; height: 40px;">
                    <?php } else{ ?>
              <input type="submit" name="add"  class="btn btn-primary btn-block" value="Ajouter">
                    <?php } ?>
            </div>



            </div>

              </form>
            </div>


      <!-- Main Content -->


  </div>
  <?php  include ("includes/footer.php"); ?>
  <script src="assets/js/app.min.js"></script>
  <script>
function getmodules(formation) {
  $("#spiner").empty().append('<i class="fa fa-spinner fa-spin"></i> <b>loading</b>').css('color','red');
  if (formation == "") {
    document.getElementById("formation").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("modules").innerHTML = this.responseText;
      }
    };
    setTimeout(()=>{
      xmlhttp.open("GET","ajaxFiles/typeformation.php?formation="+formation,true);
      xmlhttp.send();
      $("#spiner").remove();
    },3000)                  
  }
}
  </script>

</body>
</html>

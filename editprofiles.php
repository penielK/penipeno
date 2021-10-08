<?php

include ('config.php');

if (isset($_POST['submit'])) {

  $id=intval($_GET['modif']);
  $full_name=$_POST['full_name'];
  $email=$_POST['email'];
  $mobile=$_POST['mobile'];
  $habitation=$_POST['habitation'];


  $insert = $conn->prepare("UPDATE profil SET full_name=:full_name, email=:email, mobile=:mobile, habitation=:habitation WHERE id=$id");


   $insert->execute(array(
   ":full_name" => $full_name,
   ":email" => $email,
   ":mobile" => $mobile,
   ":habitation" => $habitation));



   header("Location: index.php");

}

?>
<!DOCTYPE html>
<html lang="en">


<!-- index.html  21 Nov 2019 03:44:50 GMT -->
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
                    <?php
                    $id=$_GET['modif'];
                    $query = $conn->query("SELECT * FROM profil where id=$id");
                    $rows = $query->fetchAll();
                    if ($rows) {
                    //sortie des datas\
                      foreach($rows as $value) {
                    ?>
                  <form action="" method="POST" enctype="multipart/form-data">
                    <h4>Edit Profil</h4>
                    </div>
                    <div class="card-body">
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <input type="hidden" name="id" value="">
                        <input type="text"  name="full_name" value="<?php echo $value["full_name"]; ?>" class="form-control" placeholder="Nom et prenom" required="required">
                      </div>
                      <div class="form-group col-md-6">
                        <input type="text" name="habitation" value="<?php echo $value["habitation"]; ?>" class="form-control"  placeholder="habitation" required="required">
                      </div>
                      <div class="form-group col-md-6">

                        <input type="text" pattern="[a-zA-Z][\w\-\.]+@([\w\-]+\.)+[\w\-]{2,4}" name="email" value="<?php echo $value["email"]; ?>" class="form-control"  placeholder="Email" required="required">
                      </div>
                      <div class="form-group col-md-6">
                        <input type="tel" pattern="(\+225|0)([ \-_/]*)(\d[ \-_/]*){10}" name="mobile"value="<?php echo $value["mobile"]; ?>" class="form-control"  placeholder="telephone" required="required">
                      </div>
                    </div>
                    
              <input type="submit" name="submit" class="btn btn-success btn-block" value="Modifier">

            </div>



            </div>

              </form>
            <?php }} ?>
            </div>


      <!-- Main Content -->


  </div>
  <!-- General JS Scripts -->
  <?php  include ("includes/footer.php"); ?>
  <!-- General JS Scripts -->
  <?php  include ("includes/footer.php"); ?>
</body>
</html>

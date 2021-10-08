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
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4> Ajouter Formations</h4>
                    <br>
                  </div>
                  <div class="card-header">
        <form action="actionF.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
          <label>Formations</label>
           <select name="" id="" class="custom-select">
            <option value="">-- types Formation--</options>
            <!-- recuperer-->
          <?php
           try {
            $pdo = new pdo("mysql:host=localhost;dbname=maxweb", "root", "");
            $pdo->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
            $rep=$pdo->prepare("SELECT id , nom_formation FROM type_formations");
            $rep->execute();
            $tab = $rep->fetchAll();
            foreach ($tab as $element){
          ?>
          <option value="<?php echo $element[ID]; ?>"> <?php echo $element['nom_formation']; ?> </option>
          <?php
                    }
        } catch (PDOExceptiom $e) {
            echo "erreur: ".$e->getMessage();
          }
          ?>
         </select>
      </div>
          <label>Modules</label>
           <select name="" id="" class="custom-select">
            <option value="">-- types Modules--</options>
          </select>
      </div>

  <!-- General JS Scripts -->
  <?php  include ("includes/footer.php"); ?>
  </body>
  </html>
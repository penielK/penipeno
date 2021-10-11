<?php include 'actionP.php'; ?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.bootstrap4.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap4.min.css">

<head>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="assets/css/app.min.css">
  <!-- Template CSS -->
  
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="assets/css/custom.css">
  <link rel='shortcut icon' type='image/x-icon' href='assets/img/favicon.ico' />>
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
                  <div class="col-20 col-md-20 col-lg-20">
                    <?php
                    $query = $conn->query("SELECT * FROM participants ORDER BY id_participants DESC");
                    $rows = $query->fetchAll();
                   ?>
                    <div class="card">
                      <div class="card-header">
                        <h4>Liste Participants</h4>
                      </div>
                      <div class="card-body">
                      <div class="table-responsive">
                        
                      <table id="example" class="table table-striped table-m">
                              <thead>
                                <tr>
                                  <th>Nom</th>
                                  <th>Prenom</th>
                                  <th>E-mail</th>
                                  <th>Telephone</th>
                                  <th>Lieu d'habitation</th>
                                  <th>formations</th>
                                  <th>photo</th>
                                  <th>Action</th>

                                </tr>
                              </thead>
                              <tbody>
                                <?php

                                if ($rows) {

                                //sortie des datas\
                                foreach($rows as $value) {
                               ?>
                                <tr>
                                  <th><?php echo $value["nom_participants"]; ?></th>
                                  <th><?php echo $value["prenom_participants"]; ?></th>
                                  <th><?php echo $value["email_participants"]; ?></th>
                                  <th><?php echo $value["tel_participants"]; ?></th>
                                  <td><?php echo $value["lieux_habitations"]; ?></td>
                                  <td><?php echo $value["types_formations"]; ?></td>
                                  <td><img src='uploads/<?php echo $value["photo_participants"]; ?>' width="50" class="rounded-circle"></td>
                                  <td>
                                  <a href="detailsP.php?details=<?php echo $value["id_participants"]; ?>" class="badge badge-primary p-2">Profil</a>
                                  <a href="actionP.php?id=<?php echo $value["id_participants"]; ?>" class="badge badge-danger p-2" onclick="return confirm('Voulez vous vraiment supprimer?');">Supprimer</a>
                                  <a href="participantsInsert.php?edit=<?php echo $value["id_participants"]; ?>"class="badge badge-success p-2">Modifier</a>
                                  </td>
                                </tr>
                              <?php   }
                            }
                            ?>
                            
                            </tbody>
                          </table>
                         


    </div>

  <!-- General JS Scripts -->
  <!-- JS Libraies -->
  <!-- Page Specific JS File -->
  
  <?php  include ("includes/footer.php"); ?>
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.bootstrap4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap4.min.js"></script>
    <script>
   $(document).ready(function() {
                      $('#example').DataTable( {
                          dom: 'Bfrtip',
                          buttons: [
                              'copy', 'csv', 'excel', 'pdf', 'print'
                          ]
                      } );
                  } );
                                
                        </script>
     </script>
     <a class="btn btn-primary" href="participantsInsert.php" role="button">Ajout participants</a>
  </body>
  </html>

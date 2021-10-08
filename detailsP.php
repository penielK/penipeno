<?php
include 'actionP.php';


?>

<body>
<div class="container">
<div class="row justify-content-center">
    <div class="col-md-6 mt-3 bg-info p-4 rounded">
       <h2 class="bg-light p-2 rounded text-center text-dark"> ID : <?php echo $row["id_participants"];?></h2>
       <div class="text-center">
           <img src ="uploads/<?php echo $row["photo_participants"];?>" width="300" class="img-thumnail">
        </div>
       <h4 class="text-light"> Nom :<?php echo $row["nom_participants"];?></h4 >
       <h4 class="text-light" > Prenom :<?php echo $row["prenom_participants"];?></h4 >
       <h4 class="text-light"> E-mail :<?php echo $row["email_participants"];?></h4 >
       <h4 class="text-light"> Telephone :<?php echo $row["tel_participants"];?></h4 >
       <h4 class="text-light" > Lieux d'habitations :<?php echo $row["lieux_habitations"];?></h4 >
        

</div>
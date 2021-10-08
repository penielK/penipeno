<?php
include 'actionF.php';


?>



<body>
<div class="container">
<div class="row justify-content-center">
    <div class="col-md-6 mt-3 bg-info p-4 rounded">
    <h2 class="bg-light p-2 rounded text-center text-dark"> ID : <?php echo $row["id_formateurs"];?></h2>
       <div class="text-center">
        </div>
       <h4 class="text-light"> Nom :<?php echo $row["nom_formateur"];?></h4 >
       <h4 class="text-light" > Prenom :<?php echo $row["prenom_formateur"];?></h4 >
       <h4 class="text-light"> E-mail :<?php echo $row["email_formateur"];?></h4 >
       <h4 class="text-light"> Telephone :<?php echo $row["tel_formateur"];?></h4 >
       
        

</div>
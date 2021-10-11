<?php 
include ('../config.php');
if(isset($_GET)){
  $html = '';
    $type = intval($_GET['formation']);
    $rep=$conn->prepare("SELECT * FROM `modules_formations` WHERE types_formations= ?");
    $rep->execute([$type]);
    $getmodule = $rep->fetchAll();
    if(empty( $getmodule)){
      echo '<option>Aucun module assié a cette formation</option>';
    }else{
      foreach($getmodule as $row){
        echo '<option id='.$row['id'].'>'.$row['nom_modules'].'</option>';
      }
    }
   
}

/**
 
 * 
 */
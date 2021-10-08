<?php 
include ('../config.php');
function TypeFormation(){
  if(isset($_GET)){
    $html = '';
      $type = $_GET['type'];
      $query= $conn->prepare("SELECT * FROM `modules_formations` WHERE types_formations=:types_formations");
      $query->bindValue(":types_formations",$type, PDO::PARAM_INT);
      $query->execute();
      $query = $query->fetch();
      if(count($query)>0){
         $html = 'data';
      }else{
         $html = 'sdfsfsdgfs';
      }
  }

  return $html;
}


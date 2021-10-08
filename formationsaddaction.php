<?php
$update=false;

include ('config.php');
if(isset($_POST['add'])){

        $nom_formation=$_POST['name'];
        $nom_modules=$_POST['modules'];
        $debut_form=$_POST['date'];
        $fin_form=$_POST['dateFin'];

        $insert = $conn->prepare("INSERT INTO formadd(`nom_formation`,
        `nom_modules`,
        `debut_form`,
        `fin_form`) VALUES(:nom_formation,
         :nom_modules,
         :debut_form,
         :fin_form)");

         $insert->execute(array(
         ":nom_formation" => $nom_formation,
         ":nom_modules" => $nom_modules,
         ":debut_form" => $debut_form,
         ":fin_form" => $fin_form));

         header("Location: formationsListe.php");
       }

        if(isset($_GET['id'])){

       $id=$_GET['id'];

        $query= $conn->prepare("DELETE FROM formadd WHERE id_form=:id_form");
        $query->bindValue(":id_form",$id, PDO::PARAM_INT);
       $query->execute();

      //  $_SESSION['response']="Supprimé avec succès !";
      //  $_SESSION['res_type']="danger";

      //  header("Location: formationsListe.php");

      $update=true;

      }

      if(isset($_GET['edit'])){

      $id=$_GET['edit'];

        $query= $conn->prepare("SELECT * FROM formadd WHERE id_form=:id_form");
        $query->bindValue(":id_form",$id, PDO::PARAM_INT);
        $query->execute();
        $resultat = $query->fetch();

        $update=true;

      }

      if(isset($_POST['update'])){
        $id_form  =$_POST['id'];
        $nom_formation=$_POST['name'];
        $nom_modules=$_POST['modules'];
        $debut_form=$_POST['date'];
        $fin_form=$_POST['dateFin'];

        try {

          //code...
          $insert = $conn->prepare("UPDATE formadd SET
            nom_formation=:nom_formation,
            nom_modules=:nom_modules,
            debut_form=:debut_form,
            fin_form=:fin_form WHERE id_form=:id_form");

            $insert->execute(array(

            ":nom_formation" => $nom_formation,
            ":nom_modules" => $nom_modules,
            ":debut_form" => $debut_form,
            ":fin_form" => $fin_form,
            ":id_form" => $id_form,

          ));

          } catch (Exception $e) {
            die("Erreur".$e->getMessage());
          }
          //$_SESSION['response']="modifié avec succès !";
          //$_SESSION['res_type']="primary";

       header("Location: formationsListe.php");


        }
?>

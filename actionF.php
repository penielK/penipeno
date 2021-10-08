
<?php

include ('config.php');
$update=false;

if(isset($_POST['add'])){

        $nom_formateur=$_POST['name'];
        $prenom_formateur=$_POST['prenom'];
		    $email_formateur=$_POST['email'];
	    	$tel_formateur=$_POST['phone'];
        $lieux_habitations=$_POST['habitation'];
        $formations_form=$_POST['formation'];
        $modules_form=$_POST['modules'];
        $date_debutdform=$_POST['date'];


          $insert = $conn->prepare("INSERT INTO formateurs(`nom_formateur`,
          `prenom_formateur`,
          `email_formateur`,
          `tel_formateur`,
          `lieux_habitations` ,
          `formations_form` ,
          `modules_form`,
          `date_debutdform`)
           VALUES(:nom_formateur,
            :prenom_formateur,
            :email_formateur,
            :tel_formateur ,
            :lieux_habitations ,
            :formations_form ,
            :modules_form ,
            :date_debutdform )");

        $insert->execute(array(":nom_formateur" => $nom_formateur,
        ":prenom_formateur" => $prenom_formateur,
        ":email_formateur" => $email_formateur,
        ":tel_formateur" => $tel_formateur ,
        ":lieux_habitations" => $lieux_habitations ,
        ":formations_form" => $formations_form ,
        ":modules_form" => $modules_form ,
        ":date_debutdform" => $date_debutdform));



          header("Location: formateursListe.php");


	}
    if(isset($_GET['id'])){

		$id=$_GET['id'];

    $query= $conn->prepare("DELETE FROM formateurs WHERE id_formateur=:id_formateur");
    $query->bindValue(":id_formateur",$id, PDO::PARAM_INT);
	  $query->execute();

    $_SESSION['response']="Supprimé avec succès !";
    $_SESSION['res_type']="danger";

    header("Location: formateursListe.php");

    }

    if(isset($_GET['edit'])){

		$id=$_GET['edit'];

      $query= $conn->prepare("SELECT * FROM formateurs WHERE id_formateur=:id_formateur");
      $query->bindValue(":id_formateur",$id, PDO::PARAM_INT);
	    $query->execute();
	    $resultat = $query->fetch();

      $update=true;
    }


    if(isset($_POST['update'])){
      $id_formateur=$_POST['id'];
      $nom_formateur=$_POST['name'];
      $prenom_formateur=$_POST['prenom'];
      $email_formateur=$_POST['email'];
      $tel_formateur=$_POST['phone'];
      $lieux_habitations=$_POST['habitation'];
      $formations_form=$_POST['formation'];
      $modules_form=$_POST['modules'];
      $date_debutdform=$_POST['date'];

      try {

        //code...
        $insert = $conn->prepare("UPDATE formateurs SET
          nom_formateur=:nom_formateur,
          prenom_formateur=:prenom_formateur,
          email_formateur=:email_formateur,
          tel_formateur=:tel_formateur ,
          lieux_habitations=:lieux_habitations,
          formations_form=:formations_form,
          modules_form=:modules_form,
          date_debutdform=:date_debutdform
          WHERE id_formateur=:id_formateur");

        //var_dump($insert);

        $insert->execute(array(

        ":id_formateur" => $id_formateur,
        ":nom_formateur" => $nom_formateur,
        ":prenom_formateur" => $prenom_formateur,
        ":email_formateur" => $email_formateur,
        ":tel_formateur" => $tel_formateur,
        ":lieux_habitations" => $lieux_habitations,
        ":formations_form" => $formations_form,
        ":modules_form" => $modules_form,
        ":date_debutdform" => $date_debutdform
      ));

      } catch (Exception $e) {
        die("Erreur".$e->getMessage());
      }

      //$_SESSION['response']="modifié avec succès !";
      //$_SESSION['res_type']="primary";

      header("Location: formateursListe.php");


    }

    if(isset($_GET['detailsF'])){
      $id=$_GET['detailsF'];
      $query= $conn->prepare("SELECT * FROM formateurs WHERE id_formateur=:id_formateur");
      $query->bindValue(":id_formateur",$id, PDO::PARAM_INT);
      $query->execute();

      $row = $query->fetch();
      //var_dump($row);

    }






?>

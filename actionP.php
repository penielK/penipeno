<?php  session_start();

include ('config.php');

$update=false;


if(isset($_POST['add'])){

        $nom_participants=$_POST['name'];
        $prenom_participants=$_POST['prenom'];
		    $email_participants=$_POST['email'];
	      $tel_participants=$_POST['phone'];
        $lieux_habitations=$_POST['habitation'];
        $photo_participants=$_FILES['image']['name'];
        $upload="uploads".$photo_participants;
        $types_formations=$_POST['formation'];


       $insert = $conn->prepare("INSERT INTO participants(`nom_participants`, `prenom_participants`, `email_participants`,
         `tel_participants` , `lieux_habitations`
          , `photo_participants` , `types_formations`) VALUES(:nom_participants, :prenom_participants,
            :email_participants, :tel_participants ,
            :lieux_habitations, :photo_participants , :types_formations)");


        $insert->execute(array(":nom_participants" => $nom_participants, ":prenom_participants" => $prenom_participants,
        ":email_participants" => $email_participants,":tel_participants" => $tel_participants ,
        ":lieux_habitations" => $lieux_habitations,
        ":photo_participants" => $photo_participants ,
       ":types_formations" => $types_formations));


        $name = basename($_FILES["image"]["name"]);

        move_uploaded_file($_FILES['image']['tmp_name'], "$upload/$name");



        header("Location: participantsListe.php");
}


    //    $_SESSION['response1']="Insertion réussie dans la base de données";
      //  $_SESSION['res_type1']="success";

    //    header("Location: participantsInsert.php");


        if(isset($_GET['id'])){

            $id=$_GET['id'];

        $query= $conn->prepare("DELETE FROM participants WHERE id_participants=:id_participants");
        $query->bindValue(":id_participants",$id, PDO::PARAM_INT);
        $query->execute();



       header("Location: participantsListe.php");

}

if(isset($_GET['edit'])){

    $id=$_GET['edit'];

  $query= $conn->prepare("SELECT * FROM participants WHERE id_participants=:id_participants");
  $query->bindValue(":id_participants",$id, PDO::PARAM_INT);
    $query->execute();
    $resultat = $query->fetch();

    $update=true;

}

if(isset($_POST['update'])){

    $id_participants=$_POST['id'];
    $nom_participants=$_POST['name'];
    $prenom_participants=$_POST['prenom'];
    $email_participants=$_POST['email'];
    $tel_participants=$_POST['phone'];
    $lieux_habitations=$_POST['habitation'];
    $photo_participants=$_FILES['image']['name'];

  try {
    //code...
    $insert = $conn->prepare("UPDATE participants SET nom_participants=:nom_participants,prenom_participants=:prenom_participants,email_participants=:email_participants,tel_participants=:tel_participants ,
    lieux_habitations=:lieux_habitations ,photo_participants=:photo_participants
    WHERE id_participants=:id_participants");

    $insert->execute(array(
      ":id_participants" => $id_participants,
       ":nom_participants" => $nom_participants,
       ":prenom_participants" => $prenom_participants,
       ":email_participants" => $email_participants,
       ":tel_participants" => $tel_participants ,
       ":lieux_habitations" => $lieux_habitations,
       ":photo_participants"=> $photo_participants
    ));
  } catch (Exception $e) {
    die("Erreur".$e->getMessage());
  }

//  $_SESSION['response']="modifié avec succès !";
  // $_SESSION['res_type']="primary";

  header("Location: participantsListe.php");

}


if(isset($_GET['details'])){
  $id=$_GET['details'];
  $query= $conn->prepare("SELECT * FROM participants WHERE id_participants=:id_participants");
  $query->bindValue(":id_participants",$id, PDO::PARAM_INT);
  $query->execute();

  $row = $query->fetch();

}



?>

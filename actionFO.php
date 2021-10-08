<?php session_start();

include ('config.php');


if(isset($_POST['add'])){

            $nom_formation=$_POST['name'];
            $type_formations=$_POST['formations'];
		    $modules_formations=$_POST['type_modules'];
	    	$descriptions_formations=$_POST['Description'];
            $photo_participants=$_FILES['image']['name'];

            $upload="uploads".$photo_participants;

        

        $insert = $conn->prepare("INSERT INTO formations(`nom_formations`, `type_formations`, 
        `modules_formations`, `descriptions_formations`,`photos_formations`) VALUES(:nom_formations, :types_formations, 
        :modules_formations, :descriptions_formations), :photos_formations)");

        $insert->execute(array(":nom_formations" => $nom_formations, ":type_formations" => $type_formations,":modules_formations" => $modules_formations,
        ":descriptions_formations" => $descriptions_formations,":photo_formations" => $photo_formations,));

        $name = basename($_FILES["image"]["name"]);

        move_uploaded_file($_FILES['image']['tmp_name'], "$upload/$name");

        $_SESSION['response']="Insertion réussie dans la base de données";
        $_SESSION['res_type']="success";

       

        header("Location: formations.php");
}
        
      
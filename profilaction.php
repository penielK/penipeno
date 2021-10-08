<?php
include ('config.php');

 if(isset($_POST['add'])){

         $full_name=$_POST['fullname'];
         $email=$_POST['email'];
 	    	 $mobile=$_POST['phone'];
         $habitation=$_POST['habitation'];


         $insert = $conn->prepare("INSERT INTO profil (
        `full_name`,
         `email`,
         `mobile`,
         `habitation`)
         VALUES(:full_name,
          :email,
          :mobile,
          :habitation)");

          $insert->execute(array(
          ":full_name" => $full_name,
          ":email" => $email,
          ":mobile" => $mobile,
          ":habitation" => $habitation));
            header("Location: index.php");

}
          
?>

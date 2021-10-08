<?php
	
  try {
    $conn = new PDO("mysql:host=localhost;dbname=maxweb", "root", "");
    //code...
  } catch (Exceptiom $e) {
    die('Could not connect to the database!'.$e->getMessage());
  }

?>
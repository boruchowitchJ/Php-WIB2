<?php 
include "./src/db/db.php";

if(isset($_POST['connexion']))

{
    
	$message =$_POST['message'];
    //Requete control de duplication dans la DB//

    


    $sql = "INSERT INTO `contact` ( `message`)
    VALUES( '$message')";

$stmt = $mysqlClient-> prepare($sql);
$stmt->execute();

header('location:http://localhost/WIB2?page=contact');
}



include "./src/views/contact.php";


?>
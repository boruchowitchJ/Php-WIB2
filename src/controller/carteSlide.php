<?php


// connexion db
include("src/db/db.php");

///insérer un commentaire dans la DB

if(isset($_POST['comment']))
{


    	$comment =$_POST['ReviewsPoi'];
         $name= $_SESSION['name'];
         $IdPoi =$_POST['idPoi'];

    
        

         $Cmt= "INSERT INTO poi_avis ( id_user, message, date, id_poi) VALUES ((SELECT id FROM user WHERE user.name = '$name'),'$comment',(SELECT DATE_FORMAT(SYSDATE(), '%d %b %H:%i' )), $IdPoi)";

         $stmt1 = $mysqlClient-> prepare($Cmt);
         $stmt1->execute();
        
         header('location:http://localhost/WIB2?page=carte');

        

}






// if($get["poi"] == "atomium"){
//     //je prépare ma requete sql pour aller chercher les ifnso de ce poi
// }
// elseif($get["poi"] == "basilique"){
//     //je prépare ma requete sql pour aller chercher les ifnso de ce poi
// }
// elseif($get["poi"] == "palaisRoyal"){
//     //je prépare ma requete sql pour aller chercher les ifnso de ce poi
// }elseif($get["poi"] == "parcRoyal"){
//     //je prépare ma requete sql pour aller chercher les ifnso de ce poi
// }elseif($get["poi"] == "palaisJustice"){
//     //je prépare ma requete sql pour aller chercher les ifnso de ce poi
// }elseif($get["poi"] == "bourse"){
//     //je prépare ma requete sql pour aller chercher les ifnso de ce poi
// }elseif($get["poi"] == "grandPlace"){
//     //je prépare ma requete sql pour aller chercher les ifnso de ce poi
// }elseif($get["poi"] == "mannequepis"){
//     //je prépare ma requete sql pour aller chercher les ifnso de ce poi
// }elseif($get["poi"] == "cinquentenaire"){
//     //je prépare ma requete sql pour aller chercher les ifnso de ce poi
// }elseif($get["poi"] == "tourJaponaise"){
//     //je prépare ma requete sql pour aller chercher les ifnso de ce poi
// }elseif($get["poi"] == "afrique"){
//     //je prépare ma requete sql pour aller chercher les ifnso de ce poi
// }elseif($get["poi"] == "montDesArts"){
//     //je prépare ma requete sql pour aller chercher les ifnso de ce poi
// }
// else{

// }


include "./src/views/carteSlide.php";
?>

<?php


// connexion db
include "./src/db/db.php";

$isFound = false;



$query= "
SELECT  * FROM poi;
";
$lecturePoi= $mysqlClient->prepare($query);

$lecturePoi->execute();

$listePoi = $lecturePoi->fetchAll();

foreach ($listePoi as $Poi) {
// echo  $Poi['id']. $Poi['title'].$Poi['description'].$Poi['URL_maps'].$Poi['Images_URL'];


}

if($get["poi"] == "atomium"){
    //je prépare ma requete sql pour aller chercher les ifnso de ce poi
}
elseif($get["poi"] == "basilique"){
    //je prépare ma requete sql pour aller chercher les ifnso de ce poi
}
elseif($get["poi"] == "palaisRoyal"){
    //je prépare ma requete sql pour aller chercher les ifnso de ce poi
}elseif($get["poi"] == "parcRoyal"){
    //je prépare ma requete sql pour aller chercher les ifnso de ce poi
}elseif($get["poi"] == "palaisJustice"){
    //je prépare ma requete sql pour aller chercher les ifnso de ce poi
}elseif($get["poi"] == "bourse"){
    //je prépare ma requete sql pour aller chercher les ifnso de ce poi
}elseif($get["poi"] == "grandPlace"){
    //je prépare ma requete sql pour aller chercher les ifnso de ce poi
}elseif($get["poi"] == "mannequepis"){
    //je prépare ma requete sql pour aller chercher les ifnso de ce poi
}elseif($get["poi"] == "cinquentenaire"){
    //je prépare ma requete sql pour aller chercher les ifnso de ce poi
}elseif($get["poi"] == "tourJaponaise"){
    //je prépare ma requete sql pour aller chercher les ifnso de ce poi
}elseif($get["poi"] == "afrique"){
    //je prépare ma requete sql pour aller chercher les ifnso de ce poi
}elseif($get["poi"] == "montDesArts"){
    //je prépare ma requete sql pour aller chercher les ifnso de ce poi
}
else{

}


include "./src/views/carteSlide.php";
?>

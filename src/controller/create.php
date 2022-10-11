<?php
include "./src/db/db.php";

if(isset($_POST['envoyer']))

{
    $nom = $_POST['name'];
    $mail =$_POST['email'];
    $pwd =$_POST['password'];
    $confpwd =$_POST['confirmPwd'];

    //Requete d'insersion dans la DB//

    // $sql = ("INSERT INTO `user`( `name`, `mail`, `password`, `confirmPassword`) VALUES (:nom, :mail, :pwd, :confpwd)");

    $sql = "INSERT INTO `user` ( `name`, `email`, `password`, `confirmPassword`)
    VALUES( '$nom','$mail','$pwd','$confpwd')";

$stmt = $mysqlClient-> prepare($sql);
$stmt->execute();

header('location:http://localhost/WIB_CODAGE?page=login');

}





include "./src/views/createAccount.php";
?>

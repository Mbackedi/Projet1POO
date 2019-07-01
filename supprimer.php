<?php  require_once 'Autoloader.php';
     Autoloader::register(); ?><?php 
   $id="";
 if(!empty($_GET['id_etudiant'])){
     $id=$_GET['id_etudiant'];
 }
 $type= new Etudiant_Service();
 $type->delete($id);
 header("location:list_Etu.php");
?>
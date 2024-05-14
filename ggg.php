<?php
include "db.php";
  $for_brand = filter_var(trim($_POST["for_brand"]),FILTER_SANITIZE_STRING);
  $for_model = filter_var($_POST["for_model"],FILTER_SANITIZE_STRING);
  $for_year = filter_var($_POST["for_year"],FILTER_SANITIZE_STRING);
  $for_transmission = filter_var($_POST["for_transmission"],FILTER_SANITIZE_STRING);
  $for_kuzov = filter_var($_POST["for_kuzov"],FILTER_SANITIZE_STRING);
  $for_obyem = filter_var($_POST["for_obyem"],FILTER_SANITIZE_STRING);
  $for_rashod = filter_var($_POST["for_rashod"],FILTER_SANITIZE_STRING);
  $for_privod = filter_var($_POST["for_privod"],FILTER_SANITIZE_STRING);
  $for_mesta = filter_var($_POST["for_mesta"],FILTER_SANITIZE_STRING);
  $for_mosh = filter_var($_POST["for_mosh"],FILTER_SANITIZE_STRING);
  $for_typeen = filter_var($_POST["for_typeen"],FILTER_SANITIZE_STRING);
  $for_newprice = filter_var($_POST["for_newprice"],FILTER_SANITIZE_STRING);
  $for_oldprice = filter_var($_POST["for_oldprice"],FILTER_SANITIZE_STRING);
  $for_strana = filter_var($_POST["for_strana"],FILTER_SANITIZE_STRING);
  $for_newimg = filter_var($_POST["for_newimg"],FILTER_SANITIZE_STRING);
  $for_oldimg = filter_var($_POST["for_oldimg"],FILTER_SANITIZE_STRING);
  $for_lkpimg = filter_var($_POST["for_lkpimg"],FILTER_SANITIZE_STRING);
  $for_youtube = filter_var($_POST["for_youtube"],FILTER_SANITIZE_STRING);
  $for_rul = filter_var($_POST["for_rul"],FILTER_SANITIZE_STRING);

  $mysql = new mysqli("site", "root", "", "carfinder");
  $mysql->query("INSERT INTO `car` (brand,model,year_car,transmission,bodytype,size_engine,fuel_consumption,drive,number_of_seats,engine_power,type_engine,pricebefore,priceafter,country,newcar,oldcar,thicknesscar,video,wheel)
   VALUES ('$for_brand','$for_model','$for_year','$for_transmission','$for_kuzov','$for_obyem','$for_rashod','$for_privod','$for_mesta','$for_mosh','$for_typeen','$for_newprice','$for_oldprice','$for_strana','$for_newimg','$for_oldimg','$for_lkpimg','$for_youtube','$for_rul')");
 
    exit();
?>
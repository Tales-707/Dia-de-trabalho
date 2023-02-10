<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
   <h1>home</h1>
   <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="index.php?page=contato">Contato</a></li>
      <li><a href="index.php?page=media">Media</a></li>
      <li><a href="index.php?page=parouimpar">Par ou impar</a></li>
      <li><a href="index.php?page=bancos">Bancos</a></li>
      <li><a href="index.php?page=trabalho">Dia de Trabalho</a></li>
   </ul>
   <?php

   ?>
   
   <div>
      <p>
         // ROTAS
         <?php 
         include_once "funcoes.php";

         if(isset($_GET["page"]) && !empty($_GET["page"])){
            $page= $_GET["page"];
            if($page=="contato"){
               include_once "contato.php";
            }else if($page == "media"){
               include_once "media.php";
            }else if($page == "parouimpar"){
               include_once "parouimpar.php";
            }else if( $page == "bancos" ){
               include_once "bancos.php";
            }else if($page == "trabalho"){
               include_once "trabalho.php";
            }
         }
         
         
         ?>
      </p>
   </div>
</body>
</html>

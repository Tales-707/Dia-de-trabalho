<?php
depositar(10);
saque(11);
?>

<?php
  if(isset($_POST['nome']) || !empty(['nome'])){
   $nome = $_POST['nome'];
   
   if(empty($nome)){
      echo "digite seu nome";

   }else{
      if(isset($_POST['anoNascimento'])){
         $anoNascimento = $_POST['anoNascimento'];

         if(empty($anoNascimento)){
            echo "digite Seu ano de nascimento";
         }else{
            if(isset($_POST['diaSemana'])){
               $diaSemana = $_POST['diaSemana'];
              
               if(empty($diaSemana)){
                  echo "escolha um dia semana";
               }else{
                  diaDeTrbalho($nome,$anoNascimento,$diaSemana);
               }
            }
         }
      }
   }
}

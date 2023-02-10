<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>

<body>
   <form method="post" name="Trabalho" action="">
      <div>
         <h3>Nome</h3>
         <input name="nome" id="nome" type="text">
      </div>
      <div>
         <h3>Ano de nascimento</h3>

         <input name="anoNascimento" id="nome" type="text">
      </div>
      <div>
         <h1>Dia da Semana</h1>
         <select name="diaSemana" id="nome" name="" id="">
            <option value="Segunda">Segunda</option>
            <option value="Terca">Terça</option>
            <option value="Quarta">Quarta</option>
            <option value="Quinta">Quinta</option>
            <option value="Sexta">Sexta</option>
            <option value="Sabado">Sabado</option>
            <option value="Domingo">Domigo</option>
         </select>
      </div>
      <button type="submit" name="buttonTrabaho">Enviar</button> </button>
   </form>

   <?php
   if (isset($_POST['nome']) && !empty($_POST['nome'])) {
      $nome = $_POST['nome'];


      if (isset($_POST['anoNascimento']) && !empty($_POST['anoNascimento'])) {
         $anoNascimento = $_POST['anoNascimento'];


         if (isset($_POST['diaSemana']) && !empty($_POST['diaSemana'])) {
            $diaSemana = $_POST['diaSemana'];
         } else {
            echo "escolha o dia da semana";
         }
         
      } else {
         echo "digite Seu Ano de nascimento";
      }
   } else {
      $nome = '';
      $anoNascimento = '';
      $diaSemana = '';
      echo "Digite Seu nome";
   }
   diaDeTrbalho($nome, $anoNascimento, $diaSemana);


   ?>
</body>

</html>
<?php
date_default_timezone_set("America/sao_paulo");

function diaNome($Nome, $pagina){
   echo "Bom dia" . $Nome . "<br>" . "voce esta em $pagina<br>";
}

function Media($n1, $n2, $n3, $n4){
   $media = ($n1 + $n2 + $n3 + $n4) / 4;
   echo "media: " . $media;
}


function ParImpar($numero){

   $calculo = $numero % 2;

   if ($calculo > 0) {
      echo "impar";
   } else {
      echo "par";
   }
}

function depositar($valor){
   global $saldo;
   static $totalDeposito;
   $totalDeposito++;
   $saldo += $valor;
   echo "foram feitos " . $totalDeposito . " Depositos valor " . $saldo . "<br>";
}

function saque($saque){
   global $saldo;
   static $totalSaque;
   $totalSaque++;
   $saldo -= $saque;
   echo "foram feitos " . $totalSaque . " saques valor: " . $saldo;
   if ($saldo < 0) {
      echo "<br><h1>ta deveno</h1>";
   }
}

// function diaDeTrbalho($numero, $nome, $AnodeNascimento){
//    $calculoIdade = date('Y') - $AnodeNascimento;

//    if ($numero == 1) {
//       echo "<h3>$nome tem $calculoIdade e Voce não trabalha no segunda</h3>";
//    } else if ($numero == 2) {
//       echo "<h3>$nome tem $calculoIdade e Voce não trabalha no terca</h3>";
//    } else if ($numero == 3) {
//       echo "<h3>$nome tem $calculoIdade e Voce não trabalha no quarta</h3>";
//    } else if ($numero == 4) {
//       echo "<h3>$nome tem $calculoIdade e Voce não trabalha no quinta</h3>";
//    } else if ($numero == 5) {
//       echo "<h3>$nome tem $calculoIdade e Voce não trabalha no sexta</h3>";
//    } else if ($numero == 6) {
//       echo "<h3>$nome tem $calculoIdade e Voce não trabalha no sabado</h3>";
//    } else if ($numero == 7) {
//       echo "<h3>$nome tem $calculoIdade e Voce não trabalha no domingo</h3>";
//    } else if (empty($numero)) {
//       echo "<h3>$nome tem $calculoIdade e Digite o numero</h3>";
//    }
// }

function diaDeTrbalho($nome='',$AnodeNascimento='',$dia=''){
   if(empty($calculo)){
      $calculo=0;
     }
   $calculoIdade = date('Y') - (int)$AnodeNascimento;

   switch ($dia) {
      case 'Segunda':
         echo "<h3>$nome tem anos $calculoIdade e Voce trabalha no segunda</h3>";
         break;

      case 'Terca':
         echo "<h3>$nome tem anos $calculoIdade e Voce trabalha no terca</h3>";
         break;

      case 'Quarta':
         echo "<h3>$nome tem anos $calculoIdade e Voce  trabalha no quarta</h3>";
         break;

         
      case 'Quinta':
         echo "<h3>$nome tem anos $calculoIdade e Voce trabalha no quinta</h3>";
         break;


      case 'Sexta':
         echo "<h3>$nome tem anos $calculoIdade e Voce trabalha no sexta</h3>";
         break;

      case 'Sabado':
         echo "<h3>$nome tem anos $calculoIdade e Voce trabalha no sabado</h3>";
         break;

      case 'Domingo':
         echo "<h3>$nome tem anos $calculoIdade e Voce trabalha no domingo</h3>";
         break;

      case empty($numero):
         echo "<h3>tu nao escolheu nada</h3>";
         break;
   }
}


function DataAtual()
{

   $data = date('d-m-Y');
   echo "<br>" . $data;
}
function dataHora()
{
   $hora = date('H:i');
   echo "<br>" . $hora;
}

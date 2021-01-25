<?php

$categorias = [];
$categorias[] = 'infantil';
$categorias[]= 'adolescente';
$categorias[] = 'adulto';
print_r($categorias);

$nome = 'Fallen';
$idade = 8;

//var_dump($nome, $idade);

//if ($idade >= 6 and $idade <= 12){
 //   echo $nome. ' infantil';
//}elseif($idade >= 13 and $idade <= 18){
   // echo 'adolescente';
//}else{
  //  echo 'adulto';
//}

if ($idade >= 6 and $idade <= 12){
       for($i = 0; $i <= count($categorias); $i++){
           if($categorias[$i] == 'infantil')
             echo "O nadador " .$nome. " compete na categoria ".$categorias[$i];
       }
   }elseif($idade >= 13 and $idade <= 18){
    for($i = 0; $i <= count($categorias); $i++){
        if($categorias[$i] == 'adolescente')
          echo "O nadador " .$nome. " compete na categoria adolescente";
    }
   }else{
    for($i = 0; $i <= count($categorias); $i++){
        if($categorias[$i] == 'adulto')
          echo "O nadador " .$nome. " compete na categoria adulto";
    }
   }
  
?>
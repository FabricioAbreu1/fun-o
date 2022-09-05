<?php
//feito (em aula)
$itens = [20, 15, 30, 17, 8 ];

echo "<pre>";
print_r($itens);
echo "</pre>";

array_push($itens,"10");
array_push($itens,"8");
array_push($itens,"2");

echo "soma(a) = ".array_sum($itens)."\n";




for ($i=0;$i<11;$i++){

echo "<pre>";
echo "144 * $i = ".(144*$i);
echo "<pre>";
}


for ($i=251;$i<545;$i++){

    if($i % 2 == 0){
        echo $i." é par <br>";
    }
   
}

function Porcentagem($porc,$num){
return ($num/100)*$porc;
}
echo "<br> 20% de 100 é ". Porcentagem(20,100). "<br>"; 

//não feito (correção)

//-)Exiba na tela a quantidade de pares, impares, negativos e positivos do array do exercício 1

//-)Calcule a média do array do exercício 1


?>
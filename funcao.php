<?php
function quebralinha(){

    echo "<br>";
}
function imprimirtexto($texto){
    

    echo $texto;
    quebralinha();
}

function adicao($numero1, $numero2){

    return $numero1 + $numero2;
}
function media($numero1, $numero2){

   return adicao($numero1,$numero2)/2;
}
function subtracao($numero1, $numero2){

    return $numero1 - $numero2;
}
function multiplicacao($numero1, $numero2){

    return $numero1 * $numero2;
}

function divisao($numero1, $numero2){

    return $numero1 / $numero2;
}
function resto($numero1, $numero2){

    return $numero1 % $numero2;
}


imprimirtexto(adicao (10,12));
imprimirtexto("Média 8 e 7=".media(8,7));
imprimirtexto("Subtração 12 e 10=".subtracao (12,10));
imprimirtexto("Multiplicação 12 e 10=".multiplicacao(12,10));
imprimirtexto("Divisão 12 e 10=".divisao(12,10));
imprimirtexto("Resto 3 e 2=".resto(3,2));

//imprimirtexto("Minha chamada da função");
//imprimirtexto("2º");
//imprimirtexto("terceira");
//imprimirtexto("quarta vez que eu chamo");
//imprimirtexto("ultima chamada");






?>
<?php
//while
/*
Estrutura

mostrar
tabuada completa do 5
numeros(mostrar)
while(tabuada completa do 5) {
processo  quando for verdadeiro
contador ++ ou contador --

}
*/




$contador=1;
while($contador<=10){
    $resultado=5*$contador;
    echo "5 X $contador = $resultado<br>";
    $contador++;
}
?>
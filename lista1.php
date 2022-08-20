<?php
function calcula_area($raio){
    $pi = 3.14;
    $area = 2*$pi*$raio;
    return $area;
}
function idade_segundos($idade){
    $segundos = $idade*365*24*60*60;
    return $segundos;
}
function main(){
    echo "Exercício 1\n";
    $raio = (float) readline("Digite o tamanho do raio: ");
    $area = calcula_area($raio);
    echo "A área do circulo é " . $area . ". \n";
    echo "Exercício 2\n";
    $idade = (int) readline("Escreva a idade que deve ser transformada em segundos: ");
    $idade_seg = idade_segundos($idade);
    echo "A idade " . $idade . " em segundos é " . $idade_seg . ". \n";
}
main()
?>
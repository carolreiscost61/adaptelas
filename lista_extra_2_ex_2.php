<?php

function Conv_Bin($n1, $n2){
    $bin1 = decbin($n1);
    $bin2 = decbin($n2);
    echo $bin1 . "\n" . $bin2 . "\n";
    $bin3 = $bin2 + $bin1;
    $bin3 = bindec($bin3);
    echo $bin3 . "\n";
    return $bin3;
}

function main(){
    $numero = null;
    $numero1 = null;
    $numero2 = null;

    $numero = readline("Digite os números: ");
    $numero = explode(' ',$numero);

    $numero1 = (int)$numero[0];
    $numero2 = (int)$numero[1];

    $num3 = Conv_Bin($numero1, $numero2);
    echo $num3;

}
main()
?>
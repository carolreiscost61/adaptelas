<?php
function maioridade($id){
    if($id<18){
        echo "Possui menos que 18 anos";
    }else{
        echo "Possui 18 anos ou mais.";
    }
}
function divide($a, $b){
    if($b==0){
        echo "Impossível dividir por 0.";
    }else{
        $c = $a/$b;
        echo "A divisão de " . $a . 
        " por " . $b . " é " . $c;
    }
}
function Pares($a){
    if($a<0){
        echo "Erro.";
    }else{
        for($i=0; $i<=$a; $i++){
            if($i%2 == 0){
                echo $i . " ";
            }
        }
    }
}
function Pares2($a){
    if($a<0){
        $a = 0 - $a;
    }for($i=0; $i<=$a; $i++){
        if($i%2 == 0){
            echo $i . " ";
            }
    }
}
function main(){
    echo "Exercício 1\n";
    $id = (int) readline("Digite a idade: ");
    maioridade($id);
    echo "\nExercício 2\n";
    $a = (int) readline("Digite o numerador: ");
    $b =  (int) readline("Digite o denominador: ");
    divide($a, $b);
    echo "\nExercício 1_Extra\n";
    $num = (int) readline("Digite um numero: ");
    Pares($num);
    echo "\nExercício 2_Extra\n";
    $num2 = (int) readline("Digite um numero: ");
    Pares2($num2);

}
main()
?>
<?php

function GeraSenha($tam, $mi, $ma, $nu, $caracteres){
    $min = "abcdefghijklmnopqrstuvwxyz";
    $mai = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $num = "1234567890";
    $caract = "!@#$%&*(){}[]-+=_\/,.;|?";
    $senha = "";
    if($ma){
        $senha .= str_shuffle($mai);
    }
    if($mi){
        $senha .= str_shuffle($min);
    }
    if($nu){
        $senha .= str_shuffle($num);
    }
    if($caracteres){
        $senha .= str_shuffle($caract);
    }
    return substr(str_shuffle($senha), 0, $tam);
}

function ma(){
    $maiuscula = (string) readline("\nSua senha deve terá letras maiúsculas(Y/N): ");
    if ($maiuscula == "Y" or $maiuscula == "y"){
        return true;
    }else{
        return false;
    }
}
function mi(){
    $minuscula = (string) readline("\nSua senha deve terá letras minúsculas(Y/N): ");
    if ($minuscula == "Y" or $minuscula == "y"){
        return true;
    }else{
        return false;
    }
}
function num(){
    $numero = (string) readline("\nSua senha deve terá letras números(Y/N): ");
    if ($numero == "Y" or $numero == "y"){
        return true;
    }else{
        return false;
    }
}
function caracteres(){
    $caracteres = (string) readline("\nSua senha deve terá letras caracteres especiais(Y/N): ");
    if ($caracteres == "Y" or $caracteres == "y"){
        return true;
    }else{
        return false;
    }
}

function Avaliador($tam, $senha,){
    if ($tam<6){
        echo "A senha " . $senha . " não possui caracteres suficientes.";
    }

}

function main(){
    $tam = (int) readline("Digite a quantidade de caracteres da sua senha: ");
    $ma = ma();
    $mi = mi();
    $num = num();
    $caract = caracteres();
    $senha = GeraSenha($tam,$mi,$ma,$num,$caract);
    echo "Senha: " . $senha . "\n";
    Avaliador($tam, $senha);


}
main();

?>
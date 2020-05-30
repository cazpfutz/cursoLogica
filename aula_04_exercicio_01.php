<?php

$amarelo = true;
$vermelho = true;
$azul = true;

$mensagem = "Sua cor secundária é ";
$corSecundaria = "";

if($vermelho == true && $azul == true && $amarelo == false){
    $corSecundaria = "Roxo";
}

if($amarelo == true && $azul == true && $vermelho == false){
    $corSecundaria = "Verde";
} 

if($vermelho == true && $amarelo == true && $azul == false){
    $corSecundaria = "Laranja";
} 

$mensagem = "{$mensagem} {$corSecundaria}";

if(($vermelho == true && $amarelo == true && $azul == true) || ($vermelho == false && $amarelo == false && $azul == false)){
    $mensagem = "Erro";
}

echo $mensagem;
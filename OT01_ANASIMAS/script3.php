<?php
/* Construa um programa que calcule a média de três notas e indique se o aluno foi
aprovado ou reprovado (nota mínima para aprovação: 7). */

$nota1 = readline('Nota 1: ');
$nota2 = readline('Nota 2: ');
$nota3 = readline('Nota 3: ');

$media = ($nota1 + $nota2 + $nota3)/3;

if($media > 7 && $media <= 10){
    echo "Aprovado! Nota final $media";
} else if($media <= 6 && $media >= 0) {
    echo "Reprovado! Nota final $media";
} else {
    echo "Revise as entradas de dados Nota final $media";
}
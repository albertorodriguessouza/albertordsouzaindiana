<?php

/*
7- Termine o script abaixo, exibindo o nome do mês correspondente à variável $numMes e caso o
valor de $numMes esteja fora do intervalo entre 1 e 12, exibir a mensagem “Mês inválido”
*/
$numMes = 13;


switch ($numMes) {
    case 1:
        $result = 'JANEIRO';
        break;
    case 2:
        $result = 'FEVEREIRO';
        break;
    case 3:
        $result = 'MARÇO';
        break;
    case 4:
        $result = 'ABRIL';
        break;
    case 5:
        $result = 'MAIO';
        break;
    case 6:
        $result = 'JUNHO';
        break;
    case 7:
        $result = 'JULHO';
        break;
    case 8:
        $result = 'AGOSTO';
        break;
    case 9:
        $result = 'SETEMBRO';
        break;
    case 10:
        $result = 'OUTUBRO';
        break;
    case 11:
        $result = 'NOVEMBRO';
        break;
    case 12:
        $result = 'DEZEMBRO';
        break;
    default:
        $result = 'Mês inválido';
}
echo $result;

<?php
/*
3- Termine o script abaixo. A variável $preco contém o valor da venda. Acrescente 12% ao
preço do produto, divida em 10 parcelas e mostre na tela o valor de cada parcela e o valor total
da compra.
*/

$preco = 320;
$porcentagem = 12;
$parcelas = 10;  

$v_acrescentado=($preco * $porcentagem)/ 100; 

echo 'Valor acrescentado '. $v_acrescentado .'% <br/>';

$valor_acres = (($preco * $porcentagem)/100) + $preco;

echo 'Valor total Compra ' . $valor_acres .'<br/>';

$Prod_div = $valor_acres / $parcelas;

echo 'valor das parcelas Dividido em' . $parcelas . 'X ficara de ' . $Prod_div;
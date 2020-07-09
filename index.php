<?php

$categorias = ['infantil', 'adolescentes', 'adulto'];

//print_r($categorias);


$nome = 'Reinaldo';
$idade = 13;

//var_dump($nome);
//var_dump($idade);

if ($idade >= 6 && $idade <=12) {
	echo "O nadador " , $nome, " compete na categoria infantil";
	# code...
}elseif ($idade >= 13 && $idade <=18) {	
	# code...
	echo "O nadador ", $nome, " compete na categoria adolescentes";
}else{

	echo "O nadador ", $nome, " compete na categoria adulto";
}
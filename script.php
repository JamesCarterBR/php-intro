<?php

$categorias = ['infantil', 'adolescentes', 'adulto'];

//print_r($categorias);


$nome = $_POST['nome'];
$idade = $_POST['idade'];

//var_dump($nome);
//var_dump($idade);

//Validando os dados do formulário da campo nome
if (empty($nome)) {
	echo "O nome não pode ser vazio";
	return;	# code...
}

if (strlen($nome) < 3) {
	echo "O nome deve conter mais de 3 caracteres";
	return;
	# code...
}
if (strlen($nome) > 40) {
	# code...
	echo "O nome é muito extenso";
	return;
}

//Validando os dados do formulário da campo idade
if (empty($idade)) {
	echo "O nome não pode ser vazio";
	return;	# code...
}

if (!is_numeric($idade)) {
	# code...
	echo "Informe um número para o campo idade";
	return;

}
//Verifica se o nadados possui a faixa etária para participar do torneio

if ($idade >= 6 && $idade <=12) {
	echo "O nadador " , $nome, " se inscreveu na categoria infantil";
	# code...
}elseif ($idade >= 13 && $idade <=18) {	
	# code...
	echo "O nadador ", $nome, " se inscreveu na categoria adolescentes";
}elseif ($idade > 18) {
	echo "O nadador ", $nome, " se inscreveu na categoria adulto";	# code...
}else{
	echo "O nadador ", $nome, " não pode competir, pois não possui a faixa etária mínima de 6 anos.";
}
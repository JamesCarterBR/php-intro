<?php

session_start();

$categorias = ['infantil', 'adolescentes', 'adulto'];

//print_r($categorias);


$nome = $_POST['nome'];
$idade = $_POST['idade'];

//var_dump($nome);
//var_dump($idade);

//Validando os dados do formulário do campo Seu nome e Sua idade estam vazios
if (empty($nome) && empty($idade)) {
	$_SESSION['mensagem-de-erro'] = 'Preencha os campos';
	header('location: index.php');
	//echo "O nome não pode ser vazio";
	return;	# code...
}

//Validando os dados do formulário do campo Seu nome
else if (empty($nome)) {
	
	$_SESSION['mensagem-de-erro'] = 'O campo Seu nome não pode ser vazio';
	header('location: index.php');
	return;
	//header{string:'location: index.php'};
	//echo "O nome não pode ser vazio";
		# code...
}

else if (strlen($nome) < 3) {
	//echo "O nome deve conter mais de 3 caracteres";
	$_SESSION['mensagem-de-erro'] = 'O campo Seu nome deve conter mais de 3 caracteres';
	header('location: index.php');
	return;
	# code...
}
else if (strlen($nome) > 40) {
	# code...
	//echo "O nome é muito extenso";
	$_SESSION['mensagem-de-erro'] = 'O nome é muito extenso';
	header('location: index.php');
	return;
}

//Validando os dados do formulário do campo Sua idade
else if (empty($idade)) {
	$_SESSION['mensagem-de-erro'] = 'O campo Sua numero não pode ser vazio';
	header('location: index.php');
	//echo "O nome não pode ser vazio";
	return;	# code...
}

else if (!is_numeric($idade)) {
	# code...
	$_SESSION['mensagem-de-erro'] = 'Informe um número para o campo Sua idade';
	header('location: index.php');
	//echo "Informe um número para o campo idade";
	return;

}

//Verifica se o nadadores possuem  faixa etária para participar do torneio

if ($idade >= 6 && $idade <=12) {
	
	$_SESSION['mensagem-de-sucesso'] = "O nadador $nome se inscreveu na categoria infantil";
	header('location: index.php');
	return;
	# code...
}elseif ($idade >= 13 && $idade <=18) {	
	# code...
	$_SESSION['mensagem-de-sucesso'] = "O nadador $nome se inscreveu na categoria adolescentes";
	header('location: index.php'); 
}elseif ($idade > 18) {
	$_SESSION['mensagem-de-sucesso'] = "O nadador $nome se inscreveu na categoria adulto";	
	header('location: index.php');
	return;
	# code...
}else{
	$_SESSION['mensagem-de-sucesso'] = "O nadador $nome não pode competir, pois não possui a faixa etária mínima de 6 anos.";
	header('location: index.php');
	return;
}
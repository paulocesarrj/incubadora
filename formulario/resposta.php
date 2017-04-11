<?php
echo 'Nome: '.$_POST['nome'];
echo '<br/>';

echo 'Idade: '.$_POST['idade'];
echo '<br/>';

echo 'Sexo: '.$_POST['sexo'];
echo '<br/>';

echo 'Cidade: '.$_POST['cidade'];
echo '<br/>';

if(isset($_POST['newsletter'])) {
	echo 'Newsletter: '.$_POST['newsletter'];
	echo '<br/>';
}

echo '<br/> Formulário respondido em: '.date('d/m/Y');
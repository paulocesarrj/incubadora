<?php
$servidor = 'localhost';
$usuario  = 'root';
$senha    = '';
$banco    = 'monitoria';

// Conecta-se ao banco de dados MySQL
$mysqli = new mysqli($servidor, $usuario, $senha, $banco);
// Caso algo tenha dado errado, exibe uma mensagem de erro
if (mysqli_connect_errno()) trigger_error(mysqli_connect_error());

// Executa uma consulta que pega cinco notícias

$sql = "SELECT id, titulo FROM noticias"; // LIMIT 5
$query = $mysqli->query($sql);
echo 'Registros encontrados: ' . $query->num_rows.'<hr/>';

if($query->num_rows > 0) {

// echo '<pre>';
// var_dump($query);

	while ( $dados = mysqli_fetch_array($query) ) {
	  echo 'ID: ' . $dados['id'] . '<br/>';
	  echo 'Título: ' . $dados['titulo'] . '<hr/>';
	}

}


//CREATE TABLE `monitoria`.`noticias` ( `id` INT(11) NOT NULL AUTO_INCREMENT , `titulo` VARCHAR(100) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB COMMENT = 'Tabela de noticias';
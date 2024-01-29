<?php
// Conectar ao banco de dados (substitua com suas credenciais)
$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "cadastro";

$mysqli = new mysqli($host, $usuario, $senha, $banco);

// Verificar a conexão
if ($mysqli->connect_error) {
    die("Erro na conexão: " . $mysqli->connect_error);
}

// Capturar os dados do formulário
$nome = $_POST['Nome'];
$sobrenome = $_POST['Sobrenome'];
$email = $_POST['Email'];
$senha = $_POST['Senha'];

// Inserir os dados no banco de dados
$sqli = "INSERT INTO cad_clientes(Nome, Sobrenome, Email ,Senha) VALUES ('$nome', '$sobrenome', '$email', '$senha')";

if ($mysqli->query($sqli) === TRUE) {
    echo "Dados inseridos com sucesso!";
} else {
    echo "Erro ao inserir os dados: " . $mysqli->error;
}
// Fechar conexão com o banco de dados
$mysqli->close();
?>
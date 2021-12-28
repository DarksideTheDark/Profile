<?php 
include_once ('config.php');

$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$telefone = $_POST['telefone'];
$sexo = $_POST['genero'];
$idade = $_POST['data_nasc'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$endereco = $_POST['endereco'];

$sqlUpdate = "UPDATE usuarios SET nome='$nome',senha='$senha',email='$email',telefone='$telefone',sexo='$sexo',idade='$idade',cidade='$cidade',estado='$estado',endereco='$endereco' WHERE id=$id";

if ($conn->query($sqlUpdate) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

header('Location: sis.php')
  
?>
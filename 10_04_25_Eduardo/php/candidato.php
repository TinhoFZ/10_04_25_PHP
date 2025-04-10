<?php

include("conexao.php");

$nome = $_POST['nome'];
$email = $_POST['email'];

$sql = "INSERT INTO candidato (nome, email) 
VALUES ('$nome', '$email')";
if (mysqli_query($conexao, $sql)) {
    echo "<script> location.href='dashboard.php'; </script>";
} else {
    echo "Erro". mysqli_connect_error($conexao);
}

mysqli_close($conexao);

?>
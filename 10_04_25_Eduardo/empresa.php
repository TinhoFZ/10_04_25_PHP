<?php

include("conexao.php");

$firma = $_POST['firma'];
$senha = $_POST['senha'];

$sql = "INSERT INTO empresa (firma, senha) 
VALUES ('$firma', '$senha')";
if (mysqli_query($conexao, $sql)) {
    echo "<script> location.href='dashboard.php'; </script>";
} else {
    echo "Erro". mysqli_connect_error($conexao);
}

mysqli_close($conexao);

?>  
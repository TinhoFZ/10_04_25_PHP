<title>atividade tabela</title>

<?php

include("conexao.php");

$sql = "SELECT * FROM candidato";

$result = mysqli_query($conexao, $sql);
?>

<h2>Lista de Candidatos</h2>

<table>
    <tr>
        <th>Nome</th>
        <th>Email</th>
    </tr>
    <?php while($row = mysqli_fetch_assoc($result)) { ?>
    <tr>
        <td><?php echo $row['nome']; ?></td>
        <td><?php echo $row['email']; ?></td>
    </tr>
    <?php } ?>
<table>

<?php

include("conexao.php");

$sql = "SELECT * FROM empresa";

$result = mysqli_query($conexao, $sql);
?>

<h2>Lista de Empresas</h2>

<table>
    <tr>
        <th>Nome</th>
        <th>Senha</th>
    </tr>
    <?php while($row = mysqli_fetch_assoc($result)) { ?>
    <tr>
        <td><?php echo $row['firma']; ?></td>
        <td><?php echo $row['senha']; ?></td>
    </tr>
    <?php } ?>
<table>
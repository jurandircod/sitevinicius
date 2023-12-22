<?php
include("../../config/config.php");


$nomeSetor = $_GET['nomeSetor'];
$nomeSecretaria = $_GET['secretaria'];

if (isset($nomeSetor)) {
    $sql = "INSERT INTO tbsetor(nome, codigoSecretaria) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('si', $nomeSetor, $nomeSecretaria);

    if ($stmt->execute()) {
        header("Location: /sitevinicius/index.php?page=cadsetor&sucessSetor=1");
    } else {
        echo "Erro ao registrar o usuário: " . $stmt->error;
    }
} else {
    header("Location: /sitevinicius/register.php?errorSetor=1");
}

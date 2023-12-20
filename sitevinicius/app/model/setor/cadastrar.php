<?php
include("../../config/config.php");


$nomeSetor = $_GET['nomeSetor'];

if (isset($nomeSetor)) {
    $sql = "INSERT INTO tbsetor(nome) VALUES (?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('s', $nomeSetor);

    if ($stmt->execute()) {
        header("Location: /sitevinicius/index.php?sucessSetor=1");
    } else {
        echo "Erro ao registrar o usuário: " . $stmt->error;
    }
} else {
    header("Location: /sitevinicius/register.php?errorSetor=1");
}

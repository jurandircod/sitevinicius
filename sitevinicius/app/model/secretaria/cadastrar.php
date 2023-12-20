<?php
include("../../config/config.php");

$nomeSecretaria = $_GET['nomeSecretaria'];

if (isset($nomeSecretaria)) {
    $sql = "INSERT INTO tbsecretaria (nome) VALUES (?)";
    $stmt = $conn->prepare($sql);

    // Verifica se a preparação da consulta foi bem-sucedida
    if ($stmt) {
        // Vincula o parâmetro utilizando bind_param
        $stmt->bind_param('s', $nomeSecretaria);

        if ($stmt->execute()) {
            header("Location: /sitevinicius/index.php?sucessSetor=1");
        } else {
            echo "Erro ao registrar o usuário: " . $stmt->error;
        }
        
        // Fecha a declaração preparada
        $stmt->close();
    } else {
        echo "Erro na preparação da consulta: " . $conn->error;
    }
} else {
    header("Location: /sitevinicius/register.php?errorSetor=1");
}

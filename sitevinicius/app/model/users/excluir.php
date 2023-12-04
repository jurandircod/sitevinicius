<?php

include( __DIR__. '/../../config/config.php');
if(isset($_GET['id'])){
    $idUser = $_GET['id'];

    

    $sql_query = "DELETE FROM tb_agendamentos WHERE id_usuario = $idUser";
    if($conn->query($sql_query)){
        echo"Registro excluído com sucesso";
    }else{
        echo"Erro ao excluir o registro!";
        echo"erro:" . $conn->error;
    }


    $sql_query = "DELETE FROM tb_usuarios WHERE id = $idUser";
    if ($conn->query($sql_query)) {
        echo "Registro excluído com sucesso.";
        header("Location: ../../../index.php?sucess=1");
    } else {
        echo "Erro ao excluir o registro.";
        echo "Erro: " . $conn->error; // Exibe informações sobre o erro, se houver
    }

} else {
    echo "ID não recebido.";
}

?>
<?php {
    include('../../config/config.php');
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    // verificar se todos os campos estão preenchidos
    if (empty($_POST["nome"]) || empty($_POST["email"]) || empty($_POST["setor"]) || empty($_POST["tel"]) || empty($_POST["senha"]) || empty($_POST["confirm"]) || !isset($_POST["sec"])) {
        echo "Todos os campos são obrigatório, preencha todos os campos para continuar";
    } else {

        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        $tel = $_POST['tel'];
        $secretaria = $_POST['sec'];
        $setor = $_POST['setor'];
        $confirmSenha = $_POST['confirm'];

        $hash_senha = password_hash($senha, PASSWORD_BCRYPT);

        // Verificar se o campo email já existe
        $sql = "SELECT * FROM tb_usuarios WHERE email = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows >= 1) {
            echo "Email já existente, selecione outro email.";
        } else {
            // Inserir o novo usuário com a senha criptografada
            $sql = "INSERT INTO tb_usuarios (nome, email, senha) VALUES (?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("sss", $nome, $email, $hash_senha);

            if ($stmt->execute()) {
                echo "<div class='modal-dialog modal-dialog-centered'>
                    Cadastro realizado com sucesso
                  </div>";
            } else {
                echo "Erro ao registrar o usuário: " . $stmt->error;
            }
        }
        
        $stmt->close();
        $conn->close();
    }

    
}

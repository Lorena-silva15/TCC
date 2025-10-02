 <?php
            require 'conexao.php';

            // Recebe os dados do formulário
            $nome = $_POST['nome'] ?? '';
            $sobrenome = $_POST['sobrenome'] ?? '';
            $datanascimento = $_POST['datanascimento'] ?? '';
            $email  = $_POST['email'] ?? '';
            $senha    = $_POST['senha'] ?? '';
            $estado = $_POST['estado'] ?? '';
            $cidade = $_POST['cidade'] ?? '';

            if ($nome && $sobrenome && $datanascimento && $email && $senha && $estado && $cidade) {
                $sql = "INSERT INTO usuarios (nome,sobrenome, datanascimento,email,senha,estado,cidade) 
                        VALUES (:nome ,:sobrenome,:datanascimento,:email,:senha,:estado,:cidade)";
                $stmt = $pdo->prepare($sql);

                $stmt->bindParam(':nome', $nome);
                $stmt->bindParam(':sobrenome', $sobrenome);
                $stmt->bindParam(':datanascimento', $datanascimento);
                $stmt->bindParam(':email', $email);
                $stmt->bindParam(':senha', $senha);
                $stmt->bindParam(':estado', $estado);
                $stmt->bindParam(':cidade', $cidade);
                

                if ($stmt->execute()) {
                    echo "<h1>Livro inserido com sucesso!</h1>";
                } else {
                    echo "<h1 style='color: var(--cor-vermelha);'>Erro ao inserir livro.</h1>";
                }
            } else {
                echo "<h1 style='color: var(--cor-vermelha);'>Preencha todos os campos.</h1>";
            }
    ?>
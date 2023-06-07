<?php
session_start(); // Iniciar a sessão no início do script
include ("conexao.php");

// Verifica a conexão
if ($conexao->connect_error) {
    die("Conexão falhou: " . $conexao->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pega os dados do formulário
    $nome = $_POST['fullname'];
    $login = $_POST['username'];
    $email = $_POST['email'];
    $telefone = $_POST['phone'];
    $senha = $_POST['password'];

    // Verifica se o usuário está se registrando ou fazendo login
    if (isset($_POST['isRegistering']) && $_POST['isRegistering'] == 'true') {
        // Verifica se todas as informações foram preenchidas
        if(empty($nome) || empty($login) || empty($email) || empty($telefone) || empty($senha)) {
            $_SESSION['error'] = "Todos os campos devem ser preenchidos.";
            header("Location: index.php");
            exit;
        }

        // Está se registrando, então insere um novo usuário no banco de dados
        $sql = "INSERT INTO usuario (nome, login, email, telefone, senha)
                VALUES ('$nome', '$login', '$email', '$telefone', '$senha')";
        if ($conexao->query($sql) === TRUE) {
            $_SESSION['message'] = "Usuário registrado com sucesso!";
            header("Location: index.php");
            exit;
        } else {
            $_SESSION['error'] = "Erro: " . $conexao->error;
            header("Location: index.php");
            exit;
        }
    } else {
        // Está fazendo login, então verifica se o usuário existe no banco de dados
        if(empty($login) || empty($senha)) {
            $_SESSION['error'] = "Usuário e senha não podem estar vazios.";
            header("Location: index.php");
            exit;
        }
        $sql = "SELECT * FROM usuario WHERE login='$login' AND senha='$senha'";
        $result = $conexao->query($sql);
        if ($result->num_rows > 0) {
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $login;
            $_SESSION['last_activity'] = time();
            header("Location: menu.php");
            exit;
        } else {
            $_SESSION['error'] = "Usuário ou senha incorretos.";
            header("Location: index.php");
            exit;
        }
    }
}

$conexao->close();
?>

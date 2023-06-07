<?php
session_start();
session_destroy(); // encerra a sessão do usuário
header("Location: index.php"); // redireciona para a página de login
exit;
?>
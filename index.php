<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="resource/css/index.css">
        <link rel="stylesheet" href="resource/css/cabecario.css">
        <link rel="shortcut icon" href="resource/img/fiveicon.png"/>
        <title>Login</title>
    </head>


    <header>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="resource/img/fiveicon" alt="Logo" width="150" class="d-inline-block align-text-top">
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse mt-4 mt-lg-0" id="navbarNavDropdown">
                    <ul class="navbar-nav ms-auto">
                    
                        <li class="nav-item"><a class="nav-link" href="menu-admin.php">Home</a></li>
                        
                        <li class="nav-item"><a class="nav-link" href="criar-laboratorio.php">Sobre Nós</a></li>

                        <li class="nav-item"><li class="nav-item"><a class="nav-link" href="criar-laboratorio.php">Dúvidas</a></li>
                        
                    </ul>
                </div>
            </div>
        </nav>


    </header>

    <body>

        <div class="login-container">
            
            <div class="form-container" id="form-container">
                
                <div class="form-section" id="login-form-section">
                    <h2>Inciar Sessão</h2>
                    <?php if(isset($_SESSION['error'])): ?>
                        <div class="alert alert-danger">
                            <?php 
                                echo $_SESSION['error']; 
                                unset($_SESSION['error']);
                            ?>
                        </div>
                    <?php endif; ?>

                    <?php if(isset($_SESSION['message'])): ?>
                        <div class="alert alert-success">
                            <?php 
                                echo $_SESSION['message']; 
                                unset($_SESSION['message']);
                            ?>
                        </div>
                    <?php endif; ?>

                    <form id="login-form" method="post" action="login.php">
                        <div class="input-group input-group-sm mb-3">
                            <input type="text" class="form-control" name="username" id="username" placeholder="Usuário">
                        </div>
                        
                        <div class="input-group input-group-sm mb-3">
                            <input type="password" class="form-control" name="password" id="password" placeholder="Senha">
                        </div>

                        <input type="text" class="form-control" name="fullname" id="fullname" placeholder="Nome Completo" style="display: none;">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Email" style="display: none;">
                        <input type="text" class="form-control" name="phone" id="phone" placeholder="Celular" style="display: none;">
                        <input type="hidden" name="isRegistering" id="isRegistering" value="false">
                        
                        <div class="d-grid gap-2 col-12 mx-auto">
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>

                        <div class="novo-user" style='display: flex; justify-content: center; gap: 50px;'>
                            <p><u><a href="#" id="login-toggle-btn">Novo Usuário? Registre-se</a></u></p>
                        </div>
                    </form>
                </div>

                <div class="form-section" id="register-form-section" style="display: none;">
                    <h2>Registrar-se</h2>
                    <?php if(isset($_SESSION['error'])): ?>
                        <div class="alert alert-danger">
                            <?php 
                                echo $_SESSION['error']; 
                                unset($_SESSION['error']);
                            ?>
                        </div>
                    <?php endif; ?>

                    <?php if(isset($_SESSION['message'])): ?>
                        <div class="alert alert-success">
                            <?php 
                                echo $_SESSION['message']; 
                                unset($_SESSION['message']);
                            ?>
                        </div>
                    <?php endif; ?>
                    <form id="login-form" method="post" action="newuser.php">
                        <div class="input-group input-group-sm mb-3">
                            <input type="text" class="form-control" name="username" id="username" placeholder="Usuário">
                        </div>
                        
                        <div class="input-group input-group-sm mb-3">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                        </div>

                        <div class="input-group input-group-sm mb-3">
                            <input type="password" class="form-control" name="password" id="password" placeholder="Senha">
                        </div>
                        
                        <div class="d-grid gap-2 col-12 mx-auto">
                            <button type="submit" class="btn btn-primary">Registrar-se</button>
                        </div>

                        <div class="novo-user" style='display: flex; justify-content: center; gap: 50px;'>
                            <p><u><a href="#" id="register-toggle-btn">Já Registrado? Entre</a></u></p>
                        </div>
                    </form>
                </div>
                
                <div class="image-container">
                    <img src="resource/img/login-page-4468581-3783954.webp" alt="">
                </div>
            </div>  
        </div>  
 
        <script>
            const loginFormSection = document.getElementById('login-form-section');
            const registerFormSection = document.getElementById('register-form-section');
            const loginToggleBtn = document.getElementById('login-toggle-btn');
            const registerToggleBtn = document.getElementById('register-toggle-btn');

            function toggleForms() {
                // Verifique se o formulário de login está sendo exibido
                if (loginFormSection.style.display !== 'none') {
                    // Se sim, oculte o formulário de login e exiba o formulário de registro
                    loginFormSection.style.display = 'none';
                    registerFormSection.style.display = 'block';
                } else {
                    // Se não, oculte o formulário de registro e exiba o formulário de login
                    registerFormSection.style.display = 'none';
                    loginFormSection.style.display = 'block';
                }
            }
            
            loginToggleBtn.addEventListener('click', function(e) {
                e.preventDefault();
                toggleForms();
            });

            registerToggleBtn.addEventListener('click', function(e) {
                e.preventDefault();
                toggleForms();
            });
        </script>

        <?php
            include("footer.php");
        ?>
        <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    </body>

</html>
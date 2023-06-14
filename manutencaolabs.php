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
        <link rel="stylesheet" href="resource/css/manutencaolabs.css">
        <link rel="stylesheet" href="resource/css/cabecario.css">
        <link rel="shortcut icon" href="resource/img/fiveicon.png"/>
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <title>Somos Dev's - Manutenção Laboratorios</title>
    </head>
    
    <body style="background-color:white;">

        <?php
            include("cabecario.php");
        ?>

        <main>
            <section id="title-section">
                <h2>Sistema De Manutenção - <span class="highlight">UNIFUNEC</span></h2>
            </section>

                <!-- Exibe a mensagem de erro de alteracao de senha-->
                <?php if(isset($_SESSION['error_message'])): ?>
                    <div class="alert alert-danger">
                        <?php 
                            echo $_SESSION['error_message']; 
                            unset($_SESSION['error_message']); 
                        ?>
                    </div>
                <?php endif; ?>

                <!-- Exibe a mensagem de sucesso de alteracao de senha -->
                <?php if(isset($_SESSION['success_message'])): ?>
                    <div class="alert alert-success">
                        <?php 
                            echo $_SESSION['success_message']; 
                            unset($_SESSION['success_message']); 
                        ?>
                    </div>
                <?php endif; ?>

            <div class="menu-section">
                
                <section id="description-section">
                    <a href="https://www.mediafire.com/file/j8wwn6bxe7qklrx/facebook_cover_photo_2.png/file" download>Baixe nosso aplicativo de desktop</a>

                    <h2>Descrição do Sistema</h2>
                    <p>O Sistema de Manutenção de Laboratórios da UNIFUNEC foi desenvolvido com o intuito de proporcionar uma solução abrangente para a gestão eficiente dos recursos dos laboratórios de informática. Com este sistema, os alunos têm a capacidade de comunicar quaisquer problemas ou falhas que encontrem nas estações de trabalho do laboratório. Essas informações são diretamente encaminhadas à equipe de TI, que pode agir de forma rápida e eficiente para resolver as questões levantadas.</p>

                    <p>Além disso, o sistema inclui um robusto conjunto de recursos para facilitar a gestão dos laboratórios. O sistema oferece um mecanismo de autenticação seguro, com recursos para solicitação de alteração de senha e confirmações de login por e-mail, garantindo que apenas usuários autorizados tenham acesso. Ele também possui um módulo de relatórios personalizados, permitindo uma visão detalhada das condições e uso dos laboratórios.</p>

                    <p>Outro destaque é o sistema de gerenciamento de permissões, que fornece controle granular sobre o acesso dos alunos aos recursos do laboratório. A equipe de TI pode adicionar novos computadores, componentes e laboratórios ao sistema, assim como gerenciar usuários, tanto alunos quanto administradores.</p>

                    <p>Portanto, o Sistema de Manutenção de Laboratórios da UNIFUNEC representa uma solução completa para a gestão e manutenção dos laboratórios de informática da instituição, garantindo a máxima eficiência e qualidade na experiência de ensino dos alunos.</p>            </section>
                </section>

                <section id="apresentacao-section">
                    <h2>Central De Manutenção</h2>
                    <img src="resource/img/manutencaolabs/menu-aluno.png" alt="Imagem 1">
                </section>

            </div>

            <div class="carrousel-container">
                <section id="features-section">
                    <h2 id="feature-title">Carregando...</h2>
                    <div class="carousel">
                        <img id="feature-image" src="caminho/para/imagem1.png" alt="Imagem do recurso">
                        <p id="feature-description">Carregando...</p>
                    </div>
                    <div class="carousel-controls">
                        <button id="prev-btn">Anterior</button>
                        <button id="next-btn">Próximo</button>
                    </div>
                </section>
            </div>
            
            <section id="contact-us-section">
                <div class="form-container">
                    <h2>Entre em Contato Conosco</h2>
                    <form action="enviar-email.php" method="POST">
                        <label for="name">Nome:</label>
                        <input type="text" id="name" name="name" required>
                        <label for="email">E-mail:</label>
                        <input type="email" id="email" name="email" required>
                        <label for="phone">Telefone:</label>
                        <input type="tel" id="phone" name="phone" required>
                        <input type="submit" value="Enviar" name="enviar">
                    </form>
                </div>
                <div class="info-container">
                    <h2>Por que escolher nosso sistema?</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed iaculis ligula ut lacinia ultricies. Integer semper arcu nec turpis euismod, vel dignissim risus dapibus.</p>
                    <img src="resource/img/Nova pasta/logo.png" alt="Imagem explicativa">
                </div>
            </section>

        </main> 

        <script>
            // Inicializando os recursos
            let features = [
                {image: 'resource/img/manutencaolabs/enviar-reclamacao.png', 
                    title: 'Enviar Reclamação', 
                    description: 'Sistema de envio de reclamação para o usuário ADMIN, para que ele possa realizar a manutenção.'
                },
                {image: 'resource/img/manutencaolabs/reclamacao-admin.png', 
                    title: 'Tela De Reclamação ADM', 
                    description: 'Tela onde o ADMIN pode vizualizar a informações da reclamação e pode realizar a manutenção e depois inserir uma descrição e concluir a manutenção.'
                },
                {image: 'resource/img/manutencaolabs/relatorio-manutencao.png', 
                    title: 'Relatórios Por Manutenção', 
                    description: 'Sistema de relatórios personalizados, este em específico gera relatórios por manutenções conluidas.'
                },
                {image: 'resource/img/manutencaolabs/alterar-user.png', 
                    title: 'Alteração De Usuario', 
                    description: 'Alteração de usuários, tanto alunos quanto administradores e solicitação de redefinição de senha.'
                },
                {image: 'resource/img/manutencaolabs/criar-lab', 
                    title: 'Adicionando e Removendo Itens Do Sistema', 
                    description: 'Gerenciamento de novos computadores, laboratórios e componentes de computadores.'
                }
            ];

            // Inicializando o índice do recurso atual
            let currentFeatureIndex = 0;

            // Obtendo os elementos da página
            let featureImage = document.getElementById('feature-image');
            let featureTitle = document.getElementById('feature-title');
            let featureDescription = document.getElementById('feature-description');

            // Função para atualizar a imagem e o texto do recurso
            function updateFeature() {
                featureImage.src = features[currentFeatureIndex].image;
                featureTitle.innerText = features[currentFeatureIndex].title;
                featureDescription.innerText = features[currentFeatureIndex].description;
            }

            // Atualizando o recurso inicial
            updateFeature();

            // Obtendo os botões de controle do carrossel
            let prevBtn = document.getElementById('prev-btn');
            let nextBtn = document.getElementById('next-btn');

            // Adicionando event listeners para os botões
            prevBtn.addEventListener('click', function() {
                currentFeatureIndex = (currentFeatureIndex - 1 + features.length) % features.length;
                updateFeature();
            });

            nextBtn.addEventListener('click', function() {
                currentFeatureIndex = (currentFeatureIndex + 1) % features.length;
                updateFeature();
            });
        </script>

        <script src="script.js"></script>

        <?php
            include("footer.php");
        ?>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

        <script>
            AOS.init();
        </script>
    </body>
</html>
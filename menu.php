<?php
// No início de cada arquivo de página (como menu.php), ou em um arquivo incluído em todas as páginas:
session_start();
$timeout = 1800; // Define o tempo de inatividade permitido em segundos (1800 segundos = 30 minutos)

if(isset($_SESSION['loggedin'])) {
    // Verifica se o tempo de inatividade foi excedido
    if($_SESSION['last_activity'] < time()-$timeout) {
        // Tempo de inatividade excedido, encerra a sessão
        session_unset();
        session_destroy();
        echo "Sua sessão expirou! Por favor, faça login novamente.";
        exit;
    } else {
        // Atualiza o carimbo de data/hora da última atividade
        $_SESSION['last_activity'] = time();
    }
} else {
    // Usuário não está logado, redireciona para a página de login
    header("Location: index.php");
    exit;
}
include("conexao.php");
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="resource/css/menu.css">
        <link rel="stylesheet" href="resource/css/cabecario.css">
        <link rel="shortcut icon" href="resource/img/fiveicon.png"/>
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <title>Somos Dev's</title>
    </head>
    
    <body style="background-color:#baebee6b;">

    <?php
        include("cabecario.php");
    ?>
  
    
    <main>

        <div class="menu">
            <div class="content">
                <h1>Somos Dev's</h1>
                <p>
                    Uma empresa de desenvolvimento de software altamente dedicada e experiente. Nosso objetivo é criar soluções web inovadoras, personalizadas e seguras que impulsionem o seu negócio. 
                    Com uma equipe de profissionais talentosos e apaixonados, desenvolvemos sistemas robustos e intuitivos para atender às suas necessidades de negócios. 
                    Em cada projeto que empreendemos, priorizamos a qualidade, a segurança e a satisfação do cliente. 
            </div>
        </div>

        <div class="card-container" data-aos="fade-up">
            <div class="card">
                <div class="icon">
                    <img src="resource/img/web-icon.png" alt="">
                </div>
                <div class="description">
                    <h3>Sistema Web</h3>
                    <p>Os sistemas web oferecem a vantagem de serem acessíveis de qualquer lugar e a qualquer hora. Isso proporciona uma flexibilidade sem precedentes para o seu negócio e garante que sua equipe sempre terá as ferramentas de que precisa.</p>
                </div>
            </div>
            
            <div class="card" data-aos="fade-up">
                <div class="icon">
                    <img src="resource/img/desktop-top.png" alt="">
                </div>
                <div class="description">
                    <h3>Sistema Desktop</h3>
                    <p>Os sistemas desktop são conhecidos por sua robustez e desempenho. Eles podem ser personalizados para as necessidades do seu negócio e geralmente oferecem mais poder e capacidade de processamento do que as alternativas baseadas na web.</p>
                </div>
            </div>

            <div class="card" data-aos="fade-up">
                <div class="icon">
                    <img src="resource/img/flexivel-icon.png" alt="">
                </div>
                <div class="description">
                    <h3>Flexibilidade</h3>
                    <p>Tanto os sistemas web quanto desktop oferecem seus próprios conjuntos de vantagens, e o melhor para o seu negócio pode depender de suas necessidades específicas. Com a Somos Dev's, você tem a flexibilidade para escolher a solução que melhor se adapta ao seu negócio.</p>
                </div>
            </div>

            <div class="card" data-aos="fade-up">
                <div class="icon">
                    <img src="resource/img/velocidade-icon.png" alt="Ícone de velocidade">
                </div>
                <div class="description">
                    <h3>Velocidade</h3>
                    <p>Aumente a eficiência e a velocidade das suas operações diárias. Nossos sistemas de software são projetados para otimizar processos, reduzir atrasos e melhorar a produtividade da sua equipe.</p>
                </div>
            </div>

        </div>

        <div id="service-nav" data-aos="fade-up">
            <div class="service-tab" data-target="web-systems" data-aos="fade-up">
                <span class="tab-text">Sistemas Web</span>
                <i class="tab-icon fas fa-globe"></i>
            </div>
            <div class="service-tab" data-target="desktop-systems" data-aos="fade-up">
                <span class="tab-text">Sistemas Desktop</span>
                <i class="tab-icon fas fa-desktop"></i>
            </div>
            <div class="service-tab" data-target="lanepages" data-aos="fade-up">
                <span class="tab-text">Lanepages</span>
                <i class="tab-icon fas fa-file-alt"></i>
            </div>
            <div class="service-tab" data-target="layouts" data-aos="fade-up">
                <span class="tab-text">Layouts</span>
                <i class="tab-icon fas fa-drafting-compass"></i>
            </div>
        </div>

        <div id="service-content" data-aos="fade-up">
            <img id="service-img" src="" alt="" data-aos="fade-up">
            <div id="service-text-content">
                <h2 id="service-title" data-aos="fade-up"></h2>
                <p id="service-description" data-aos="fade-up"></p>
                <h3 id="sub-title-1" data-aos="fade-up"></h3>
                <p id="sub-description-1" data-aos="fade-up"></p>
                <h3 id="sub-title-2" data-aos="fade-up"></h3>
                <p id="sub-description-2" data-aos="fade-up"></p>
            </div>
        </div>
                
        <div class="first-screen" data-aos="fade-up">

            <h1>Soluções Tecnologicas para Empresas</h1>
            <p>
                Aqui na Somos Dev's, acreditamos que a tecnologia é muito mais do que apenas desenvolvimento de sistemas web/desktop. O nosso trabalho é investir em soluções abrangentes e inovadoras que resolvam os desafios digitais do dia a dia do seu negócio.
                Trabalhamos de forma integrada com a sua empresa, compreendendo suas necessidades individuais e personalizando nossas soluções de acordo. Nossos desenvolvedores especializados não apenas criam sistemas web robustos e confiáveis, mas também 
                se dedicam a entender a sua visão, seus objetivos comerciais e suas metas de crescimento.
            </p>

            <ul class="services">
                <li>Nossos Serviços:</li>
                <li><a href="#">Sistemas Web</a></li>
                <li><a href="#">Sistemas Desktop</a></li>
                <li><a href="#">Lanepages</a></li>
                <li><a href="#">Layouts</a></li>
            </ul>
        </div>
    </main>

    <?php
    include("footer.php");
    ?>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        AOS.init();
    </script>

    <script>
        // definir os dados de cada serviço
        const services = {
            "web-systems": {
            img: "resource/img/sistema-web.avif",
            title: "Sistemas Web",
            description: "Os sistemas web oferecem flexibilidade e acessibilidade, permitindo que você conduza seus negócios de qualquer lugar.",
            subTitle1: "Acessibilidade universal",
            subDescription1: "Os sistemas web podem ser acessados de qualquer lugar do mundo, desde que haja uma conexão com a internet. Isso significa que sua equipe pode trabalhar de qualquer lugar e os clientes podem acessar seus serviços a qualquer hora.",
            subTitle2: "Manutenção facilitada",
            subDescription2: "Com sistemas web, atualizações e manutenções podem ser implementadas diretamente no servidor e refletidas imediatamente para todos os usuários, o que evita a necessidade de instalação de patches ou atualizações no dispositivo do usuário.",
            },
            "desktop-systems": {
                img: "resource/img/sistema-desktop.jpg",
                title: "Sistemas Desktop",
                description: "Os sistemas desktop oferecem desempenho superior e aproveitamento mais eficiente dos recursos de hardware.",
                subTitle1: "Alto desempenho",
                subDescription1: "Os sistemas desktop são conhecidos por seu desempenho superior em relação aos sistemas web, pois podem aproveitar diretamente os recursos de hardware do computador local.",
                subTitle2: "Segurança aprimorada",
                subDescription2: "Como os dados em sistemas desktop podem ser armazenados localmente, eles não estão sujeitos às mesmas vulnerabilidades de segurança que os sistemas baseados na web podem enfrentar.",
            },
            "lanepages": {
                img: "resource/img/lanepage.jpg",
                title: "Landing Pages",
                description: "As landing pages são ferramentas eficazes para conversão de visitantes em leads ou clientes.",
                subTitle1: "Alto potencial de conversão",
                subDescription1: "As landing pages são projetadas com um único objetivo em mente, aumentando a probabilidade de seus visitantes tomarem a ação desejada.",
                subTitle2: "Foco no cliente",
                subDescription2: "As landing pages permitem que você crie uma experiência personalizada para segmentos específicos de seu público, melhorando o engajamento e a satisfação do cliente.",
            },
            "layouts": {
                img: "resource/img/layout.jpg",
                title: "Layouts Personalizados",
                description: "Os layouts personalizados permitem que você destaque sua marca e se destaque da concorrência.",
                subTitle1: "Marca distintiva",
                subDescription1: "Com um layout personalizado, seu site ou aplicativo reflete a personalidade e os valores de sua marca, criando uma conexão mais forte com seus clientes.",
                subTitle2: "Experiência do usuário superior",
                subDescription2: "Um layout bem projetado melhora a experiência do usuário, tornando seu site ou aplicativo mais intuitivo e fácil de usar.",
            },
        };
        
        // adicionar evento de clique para cada aba de serviço
        document.querySelectorAll('.service-tab').forEach(tab => {
            tab.addEventListener('click', () => {
                const serviceId = tab.dataset.target;  // mudamos de tab.id para tab.dataset.target
                const service = services[serviceId];
                // alterar o conteúdo do serviço
                document.getElementById('service-img').src = service.img;
                document.getElementById('service-title').innerText = service.title;
                document.getElementById('service-description').innerText = service.description;

                document.getElementById('sub-title-1').innerText = service.subTitle1;
                document.getElementById('sub-description-1').innerText = service.subDescription1;
                document.getElementById('sub-title-2').innerText = service.subTitle2;
                document.getElementById('sub-description-2').innerText = service.subDescription2;

                // remover a classe "selected" de qualquer outra aba que a tenha
                document.querySelectorAll('.service-tab.selected').forEach(selectedTab => {
                    selectedTab.classList.remove('selected');
                });

                // adicionar a classe "selected" à aba que foi clicada
                tab.classList.add('selected');
            });
        });

        // seleciona a aba de 'Sistemas Web' por padrão
        document.querySelector('.service-tab[data-target="web-systems"]').click();
    </script>
</body>
</html>
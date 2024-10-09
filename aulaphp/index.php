<?php
// Variáveis PHP para personalizar o conteúdo da página
$siteTitle = "Exemplo de HTML e PHP integrados";
$pageHeading = "Bem vindo ao meu Site";
$introText = "Aqui você encontra informações e imagens interessantes, tudo gerado com PHP.";
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $siteTitle ?></title>
    <!-- Link para o CSS externo -->
    <link rel="stylesheet" href="style.css">
    <!-- Link para o animate.css via CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
</head>

<body>
    <!-- Cabeçalho do site -->
    <header id="home">
        <h1 class="animate__animated animate__bounceIn"><?php ?></h1>
        <p class="animate__animated animate__fadeInUp">Aqui você encontra informações e imagens interessantes.</p>
    </header>

    <!-- Menu de navegação -->
    <nav class="animate__animated animate__fadeInDown">
        <ul>
            <li><a href="#home">Início</a></li>
            <li><a href="#gallery">Galeria</a></li>
            <li><a href="#table">Tabela</a></li>
            <li><a href="#contact">Contato</a></li>
            <li><a href="#rodape">Rodapé</a></li>
        </ul>
    </nav>

    <!-- Conteúdo Principal -->
    <main>
        <!-- Galeria de imagens -->
        <section id="gallery">
            <h2 class="animate__animated animate__fadeInDown">Galeria de Imagens</h2>
            <div class="gallery-container">
                <img class="animate__animated animate__fadeInUp" src="https://via.placeholder.com/150" alt="Imagem 1">
                <img class="animate__animated animate__fadeInUp" src="https://via.placeholder.com/150" alt="Imagem 2">
                <img class="animate__animated animate__fadeInUp" src="https://via.placeholder.com/150" alt="Imagem 3">
                <img class="animate__animated animate__fadeInUp" src="https://via.placeholder.com/150" alt="Imagem 4">
            </div>
        </section>

        <!-- Tabela de informações -->
        <section id="table">
            <h2 class="animate__animated animate__fadeInLeft">Tabela de Informações</h2>
            <table class="animate__animated animate__fadeInRight">
                <tr>
                    <th>Nome</th>
                    <th>Idade</th>
                    <th>Profissão</th>
                </tr>
                <tr>
                    <td>João Silva</td>
                    <td>30</td>
                    <td>Engenheiro</td>
                </tr>
                <tr>
                    <td>Maria Oliveira</td>
                    <td>28</td>
                    <td>Designer</td>
                </tr>
                <tr>
                    <td>Pedro Costa</td>
                    <td>35</td>
                    <td>Desenvolvedor</td>
                </tr>
            </table>
        </section>
    </main>

    <!-- Rodapé do site -->
    <footer id="rodape">
        <nav>
            <ul>
                <li><a href="#home">Início</a></li>
                <li><a href="#gallery">Galeria</a></li>
                <li><a href="#table">Tabela</a></li>
                <li><a href="#contact">Contato</a></li>
            </ul>
        </nav>
        <p>&copy; 2024 Meu site. Todos os direitos reservados</p>
    </footer>
</body>

</html>
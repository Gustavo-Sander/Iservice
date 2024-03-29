<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iservice - Veículos</title>
    <link rel="stylesheet" type="text/css" href="style-pags.css">
    <link rel="stylesheet" type="text/css" href="nav-responsive.css">
    <link rel="icon" type="image/x-icon" href="../images/logo_Iservice.png">
</head>
<body> 
    <?php 

    if(!isset($_SESSION)){
        session_start();
    }

    ?>
    <nav class="MenuHorizontal"> 
        <div class="escondeLogo">
            <img class="logo" src="../images/logo_Iservice.png" tittle="Iservice" alt="logo do Iservice" style="padding: 4px;"/>
        </div>
        <ul class="retiraNumeraLista listaHorizontal centralizaVertical espacingLista">
            <div class="MenuInlineBlock espacingLista2" style="display: none;">
                <li class="category MenuBlock"><a href="../index.php"><img class="width escondeIconCell" src="../images/house.svg"/><span class="escondeNameCell">Início</span></a></li>
                <li class="category MenuBlock"><a href="pag-saude.php"><img class="width escondeIconCell" src="../images/heart.svg"/><span class="escondeNameCell">Saúde</span></a></li>
                <li class="category MenuBlock"><a href="pag-pet.php"><img class="width escondeIconCell" src="../images/pet.png"/><span class="escondeNameCell">Pet</span></a></li>
                <li class="category MenuBlock"><a href="pag-veiculos.php" style="color: #A42FC2;"><img class="widthLocal escondeIconCell" src="../images/car.svg"/><span class="escondeNameCell">Veículos</span></a></li>
            </div>
            <div class="MenuTrigger espacingLista">
                <button id="menu_icone" title="Abrir Menu"><img src="../images/menu_icone.png" alt="Abre o Menu para navegação de páginas." title="Abrir Menu"/></button>
            </div>
            <div class="mensageIservice">
                <a href="../index.php"><img class="iservice_msg" src="../images/Iservice_msg.png"/></a>
            </div>
            <li class="category">
                <a href="../index.php"><img class="logo escondeLogo2" src="../images/logo_Iservice.png" tittle="Iservice" alt="logo do Iservice"/></a>
            </li>
            <script type="text/javascript" src="funcion-menu-trigger.js"></script>
            <li class="category escondeMainMenu"><a href="../index.php"><img class="width" src="../images/house.svg"/><span class="escondeNameCell">Início</span></a></li>
            <li class="category escondeMainMenu"><a href="pag-saude.php"><img class="width" src="../images/heart.svg"/><span class="escondeNameCell">Saúde</span></a></li>
            <li class="category escondeMainMenu"><a href="pag-pet.php"><img class="width" src="../images/pet.png"/><span class="escondeNameCell">Pet</span></a></li>
            <li class="category escondeMainMenu"><a href="pag-veiculos.php" style="color: #A42FC2;"><img class="widthHome widthLocal" src="../images/car.svg"/><span class="escondeNameCell">Veículos</span></a></li>
            <?php
            if (isset($_SESSION['cliente'])) {
                // Exibir o nome do usuário
                echo '<li class="escondeLogin"><a class="logar" onclick="mostrarMenu()"><img class="width" src="../images/person.svg"/><span class="escondeLoginName">' . $_SESSION['cliente'] . '</span></a></li>';
            } else {
                // Caso o usuário não esteja autenticado, exibir "Login/Cadastrar"
                echo '<li class="escondeLogin"><a class="logar" href="Index_s/login.html"><img class="width" src="../images/person.svg"/><span class="escondeLoginName">Login/Cadastrar</span></a></li>';
            }
            ?>
            <li class="category tools">  
                <div class="divBusca listaHorizontal">
                    <img id="lupa" src="../images/lupa.png" width="20px" alt="Pesquisar..." title="Pequise"/>
                    <input id="busca" onkeyup="search_service()" type="search" name="search" placeholder="Search services..." />
                    <button id="btnBusca">Buscar</button>
                </div>
                <ol id="listBusca">
                    <div class="listaVertical retiraNumeraLista">
                        <li class="service"><a class="categoryService" href="pag-saude.php">Saúde<span class="escondeName">Saude</span></a></li>
                        <li class="service"><a class="categoryService" href="pag-pet.php">Pet</a></li>
                        <li class="service"><a class="categoryService" href="anuncio-pet-pettopp.html">Anuncio Pet Topp</a></li>
                        <li class="service"><a class="categoryService" href="pag-veiculos.php">Veículos<span class="escondeName">veiculos</span></a></li>
                    </div>
                </ol>
                <script type="text/javascript" src="funcion-search.js"></script>
            </li>
            <?php
            if (isset($_SESSION['cliente'])) {
                // Exibir o nome do usuário
                echo '<li class="escondeLogin2"><a class="logar" onclick="mostrarMenu()"><img class="width" src="../images/person.svg"/><span class="escondeLoginName">' . $_SESSION['cliente'] . '</span></a></li>';
            } else {
                // Caso o usuário não esteja autenticado, exibir "Login/Cadastrar"
                echo '<li class="escondeLogin2"><a class="logar" href="login.html"><img class="width" src="../images/person.svg"/><span class="escondeLoginName">Login/Cadastrar</span></a></li>';
            }
            ?>
            <!-- funçao para exixbir o menu -->
            <script>
                function mostrarMenu() {
                    var menu = document.getElementById("menuCliente");
                    if (menu.style.display === "block") {
                        menu.style.display = "none";
                    } else {
                        menu.style.display = "block";
                    }}
            </script>
            <!-- menu -->
            <div id="menuCliente" style="display: none; border: 1px solid #000; border-radius: 8px;  font-size: small; padding: 2px; background-color: #2DA6A4">
                <ul class="retiraNumeraLista">
                    <li>Minha agenda</li>
                    <li><a href="logout.php">Sair</a></li>
                </ul>
            </div>
        </ul>
    </nav>
    <br>
    <p>Lavagem de automóveis</p>
    <br>
        <ul>
            <li class="anuncio">    
                <a href="">    
                    <figure>
                        <img src="../images/anuncio_lavagem_1.jpeg" title="Car Wash" alt="Imagem do anúncio de lavagem de veiculos."/>
                        <figcaption>Lavagem Car Wash NH</figcaption>
                    </figure>
                </a>
            </li>
            <li class="anuncio">
                <a href="">
                    <figure>
                        <img src="../images/anuncio_lavagem_1.jpeg" title="Car Wash" alt="Imagem do anúncio de lavagem de veiculos."/>
                        <figcaption>Lavagem Car Wash NH</figcaption>
                    </figure>
                </a>
            </li>
            <li class="anuncio">
                <a href="">
                    <figure>
                        <img src="../images/anuncio_lavagem_1.jpeg" title="Car Wash" alt="Imagem do anúncio de lavagem de veiculos."/>
                        <figcaption>Lavagem Car Wash NH</figcaption>
                    </figure>
                </a>
            </li>
            <li class="anuncio">
                <a href="">
                    <figure>
                        <img src="../images/anuncio_lavagem_1.jpeg" title="Car Wash" alt="Imagem do anúncio de lavagem de veiculos."/>
                        <figcaption>Lavagem Car Wash NH</figcaption>
                    </figure>
                </a>
            </li>
        </ul>
        <p id="cm">Mecânica de automóveis</p>
        <br>
        <ul>
            <li class="anuncio">    
                <a href="">    
                    <figure>
                        <img src="../images/anuncio_mecanica_1.jpg" title="Auto Center União" alt="Imagem do anúncio da mecânica Auto Center União."/>
                        <figcaption>Mecânica Auto Center União NH</figcaption>
                    </figure>
                </a>
            </li>
            <li class="anuncio">
                <a href="">
                    <figure>
                        <img src="../images/anuncio_mecanica_1.jpg" title="Auto Center União" alt="Imagem do anúncio da mecânica Auto Center União."/>
                        <figcaption>Mecânica Auto Center União NH</figcaption>
                    </figure>
                </a>
            </li>
            <li class="anuncio">
                <a href="">
                    <figure>
                        <img src="../images/anuncio_mecanica_1.jpg" title="Auto Center União" alt="Imagem do anúncio da mecânica Auto Center União."/>
                        <figcaption>Mecânica Auto Center União NH</figcaption>
                    </figure>
                </a>
            </li>
            <li class="anuncio">
                <a href="">
                    <figure>
                        <img src="../images/anuncio_mecanica_1.jpg" title="Auto Center União" alt="Imagem do anúncio da mecânica Auto Center União."/>
                        <figcaption>Mecânica Auto Center União NH</figcaption>
                    </figure>
                </a>
            </li>
        </ul>
    <footer>
        <address>
            <ol id="informContat">
                <li style="font-weight: lighter;">Desenvolvedores:
                    <li><a class="contatDev" href="https://github.com/Gustavo-Sander" target="_blank">Gustavo H. Sander</a></li>  
                    <li><a class="contatDev" href="https://github.com/Luis-Schuster" target="_blank">Luis F. Schuster</a></li>
                    <li><a class="contatDev" href="https://github.com/RafaelJost25" target="_blank">Rafael R. Jost</a></li>
                    <li><a class="contatDev" href="https://github.com/vinicius378" target="_blank">Vinícius S. Siqueira</a></li>
                </li>
            </ol>
        </address>
    </footer>
</body>
</html>
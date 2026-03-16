<!DOCTYPE html>
<html lang="pt-br">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Zona de Exclusão</title>

<link rel="stylesheet" href="public/css/estilo.css">

</head>

<body>

<div class="container_main">

    <!-- Moldura decorativa -->
    <div class="moldura"></div>

    <main class="menu_main">

        <!-- Título -->
        <div class="titulo">
            <h1>Criação do Personagem</h1>
        </div>

        <!-- FORMULÁRIO ÚNICO -->
        <form action="inicial.php" method="GET" id="formPersonagem">
            <div class="menu-info-character">

                <div class="box-nome">
                    <!-- Nome do personagem -->
                    
                    <div class="terminal-box">
                        <span class="cursor"></span>
                        
                        <input 
                        class="terminal-input"
                        type="text"
                        name="personagem"
                        placeholder="Nome do personagem"
                        maxlength="20"
                        required>
                        
                    </div>
                </div>


                <div class="box-caracteristicas">

                    <h2>Caracterização</h2>

                    <p id="pontosRestantes">21 Pontos restantes</p>

                    <div class="linha-caract">

                        <button type="button" class="diminuirPTS"><</button>
                        <span class="ptsCaracterizacao">00</span>
                        <button type="button" class="aumentarPTS">></button>

                        <span class="nome-caract">Força</span>

                    </div>

                    <div class="linha-caract">

                        <button type="button" class="diminuirPTS"><</button>
                        <span class="ptsCaracterizacao">00</span>
                        <button type="button" class="aumentarPTS">></button>

                        <span class="nome-caract">Inteligencia</span>

                    </div>

                    <div class="linha-caract">

                        <button type="button" class="diminuirPTS"><</button>
                        <span class="ptsCaracterizacao">00</span>
                        <button type="button" class="aumentarPTS">></button>

                        <span class="nome-caract">Percepção</span>

                    </div>

                    <div class="linha-caract">

                        <button type="button" class="diminuirPTS"><</button>
                        <span class="ptsCaracterizacao">00</span>
                        <button type="button" class="aumentarPTS">></button>

                        <span class="nome-caract">Agilidade</span>

                    </div>

                    <div class="linha-caract">

                        <button type="button" class="diminuirPTS"><</button>
                        <span class="ptsCaracterizacao">00</span>
                        <button type="button" class="aumentarPTS">></button>

                        <span class="nome-caract">Carisma</span>

                    </div>

                    <div class="linha-caract">

                        <button type="button" class="diminuirPTS"><</button>
                        <span class="ptsCaracterizacao">00</span>
                        <button type="button" class="aumentarPTS">></button>

                        <span class="nome-caract">Durabilidade</span>

                    </div>

                    <div class="linha-caract">

                        <button type="button" class="diminuirPTS"><</button>
                        <span class="ptsCaracterizacao">00</span>
                        <button type="button" class="aumentarPTS">></button>

                        <span class="nome-caract">Sorte</span>

                    </div>

                </div>
            </div>

            <!-- BOTÃO DE INICIAR -->

            <div class="areaBotao">
                <a id="btnMudarPagina" href="criar_personagem.php">Continuar</a>
            </div>


        </form>

        <script src="public/js/main-menu/script.js"></script>

    </main>

</div>

</body>
</html>
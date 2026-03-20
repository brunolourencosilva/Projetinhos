<!DOCTYPE html>
<html lang="pt-br">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Zona de Exclusão</title>

<link rel="stylesheet" href="public/css/config_global.css">
<link rel="stylesheet" href="public/css/base.css">
<link rel="stylesheet" href="public/css/layout.css">
<link rel="stylesheet" href="public/css/components.css">
<link rel="stylesheet" href="public/css/paginas/menu.css">
<link rel="stylesheet" href="public/css/paginas/personagem.css">

</head>

<body>

<div class="container_main">

    <div class="moldura"></div>

    <main class="menu_main">

        
        <div class="titulo">
            <h1>Criação do Personagem</h1>
        </div>
        
        <form action="criar_personagem_skill.php" method="GET" id="formPersonagem">
            <!-- ============== MENU HABILIDADES ============== -->
            <div class="menu-info-character">

                <!-- NOME -->
                <div class="box-nome">
                    <div class="terminal-box borda-neon">
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

                <!-- ATRIBUTOS -->
                <div class="box-caracteristicas borda-neon">

                    <h2>Caracterização</h2>

                    <p id="pontosRestantes">21 Pontos restantes</p>

                    <!-- FORÇA -->
                    <div class="linha-caract">
                        <button type="button" class="btn btn-pts">‹</button>
                        <span class="ptsCaracterizacao">00</span>
                        <button type="button" class="btn btn-pts">›</button>
                        <span class="nome-caract">Força</span>
                    </div>

                    <!-- INT -->
                    <div class="linha-caract">
                        <button type="button" class="btn btn-pts">‹</button>
                        <span class="ptsCaracterizacao">00</span>
                        <button type="button" class="btn btn-pts">›</button>
                        <span class="nome-caract">Inteligência</span>
                    </div>

                    <!-- PERCEPÇÃO -->
                    <div class="linha-caract">
                        <button type="button" class="btn btn-pts">‹</button>
                        <span class="ptsCaracterizacao">00</span>
                        <button type="button" class="btn btn-pts">›</button>
                        <span class="nome-caract">Percepção</span>
                    </div>

                    <!-- AGILIDADE -->
                    <div class="linha-caract">
                        <button type="button" class="btn btn-pts">‹</button>
                        <span class="ptsCaracterizacao">00</span>
                        <button type="button" class="btn btn-pts">›</button>
                        <span class="nome-caract">Agilidade</span>
                    </div>

                    <!-- CARISMA -->
                    <div class="linha-caract">
                        <button type="button" class="btn btn-pts">‹</button>
                        <span class="ptsCaracterizacao">00</span>
                        <button type="button" class="btn btn-pts">›</button>
                        <span class="nome-caract">Carisma</span>
                    </div>

                    <!-- DURABILIDADE -->
                    <div class="linha-caract">
                        <button type="button" class="btn btn-pts">‹</button>
                        <span class="ptsCaracterizacao">00</span>
                        <button type="button" class="btn btn-pts">›</button>
                        <span class="nome-caract">Durabilidade</span>
                    </div>

                    <!-- SORTE -->
                    <div class="linha-caract">
                        <button type="button" class="btn btn-pts">‹</button>
                        <span class="ptsCaracterizacao">00</span>
                        <button type="button" class="btn btn-pts">›</button>
                        <span class="nome-caract">Sorte</span>
                    </div>

                </div>
                <!-- BOTÃO CORRETO -->
                <button type="submit" class="btn-main">
                    Continuar
                </button>
            </div>

        </form>

        <script src="public/js/main-menu/script.js"></script>

    </main>

</div>

</body>
</html>
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
        <div class="organizador-hab">
            <form action="criar_personagem_skill.php" method="GET" id="formPersonagem">
                <!-- ============== MENU CARACTERIZAÇÕES ============== -->
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
                            autocomplete="off"
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
                    
                    <button type="submit" class="btn-main">
                        Continuar
                    </button>
                </div>
            </form>

            <div class="ocultar">
                <div class="borda-neon icone-habilidade"></div>
                <div class="descricao-hab">
                    <p >
                    Quanto maior a Força Bruta, maior o dano em combate físico e melhor
                    o uso de armas pesadas ou ações que exigem força.<br><br>
                    Skills afetadas:<br>
                    Corpo a Corpo, Armas Pesadas, capacidade de carga.<p>
                <div>
            </div>
        </div>

        <script src="public/js/main-menu/script.js"></script>

    </main>

</div>

</body>
</html>
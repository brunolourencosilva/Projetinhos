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
                <!-- ============== MENU HABILIDADES ============== -->
                <div class="menu-info-character">

                    <div class="box-caracteristicas borda-neon">

                        <h2>Habilidades</h2>

                        <p id="pontosRestantes">45 Pontos restantes</p>

                        <!-- CORPO A CORPO -->
                        <div class="linha-caract">
                            <button type="button" class="btn btn-pts">&lt;</button>
                            <span class="ptsCaracterizacao">00</span>
                            <button type="button" class="btn btn-pts">&gt;</button>
                            <span class="nome-caract">Corpo a Corpo</span>
                        </div>

                        <!-- ARMAS PESADAS -->
                        <div class="linha-caract">
                            <button type="button" class="btn btn-pts">&lt;</button>
                            <span class="ptsCaracterizacao">00</span>
                            <button type="button" class="btn btn-pts">&gt;</button>
                            <span class="nome-caract">Armas Pesadas</span>
                        </div>

                        <!-- ARMAS LEVES -->
                        <div class="linha-caract">
                            <button type="button" class="btn btn-pts">&lt;</button>
                            <span class="ptsCaracterizacao">00</span>
                            <button type="button" class="btn btn-pts">&gt;</button>
                            <span class="nome-caract">Armas Leves</span>
                        </div>

                        <!-- FURTIVIDADE -->
                        <div class="linha-caract">
                            <button type="button" class="btn btn-pts">&lt;</button>
                            <span class="ptsCaracterizacao">00</span>
                            <button type="button" class="btn btn-pts">&gt;</button>
                            <span class="nome-caract">Furtividade</span>
                        </div>

                        <!-- HACKING -->
                        <div class="linha-caract">
                            <button type="button" class="btn btn-pts">&lt;</button>
                            <span class="ptsCaracterizacao">00</span>
                            <button type="button" class="btn btn-pts">&gt;</button>
                            <span class="nome-caract">Hacking</span>
                        </div>

                        <!-- ENGENHARIA -->
                        <div class="linha-caract">
                            <button type="button" class="btn btn-pts">&lt;</button>
                            <span class="ptsCaracterizacao">00</span>
                            <button type="button" class="btn btn-pts">&gt;</button>
                            <span class="nome-caract">Engenharia</span>
                        </div>

                        <!-- LÁBIA -->
                        <div class="linha-caract">
                            <button type="button" class="btn btn-pts">&lt;</button>
                            <span class="ptsCaracterizacao">00</span>
                            <button type="button" class="btn btn-pts">&gt;</button>
                            <span class="nome-caract">Lábia</span>
                        </div>

                        <!-- MEDICINA -->
                        <div class="linha-caract">
                            <button type="button" class="btn btn-pts">&lt;</button>
                            <span class="ptsCaracterizacao">00</span>
                            <button type="button" class="btn btn-pts">&gt;</button>
                            <span class="nome-caract">Medicina</span>
                        </div>

                        <!-- INVESTIGAR -->
                        <div class="linha-caract">
                            <button type="button" class="btn btn-pts">&lt;</button>
                            <span class="ptsCaracterizacao">00</span>
                            <button type="button" class="btn btn-pts">&gt;</button>
                            <span class="nome-caract">Investigar</span>
                        </div>
                        
                    </div>
                    
                    
                    <button type="submit" class="btn-main">
                        começar aventura
                    </button>
                </div>

                
            </form>
            <div class="ocultar">
                <div class="borda-neon icone-habilidade"></div>
                <div class="descricao-hab">
                    <p >
                    Quanto maior o nível em Corpo a Corpo, maior o dano em combate próximo
                    e melhor a eficiência em ataques físicos diretos.<br><br>
                    Skills afetadas:<br>
                    Desarmado, Uma mão, Duas mãos<p>
                <div>
            </div>
        </div>
        <script src="public/js/main-menu/script.js"></script>

    </main>
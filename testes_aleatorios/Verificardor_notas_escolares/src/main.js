import { alterarDadosCompletos } from "./modulos/dadosManipulacao.js";
import { calcularMedia } from "./modulos/Media.js";

document.addEventListener('DOMContentLoaded', () => {
    calcularMedia();
    ativarBotaoAlterar(alterarDadosCompletos);
});
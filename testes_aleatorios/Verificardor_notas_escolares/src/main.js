import { calcularMedia } from "./modulos/Media.js";
import { printTabela } from "./modulos/tabelaManipulacao.js";

document.addEventListener('DOMContentLoaded', () => {
    printTabela();
    calcularMedia(); // essa função já cuida do fluxo de adicionar aluno

});

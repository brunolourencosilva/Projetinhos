import { botaoEvento, printResultado } from "../utils/utils.js";

export function verificarNome(){
    botaoEvento('adicionarAluno',  () => {
        const nome = document.getElementById('nomeAluno');
        const nomeSeparado = nome.split(" ");
        
    });
};

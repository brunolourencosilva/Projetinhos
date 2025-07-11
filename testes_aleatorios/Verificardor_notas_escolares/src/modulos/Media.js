import { botaoEvento, printResultado } from "../utils/utils.js";
export {prinTabela} from "../modulos/dadosManipulacao.js"

export function calcularMedia() {
    botaoEvento('adicionarAluno', () => {
        const nota1 = parseFloat(document.getElementById('nota1Bim').value);
        const nota2 = parseFloat(document.getElementById('nota2Bim').value);
        const nota3 = parseFloat(document.getElementById('nota3Bim').value);
        const nota4 = parseFloat(document.getElementById('nota4Bim').value);

        const notas = [nota1, nota2, nota3, nota4];

        let media
        media = notas.reduce((soma, nota) => soma + nota, 0) / notas.length;

    });
  
}

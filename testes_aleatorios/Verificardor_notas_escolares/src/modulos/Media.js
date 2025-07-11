import { botaoEvento, printResultado } from "../utils/utils.js";
import { ativarBotaoApagar, ativarBotaoAlterar } from "./tabelaManipulacao.js";
import { alterarDadosCompletos } from "./dadosManipulacao.js";

export function calcularMedia() {
    botaoEvento('adicionarAluno', () => {
        const nome = document.getElementById('nomeAluno').value;
        const frequencia = parseFloat(document.getElementById('frequenciaAluno').value);

        const nota1 = parseFloat(document.getElementById('nota1Bim').value);
        const nota2 = parseFloat(document.getElementById('nota2Bim').value);
        const nota3 = parseFloat(document.getElementById('nota3Bim').value);
        const nota4 = parseFloat(document.getElementById('nota4Bim').value);

        const notas = [nota1, nota2, nota3, nota4];

        if (!nome || isNaN(frequencia) || notas.some(isNaN)) {
            printResultado('erro', 'Por favor, preencha todos os campos corretamente.');
            return;
        }

        const media = notas.reduce((soma, nota) => soma + nota, 0) / notas.length;

        // Define status inicial com base nos dados inseridos
        let status = "Pendente";
        if (media >= 7 && frequencia >= 75) status = "Aprovado";
        else if (media < 7 && frequencia >= 75) status = "Reprovado por nota";
        else if (media >= 7 && frequencia < 75) status = "Reprovado por frequência";
        else status = "Reprovado";

        // Adiciona linha à tabela
        const tabela = document.getElementById('tableBody');
        tabela.innerHTML += `
            <tr>
                <td>${nome}</td>
                <td>${notas.join(', ')}</td>
                <td>${frequencia}%</td>
                <td>${media.toFixed(2)}</td>x
                <td>${notas.reduce((a, b) => a + b, 0)}</td> <!-- Total das notas -->
                <td>${status}</td>
                <td>
                    <button type="button" class="apagarDados">Apagar</button>
                    <button type="button" class="alterarDados">Alterar</button>
                </td>
            </tr>
        `;

        // Limpa os campos após adicionar
        ['nomeAluno', 'frequenciaAluno', 'nota1Bim', 'nota2Bim', 'nota3Bim', 'nota4Bim'].forEach(id => {
            document.getElementById(id).value = '';
        });

        // Ativa os botões da linha recém-adicionada
        ativarBotaoApagar();
        ativarBotaoAlterar(alterarDadosCompletos);
    });
}


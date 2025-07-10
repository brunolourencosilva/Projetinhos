// Importa duas funções utilitárias de outro arquivo: uma para adicionar eventos em botões e outra para exibir resultados
import { botaoEvento, printResultado } from "../utils/utils.js";

// Função principal que calcula a média das notas inseridas
export function calcularMedia() {

    // Adiciona um evento ao botão com ID 'adicionarAluno'
    botaoEvento('adicionarAluno', () => {

        // Captura o valor do input com ID 'notaAluno' (esperado em formato: 7,8,9 etc.)
        const notasTexto = document.getElementById('notaAluno').value;

        // Divide o texto por vírgulas e remove espaços em branco de cada item
        const valorInput = notasTexto.split(',').map(nota => nota.trim());

        // Converte cada item do array para número de ponto flutuante
        const numeros = valorInput.map(nota => parseFloat(nota));

        // Verifica se o campo está vazio ou se algum valor digitado não é um número válido
        if (!notasTexto || numeros.some(isNaN)) {
            printResultado('erro', 'Por favor, digite notas válidas separadas por vírgula.');
            return; // Interrompe a execução se houver erro
        }

        // Calcula a média somando todos os valores e dividindo pela quantidade de notas
        const media = numeros.reduce((a, b) => a + b, 0) / numeros.length;

        // Exibe o resultado da média e os dados em uma tabela HTML dentro do elemento com ID 'tableBody'
        printResultado('tableBody', `
            <tbody>
              <tr>
                <th></th>
                <th>${numeros.join(', ')}</th> <!-- Mostra as notas separadas por vírgula -->
                <th></th>
                <th>${media.toFixed(2)}</th> <!-- Mostra a média com duas casas decimais -->
                <th></th>
                <th></th>
                <th>
                  <button type="button" id="apagadarDados">Apagar</button> <!-- Botão de apagar -->
                  <button type="button" id="alterarDados">Alterar</button> <!-- Botão de alterar -->
                </th>
              </tr>
            </tbody>
        `);
    });
}

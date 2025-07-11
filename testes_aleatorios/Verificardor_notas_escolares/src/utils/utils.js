export function botaoEvento(idbotao, funcao) {
    const botao = document.getElementById(idbotao);
    botao.addEventListener('click',funcao);
}

export function printResultado(id,print){
    const resultado = document.getElementById(id);
    if (resultado) resultado.innerHTML = print;
}

// Função para fazer o botão "Apagar" remover a linha da tabela
export function ativarBotaoApagar() {
    // Seleciona todos os botões com a classe 'apagarDados'
    const botoesApagar = document.querySelectorAll('.apagarDados');

    // Para cada botão, adiciona o evento de clique
    botoesApagar.forEach(botao => {
        botao.addEventListener('click', function () {
            // Encontra a linha da tabela (tr) onde está o botão
            const linha = this.closest('tr');

            // Remove a linha da tabela
            linha.remove();
        });
    });
}

// Função para alterar as notas e a média da linha
export function ativarBotaoAlterar() {
    const botoesAlterar = document.querySelectorAll('.alterarDados');

    botoesAlterar.forEach(botao => {
        botao.addEventListener('click', function () {
            const linha = this.closest('tr'); // Pega a linha da tabela
            const celulas = linha.querySelectorAll('td'); // Pega todas as células

            // Pede novas notas ao usuário
            const novasNotasTexto = prompt("Digite as 4 novas notas separadas por vírgula:");

            // Se o usuário cancelar ou deixar vazio, não faz nada
            if (!novasNotasTexto) return;

            // Converte as notas para números
            const notas = novasNotasTexto.split(',').map(n => parseFloat(n.trim()));

            // Verifica se são 4 notas válidas
            if (notas.length !== 4 || notas.some(isNaN)) {
                alert("Você deve digitar exatamente 4 notas numéricas separadas por vírgula.");
                return;
            }

            // Calcula a nova média
            const media = notas.reduce((soma, nota) => soma + nota, 0) / notas.length;

            // Atualiza as notas e a média na tabela
            celulas[1].textContent = notas.join(', ');
            celulas[3].textContent = media.toFixed(2);
        });
    });
}
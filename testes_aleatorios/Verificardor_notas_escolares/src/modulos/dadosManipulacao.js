// nomeAluno.js
export function alterarNome(celula) {
    const novoNome = prompt("Digite o novo nome do aluno:");
    if (novoNome && novoNome.trim() !== "") {
        celula.textContent = novoNome.trim();
        return novoNome.trim();
    }
    alert("Nome inválido.");
    return celula.textContent; // mantém o nome antigo
}


// mediaAluno.js
export function alterarNotas(celulaNotas, celulaMedia) {
    const entrada = prompt("Digite as 4 notas separadas por vírgula:");
    if (!entrada) return null;

    const notas = entrada.split(',').map(n => parseFloat(n.trim()));

    const valido = notas.length === 4 && notas.every(n => !isNaN(n));
    if (!valido) {
        alert("Digite exatamente 4 notas válidas.");
        return null;
    }

    const media = notas.reduce((soma, n) => soma + n, 0) / notas.length;

    celulaNotas.textContent = notas.join(', ');
    celulaMedia.textContent = media.toFixed(2);

    return { notas, media };
}

// frequenciaAluno.js
export function alterarFrequencia(celula) {
    const entrada = prompt("Digite a nova frequência (%):");
    const frequencia = parseFloat(entrada);

    if (isNaN(frequencia) || frequencia < 0 || frequencia > 100) {
        alert("Frequência inválida. Digite um número entre 0 e 100.");
        return null;
    }

    celula.textContent = `${frequencia}%`;
    return frequencia;
}

// statusAluno.js
export function atualizarStatus({ media }, frequencia) {
    if (media >= 7 && frequencia >= 75) {
        return "Aprovado";
    } else if (media < 7 && frequencia >= 75) {
        return "Reprovado por nota";
    } else if (media >= 7 && frequencia < 75) {
        return "Reprovado por frequência";
    } else {
        return "Reprovado";
    }
}

export function totalNota(notas) {
    if (!Array.isArray(notas) || notas.length !== 4 || notas.some(isNaN)) {
        console.warn("Notas inválidas para cálculo do total.");
        return 0;
    }

    return notas.reduce((soma, nota) => soma + nota, 0);
}


export function alterarDadosCompletos(linha) {
    const celulas = linha.querySelectorAll('td');

    const nome = alterarNome(celulas[0]);
    const resultadoNotas = alterarNotas(celulas[1], celulas[3]);
    const frequencia = alterarFrequencia(celulas[2]);

    if (resultadoNotas && frequencia !== null) {
        const status = atualizarStatus(resultadoNotas, frequencia);
        celulas[4].textContent = status;

        // (Opcional) Exibe o total das notas no console ou em nova célula
        const total = totalNota(resultadoNotas.notas);
        console.log(`Total das notas de ${nome}: ${total}`);
        // Se quiser adicionar na tabela, crie uma nova célula ou use celula[5]
    }
}



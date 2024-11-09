const fs = require('fs');

fs.readFile('./dados.json', 'utf-8', (err, data) => {
    if (err) {
        console.error('Erro ao ler o arquivo:', err);
        return;
    }

    const dados = JSON.parse(data);

   
    const faturamentoDiario = dados.filter(dia => dia.valor > 0).map(dia => dia.valor);

    
    const menorFaturamento = Math.min(...faturamentoDiario);
    const maiorFaturamento = Math.max(...faturamentoDiario);

    
    const mediaMensal = faturamentoDiario.reduce((sum, valor) => sum + valor, 0) / faturamentoDiario.length;

  
    const diasAcimaDaMedia = faturamentoDiario.filter(valor => valor > mediaMensal).length;

  
    console.log(`Menor valor de faturamento: ${menorFaturamento}`);
    console.log(`Maior valor de faturamento: ${maiorFaturamento}`);
    console.log(`Dias com faturamento acima da média: ${diasAcimaDaMedia}`);
});

onmessage = function (event) {

    let dados = event.data;

    switch (dados.cmd) {
        case 'start':
            this.postMessage("Iniciando soma até: " + dados.num + " || " + new Date())
            let total = calcular(dados.num);
            this.postMessage("Soma total: " + total + " || " + new Date() )
            break;

        case 'stop':
            this.postMessage("Execução interrompida || " + new Date())
            break;

        default:
        this.postMessage("Comando desconhecido: " + dados.cmd + " || " + new Date())
    }
}

function calcular(num) {
    let soma = 0;
    for (let i = 0; i < num; i++) {
        soma += i;
    }
    return soma;
}
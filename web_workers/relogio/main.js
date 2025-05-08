let worker = new Worker('worker.js')

worker.postMessage("Iniciar relógio")

worker.onmessage = function(event){
    console.log("Mensagem do worker: ", event.data)
    document.getElementById("relogio").innerHTML = event.data;
}
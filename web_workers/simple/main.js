let worker = new Worker('worker.js')

worker.postMessage("Inicie o processamento")

worker.onmessage = function(event){
    console.log("Mensagem do worker: ", event.data)
}
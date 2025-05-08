
onmessage = function (event) {
  console.log('Mensagem recebida:', event.data);
  // Realize o processamento

  console.log("timeout", new Date());
  setTimeout(function () {
    postMessage('Processamento concluído || '+ new Date());
  }, 2000)

};
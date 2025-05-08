
let myWorker = new Worker("worker.js");

function start() {
  console.log("WebWorker: Starting");
  let num = document.querySelector('#num').value;
  myWorker.postMessage({ 'cmd': 'start', 'num': num });
}

function stop() {
  if (myWorker) {
    let msg = "WebWorker: Terminating " + new Date();
    console.log(msg);
    document.querySelector('#status').innerHTML += msg;
    myWorker.terminate();
  }
}

let click = 0;
function clique(){
  document.getElementById("click").innerText = ++click;
}

myWorker.onmessage = function (event) {
  document.querySelector('#result').innerHTML += event.data
  document.querySelector('#result').innerHTML += "<br>"
}

const startBtn = document.querySelector("#start");
startBtn.addEventListener("click", () => {
let finals = 0;
for (let i = 0; i < 456475534234234243999; i++){
  finals += i;
}
document.querySelector("#output").innerHTML = finals
})
const stopBtn = document.querySelector("#stop");
stopBtn.addEventListener("click", ()=>{
  document.querySelector("#random").innerHTML = "random"
})

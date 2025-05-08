onmessage = function(event){

    setInterval(function(){
        let d = new Date();

        postMessage(d.getHours() + "H " + d.getMinutes() + "M " + d.getSeconds()+"S")
    },1000)

}
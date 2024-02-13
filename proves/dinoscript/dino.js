var dino = document.getElementById("dino");
var obstacle = document.getElementById("obstacle");

function salt(){
if(dino.classList !="saltando"){
    dino.classList.add("saltando");
}
setTimeout(function(){
    dino.classList.remove("saltando")
},500);
}

var Mort = setInterval(function(){
    //parseint te da un numero de una expresión
    // getComputerStyle de donde coger los datos
    //getPropertyValue que valor coger
    var dinotop = parseInt(window.getComputedStyle(dino).getPropertyValue("top"));
    var obstacleleft = parseInt(window.getComputedStyle(obstacle).getPropertyValue("left"));

    if(obstacleleft<20 && obstacleleft>0 && dinotop>=130){
        alert("Has mort!");
        window.location.reload();
    }
})

var n = 0;
var l = document.getElementById("contador");
window.setInterval(function(){
    l.innerHTML = n;
    n++;
}, 500);
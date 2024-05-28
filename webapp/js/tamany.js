var fs = 1.5;




//si clico el boto petit el text es torna petit
function petit(){
    fs = fs-0.5;
    document.getElementById("text").style.fontSize=(fs+"rem");
    //alert(fs+"rem");
}
//si clico el boto mitja el text es torna mitja
function mitja(){
    fs = fs;
    document.getElementById("text").style.fontSize=(fs+"rem");
    //alert(fs+"rem");
}
//si clico el boto gran el text es torna gran
function gran(){
    fs = fs+0.5;
    document.getElementById("text").style.fontSize=(fs+"rem");
    //alert(fs+"rem");
}

//addEventListener(esdeveniment, receptor)

document.getElementById("petit").addEventListener('click', petit);
document.getElementById("mitja").addEventListener('click', mitja);
document.getElementById("gran").addEventListener('click', gran);

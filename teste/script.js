document.getElementById("ligado").onclick=function(){
    fetch("http://localhost/teste/envio.php?temp=1&max=90&min=10")
}
document.getElementById("desligado").onclick=function(){
    fetch("http://localhost/teste/envio.php?temp=0&max=10&min=80")
}
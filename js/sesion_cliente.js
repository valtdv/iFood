function detallesDelPedido(){
    let pedido = document.getElementById("ingredientes").value;
    switch(pedido){
        case "comida-arabe":
            document.getElementById("check").innerHTML = "";
            break;
        case "comida-italiana":
            document.getElementById("check").innerHTML = "";
            break;
        case "comida-rapida":
            document.getElementById("check").innerHTML = "";
            break;
        case "comida-mexicana":
            document.getElementById("check").innerHTML = "";
            break;
        case "comida-colombiana":
            document.getElementById("check").innerHTML = "";
            break;
        case "comida-asiatica":
            document.getElementById("check").innerHTML = "";
            break;   
    }
}

function metodoDePago(){

}
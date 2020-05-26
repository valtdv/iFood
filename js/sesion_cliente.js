function detallesDelPedido(){
    let pedido = document.getElementById("ingredientes").value;
    switch(pedido){
        case "sin-escoger":
            document.getElementById("checkbox-ingredientes").innerHTML = "<div></div>";
            break;
        case "comida-arabe":
            document.getElementById("checkbox-ingredientes").innerHTML = "<div class='form-check'>" +
                "<input class='form-check-input' type='checkbox' id='carne' value='carne'>" +
                "<label class='form-check-label' for='carne'>Carne</label>"+
            "</div>"+
            "<div class='form-check'>"+
                "<input class='form-check-input' type='checkbox' id='pollo' value='pollo'>"+
                "<label class='form-check-label' for='pollo'>Pollo</label>"+
            "</div>"+
            "<div class='form-check'>"+
                "<input class='form-check-input' type='checkbox' id='cerdo' value='cerdo'>"+
                "<label class='form-check-label' for='cerdo'>Cerdo</label>"+
            "</div>"+
            "<div class='form-check'>"+
                "<input class='form-check-input' type='checkbox' id='tomate' value='tomate'>"+
                "<label class='form-check-label' for='tomate'>Tomate</label>"+
            "</div>"+
            "<div class='form-check'>"+
                "<input class='form-check-input' type='checkbox' id='ajo' value='ajo'>"+
                "<label class='form-check-label' for='ajo'>Ajo</label>"+
            "</div>"+
            "<div class='form-check'>"+
                "<input class='form-check-input' type='checkbox' id='lechuga' value='lechuga'>"+
                "<label class='form-check-label' for='lechuga'>Lechuga</label>"+
            "</div>"+
            "<div class='form-check'>"+
                "<input class='form-check-input' type='checkbox' id='cebolla' value='cebolla'>"+
                "<label class='form-check-label' for='cebolla'>Cebolla</label>"+
            "</div>";
            break;
        case "comida-italiana":
            document.getElementById("checkbox-ingredientes").innerHTML = "<div class='form-check'>" +
            "<input class='form-check-input' type='checkbox' id='pepperoni' value='pepperoni'>" +
            "<label class='form-check-label' for='pepperoni'>pepperoni</label>"+
        "</div>"+
        "<div class='form-check'>"+
            "<input class='form-check-input' type='checkbox' id='salami' value='salami'>"+
            "<label class='form-check-label' for='salami'>salami</label>"+
        "</div>"+
        "<div class='form-check'>"+
            "<input class='form-check-input' type='checkbox' id='jamon' value='jamon'>"+
            "<label class='form-check-label' for='jamon'>jamon</label>"+
        "</div>"+
        "<div class='form-check'>"+
            "<input class='form-check-input' type='checkbox' id='tomate' value='tomate'>"+
            "<label class='form-check-label' for='tomate'>Tomate</label>"+
        "</div>"+
        "<div class='form-check'>"+
            "<input class='form-check-input' type='checkbox' id='champinones' value='champinones'>"+
            "<label class='form-check-label' for='champinones'>champiñones</label>"+
        "</div>"+
        "<div class='form-check'>"+
            "<input class='form-check-input' type='checkbox' id='pimiento rojo' value='pimiento rojo'>"+
            "<label class='form-check-label' for='pimiento rojo'>pimiento rojo</label>"+
        "</div>"+
        "<div class='form-check'>"+
            "<input class='form-check-input' type='checkbox' id='pina' value='pina'>"+
            "<label class='form-check-label' for='pina'>piña</label>"+
        "</div>"+
        "<div class='form-check'>"+
            "<input class='form-check-input' type='checkbox' id='cebolla' value='cebolla'>"+
            "<label class='form-check-label' for='cebolla'>Cebolla</label>"+
        "</div>";
            break;
        case "comida-rapida":
            document.getElementById("checkbox-ingredientes").innerHTML = "";
            break;
        case "comida-mexicana":
            document.getElementById("checkbox-ingredientes").innerHTML = "";
            break;
        case "comida-colombiana":
            document.getElementById("checkbox-ingredientes").innerHTML = "";
            break;
        case "comida-asiatica":
            document.getElementById("checkbox-ingredientes").innerHTML = "";
            break;   
    }
}

function metodoDePago(){

}
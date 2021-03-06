function detallesDelPedido(){
    let pedido = document.getElementById("ingredientes").value;
    switch(pedido){
        case "sin-escoger":
            document.getElementById("checkbox-ingredientes").innerHTML = "<div></div>";
            break;
        case "comida-arabe":
            document.getElementById("checkbox-ingredientes").innerHTML = "<div class='form-check'>" +
                "<input class='form-check-input' type='checkbox' id='carne' name='ingredientes[]' value='carne'>" +
                "<label class='form-check-label' for='carne'>Carne</label>"+
            "</div>"+
            "<div class='form-check'>"+
                "<input class='form-check-input' type='checkbox' id='pollo' name='ingredientes[]' value='pollo'>"+
                "<label class='form-check-label' for='pollo'>Pollo</label>"+
            "</div>"+
            "<div class='form-check'>"+
                "<input class='form-check-input' type='checkbox' id='cerdo' name='ingredientes[]' value='cerdo'>"+
                "<label class='form-check-label' for='cerdo'>Cerdo</label>"+
            "</div>"+
            "<div class='form-check'>"+
                "<input class='form-check-input' type='checkbox' id='tomate' name='ingredientes[]'  value='tomate'>"+
                "<label class='form-check-label' for='tomate'>Tomate</label>"+
            "</div>"+
            "<div class='form-check'>"+
                "<input class='form-check-input' type='checkbox' id='ajo' name='ingredientes[]' value='ajo'>"+
                "<label class='form-check-label' for='ajo'>Ajo</label>"+
            "</div>"+
            "<div class='form-check'>"+
                "<input class='form-check-input' type='checkbox' id='lechuga' name='ingredientes[]' value='lechuga'>"+
                "<label class='form-check-label' for='lechuga'>Lechuga</label>"+
            "</div>"+
            "<div class='form-check'>"+
                "<input class='form-check-input' type='checkbox' id='cebolla' name='ingredientes[]' value='cebolla'>"+
                "<label class='form-check-label' for='cebolla'>Cebolla</label>"+
            "</div>";
            break;
        case "comida-italiana":
            document.getElementById("checkbox-ingredientes").innerHTML = "<div class='form-check'>" +
            "<input class='form-check-input' type='checkbox' id='pepperoni' name='ingredientes[]' value='pepperoni'>" +
            "<label class='form-check-label' for='pepperoni'>pepperoni</label>"+
        "</div>"+
        "<div class='form-check'>"+
            "<input class='form-check-input' type='checkbox' id='salami' name='ingredientes[]' value='salami'>"+
            "<label class='form-check-label' for='salami'>salami</label>"+
        "</div>"+
        "<div class='form-check'>"+
            "<input class='form-check-input' type='checkbox' id='jamon' name='ingredientes[]' value='jamon'>"+
            "<label class='form-check-label' for='jamon'>jamon</label>"+
        "</div>"+
        "<div class='form-check'>"+
            "<input class='form-check-input' type='checkbox' id='tomate' name='ingredientes[]' value='tomate'>"+
            "<label class='form-check-label' for='tomate'>Tomate</label>"+
        "</div>"+
        "<div class='form-check'>"+
            "<input class='form-check-input' type='checkbox' id='champinones' name='ingredientes[]' value='champinones'>"+
            "<label class='form-check-label' for='champinones'>Champiñones</label>"+
        "</div>"+
        "<div class='form-check'>"+
            "<input class='form-check-input' type='checkbox' id='pimiento-rojo' name='ingredientes[]' value='pimiento-rojo'>"+
            "<label class='form-check-label' for='pimiento-rojo'>Pimiento rojo</label>"+
        "</div>"+
        "<div class='form-check'>"+
            "<input class='form-check-input' type='checkbox' id='pina' name='ingredientes[]' value='pina'>"+
            "<label class='form-check-label' for='pina'>Piña</label>"+
        "</div>";
            break;
        case "comida-rapida":
            document.getElementById("checkbox-ingredientes").innerHTML = "<div class='form-check'>" +
                "<input class='form-check-input' type='checkbox' id='carne' name='ingredientes[]' value='carne'>" +
                "<label class='form-check-label' for='carne'>Carne</label>"+
            "</div>"+
            "<div class='form-check'>"+
                "<input class='form-check-input' type='checkbox' id='pollo' name='ingredientes[]' value='pollo'>"+
                "<label class='form-check-label' for='pollo'>Pollo</label>"+
            "</div>"+
            "<div class='form-check'>"+
                "<input class='form-check-input' type='checkbox' id='cerdo' name='ingredientes[]' value='cerdo'>"+
                "<label class='form-check-label' for='cerdo'>Cerdo</label>"+
            "</div>"+
            "<div class='form-check'>"+
                "<input class='form-check-input' type='checkbox' id='tomate' name='ingredientes[]' value='tomate'>"+
                "<label class='form-check-label' for='tomate'>Tomate</label>"+
            "</div>"+
            "<div class='form-check'>"+
                "<input class='form-check-input' type='checkbox' id='pepinillos' name='ingredientes[]' value='pepinillos'>"+
                "<label class='form-check-label' for='pepinillos'>Pepinillos</label>"+
            "</div>"+
            "<div class='form-check'>"+
                "<input class='form-check-input' type='checkbox' id='lechuga' name='ingredientes[]' value='lechuga'>"+
                "<label class='form-check-label' for='lechuga'>Lechuga</label>"+
            "</div>"+
            "<div class='form-check'>"+
                "<input class='form-check-input' type='checkbox' id='cebolla' name='ingredientes[]' value='cebolla'>"+
                "<label class='form-check-label' for='cebolla'>Cebolla</label>"+
            "</div>";
            break;
        case "comida-mexicana":
            document.getElementById("checkbox-ingredientes").innerHTML = "<div class='form-check'>" +
                "<input class='form-check-input' type='checkbox' id='carne' name='ingredientes[]' value='carne'>" +
                "<label class='form-check-label' for='carne'>Carne</label>"+
            "</div>"+
            "<div class='form-check'>"+
                "<input class='form-check-input' type='checkbox' id='pollo' name='ingredientes[]' value='pollo'>"+
                "<label class='form-check-label' for='pollo'>Pollo</label>"+
            "</div>"+
            "<div class='form-check'>"+
                "<input class='form-check-input' type='checkbox' id='cerdo' name='ingredientes[]' value='cerdo'>"+
                "<label class='form-check-label' for='cerdo'>Cerdo</label>"+
            "</div>"+
            "<div class='form-check'>"+
                "<input class='form-check-input' type='checkbox' id='pimiento-rojo' name='ingredientes[]'value='pimiento-rojo'>"+
                "<label class='form-check-label' for='pimiento-rojo'>Pimiento rojo</label>"+
            "</div>"+
            "<div class='form-check'>"+
                "<input class='form-check-input' type='checkbox' id='chile' value='chile'>"+
                "<label class='form-check-label' for='chile'>Chile</label>"+
            "</div>"+
            "<div class='form-check'>"+
                "<input class='form-check-input' type='checkbox' id='pimiento-verde' name='ingredientes[]' value='pimiento-verde'>"+
                "<label class='form-check-label' for='pimiento-verde'>Pimiento verde</label>"+
            "</div>"+
            "<div class='form-check'>"+
                "<input class='form-check-input' type='checkbox' id='cebolla' name='ingredientes[]' value='cebolla'>"+
                "<label class='form-check-label' for='cebolla'>Cebolla</label>"+
            "</div>";
            break;
        case "comida-colombiana":
            document.getElementById("checkbox-ingredientes").innerHTML = "<div class='form-check'>" +
                "<input class='form-check-input' type='checkbox' id='carne' name='ingredientes[]' value='carne'>" +
                "<label class='form-check-label' for='carne'>Carne</label>"+
            "</div>"+
            "<div class='form-check'>"+
                "<input class='form-check-input' type='checkbox' id='chicharron' name='ingredientes[]' value='chicharron'>"+
                "<label class='form-check-label' for='chicharron'>chicharron</label>"+
            "</div>"+
            "<div class='form-check'>"+
                "<input class='form-check-input' type='checkbox' id='arroz' name='ingredientes[]' value='arroz'>"+
                "<label class='form-check-label' for='arroz'>Arroz</label>"+
            "</div>"+
            "<div class='form-check'>"+
                "<input class='form-check-input' type='checkbox' id='chorizo' name='ingredientes[]' value='chorizo'>"+
                "<label class='form-check-label' for='chorizo'>Chorizo</label>"+
            "</div>"+
            "<div class='form-check'>"+
                "<input class='form-check-input' type='checkbox' id='huevo' name='ingredientes[]' value='huevo'>"+
                "<label class='form-check-label' for='huevo'>Huevo</label>"+
            "</div>"+
            "<div class='form-check'>"+
                "<input class='form-check-input' type='checkbox' id='frijoles' name='ingredientes[]' value='frijoles'>"+
                "<label class='form-check-label' for='frijoles'>Frijoles</label>"+
            "</div>"+
            "<div class='form-check'>"+
                "<input class='form-check-input' type='checkbox' id='aguacate' name='ingredientes[]' value='aguacate'>"+
                "<label class='form-check-label' for='aguacate'>Aguacate</label>"+
            "</div>";
            break;
        case "comida-asiatica":
            document.getElementById("checkbox-ingredientes").innerHTML = "<div class='form-check'>" +
                "<input class='form-check-input' type='checkbox' id='carne' name='ingredientes[]' value='carne'>" +
                "<label class='form-check-label' for='carne'>Carne</label>"+
            "</div>"+
            "<div class='form-check'>"+
                "<input class='form-check-input' type='checkbox' id='pollo' name='ingredientes[]' value='pollo'>"+
                "<label class='form-check-label' for='pollo'>Pollo</label>"+
            "</div>"+
            "<div class='form-check'>"+
                "<input class='form-check-input' type='checkbox' id='cerdo' name='ingredientes[]' value='cerdo'>"+
                "<label class='form-check-label' for='cerdo'>Cerdo</label>"+
            "</div>"+
            "<div class='form-check'>"+
                "<input class='form-check-input' type='checkbox' id='huevo' name='ingredientes[]' value='huevo'>"+
                "<label class='form-check-label' for='huevo'>Huevo</label>"+
            "</div>"+
            "<div class='form-check'>"+
                "<input class='form-check-input' type='checkbox' id='espinaca' name='ingredientes[]' value='espinaca'>"+
                "<label class='form-check-label' for='espinaca'>Espinaca</label>"+
            "</div>"+
            "<div class='form-check'>"+
                "<input class='form-check-input' type='checkbox' id='zanahoria' name='ingredientes[]' value='zanahoria'>"+
                "<label class='form-check-label' for='zanahoria'>Zanahoria</label>"+
            "</div>"+
            "<div class='form-check'>"+
                "<input class='form-check-input' type='checkbox' id='jengibre' name='ingredientes[]' value='jengibre'>"+
                "<label class='form-check-label' for='jengibre'>Jengibre</label>"+
            "</div>";
            break;   
    }
}

function metodoDePago(){
    let metodo = document.getElementById("metodo-de-pago").value;
    switch(metodo){
        case "sin-escoger":
            document.getElementById("metodopago").innerHTML = "<div></div>";
            break;
        case "efectivo":
            document.getElementById("metodopago").innerHTML = "<div class='form-group'>" +
                "<label for='efec'>¿Con que billete piensa pagar?</label>" +
                "<input type='text' class='form-control' id='efec' name = 'efec' required>" +
            "</div>";
            break;
        case "credito":
            document.getElementById("metodopago").innerHTML = "<div class='form-group'>" +
                "<label for='num-cred'>Número de la tarjeta</label>" +
                "<input type='text' class='form-control' id='num-cred' name = 'num-cred' required>" +
            "</div>" +
            "<div class='form-group'>" +
                "<label for='fec-cred'>Fecha de vencimiento</label>" +
                "<input type='text' class='form-control' id='fec-cred' name = 'fec-cred' required>" +
            "</div>" +
            "<div class='form-group'>" +
                "<label for='cvv'>CVV</label>" +
                "<input type='text' class='form-control' id='cvv' name = 'cvv' required>" +
            "</div>";
            break;
        case "debito":
            document.getElementById("metodopago").innerHTML = "<div class='form-group'>" +
                "<label for='num-deb'>Número de la tarjeta</label>" +
                "<input type='text' class='form-control' id='num-deb' name = 'num-deb' required>" +
            "</div>" +
            "<div class='form-group'>" +
                "<label for='fec-deb'>Fecha de vencimiento</label>" +
                "<input type='text' class='form-control' id='fec-deb' name = 'fec-deb' required>" +
            "</div>" +
            "<div class='form-group'>" +
                "<label for='cvv'>CVV</label>" +
                "<input type='text' class='form-control' id='cvv' name = 'cvv' required>" +
            "</div>";
            break;
    }
}
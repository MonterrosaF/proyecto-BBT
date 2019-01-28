(function(){
    'use strict';

    var regalo = document.getElementById("regalo");

    document.addEventListener('DOMContentLoaded', function(){
        console.log("El HTML se termino de cargar");

        // CAMPOS DATOS USUARIOS
        var nombre = document.getElementById("nombre");
        var apellido = document.getElementById("apellido");
        var email = document.getElementById("email");

        // CAMPOS TOURS
        var Bogota_Historica = document.getElementById("Bogota_Historica")
        var Bogota_Cultural = document.getElementById("Bogota_Cultural")
        var montanismo = document.getElementById("montanismo")

        // BOTONES Y DIVS
        var calcular = document.getElementById("calcular");
        var errorDiv = document.getElementById("error");
        var botonRegistro = document.getElementById("btnRegistro");
        var lista_Productos = document.getElementById("lista-productos");
        var suma = document.getElementById("suma-total");

        // EXTRAS

        var bonos = document.getElementById("bono_evento");
        var stickers = document.getElementById("stickers");


        calcular.addEventListener('click', calcularValor);

        function calcularValor(event){
            event.preventDefault();
            if(regalo.value === ''){
                alert("Debes elegir un regalo");
                regalo.focus();
            } else{
                var boletosHistorica = parseInt(Bogota_Historica.value, 10) || 0,
                    boletosCultural = parseInt(Bogota_Cultural.value, 10) || 0,
                    boletosMontanismo = parseInt(montanismo.value, 10) || 0,
                    cantBonos = parseInt(bonos.value, 10) || 0,
                    cantStickers = parseInt(stickers.value, 10) || 0;

                var totalPagar = (boletosHistorica * 25000) + (boletosCultural * 28000) + (boletosMontanismo * 30000) + ((cantBonos * 7000) * .80) + (cantStickers * 5000) ;

                var listadoProductos = [];

                if (boletosCultural > 1){
                    listadoProductos.push(boletosCultural + ' boletos para Tour Bogotá Cultural'); 
                }else if (boletosCultural == 1){
                    listadoProductos.push(boletosCultural + ' boleto para Tour Bogotá Cultural'); 
                }
                
                if (boletosHistorica > 1){
                    listadoProductos.push(boletosHistorica + ' boletos para Tour Bogotá Historica'); 
                }else if (boletosHistorica == 1){
                    listadoProductos.push(boletosHistorica + ' boletos para Tour Bogotá Historica'); 
                }

                if (boletosMontanismo > 1){
                    listadoProductos.push(boletosMontanismo + ' boletos para Tour Ciclomontañismo'); 
                }else if (boletosMontanismo == 1){
                    listadoProductos.push(boletosMontanismo + ' boletos para Tour Ciclomontañismo'); 
                }

                if (cantBonos > 1){
                    listadoProductos.push(cantBonos + ' bonos con descuento'); 
                }else if (cantBonos == 1){
                    listadoProductos.push(cantBonos + ' bonos con descuento'); 
                }

                if (cantStickers > 1){
                    listadoProductos.push(cantStickers + ' stickers'); 
                }else if (cantStickers == 1){
                    listadoProductos.push(cantStickers + ' stickers'); 
                }

                lista_Productos.style.display ="block";

                lista_Productos.innerHTML = '';
                for (var i = 0; i< listadoProductos.length; i++){
                    lista_Productos.innerHTML += '<i class="far fa-hand-point-right">' + listadoProductos[i] + '<br/>';
                }

                suma.innerHTML = "$ " + totalPagar.toFixed(2);

            }
        }

    }); //DOM CONTENT LOADED
})();


(function () {
    'use strict';

    var regalo = document.getElementById("regalo");

    document.addEventListener('DOMContentLoaded', function () {
        console.log("El HTML se termino de cargar");

        // var map = L.map('mapa').setView([4.679016, -74.048082], 20);

        // L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        //     attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        // }).addTo(map);

        // L.marker([4.679016, -74.048082]).addTo(map)
        //     .bindPopup('BBT 2019 <br/> Tours por Bogotá')
        //     .openPopup()
        //     .bindTooltip('BBT')
        //     .openTooltip();


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
        if (document.getElementById('btnRegistro')) {
        botonRegistro.disabled = true;
        }

        if (document.getElementById('calcular')) {



            calcular.addEventListener('click', calcularValor);
            Bogota_Historica.addEventListener('blur', mostrarTours);
            Bogota_Cultural.addEventListener('blur', mostrarTours);
            montanismo.addEventListener('blur', mostrarTours);

            nombre.addEventListener("blur", validarCampos);
            apellido.addEventListener("blur", validarCampos);
            email.addEventListener("blur", validarCampos);
            email.addEventListener("blur", validarEmail);

            function validarEmail() {
                if (this.value.indexOf("@") > -1) {
                    errorDiv.style.display = "none";
                    this.style.border = "1px solid #cccccc";
                } else {
                    errorDiv.style.display = 'block';
                    errorDiv.style.color = 'red';
                    errorDiv.innerHTML = "El correo no es correcto";
                    this.style.border = "1px solid red";
                    errorDiv.style.border = "1px solid red";
                }
            }

            function validarCampos() {
                if (this.value == '') {
                    errorDiv.style.display = 'block';
                    errorDiv.style.color = 'red';
                    errorDiv.innerHTML = "Este campo es obligatorio";
                    this.style.border = "1px solid red";
                    errorDiv.style.border = "1px solid red";
                } else {
                    errorDiv.style.display = "none";
                    this.style.border = "1px solid #cccccc";
                }
            }

            function calcularValor(event) {
                event.preventDefault();

                if (regalo.value === '') {
                    alert("Debes elegir un regalo");
                    regalo.focus();
                } else {
                    var boletosHistorica = parseInt(Bogota_Historica.value, 10) || 0,
                        boletosCultural = parseInt(Bogota_Cultural.value, 10) || 0,
                        boletosMontanismo = parseInt(montanismo.value, 10) || 0,
                        cantBonos = parseInt(bonos.value, 10) || 0,
                        cantStickers = parseInt(stickers.value, 10) || 0;

                    var totalPagar = (boletosHistorica * 25000) + (boletosCultural * 28000) + (boletosMontanismo * 30000) + ((cantBonos * 7000) * .80) + (cantStickers * 5000);

                    var listadoProductos = [];

                    if (boletosCultural > 1) {
                        listadoProductos.push(boletosCultural + ' boletos para Tour Bogotá Cultural');
                    } else if (boletosCultural == 1) {
                        listadoProductos.push(boletosCultural + ' boleto para Tour Bogotá Cultural');
                    }

                    if (boletosHistorica > 1) {
                        listadoProductos.push(boletosHistorica + ' boletos para Tour Bogotá Historica');
                    } else if (boletosHistorica == 1) {
                        listadoProductos.push(boletosHistorica + ' boletos para Tour Bogotá Historica');
                    }

                    if (boletosMontanismo > 1) {
                        listadoProductos.push(boletosMontanismo + ' boletos para Tour Ciclomontañismo');
                    } else if (boletosMontanismo == 1) {
                        listadoProductos.push(boletosMontanismo + ' boletos para Tour Ciclomontañismo');
                    }

                    if (cantBonos > 1) {
                        listadoProductos.push(cantBonos + ' bonos con descuento');
                    } else if (cantBonos == 1) {
                        listadoProductos.push(cantBonos + ' bonos con descuento');
                    }

                    if (cantStickers > 1) {
                        listadoProductos.push(cantStickers + ' stickers');
                    } else if (cantStickers == 1) {
                        listadoProductos.push(cantStickers + ' stickers');
                    }

                    lista_Productos.style.display = "block";

                    lista_Productos.innerHTML = '';
                    for (var i = 0; i < listadoProductos.length; i++) {
                        lista_Productos.innerHTML += '<i class="far fa-hand-point-right">' + listadoProductos[i] + '<br/>';
                    }

                    suma.innerHTML = "$ " + totalPagar.toFixed(2);

                    botonRegistro.disabled = false;
                    document.getElementById('total_pedido').value = totalPagar;

                }
            } // FUNCION CALCULAR

            function mostrarTours() {
                var boletosHistorica = parseInt(Bogota_Historica.value, 10) || 0,
                    boletosCultural = parseInt(Bogota_Cultural.value, 10) || 0,
                    boletosMontanismo = parseInt(montanismo.value, 10) || 0;
                var toursElegidos = [];

                if (boletosHistorica > 0) {
                    toursElegidos.push('historica');
                }

                if (boletosCultural > 0) {
                    toursElegidos.push('cultural');
                }

                if (boletosMontanismo > 0) {
                    toursElegidos.push('Bogota_montanismo');
                }

                for (var i = 0; i < toursElegidos.length; i++) {
                    document.getElementById(toursElegidos[i]).style.display = 'block';
                }

                console.log(toursElegidos)

            }
        }
        $('.invitado-info').colorbox({inline:true, width:"50%"});

        $('.boton_newsletter').colorbox({inline:true, width:"50%"});
    }); //DOM CONTENT LOADED
})();


(function () {
    'use strict';

    var regalo = document.getElementById("regalo");

    document.addEventListener('DOMContentLoaded', function () {
        console.log("El HTML se termino de cargar");

        var map = L.map('mapa').setView([4.679016, -74.048082], 20);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        L.marker([4.679016, -74.048082]).addTo(map)
            .bindPopup('BBT 2019 <br/> Tours por Bogotá')
            .openPopup()
            .bindTooltip('BBT')
            .openTooltip();

    }); //DOM CONTENT LOADED
})();

jQuery(function ($) {

    jQuery(document).ready(function ($) {

        //ColorBox

        $('.invitado-info').colorbox({ inline: true, width: "50%" });

        // LETTERING
        $('.nombre-sitio').lettering();

        //MENU FIJO

        var windowHeight = $(window).height()
        var barraAltura = $('.barra').innerHeight();

        $(window).scroll(function () {
            var scroll = $(window).scrollTop();
            if (scroll > windowHeight) {
                $('.barra').addClass('fixed');
                $('body').css({ 'margin-top': barraAltura + 'px' })
            } else {
                $('.barra').removeClass('fixed');
                $('body').css({ 'margin-top': '0px' })
            }
        });

        // Menu Responsive

        $('.menu-movil').on('click', function () {
            $('.navegacion-principal').slideToggle();
        })



        //Programa de BBT
        $('div.ocultar').hide();
        $('.programa-evento .info-curso:first').show();

        $('.menu-programa a:first').addClass('activo');
        $('.menu-programa a').on('click', function () {
            $('.menu-programa a').removeClass('activo');
            $(this).addClass('activo');
            $('.ocultar').hide();
            var enlace = $(this).attr('href');
            $(enlace).fadeIn(1000);

            return false;
        });

        // ANIMACINOES PARA LOS NUMEROS

        var resumenLista = jQuery('.resumen-evento');
        if (resumenLista.length > 0) {
            $('.resumen-evento').waypoint(function () {
                $('.resumen-evento li:nth-child(1) p').animateNumber({ number: 6 }, 1200);
                $('.resumen-evento li:nth-child(2) p').animateNumber({ number: 15 }, 2000);
                $('.resumen-evento li:nth-child(3) p').animateNumber({ number: 3 }, 600);
                $('.resumen-evento li:nth-child(4) p').animateNumber({ number: 3 }, 500);
            }, {
                offset:'60%'
            });
        }


        //ANIMACION CONTADOR COUNTDOWN



        $('.cuenta-regresiva').countdown('2019/05/01 09:00:00', function (event) {
            $('#dias').html(event.strftime('%D'));
            $('#horas').html(event.strftime('%H'));
            $('#minutos').html(event.strftime('%M'));
            $('#segundos').html(event.strftime('%S'));
        });


    });
});
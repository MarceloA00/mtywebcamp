"use strict";

var regalo = document.getElementById('regalo');
document.addEventListener('DOMContentLoaded', function () {
    //Mapa Leaflet
    if (document.getElementById('mapa')) {
        var map = L.map('mapa').setView([25.677178, -100.452451], 16);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        L.marker([25.677178, -100.452451]).addTo(map)
            .bindTooltip('Bosques de Sauces 644')
            .openTooltip();
    }

    //Datos Usuario
    var nombre = document.getElementById('nombre');
    var apellido = document.getElementById('apellido');
    var email = document.getElementById('email');


    //Campos Pases
    var pase_dia = document.getElementById('pase_dia');
    var pase_completo = document.getElementById('pase_completo');
    var pase_dosdias = document.getElementById('pase_dosdias');


    //Botones y divs
    var calcular = document.getElementById('calcular');
    var errorDiv = document.getElementById('error');
    var botonRegistro = document.getElementById('btnRegistro');
    var resultado = document.getElementById('lista-productos');
    var evento = document.getElementById('eventos');
    var viernes = document.getElementById('viernes');
    var sabado = document.getElementById('sabado');
    var domingo = document.getElementById('domingo');
    var pagoFinal = document.getElementById('suma-total');

    //Extras
    var etiquetas = document.getElementById('etiquetas');
    var camisas = document.getElementById('camisa_evento');


    calcular.addEventListener('click', calcularMontos);

    pase_dia.addEventListener('change', abrirDias);
    pase_dosdias.addEventListener('change', abrirDias);
    pase_completo.addEventListener('change', abrirDias);

    function abrirDias() {
        evento.style.display = 'block';
        var boletosDia = pase_dia.value;
        var boletos2Dias = pase_dosdias.value;
        var boletoComlpeto = pase_completo.value;


        if (boletosDia >= 1) {
            viernes.style.display = 'block';
        } else {
            viernes.style.display = 'none';
        }

        if (boletos2Dias > 0) {
            viernes.style.display = 'block';
            sabado.style.display = 'block';
        } else {
            sabado.style.display = 'none';
        }

        if (boletoComlpeto > 0) {
            viernes.style.display = 'block';
            sabado.style.display = 'block';
            domingo.style.display = 'block';
        } else {
            domingo.style.display = 'none';
        }

        if (boletosDia == 0 && boletos2Dias == 0 && boletoComlpeto == 0) {
            evento.style.display = 'none';

        }


    }


    function calcularMontos(event) {
        event.preventDefault();
        if (regalo.value === '') {
            alert('Debes Elegir un Regalo.');
            regalo.focus();
        } else {
            //Variables
            var boletosDia = parseInt(pase_dia.value, 10) || 0;
            var boletos2Dias = parseInt(pase_dosdias.value, 10) || 0;
            var boletoComlpeto = parseInt(pase_completo.value, 10) || 0;
            var cantEti = parseInt(etiquetas.value, 10) || 0;
            var cantCami = parseInt(camisas.value, 10) || 0;

            //Total a Pagar
            var totalPagar = (boletosDia * 30) + (boletos2Dias * 45) + (boletoComlpeto * 50) + ((cantCami * 10) * .93) + (cantEti * 2);

            //Arreglo de Resumen
            var listadoProductos = [];

            if (boletosDia === 1) {
                listadoProductos.push(boletosDia + ' Pase por 1 dia');
            } else if (boletosDia >= 2) {
                listadoProductos.push(boletosDia + ' Pases por 1 dia');
            }

            if (boletos2Dias === 1) {
                listadoProductos.push(boletos2Dias + ' Pase por 2 dias');
            } else if (boletos2Dias >= 2) {
                listadoProductos.push(boletos2Dias + ' Pases por 2 dias');
            }

            if (boletoComlpeto === 1) {
                listadoProductos.push(boletoComlpeto + ' Pase completo');
            } else if (boletoComlpeto >= 2) {
                listadoProductos.push(boletoComlpeto + ' Pases completos');
            }

            if (cantEti === 1) {
                listadoProductos.push(cantEti + ' Paquete de Etiquetas');
            } else if (cantEti >= 2) {
                listadoProductos.push(cantEti + ' Paquetes de Etiquetas');
            }

            if (cantCami === 1) {
                listadoProductos.push(cantCami + ' Camisa');
            } else if (cantCami >= 2) {
                listadoProductos.push(cantCami + ' Camisas');
            }

            resultado.style.display = 'block';
            resultado.innerHTML = '';

            for (var i = 0; i < listadoProductos.length; i++) {
                resultado.innerHTML += listadoProductos[i] + '<br/>';

            }

            pagoFinal.innerHTML = '$ ' + totalPagar.toFixed(2);

        }

    }

    //Esquema de Validacion

    nombre.addEventListener('blur', validarCampos);
    apellido.addEventListener('blur', validarCampos);
    email.addEventListener('blur', validarCampos);
    email.addEventListener('blur', validarMail);

    function validarCampos() {
        if (this.value == '') {
            errorDiv.style.display = 'block';
            errorDiv.innerHTML = 'Este Campo es Obligatorio';
            this.style.border = '1px solid red';
            errorDiv.style.border = '1px solid red';
        } else {
            errorDiv.style.display = 'none';
            this.style.border = '1px solid grey'
        }
    }

    function validarMail() {
        if (this.value.indexOf('@') > -1) {
            errorDiv.style.display = 'none';
            this.style.border = '1p solid grey';
        } else {
            errorDiv.style.display = 'block';
            errorDiv.innerHTML = 'Debe Tener Al Menos una @';
            this.style.border = '1px solid red';
            errorDiv.style.border = '1px solid red';
        }
    }


});

$(function() {
    //Lettering para Nombre del Sitio
    $('.nombre-sitio').lettering();


    //Programa de Conferencias
    $('.prog-event .info-curso:first').show();
    $('.menu-prog a:first').addClass('activo');
    
    $('.menu-prog a').on('click', function(){

        $('.menu-prog a').removeClass('activo');
        $(this).addClass('activo');

        $('.ocultar').hide();
        
        var enlace = $(this).attr('href');
        $(enlace).fadeIn(1000);

        return false;

    });

    //Animacion de Numeros
    $('.resumen-event li:nth-child(1) p').animateNumber({number:6}, 1200);
    $('.resumen-event li:nth-child(2) p').animateNumber({number:15}, 1600);
    $('.resumen-event li:nth-child(3) p').animateNumber({number:3}, 1400);
    $('.resumen-event li:nth-child(4) p').animateNumber({number:9}, 1500);

    //CountDown
    $('.cuenta-reg').countdown('2021/03/19 10:00:00', function(event){
        $('#dias').html(event.strftime('%D'));
        $('#horas').html(event.strftime('%H'));
        $('#minutos').html(event.strftime('%M'));
        $('#segundos').html(event.strftime('%S'));

    });

});
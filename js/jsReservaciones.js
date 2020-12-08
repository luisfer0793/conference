(function() {
    'use strict';

    document.addEventListener('DOMContentLoaded', function() {
        // Campos 
        let paseDia = document.getElementById('pase-uno');
        let paseDos = document.getElementById('pase-dos');
        let paseCompleto = document.getElementById('pase-completo');
        let playeras = document.querySelector('#camisa-evento');
        let usb = document.querySelector('#usb');


        //Botones
        let calcular = document.getElementById('calcular');
        let btnRegistro = document.getElementById('btn-registro');

        //Divs
        let totalDiv = document.getElementById('suma-total');
        let resumenOrden = document.getElementById('lista-productos');

        calcular.addEventListener('click', calcularMontos);
        paseDia.addEventListener('blur', mostrarEventos);
        paseDos.addEventListener('blur', mostrarEventos);
        paseCompleto.addEventListener('click', mostrarEventos);

        function calcularMontos(event) {
            event.preventDefault();

            var boletoDia = paseDia.value,
                boletoDos = paseDos.value,
                boletoCompleto = paseCompleto.value,
                numeroPlayeras = playeras.value,
                numeroUSB = usb.value;

            var totalPagar = (boletoDia * 150) + (boletoDos * 200) + (boletoCompleto * 300) + (numeroPlayeras * 100) + (numeroUSB * 150);
            var listadoProductos = [];

            if(boletoDia != 0)
                listadoProductos.push(boletoDia + ' - Pases por día.');
            if(boletoDos != 0)
                listadoProductos.push(boletoDos + ' - Pases por dos días.');
            if(boletoCompleto != 0)
                listadoProductos.push(boletoCompleto + ' - Pases por 3 días.');
            if(numeroPlayeras != 0)
                listadoProductos.push(numeroPlayeras + ' - Playeras.');
            if(numeroUSB != 0)
                listadoProductos.push(numeroUSB + ' - Usb\'s.');

            resumenOrden.innerHTML = '';

            for(var i = 0; i < listadoProductos.length; i++) {
                resumenOrden.innerHTML += listadoProductos[i] + '<br>';
            }

            totalDiv.innerHTML = '$ ' + totalPagar;
        }

        function mostrarEventos() {
            let boletosDia = Number(paseDia.value);
            let boletosDosDias = Number(paseDos.value);
            let boletosCompleto = Number(paseCompleto.value);

            let desactivados = document.querySelectorAll('.chk');
            let opacos = document.querySelectorAll('.lista-check');

            opacos.forEach(function(item) {
                item.style.opacity = 1;
            });

            desactivados.forEach(function(item) {
                item.disabled = false;
            });
        }              
    }); // DOMContentLoad

})();
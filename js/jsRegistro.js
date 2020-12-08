(function() {
    'use strict';

    document.addEventListener('DOMContentLoaded', function() {
        // Campos Registro Usuarios
        let nombre = document.querySelector('#nombre');
        let apellido = document.querySelector('#apellido');
        let correo = document.querySelector('#email');
        let pass = document.querySelector('#pass');

        // Divs
        let errorDiv = document.getElementById('error');

        nombre.addEventListener('blur', function() {
            if(this.value == '') {
                errorDiv.style.display = 'block';
            }
        })
       
    }); // DOMContentLoad
})();
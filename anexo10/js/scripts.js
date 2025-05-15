// scripts.js

function activarCampoOtro(nombreRadio, idCampoTexto) {
  document.querySelectorAll(`input[name="${nombreRadio}"]`).forEach(function(input) {
    input.addEventListener('change', function () {
      const campoTexto = document.getElementById(idCampoTexto);
      if (this.value === 'otro') {
        campoTexto.style.display = 'block';
      } else {
        campoTexto.style.display = 'none';
      }
    });
  });
}

document.addEventListener('DOMContentLoaded', function () {
  activarCampoOtro('tratamiento_agua', 'otro_container2');
  activarCampoOtro('lengua_indigena', 'otro_container');
  activarCampoOtro('rol_familiar', 'otro_texto_container');
});

const stock = document.querySelector("#stock");
const codigo = document.querySelector("#codigo");

function validarCosto(input) {
  const valor = input.value;
  if (isNaN(valor) || valor <= 0 || (valor * 100) % 1 !== 0) {
    Swal.fire(
      'Costo invalido',
      'Intentelo de nuevo',
      'error'
    )
    input.value = "";
  }
}

function validarPrecio(input) {
  const valor = input.value;
  if (isNaN(valor) || valor <= 0 || (valor * 100) % 1 !== 0) {
    Swal.fire(
      'Precio invalido',
      'Intentelo de nuevo',
      'error'
    )
    input.value = "";
  }
}

stock.addEventListener("input", function () {
  const value = stock.value;

  if (value < 0) {
    Swal.fire(
      'Cantidad invalida',
      'Intentelo de nuevo',
      'error'
    )
    stock.value = "";
  }
  if (value % 1 === 0) {

  } else {
    stock.value = "";
    Swal.fire(
      'Cantidad erronea',
      'Intentelo de nuevo',
      'error'
    )
    return;
  }
});


function generarCodigo() {
  const date = new Date();
  const msmtsrl = "MSMTSRL"; // Reemplaza esto con el valor de MSMTSRL

  // Generar un código aleatorio de 6 caracteres
  const caracteres = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
  let codigo = "";
  for (let i = 0; i < 6; i++) {
    const randomIndex = Math.floor(Math.random() * caracteres.length);
    codigo += caracteres.charAt(randomIndex);
  } 

  // Usar la fecha y MSMTSRL para formar parte del código
  const codigoFinal = codigo(date.getMonth() + 1) + msmtsrl + codigo;

  // Actualizar el valor del campo de entrada sin recargar la página
  document.getElementById("codigo").value = codigoFinal;
}

const btn = document.querySelector('#menu-btn');
const menu = document.querySelector('#sidemenu');
btn.addEventListener('click', e => {
  menu.classList.toggle("menu-expanded");
  menu.classList.toggle("menu-collapsed");

  document.querySelector('body').classList.toggle('body-expanded');

})
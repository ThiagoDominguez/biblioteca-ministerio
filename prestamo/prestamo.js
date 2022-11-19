const prestamos = [];
const inpIdPrestamo = document.getElementById("inp_prestamo-id");
const inpPrestamoDni = document.getElementById("inp_prestamo-dni");
const inpIdMaterial = document.getElementById("inp_prestamo-idMaterial");
const inpFechaSalidaPrestamo = document.getElementById(
  "inp_prestamo-fechaSalida"
);
const inpFechaDevolucionPrestamo = document.getElementById(
  "inp_prestamo-fechaDevolucion"
);
const btnPrestamo = document.getElementById("btn-prestamo");

btnPrestamo.addEventListener("click", () => {
  const inpIdPrestamo = document.getElementById("inp_prestamo-id").value;
  const inpPrestamoDni = document.getElementById("inp_prestamo-dni").value;
  const inpIdMaterial = document.getElementById(
    "inp_prestamo-idMaterial"
  ).value;
  const inpFechaSalidaPrestamo = document.getElementById(
    "inp_prestamo-fechaSalida"
  ).value;
  const inpFechaDevolucionPrestamo = document.getElementById(
    "inp_prestamo-fechaDevolucion"
  ).value;

  prestamos.push(
    `<li>ID Prestamo: ${inpIdPrestamo} DNI:${inpPrestamoDni} ID Material: ${inpIdMaterial} Fecha Salida: ${inpFechaSalidaPrestamo} Fecha Devolucion: ${inpFechaDevolucionPrestamo} </li>`
  );
  document.getElementById("return-prestamo").innerHTML = prestamos;
});

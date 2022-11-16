const libros = [];
const btnLibro = document.getElementById("btn-libro");
const inpLibroNumInv = document.getElementById("inp_libro-numeroInventario");
const inpLibroCodInv = document.getElementById("inp_libro-codigoInventario");
const inpLibroCodMat = document.getElementById("inp_libro-codigoMaterial");

btnLibro.addEventListener("click", () => {
  const inpLibroNumInv = document.getElementById(
    "inp_libro-numeroInventario"
  ).value;
  const inpLibroCodInv = document.getElementById(
    "inp_libro-codigoInventario"
  ).value;
  const inpLibroCodMat = document.getElementById(
    "inp_libro-codigoMaterial"
  ).value;
  libros.push(
    `<li>Numero de inventario: ${inpLibroNumInv} Código inventario: ${inpLibroCodInv} Código material: ${inpLibroCodMat} </li>`
  );
  document.getElementById("return-libro").innerHTML = libros;
});

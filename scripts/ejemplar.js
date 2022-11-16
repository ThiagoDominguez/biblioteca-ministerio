const ejemplares = [];
const btnEjemplar = document.getElementById("btn-ejemplar");
const inpEjemplarIdEstado = document.getElementById("inp_ejemplar-idEstado");
const inpEjemplarDesc = document.getElementById("inp_ejemplar-desc");
const inpEjemplarCodMat = document.getElementById(
  "inp_ejemplar-codigoMaterial"
);

btnEjemplar.addEventListener("click", () => {
  const inpEjemplarIdEstado = document.getElementById(
    "inp_ejemplar-idEstado"
  ).value;
  const inpEjemplarDesc = document.getElementById("inp_ejemplar-desc").value;
  const inpEjemplarCodMat = document.getElementById(
    "inp_ejemplar-codigoMaterial"
  ).value;
  ejemplares.push(
    `<li> ID estado: ${inpEjemplarIdEstado} Descripción: ${inpEjemplarDesc} Código material: ${inpEjemplarCodMat} </li>`
  );
  document.getElementById("return-ejemplar").innerHTML = ejemplares;
});

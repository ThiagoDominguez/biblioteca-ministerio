const estados = [];
const btnEstado = document.getElementById("btn-estado");
const inpEstadoId = document.getElementById("inp_estado-id").value;

const inpEstadoDesc = document.getElementById("inp_estado-desc").value;
const inpEstadoCodMat = document.getElementById(
  "inp_estado-codigoMaterial"
).value;

btnEstado.addEventListener("click", () => {
  const inpEstadoId = document.getElementById("inp_estado-id").value;

  const inpEstadoDesc = document.getElementById("inp_estado-desc").value;
  const inpEstadoCodMat = document.getElementById(
    "inp_estado-codigoMaterial"
  ).value;
  estados.push(
    `<li> ID estado: ${inpEstadoId} Descripción: ${inpEstadoDesc} Código material: ${inpEstadoCodMat} </li>`
  );
  document.getElementById("return-estado").innerHTML = estados;
});

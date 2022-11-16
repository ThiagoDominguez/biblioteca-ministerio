const material = [];
const btnMaterial = document.getElementById("btn-material");
const idMaterial = document.getElementById("inp_material-id");
const descMaterial = document.getElementById("inp_material-desc");
const fechaMaterial = document.getElementById("inp_material-fecha");
btnMaterial.addEventListener("click", () => {
  const idMaterial = document.getElementById("inp_material-id").value;
  const descMaterial = document.getElementById("inp_material-desc").value;
  const fechaMaterial = document.getElementById("inp_material-fecha").value;
  material.push(
    `<li style="text-align:center; "></br>ID: ${idMaterial}</br> Descripcion: ${descMaterial}</br> Fecha: ${fechaMaterial}</li>`
  );
  document.getElementById("return-material").innerHTML = material;
});
// export {
//   agregarMaterial,
//   material,
//   idMaterial,
//   btnMaterial,
//   descMaterial,
//   fechaMaterial,
// };

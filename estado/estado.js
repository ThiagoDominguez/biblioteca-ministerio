document.getElementById("form_estado").addEventListener("submit", function (e) {
  e.preventDefault();
  let formulario = document.getElementById("form_estado");
  let formEstado = new FormData(formulario);

  fetch("regEst.php", {
    method: "POST",
    body: formEstado,
  })
    .then((res) => res.json())
    .then((data) => {
      if (data == "true") {
        document.getElementById("inp_estado-id").value = "";
        document.getElementById("inp_estado-desc").value = "";
        document.getElementById("inp_estado-codigoMaterial").value = "";
        alert("Estado agregado");
      } else console.log();
    });
});

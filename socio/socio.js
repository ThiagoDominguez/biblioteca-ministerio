document.getElementById("form_socio").addEventListener("submit", function (e) {
  e.preventDefault();
  let formulario = document.getElementById("form_socio");
  let formSocio = new FormData(formulario);
  fetch("regSoc.php", {
    method: "POST",
    body: formSocio,
  })
    .then((res) => res.json())
    .then((data) => {
      if (data == "true") {
        document.getElementById("inp_socio-cod").value = "";
        document.getElementById("inp_socio-dni").value = "";
        document.getElementById("inp_socio-name").value = "";
        document.getElementById("inp_socio-lastname").value = "";
        document.getElementById("inp_socio-address").value = "";
        document.getElementById("inp_socio-email").value = "";
        document.getElementById("inp_socio-tel").value = "";
        document.getElementById("inp_socio-condicion").value = "";
        document.getElementById("inp_socio-carrera").value = "";
        alert("Socio añadido");
      } else console.log(data);
    });
});

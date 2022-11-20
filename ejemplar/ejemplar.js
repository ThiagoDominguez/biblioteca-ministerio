document
  .getElementById("form_ejemplar")
  .addEventListener("submit", function (e) {
    e.preventDefault();
    let formulario = document.getElementById("form_ejemplar");
    let formEjemplar = new FormData(formulario);

    fetch("regEjem.php", {
      method: "POST",
      body: formEjemplar,
    })
      .then((res) => res.json())
      .then((data) => {
        if (data == "true") {
          document.getElementById("inp_ejemplar-idEstado").value = "";
          document.getElementById("inp_ejemplar-desc").value = "";
          document.getElementById("inp_ejemplar-codigoMaterial").value = "";
          alert("Ejemplar añadido");
        } else console.log(data);
      });
  });

document
  .getElementById("form_prestamo")
  .addEventListener("submit", function (e) {
    e.preventDefault();
    let formulario = document.getElementById("form_prestamo");
    let formPrestamo = new FormData(formulario);

    fetch("regPres.php", {
      method: "POST",
      body: formPrestamo,
    })
      .then((res) => res.json())
      .then((data) => {
        if (data == "true") {
          document.getElementById("inp_prestamo-id").value = "";
          document.getElementById("inp_prestamo-dni").value = "";
          document.getElementById("inp_prestamo-idMaterial").value = "";
          document.getElementById("inp_prestamo-fechaSalida").value = "";
          document.getElementById("inp_prestamo-fechaDevolucion").value = "";
          alert("Prestamo añadido", data);
        } else console.log(data);
      });
  });

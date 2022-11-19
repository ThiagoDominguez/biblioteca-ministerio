document
  .getElementById("form_usuario")
  .addEventListener("submit", function (e) {
    e.preventDefault();
    let formulario = document.getElementById("form_usuario");
    let formUsuario = new FormData(formulario);

    fetch("regUs.php", {
      method: "POST",
      body: formUsuario,
    })
      .then((res) => res.json())
      .then((data) => {
        if (data == "true") {
          document.getElementById("inp_usuario-dni").value = "";
          document.getElementById("inp_usuario-name").value = "";
          document.getElementById("inp_usuario-lastname").value = "";
          alert("El usuario se insertó correctamente");
        } else console.log(data);
      });
  });

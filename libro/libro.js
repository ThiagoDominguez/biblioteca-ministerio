document.getElementById("form_libro").addEventListener("submit", function (e) {
  e.preventDefault();
  let formulario = document.getElementById("form_libro");
  let formLibro = new FormData(formulario);

  fetch("regLib.php", {
    method: "POST",
    body: formLibro,
  })
    .then((res) => res.json())
    .then((data) => {
      if (data == "true") {
        document.getElementById("inp_libro-autor").value = "";
        document.getElementById("inp_libro-numeroInventario").value = "";
        document.getElementById("inp_libro-codigoInventario").value = "";
        document.getElementById("inp_libro-codigoMaterial").value = "";
        alert("Libro añadido");
      } else console.log(data);
    });
});

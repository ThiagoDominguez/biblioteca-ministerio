document
  .getElementById("form_material")
  .addEventListener("submit", function (e) {
    e.preventDefault();
    let formulario = document.getElementById("form_material");

    let formMaterial = new FormData(formulario);
    fetch("regMat.php", {
      method: "POST",
      body: formMaterial,
    })
      .then((res) => res.json())
      .then((data) => {
        if (data == "true") {
          document.getElementById("inp_material-id").value = "";
          document.getElementById("inp_material-desc").value = "";
          document.getElementById("inp_material-fecha").value = "";
          alert("Material añadido");
        } else console.log(data);
        alert(data);
      });
  });

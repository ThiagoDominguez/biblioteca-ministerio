const socios = [];
const btnSocio = document.getElementById("btn-socio");
const inpDniSocio = document.getElementById("inp_socio-dni");
const inpNameSocio = document.getElementById("inp_socio-name");
const inpLastNameSocio = document.getElementById("inp_socio-lastname");
const inpAddressSocio = document.getElementById("inp_socio-address");
const inpEmailSocio = document.getElementById("inp_socio-email");

btnSocio.addEventListener("click", () => {
  const inpDniSocio = document.getElementById("inp_socio-dni").value;
  const inpNameSocio = document.getElementById("inp_socio-name").value;
  const inpLastNameSocio = document.getElementById("inp_socio-lastname").value;
  const inpAddressSocio = document.getElementById("inp_socio-address").value;
  const inpEmailSocio = document.getElementById("inp_socio-email").value;

  socios.push(
    `<li>DNI: ${inpDniSocio} Nombre: ${inpNameSocio} Apellido: ${inpLastNameSocio} Dirección: ${inpAddressSocio} Email: ${inpEmailSocio} </li>`
  );
  document.getElementById("return-socio").innerHTML = socios;
});

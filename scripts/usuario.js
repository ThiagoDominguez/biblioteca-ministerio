window.onload = () => {
  const mysql = require("mysql");
};

function insertUsuario(connection, datos, callback) {
  let insertQuery =
    "INSERT INTO usuario(id_usuario,nombre,apellido) VALUES(?,?,?)";
  let query = mysql.format(insertQuery, [
    datos.id_usuario,
    datos.nombre,
    datos.apellido,
  ]);
  connection.query(query, function (err, result) {
    if (err) throw err;
    callback(result);
  });
}
// module.exports = { insertUsuario };

///////////////////////////////////////////
let usuarios = [];
const btnUsuario = document.getElementById("btn-usuario");
const inpDni = document.getElementById("inp_usuario-dni").value;
const inpName = document.getElementById("inp_usuario-name").value;
const inpLastName = document.getElementById("inp_usuario-lastname").value;

class Usuario {
  constructor(id_usuario, nombreUsuario, apellidoUsuario) {
    this._id_usuario = inpDni.value;
    this._nombreUsuario = inpName;
    this._apellidoUsuario = inpLastName;
    this._id_usuario = id_usuario;
    this._nombreUsuario = nombreUsuario;
    this._apellidoUsuario = apellidoUsuario;
  }
}

btnUsuario.addEventListener("click", () => {
  const inpDni = document.getElementById("inp_usuario-dni").value;
  const inpName = document.getElementById("inp_usuario-name").value;
  const inpLastName = document.getElementById("inp_usuario-lastname").value;
  const user = new Usuario(inpDni, inpName, inpLastName);
  usuarios.push(`<li style="text-align: center;">DNI: ${user._id_usuario},

  Nombre: ${user._nombreUsuario},

  Apellido: ${user._apellidoUsuario}</li>`);
  document.getElementById("p-return").innerHTML = usuarios;
});

// exports.module = { insertUsuario };
// export { usuarios, btnUsuario, inpDni, inpName, inpLastName };

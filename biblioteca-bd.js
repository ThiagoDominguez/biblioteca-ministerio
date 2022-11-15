// Configuracion de la Base de datos
const mysql_bd = require("mysql");

const connection = mysql_bd.createConnection({
  host: "localhost",
  user: "Thiago",
  password: "2001",
  database: "biblioteca",
});

// Conexion de la base de datos
connection.connect((err) => {
  if (err) throw err;
  console.log("La conexion funciona");
});

// Prueba de consultas

connection.query(`SELECT * FROM usuario`, (err, rows) => {
  if (err) throw err;
  console.log("Los datos de la tabla son estos: ");
  console.log(rows);
});

const inpDni = document.getElementById("inp_usuario-dni").innerHTML;
const inpName = document.getElementById("inp_usuario-name").innerHTML;
const inpLastName = document.getElementById("inp_usuario-lastname").innerHTML;
const btn = document.getElementById("btn");
const insert = connection.query(
  `INSERT INTO usuario VALUES(${inpDni},${inpName},${inpLastName})`
);
function agregarUsuario() {
  insert();
}
btn.addEventListener("click", agregarUsuario());

// TODO: lograr que los datos de los input lleguen a la bd
//////////////////////////////////////////////////////////////

// Configuracion de la Base de datos
const mysql_bd = require("mysql");

const connection = mysql_bd.createConnection({
  host: "localhost",
  user: "Thiago",
  password: "2001",
  database: "biblioteca",
});
1;

// Conexion de la base de datos
connection.connect((err) => {
  if (err) throw err;
  console.log("La conexion funciona");
});

// Prueba de consultas

connection.query("SELECT * FROM usuario", (err, rows) => {
  if (err) throw err;
  console.log("Los datos de la tabla son estos: ");
  console.log(rows);
});

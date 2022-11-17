// // import {
// //   insertUsuario,
// //   inpDni,
// //   inpName,
// //   inpLastName,
// // } from "./scripts/usuario.js";
// // Configuracion servidor
const express = require("express");

const app = express();

app.use(express.json());

app.get("/", (req, res) => {
  res.send("hello world");
});

app.get("/insertUsuario", (req, res) => {
  insertUsuario(
    connection,
    { id_usuario: 43539795, nombre: "Thiago Demian", apellido: "Dominguez" },
    (result) => {
      res.json(result);
    }
  );
});

app.listen(3000, () => {
  console.log("Servidor en puerto 3000");
});

// //////////////////////////////////////////

// // Llamando variable de entorno
// import{("dotenv").config()};

// // Configuracion de la Base de datos
const mysql = require("mysql");

const connection = mysql.createConnection({
  host: "localhost",
  user: "Thiago",
  password: "2001",
  database: "biblioteca",
});

// // Conexion de la base de datos
connection.connect((err) => {
  if (err) throw err;
  console.log("La conexion funciona");
});

// // // Prueba de consultas

connection.query(`SELECT * FROM usuario`, (err, rows) => {
  if (err) throw err;
  console.log("Los datos de la tabla son estos: ");
  console.log(rows);
});

function insertUsuario(connection, datos, callback) {
  let insertQuery =
    "INSERT INTO usuario(id_usuario,nombre,apellido) VALUES(45539795,'Thiago Demian','Dominguez')";
  // let query = mysql.format(insertQuery, [
  //   datos.id_usuario,
  //   datos.nombre,
  //   datos.apellido,
  // ]);
  connection.query(insertQuery, function (err, result) {
    if (err) throw err;
    callback(result);
  });
}
// // export const module = { mysql_bd };

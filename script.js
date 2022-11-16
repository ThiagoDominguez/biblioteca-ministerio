// DATOS DE USUARIOS
// import {
//   usuarios,
//   btnUsuario,
//   inpDni,
//   inpName,
//   inpLastName,
// } from "./scripts/usuario.js";

// DATOS DE MATERIAL

// import {
//   agregarMaterial,
//   material,
//   btnMaterial,
//   idMaterial,
//   descMaterial,
//   fechaMaterial,
// } from "./scripts/material.js";
// TODO:recuperar los datos del input
// TODO:que el boton devuelva los datos del input
// TODO:pasar los datos del input al diagrama de clases
///////////////////////////////////////////////////////////////////////////////

class Ejemplar {
  constructor(id_ejemplar, id_material, descripcionEjemplar, fecha) {
    this.id_ejemplar = id_ejemplar;
    this._id_material = id_material;
    this._descripcion = descripcionEjemplar;
    this._fecha = fecha;
  }
}

class Material {
  constructor(id_material, descripcionMaterial, fecha) {
    this._id_material = idMaterial;
    this._descripcionMaterial = descMaterial;
    this._fecha = fechaMaterial;
    this._id_material = id_material;
    this._descripcionMaterial = descripcionMaterial;
    this._fecha = fecha;
  }
}

class Libro {
  constructor(num_inv, inicialesAutor, cod_inv, id_material) {
    this._num_inv = num_inv;
    this._inicialesAutor = inicialesAutor;
    this._cod_inv = cod_inv;
    Material.id_material = id_material;
  }
}
class Estado {
  constructor(id_estado, descripcionEstado, id_material) {
    this._id_estado = id_estado;
    this._descripcionEstado = descripcionEstado;
    this._id_material = id_material;
  }
}
class Socio {
  constructor(
    id_socio,
    nombreSocio,
    apellidoSocio,
    direccionSocio,
    telefonoSocio,
    emailSocio
  ) {
    this._id_socio = id_socio;
    this._nombreSocio = nombreSocio;
    this._apellidoSocio = apellidoSocio;
    this._direccionSocio = direccionSocio;
    this._telefonoSocio = telefonoSocio;
    this._emailSocio = emailSocio;
  }
}
class Prestamo {
  constructor(
    id_prestamo,
    id_socio,
    id_material,
    fecha_salida,
    fecha_devolucion
  ) {
    this._id_prestamo = id_prestamo;
    Socio.id_socio = id_socio;
    Material.id_material = id_material;
    this._fecha_salida = fecha_salida;
    this._fecha_devolucion = fecha_devolucion;
  }
}

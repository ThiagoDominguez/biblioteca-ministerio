// DATOS DE USUARIOS
// let usuarios = [];
// const btnUsuario = document.getElementById("btn-usuario");
// const inpDni = document.getElementById("inp_usuario-dni").value;
// const inpName = document.getElementById("inp_usuario-name").value;
// const inpLastName = document.getElementById("inp_usuario-lastname").value;

// DATOS DE MATERIAL

import {
  btnMaterial,
  idMaterial,
  descMaterial,
  fechaMaterial,
} from "./material-js";
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

// btnUsuario.addEventListener("click", () => {
//   const inpDni = document.getElementById("inp_usuario-dni").value;
//   const inpName = document.getElementById("inp_usuario-name").value;
//   const inpLastName = document.getElementById("inp_usuario-lastname").value;
//   const user = new Usuario(inpDni, inpName, inpLastName);
//   usuarios.push(`DNI: ${user._id_usuario},

//   Nombre: ${user._nombreUsuario},

//   Apellido: ${user._apellidoUsuario}`);
//   document.getElementById("p-return").innerHTML = usuarios;
// });
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

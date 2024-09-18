function validar() {
    // Obtener los valores de los campos correctamente usando getElementById
    let opc1 = document.getElementById("opcion").value;
    let opc2 = document.getElementById("opcion2").value;
    let num = document.getElementById("documento").value;
    let nom = document.getElementById("nombre").value;
    let ape = document.getElementById("apellido").value;
    let email = document.getElementById("correo").value;
    let tel = document.getElementById("telefono").value;
    let contra = document.getElementById("contraseña").value;


    if (opc1 === "op" || opc2 === "oc") {
        Swal.fire({
            icon: "error",
            title: "Oops...",
            text: "Debe seleccionar una opción válida!"
        });
        return false;
    }

    if (num === "" || nom === "" || ape === "" || email === "" || tel === "" || contra === "") {
        Swal.fire({
            icon: "error",
            title: "Oops...",
            text: "Debe llenar todos los campos!"
        });
        return false;
    }


    if (contra.length !== 7) {
        Swal.fire({
            icon: "error",
            title: "Oops...",
            text: "La contraseña debe tener 7 caracteres",
        });
        return false;
    }
    Swal.fire({
        title: "Gracias!",
        text: "Haz completado el resgistro!",
        icon: "success"
      });
    return true;
}



function validar() {
    // Obtener los valores de los elementos del formulario
    let opci = document.getElementsByName("opcion")[0].value;
    let docu = document.getElementsByName("id")[0].value;
    let name = document.getElementsByName("nombre")[0].value;
    let apell = document.getElementsByName("ape")[0].value;
    let tel = document.getElementsByName("telefono")[0].value;
    let email = document.getElementsByName("correo")[0].value;
    let contra = document.getElementsByName("contra")[0].value;
    let user = document.getElementsByName("opcion2")[0].value;


    if (opci === "op" || user === "op2") {
        Swal.fire({
            icon: "error",
            title: "Oops...",
            text: "Debe seleccionar una opción válida!"
        });
        return false;
    }

    
    if (docu === "" || name === "" || apell === "" || tel === "" || email === "" || contra === "" ) {
        Swal.fire({
            icon: "error",
            title: "Oops...",
            text: "Debe llenar los campos requeridos!"
        });
        return false;
    }
    return true;
}


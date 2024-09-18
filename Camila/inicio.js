function validar() {
    let us = document.getElementById("usuario").value;
    let con = document.getElementById("contraseña").value;

    if (us === "" || con === "") {
        Swal.fire({
            icon: "error",
            title: "Oops...",
            text: "Debe llenar todos los campos!"
        });
        return false;
    }
    return true;
}

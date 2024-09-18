function validar(){
    let us= document.getElementsByName("usuario").values;
    let con= document.getElementsByName("contraseña").values;

    if(us=="" && con==""){
        Swal.fire({
            icon: "error",
            title: "Oops...",
            text: "Debe llenar todos los campos!"
        });
        return false;
    }
    return true;
}
function Limpiar(){
      var acepta=confirm("Seguro de Limpiar Campos del Formulario");
      if(acepta){
            return true;
      }
      else{
            return false;
      }
      }

function Validar(){
       let nume=document.getElementById('numero').value;
       let nombre=document.getElementById('nombre').value;
       let usuario=document.getElementById('user').value;
       let contrasena=document.getElementById('contrasena').value;
       let contrasena2=document.getElementById('contrasena2').value;
         if(nume==""){
            Swal.fire({
                  icon: "error",
                  title: "Oops...",
                  text: "Debe ingresar un numero de indetificacion",
                });
      return false;
            }
      if(nombre==""){
            Swal.fire({
                  icon: "error",
                  title: "Oops...",
                  text: "Debe ingresar un nombre completo",
                });
      return false;
       }
       if(usuario==""){
            Swal.fire({
                  icon: "error",
                  title: "Oops...",
                  text: "Debe ingresar un nombre de usuario",
                });
      return false;
       }
       if(contrasena=="" ){
            Swal.fire({
                  icon: "error",
                  title: "Oops...",
                  text: "Debe ingresar una contrasena",
                });
                return false;
       }else{
            if(contrasena.length!==7){
                  Swal.fire({
                        icon: "error",
                        title: "Oops...",
                        text: "La contrasena debe tener al menos 7 caracteres y contener al menos una letra mayuscula, una letra minuscula, un numero y un caracter especial",
                      });
                      return false;
            }
      }
      if(contrasena2==""){
            Swal.fire({
                  icon: "error",
                  title: "Oops...",
                  text: "Debe confirmar su contrasena",
                });
      return false;
      }else{
            if(contrasena!=contrasena2){
                  Swal.fire({
                        icon: "error",
                        title: "Oops...",
                        text: "Las contrasenas no coinciden",
                      });
            return false;
            }
      }
}     

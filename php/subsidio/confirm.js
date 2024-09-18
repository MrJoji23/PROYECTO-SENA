function Limpiar(){
      var acepta = confirm
    return acepta;
      }

      function Validar(){
      if(document.form.nombre.value==""){
            Swal.fire({
                  icon: "error",
                  title: "Oops...",
                  text: "Debe ingresar nombres completos",
                });
          return false;
      }
      if(document.form.salario.value==""){
            Swal.fire({
                  icon: "error",
                  title: "Oops...",
                  text: "Debe ingresar su salario",
                });
      return false;
      }else{
          if(document.form.dias.value==""){
            Swal.fire({
                  icon: "error",
                  title: "Oops...",
                  text: "Debe ingresar sus dias trabajados",
                });
              return false;
      }
  }
}


function login(){
  iniciar= "usuario=" + $('#usuario').val() +
  "&password=" + $('#password').val();

  
  if($('#usuario').val()==""){
    swal('Upps','Ingresa tu "Usuario" por favor','warning');
    return false;
  }else if($('#password').val()==""){
    swal('Upps','Password" por favor','warning');
    return false;
  }


  console.log(iniciar);

  $.ajax({
    type: "POST",
    url: "control/login.php",
    data: iniciar,
    success: function(r){
      
      if(r==1){
        console.log("conectado");
        swal('Yeah', 'Conectado', 'success');
        window.location = "administrar/admi.php";
        return false;
      }else{
       
        console.log(r);
        $('#formulario_login')[0].reset();//Limpia las cajas para evitar errores
        swal('Upps','Algo salio mal','warning');
        //console.log("desconectado");
        return false;

      }

    }
  });

}


function registro(){
  
  informacion= "regis_usuario=" + $('#regis_usuario').val() +
  "&regis_password=" + $('#regis_password').val();

  console.log(informacion);

  if($('#regis_usuario').val()==""){
    swal('Upps','Ingresa tu "Usuario" por favor','warning');
    return false;
  }else if($('#regis_password').val()==""){
    swal('Upps','Password" por favor','warning');
    return false;
  }



  $.ajax({
    type: "POST",
    url: "control/guardar_usuario.php",
    data: informacion,
    success: function(r){
      if(r==1){
        $('#formulario_registro')[0].reset();//Limpia las cajas para evitar errores
        swal('Yeah', 'Registro Exitoso', 'success');
        console.log("registrado");
        return false;
      }else if(r==2){
        console.log("error");
        return false;
      }else{
        swal('Upps','Algo salio mal','warning');
        return false;

      }

    }
  });

  


}

//pedidos
function mostrar_datos(){
  $.ajax({
    url:'control/mostrar_usuarios.php',
    success: function(r){
      $('#datos_tabla').html(r);
    }
  });
}
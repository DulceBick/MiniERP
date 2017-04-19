function sweet(){
 swal({
  
  title: "¿Estás seguro de checar Salida?",
  text: "Recuerda: Hora de Salida a las 8:00",
  type: "warning",
  showCancelButton: true,
  confirmButtonColor: "#DD6B55",
  confirmButtonText: "Si,Checar",
  cancelButtonText: "No, Cancelar!",
  closeOnConfirm: false,
  closeOnCancel: false
},
function(isConfirm){
  if (isConfirm) {
    swal("Hecho", "Hora de Salida Registrada", "success");
  } else {
    swal("Cancelado", "Se ha cancelado la acción", "error");
  }
});
    
}
function error(){
    
    sweetAlert("Oops...", "Hubo algo mal!", "error");
}


function entrada(){
    swal({
  title: "Entrada!",
  text: "Buenos dias:",
  type: "input",
  showCancelButton: true,
  closeOnConfirm: false,
  animation: "slide-from-top",
  inputPlaceholder: "Write something"
},
function(inputValue){
  if (inputValue === false){
    return false;  
  }else if (inputValue === "") {
    swal.showInputError("You need to write something!");
    return false
  }else{
    //swal("Nice!", "You wrote: " + inputValue, "success");
    $.ajax({
      type: "POST",
        url: "entrada.php",
        data: "matricula="+inputValue,
        success:function(data){
            console.log(data);
        }
    }).done(function(data){
        if(data == '1'){
            swal("Correcto!", "Acabas checar tu entrada!", "success");    
        }else{
            swal("Oppss...!", "Ya checaste tu entrada!", "error");
        }
    }).error(function(data){
        swal("Oppss...!", "Problema con los servidores de Steam :(!", "error");
        console.log(data);
    });
  }
  
  
});
};



function salida(){
      swal({
  title: "Salida!",
  text: "Excelente tarde:",
  type: "input",
  showCancelButton: true,
  closeOnConfirm: false,
  animation: "slide-from-top",
  inputPlaceholder: "Escribe tu matricula!!"
},
function(inputValue){
  if (inputValue === false){
    return false;  
  }else if (inputValue === "") {
    swal.showInputError("Tu matricula porfavor!");
    return false
  }else{
    //swal("Nice!", "You wrote: " + inputValue, "success");
    $.ajax({
      type: "POST",
        url: "salida.php",
        data: "matricula="+inputValue,
        success:function(data){
            console.log(data);
        }
    }).done(function(data){
        if(data == '1'){
            swal("Correcto!", "Acabas checar tu salida!", "success");    
        }else{
            swal("Oppss...!", "Ya checaste tu salida!", "error");
        }
        
    }).error(function(data){
        swal("Oppss...!", "Problema con los servidores de Steam :(!", "error");
        console.log(data);
    });
  }
  
  
});  
}
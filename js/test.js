var arreglocheckboxid = [];
var arregloinputs = [];
var arregloidsLibros = [];
var getID = function () {
    var arreglocheckboxid = [];
    var arregloinputs = [];
    var arregloidsLibros = [];

    var boxes = $(":checkbox:checked");

    for(var i = 0; i<boxes.length; i++){
        var res = boxes[i].name.split("_");
        arreglocheckboxid.push(res[1]); arregloinputs.push($("input[name='input_"+arreglocheckboxid[i]+"']").val());
        arregloidsLibros.push($("input[name='"+boxes[i].name+"']").val());
    }
    //console.log(arregloidsLibros);
    //console.log(arregloinputs);

        $.ajax({
        type: "POST",
        url: "compraConsulta.php",
        dataType: "json",
        data: {"ids":arregloidsLibros,"values":arregloinputs},
        success:function(data){
            console.log(data);
        }
        }).done(function(data){
            //location.reload();
        }).error(function(data){
            //location.reload();
        });

};
var setPDF = function (){
    var arreglocheckboxid = [];
    var arregloinputs = [];
    var arregloidsLibros = [];

    var boxes = $(":checkbox:checked");

    for(var i = 0; i<boxes.length; i++){
        
    $.ajax({
        type: "POST",
        url: "compra.php",
        dataType: "json",
        data: {"ids":arregloidsLibros,"values":arregloinputs},
        success:function(data){
            console.log(data);
        }
        });
}


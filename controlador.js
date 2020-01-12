$(function() {

    $("#registrar").click(function(e){
        e.preventDefault();
        var data= {nombre : $('#nombre').val(), asignatura : $('#asignatura').val(), nota: $('#nota').val()};
        var request = $ajax({
            url: 'insertar.php',
            method: 'post',
            data: data,
            dataType: "json"
        });

       console.log(request);
    });
});
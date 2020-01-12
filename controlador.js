$(function () {
    $("#registrar").click(function (e) {

        $.ajax('insertar.php', // request url
            {
                type: 'POST',
                data: {
                    nombre: $('#nombre').val(),
                    asignatura: $('#asignatura').val(),
                    nota: $('#nota').val()
                },
                success: function (data, status, xhr) { // success callback function
                    console.log(JSON.parse(data));
                }
            });



    });


    $("#registrar").click(function (e) {

        $.ajax('insertar.php', // request url
            {
                type: 'POST',
                data: {
                    nombre: $('#nombre').val(),
                    asignatura: $('#asignatura').val(),
                    nota: $('#nota').val()
                },
                success: function (data, status, xhr) { // success callback function
                    console.log(JSON.parse(data));
                }
            });



    });

    $("#update").click(function (e) {
        $('#nombre').val("dsad")
        $('#asignatura').val("dsad")
        $('#nota').val("dsad")

        $.ajax('update.php', // request url
            {
                type: 'POST',
                data: {
                    nombre: $('#nombre').val(),
                    asignatura: $('#asignatura').val(),
                    nota: $('#nota').val()
                },
                success: function (data, status, xhr) { // success callback function
                    console.log(JSON.parse(data));
                }
            });



    });

});
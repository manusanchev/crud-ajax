function cargar(){
    if(window.XMLHttpRequest){
        peticion = new XMLHttpRequest();
    }

    peticion.onreadystatechange = function(){
        if(this.status === 200 && this.readyState===4){
            var mensajes = JSON.parse(this.responseText);
            console.log(mensajes);
        }
    }

    let query = crear_query();
    peticion.open('POST',"insertar.php",true)
    peticion.send();
    
}

function usuario_chat(){
    //variable de sesion para guardar el usuario con el que estas hablando
}

function crear_query(){
    var mensaje = document.getElementById("mensaje");

}
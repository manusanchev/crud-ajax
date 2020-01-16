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
}
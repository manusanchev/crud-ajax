window.onload = function (){

    if(window.XMLHttpRequest){
        peticion = new XMLHttpRequest();
    }
}

function iniciarInsertar(){


    peticion.onreadystatechange = function(){
   
        if(this.readyState == 4 && this.status == 200){
            let pe =eval("("+peticion.responseText+")");
            
        }
    };

    let q = insertar();

    peticion.open("POST","insertar.php",true);
    peticion.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    peticion.send(q);
}

function insertar(){
    let nombre = document.getElementById("nombre").value;
    let asignatura = document.getElementById("asignatura").value;
    let nota = document.getElementById("nota").value;
    
    return "nombre="+encodeURIComponent(nombre)+"&asignatura="+encodeURIComponent(asignatura)+"&nota="+encodeURIComponent(nota)+"$nCache="+Math.random();
    
}


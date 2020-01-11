window.onload = function (){
    var peticion ="";
    tabla = document.getElementById("tableBody")
    if(window.XMLHttpRequest){
        peticion = new XMLHttpRequest();
    }
    peticion.onreadystatechange = function(){
       
        if(this.readyState == 4 && this.status == 200){
            let pe = JSON.parse(peticion.responseText);
        
            for (const datos of pe) {
                var tr = document.createElement("tr");
                var tdID = document.createElement("td");
                var tdNombre = document.createElement("td");
                var tdAsignatura = document.createElement("td");
                var tdEditar = document.createElement("td");
                var tdBorrar= document.createElement("td");
                var tdNota = document.createElement("td");
                var textID = document.createTextNode(datos['id']);
                var textNombre = document.createTextNode(datos['nombre']);
                var textAsignaturas = document.createTextNode(datos['asignatura']);
                var textNota = document.createTextNode(datos['nota']);
               
                tdID.appendChild(textID);
                tdNombre.appendChild(textNombre);
                tdAsignatura.appendChild(textAsignaturas);
                tdNota.appendChild(textNota);
                tdEditar.appendChild(document.createTextNode("Editar"))
                tr.appendChild(tdID);
                tr.appendChild(tdNombre);
                tr.appendChild(tdAsignatura);
                tr.appendChild(tdNota);
                tabla.appendChild(tr);
            }
        }
    };

    peticion.open("POST","iniciar.php",true);
    peticion.send();
};


function iniciarInsertar(){
    var peticion = "";
    if(window.XMLHttpRequest){
        peticion = new XMLHttpRequest();
    }
    peticion.onreadystatechange = function(){
        
        if(this.readyState == 4 && this.status == 200){
            let pe = JSON.parse(peticion.responseText);
            console.log(pe);
            tabla.innerHTML ="";
            for (const datos of pe) {
                var tr = document.createElement("tr");
                var tdID = document.createElement("td");
                var tdNombre = document.createElement("td");
                var tdAsignatura = document.createElement("td");
                var tdEditar = document.createElement("td");
                var tdBorrar= document.createElement("td");
                var tdNota = document.createElement("td");
                var textID = document.createTextNode(datos['id']);
                var textNombre = document.createTextNode(datos['nombre']);
                var textAsignaturas = document.createTextNode(datos['asignatura']);
                var textNota = document.createTextNode(datos['nota']);
               
                tdID.appendChild(textID);
                tdNombre.appendChild(textNombre);
                tdAsignatura.appendChild(textAsignaturas);
                tdNota.appendChild(textNota);
                tdEditar.appendChild(document.createTextNode("Editar"))
                tr.appendChild(tdID);
                tr.appendChild(tdNombre);
                tr.appendChild(tdAsignatura);
                tr.appendChild(tdNota);
                tabla.appendChild(tr);
            }
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


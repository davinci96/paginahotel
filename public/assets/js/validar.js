function validar1(){
    var correo, contrasena;
    correo= document.getElementById("correo").value;
    contrasena= document.getElementById("contrasena").value;

    if(correo === "" || contrasena === ""){
        alert("Todos los campos son obligatorios");
        return false;
    }
    
}
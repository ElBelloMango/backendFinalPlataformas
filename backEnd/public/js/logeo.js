let boton, name, email, password;
function logeo(){

    // boton = document.getElementById("registrar");
    // name = document.getElementById("name");
    email = document.getElementById("email");
    password = document.getElementById("password");

    enviarDatos({
        
    });
}
function enviarDatos(datos){
    axios({
        method: 'post',
        url: 'api/auth/',
        data: {
            email: datos.email,
            password: datos.password,
        }
    }).then(function(data){
        alert("Usuario logeado correctamente");
        console.log(data);
        // localStorage.setItem("token",data.data.token);
    }).catch(function (error){
        alert(error);
        console.log(error);
    });
}
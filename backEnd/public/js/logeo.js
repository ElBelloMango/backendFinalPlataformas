let boton, name, email, password;
function logeo(){

    boton = document.getElementById("logear");
    // name = document.getElementById("name");
    email = document.getElementById("email");
    password = document.getElementById("password");

    boton.addEventListener("click", ()=>{
        enviarDatos({
            email:email.value,
            password:password.value
        });
    });
}
function enviarDatos(datos){
    axios({
        method: 'post',
        url: 'api/auth/login',
        data: {
            email: datos.email,
            password: datos.password,
        }
    }).then(function(data){
        alert("Usuario logeado correctamente");
        logeado = true;
        console.log(data);
        // localStorage.setItem("token",data.data.token);
    }).catch(function (error){
        alert(error);
        console.log(error);
    });
}
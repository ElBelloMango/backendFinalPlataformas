<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap Core CSS -->
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<!-- Custom CSS -->
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<!-- font-awesome icons -->
	<link href="css/fontawesome-all.min.css" rel="stylesheet">
	<!-- //Custom Theme files -->
	<!--webfonts-->
	<link href="//fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i" rel="stylesheet">
	<!--//webfonts-->
    <script src="js/pristine.js"></script>
    <script src="js/pristine.min.js"></script>
    <!-- <script src="js/registroLogueo.js"></script> -->
</head>

<body>
       <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
        <script>
            let boton, name, email, password, cellphone, address;
            window.onload = ()=>{

                boton = document.getElementById("registrar");
                name = document.getElementById("name");
                email = document.getElementById("email");
                password = document.getElementById("password");
                cellphone = document.getElementById("cellphone");
                address = document.getElementById("address");

                boton.addEventListener("click", ()=>{
                    enviarDatos({
                        name:name.value,
                        email:email.value,
                        password:password.value
                        cellphone:cellphone.value,
                        address:address.value
                    });
                });
            }
            function enviarDatos(datos){
                console.dir(datos);
                axios({
                    method: 'post',
                    url: 'api/registro',
                    data: {
                        name: datos.name,
                        email: datos.email,
                        password: datos.password,
                        cellphone:datos.cellphone,
                        address:datos.address
                    }
                }).then(function(data){
                    alert("Usuario registrado correctamente");
                    console.log(data);
                    localStorage.setItem("token",data.data.token);
                    location.assign("/");
                    // localStorage.setItem("token",data.data.token);
                }).catch(function (error){
                    alert(error);
                    console.log(error);
                });
            }
        </script>
    <div class=RegCont>
        <h3>Registro</h3>
        <div class=formCont>
            <form id="form-demo" class="container">
                <div class="form-group">
                    <label>Nombre</label>
                    <br><input type="text" id="name" name="name" class="form-control" requerid>
                </div>
                <!-- <div class="form-group">
                    <label>Apellido</label>
                    <br><input type="text" id="apellido" name="apellido" class="form-control" requerid>
                </div> -->
                <div class="form-group">
                    <label>Correo</label>
                    <br><input type="email" id="email" name="email" class="form-control" requerid>
                </div>
                <div class="form-group">
                    <label>Contrase&ntilde;a</label>
                    <br><input type="password" id="password" name="password" class="form-control" requerid>
                </div>
                <div class="form-group">
                    <label>Celular</label>
                    <br><input type="text" id="cellphone" name="cellphone" class="form-control" requerid>
                </div>
                <div class="form-group">
                    <label>Direccion</label>
                    <br><input type="text" id="address" name="address" class="form-control" requerid>
                </div>
                <!-- <div class="form-group">
                    <label>Validar Contrase&ntilde;a</label>
                    <br><input type="password" id="password2" name="password2" class="form-control" requerid>
                </div> -->
                <div class="form-group">
                    <!-- <br><input class="btn-agile" type="submit" id = "registrar" name="registrar" value="Registrarse"> -->
                    <br><input class="btn-agile" type="button" id = "registrar" name="registrar" value="Registrarse">
                </div>
            </form>
        </div>
    </div>
    
</body>

</html>
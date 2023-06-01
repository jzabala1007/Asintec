<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesión</title>
    <style>
        html {
            height: 100%;
        }

        body {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
            background: linear-gradient(#26547C,#EF476F );
        }
/*#141e30, #767de2*/
        .contenedor {
            position: absolute;
            top: 50%;
            left: 75%;
            width: 300px;
            padding: 20px;
            transform: translate(-50%, -50%);
            background: #FBFCFC;
            box-shadow: 0 15px 25px rgba(0, 0, 0, 6);
            border-radius: 40px;
        }

        .contenedor h1 {
            margin: 0 0 10px;
            padding: 10px;
            color: #26547C;
            text-align: center;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        }

        .contenedor h2 {
            margin: 0 0 30px;
            padding: 0;
            color: #26547C;
            text-align: center;
        }

        .contenedor .usuario {
            position: relative;
        }

        .contenedor .usuario input {
            width: 100%;
            padding: 10px 0;
            font-size: 16px;
            color: #17202A;
            margin-bottom: 30px;
            border: none;
            border-bottom: 1px solid #17202A;
            outline: none;
            background: transparent;
        }

        .contenedor .usuario label {
            position: absolute;
            top: 0;
            left: 0;
            padding: 10px 0;
            font-size: 16px;
            color: #17202A;
            pointer-events: none;
            transition: .5s;
        }

        .contenedor .usuario input:focus~label,
        .contenedor .ususario input:valid~label {
            top: -20px;
            left: 0;
            color: #06d606;
            font-size: 12px;
        }

        .contenedor form a {
            position: relative;
            display: inline-block;
            padding: 10px 20px;
            color: #26547c;
            font-size: 13px;
            text-decoration: none;
            text-transform: uppercase;
            overflow: hidden;
            transition: .5s;
            margin-top: 40px;
            letter-spacing: 2px;
        }

        .contenedor a:hover {
            background: #26547c;
            color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 5px #26547c,
                0 0 25px #26547c,
                0 0 50px #26547c,
                0 0 100px #26547c;
        }

        .contenedor a span {
            position: absolute;
            display: block;
        }

        .contenedor a span:nth-child(1) {
            top: 0;
            left: -100%;
            width: 100%;
            height: 2px;
            background: linear-gradient(90deg, transparent, #03e9f4);
            animation: btn-anim1 1s linear infinite;
        }

        @keyframes btn-anim1 {
            0% {
                left: -100px;
            }

            50%,
            100% {
                left: 100%;
            }
        }

        .contenedor a span:nth-child(2) {
            top: -100%;
            right: 0;
            width: 2px;
            height: 100%;
            background: linear-gradient(180deg, transparent, #03e9f4);
            animation: btn-anim2 1s linear infinite;
            animation-delay: .25s;
        }

        @keyframes btn-anim2 {
            0% {
                top: -100%;
            }

            50%,
            100% {
                top: 100%;
            }
        }

        .contenedor a span:nth-child(3) {

            right: -100%;
            bottom: 0;
            height: 2px;
            width: 100%;
            background: linear-gradient(270deg, transparent, #03e9f4);
            animation: btn-anim3 1s linear infinite;
            animation-delay: .5s;
        }

        @keyframes btn-anim3 {
            0% {
                right: -100%;
            }

            50%,
            100% {
                right: 100%;
            }
        }

        .contenedor a span:nth-child(4) {
            bottom: -100%;
            left: 0;
            width: 2px;
            height: 100%;
            background: linear-gradient(270deg, transparent, #03e9f4);
            animation: btn-anim4 1s linear infinite;
            animation-delay: .75s;
        }

        @keyframes btn-anim4 {
            0% {
                bottom: -100%;
            }

            50%,
            100% {
                bottom: 100%;
            }
        }

        .imagen {
            position: absolute;
            top: 50%;
            left: 22%;
            width: 400px;
            height: 400px;
            padding: 30px 1px 20px;
            transform: translate(-50%, -50%);
            background: border-box;
            box-shadow: 0 15px 25px  black;
            border-radius: 40px;
            margin: 0 0 30px;
            color:  #26547C;
            text-align: center;
            background: #FBFCFC;
        }
        .olvidar {
            color: #17202A;
            width: 100%;
            font-size: 16px;
        }
        button{
            position: absolute;
            display: inline-block;
            border: none;
            outline: none;
            background: none;
            font: inherit;
            color: #fff;
            cursor: pointer;
            overflow:hidden;
            top: 50%;
            left: 45%;
            width: 121px;
            height: 70px;
        }
        button::before{
            content: attr(data-text);
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image:linear-gradient(144seg, #AF40FF,#5B42F3 50%, #00DDEB);
            color: #fff;
            display: grid;
            place-items: center;
            transform: translateX(-105%);
            transition: transform .25s;
        }
        button:hover::before{
            transform: none;
        }
        button span{
            display: inline-block;
            padding: 10px 20px;
            border: 2px solid #5B42F3;
            transition: transform 0.25s;
        }
        button:hover span{
            transform: translateX(105%);
        }
    </style>
</head>

<body>
    <div class="contenedor">
        <h1>ASINTEC</h1>
        <h2>Inicio de sesion</h2>
        <form action="">
            <div class="usuario">
                <input type="text" required>
                <label>Correo</label>
            </div>
            <div class="usuario">
                <input type="password" required>
                <label>Contraseña</label>
            </div>
            <div class="olvidar">
                <p class="usuario">¿Olvidaste tu Contraseña?</p>
            </div>
            <div class="usuario">
                <input type="text" required>
                <label>Correo Nuevamente </label>
            </div>
            <div class="usuario">
                <input type="tel" required>
                <label>Ingrese su Numero Telefonico</label>
            </div>
            
            <center>
            <a href="Proveedores_tecnologia.php">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Iniciar
            </a>
            </center>
        </form>
    </div>
    <div class="imagen">
        <h2>Tu Software Contable a un Click</h2>
        <div>
            <td >
                <img src="../imagenes/LogoAsintec.jpg" width="320" height="320">
            </td>
        </div>
    </div>
    <center>
    <button width="100" height="100" data-text="Let's go...">
        <span width="100" height="100"> Welcome</span>
    </button>
    </center>
</body>

</html>
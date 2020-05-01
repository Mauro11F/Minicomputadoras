<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width-device-width, initial-scale=1.0">
        <title>Tp MiniComputadoras</title>
        <link rel="stylesheet" href="../CSS/style.css">
    </head>
    <body>
        <header id="header">
            <a href="../index.html" class="logo">Logo</a>
            <ul>
                <li><a href="#" >Home</a></li>
                <li><a href="#" >Sobre Nosotros</a></li>
                <li><a href="#" >Poyectos</a></li>
                <li><a href="#" >Mas</a></li>
            </ul>
        </header>

        <section class="section-tabla">
            <div class="box-content">
                <h2>Consulta de contenido.</h2>
                <form class="" action="#" method="POST">
                    <input type="search" id="buscar" placeholder="Buscar">
                    <select class="selector" id="tipo">
                        <option value="TD"> TODO </option>
                        <option value="MA"> MATERIAL </option>
                        <option value="MO"> MANO DE OBRA </option>
                        <option value="EH"> HERRAMIENTAS </option>
                    </select>
                    <a class="boton" id="descargar" >Descargar excel</a>
                </form>
            </div>
            <div class="box-tabla">
                <table>
                    <thead>
                        <tr>
                            <th> ID </th>
                            <th> RECURSO </th>
                            <th> UNIDAD </th>
                            <th> PRECIO </th>
                            <th> RUBRO </th>
                            <th> GRUPO </th>
                        </tr>
                    </thead>
                    <!-- Se rellena segun la busqueda -ver tabla.js- -->
                    <tbody id="aca">

                    </tbody>
                </table>
            </div>
        </section>

    </body>

    <script src="https://code.jquery.com/jquery-3.5.0.min.js"integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ="crossorigin="anonymous"></script>
    <script src="tabla-js/tabla.js"></script>
    <!-- <script type="text/javascript">

        function descarga() {
            let elements = document.querySelectorAll('#aca > tr > td');
            let cont = ",";
            for (let element of elements) {
                console.log(element);
                cont += element.innerText
                console.log(element.innerText);
                console.log(element);
                cont[0].append(element.value);
            }
            console.log(cont);
            let elements = document.getElementById('aca');
            console.log(elements);
            let elem = elements.querySelectorAll('tr');
            console.log(elem[0]);
        }

    </script> -->

</html>

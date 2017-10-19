<!DOCTYPE html>
<html>
    <head>
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>

        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col s6 offset-s3 yellow">
                        <h1 class="center-align">EJERCICIO 5</h1>
                        <hr><br><br>
                        <div class="input-field col s12 black-text">
                            <input id="nombre" type="text" class="validate">
                            <label for="nombre">Nombre</label>
                        </div>

                        <div class="input-field col s12 black-text">
                            <input id="precio" type="text" class="validate">
                            <label for="precio">Precio</label>
                        </div>

                        <div class="input-field col s12 black-text">
                            <input id="unidad" type="text" class="validate">
                            <label for="unidad">Unidad</label>
                        </div>

                        <div class="input-field col s12 white-text">
                            <a id="btn_agregar" class="waves-effect waves-light btn"><i class="material-icons right">shopping_cart</i>Agregar</a>
                        </div>
                        <div class="col s12 center-align">
                            <p id="msj"></p>
                        </div>
                    </div>
                    
                    <div class="col s6 offset-s3 yellow">
                        <table class="striped responsive-table">
                        <thead>
                            <tr>
                                <th>Nº</th><th>NOMBRE</th> <th>PRECIO</th><th>UNIDAD</th> 
                            </tr>
                        </thead>
                        <tbody id="tbody">

                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>





        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
        <script type="text/javascript">
            $(function () {
                var lista=[];
                
                $("#btn_agregar").click(function () {
                    var nombre = $("#nombre").val();
                    var precio = $("#precio").val();
                    var unidad = $("#unidad").val();

                    var producto;
                    

                    if (nombre == "") {
                        $("#msj").text("Ingrese un Nombre");
                        $("#msj").removeClass("green");
                        $("#msj").addClass("red white-text");
                    } else if (precio == "") {
                        $("#msj").removeClass("green");
                        $("#msj").text("Ingrese un Precio");
                        $("#msj").addClass("red white-text");
                    } else if (unidad == "") {
                        $("#msj").removeClass("green");
                        $("#msj").text("Ingrese una Unidad");
                        $("#msj").addClass("red white-text");
                    } else {
                        $("#msj").removeClass("red white-text");
                        $("#msj").addClass("green white-text");
                        producto = {nombre: nombre.toUpperCase(), precio: precio, unidad: unidad};
                        lista.push(producto);
                        $("#nombre").val("");
                        $("#precio").val("");
                        $("#unidad").val("");
                        loadEach();
                        
                        $("#msj").text("Nuevo Producto: "+producto.nombre+" \n Precio:"+producto.precio+" Unidades:"+producto.unidad);
                        
                        
                    }
                });
                
                $("#nombre").keypress(function (e) {
                    if (($.isNumeric(e.key) || e.key == "." || e.key == ",")) {
                        e.preventDefault();

                    }


                });
                $("#precio").keypress(function (e) {
                    if (!($.isNumeric(e.key) || e.key == "." || e.key == ",")) {
                        e.preventDefault();
                    }
                });
                $("#unidad").keypress(function (e) {
                    if (!($.isNumeric(e.key) || e.key == "." || e.key == ",")) {
                        e.preventDefault();
                    }
                });
                
                function loadEach() {
                    $("#tbody").empty();
                    $.each(lista, function (i, o) {

                        var clase = "class='responsive-table striped'";

                        var fil = "<tr " + clase + ">";
                        fil += "<td>" + (i) + "</td>";
                        fil += "<td>" + (o.nombre) + "</td>";
                        fil += "<td>" + o.precio + "</td>";
                        fil += "<td>" + o.unidad + "</td>";
                        fil += "</tr>";
                        $("#tbody").append(fil);
                    });
                }

            });
        </script>
    </body>
</html>

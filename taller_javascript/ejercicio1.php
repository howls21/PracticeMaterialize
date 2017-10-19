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


        <div class="container">
            <div class="row">
                <div class="col s6 offset-s3 z-depth-4">

                    <h4 class="center-align">Ejercicio 1</h4>
                    <div class="input-field col s12">
                        <input id="last_name" type="text" class="validate">
                        <label for="last_name">Nombre</label>
                    </div>

                    <div class=" col s12">
                        <select id="id_ciudad">
                            <option value="">Seleccione Ciudad</option>
                            <option value="curico">Curico</option>
                            <option value="linares">Linares</option>
                            <option value="talca">Talca</option>
                        </select>
                        <label>Ciudad</label>
                    </div>


                    <div class="row">
                        <div class="col s6">
                            <label>Estado Civil</label>
                            <p class="left-align">

                                <input class="with-gap" name="group1" type="radio" id="test1" value="soltero" checked="true"/>
                                <label for="test1">Soltero</label>
                                <input class="with-gap" name="group1" type="radio" id="test2" value="casado"/>
                                <label for="test2">Casado</label>
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12">
                            <a id="btn_mostrar" class="waves-effect waves-light btn-large left"><i class="material-icons right">visibility</i>aceptar</a>
                        </div>
                    </div>

                    <div class="row">
                        <p id="msj" class="center-align"></p>
                    </div>
                </div>
            </div>
        </div>




        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>

        <script type="text/javascript">
            $(function () {

                $('select').material_select();

                $("#btn_mostrar").click(function () {
                    var nombre = $("#last_name").val();
                    var ciudad = $("#id_ciudad").val();
                    var estado = "";
                    var mensaje = "";
                    if ($("#test1").is(":checked")) {
                        estado = $("#test1").val();

                    } else {
                        estado = $("#test2").val();
                    }







                    if (nombre == "") {
                        $("#msj").text("Ingrese un nombre!");
                        $("#msj").addClass("red white-text");

                    } else if (ciudad == "") {
                        $("#msj").text("Ingrese una Ciudad!");
                        $("#msj").addClass("red white-text");
                    } else {

                        $("#msj").text("Nombre: " + nombre.toUpperCase() + " Ciudad: " + ciudad + " Estado: " + estado);
                        $("#msj").removeClass("red white-text");
                        $("#msj").addClass("green");
                    }


                });

            });
        </script>
    </body>
</html>
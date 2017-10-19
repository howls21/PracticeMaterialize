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
                <br><br>

                <div class="col s6 offset-s3 z-depth-5">
                    <h1 class="center-align">Ejercicio 4</h1>
                    <div class="input-field col s12">
                        <input placeholder="NOTA 1" id="nota1" onkeypress="return SoloNumeros(event)" type="text" class="validate" maxlength="3">
                        <label for="nota1">NOTA 1</label>
                    </div>

                    <div class="input-field col s12">
                        <input placeholder="NOTA 2" id="nota2" onkeypress="return SoloNumeros(event)" type="text" class="validate" maxlength="3">
                        <label for="nota2">NOTA 2</label>
                    </div>

                    <div class="input-field col s12">
                        <input placeholder="NOTA 3" id="nota3" onkeypress="return SoloNumeros(event)" type="text" class="validate" maxlength="3">
                        <label for="nota3">NOTA 3</label>
                    </div>

                    <div class="col s12">
                        <div class="row">
                            <a  id="bt_calcular" class="waves-effect waves-light btn"><i class="material-icons right">cloud</i>Calcular</a>
                        </div>
                    </div>

                    <div class="col s12">
                        <div class="row">
                            <p id="msj" class="center-align"></p> 
                        </div>
                    </div>

                </div>
            </div>
        </div>



        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>

        <script type="text/javascript">
                            function SoloNumeros(e) {
                                var tecla = new Number();
                                if (window.event) {
                                    tecla = e.keyCode;
                                } else if (e.which) {
                                    tecla = e.which;
                                } else {
                                    return true;
                                }

                                if ((tecla != 49) && (tecla != 50) && (tecla != 51) && (tecla != 52) && (tecla != 53) && (tecla != 54) && (tecla != 55) && (tecla != 44) && (tecla != 46) && (tecla != 48)) {
                                    return false;
                                }
                            }

                            $(function () {

                                $("#bt_calcular").click(function () {

                                    var msj = "";
                                    var nota1 = $("#nota1").val();
                                    var nota2 = $("#nota2").val();
                                    var nota3 = $("#nota3").val();
                                    var suma;
                                    var promedio;
                                    if (nota1 == "") {
                                        Materialize.toast("Nota 1 Vacía", 4000, "red");
                                        $("#nota1").focus();
                                    } else if (nota2 == "") {
                                        Materialize.toast("Nota 2 Vacía", 4000, "red");
                                        $("#nota2").focus();
                                    } else if (nota3 == "") {
                                        Materialize.toast("Nota 3 Vacía", 4000, "red");
                                        $("#nota3").focus();
                                    } else {

                                        var num1 = parseInt(nota1);
                                        var num2 = parseInt(nota2);
                                        var num3 = parseInt(nota3);
                                        suma = num1 + num2 + num3;
                                        promedio = suma / 3;
                                        
                                        var mensaje="";
                                        if (promedio.toFixed(1) >= 4.0) {
                                            mensaje = $('<span>Promedio: '+promedio.toFixed(1)+'</span>').add($('<button class="btn-flat toast-action">Aprobado</button>'));
                                            Materialize.toast(mensaje, 4000, "green");
                                        } else {
                                            mensaje = $('<span>Promedio: '+promedio.toFixed(1)+'</span>').add($('<button class="btn-flat toast-action">Reprobado</button>'));
                                            Materialize.toast(mensaje, 4000, "red");
                                        }

                                    }





                                }
                                );
                            });
        </script>
    </body>
</html>
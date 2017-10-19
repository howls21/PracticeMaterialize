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

                    <h1 class="center-align">Ejercicio 2</h1>

                    <div class="row">
                        <div class="input-field col s12">
                            <input id="precio" type="text" class="validate">
                            <label for="precio">Precio</label>
                        </div>
                    </div>

                    <div class="input-field col s12">
                        <select id="descuento">
                            <option value="0">0%</option>
                            <option value="10">10%</option>
                            <option value="30">30%</option>
                            <option value="50">50%</option>
                        </select>
                        <label>Descuento</label>
                    </div>

                    <div class="col s12">
                        <div class="row">
                            <a id="bt_calcular" class="waves-effect waves-light btn left-align"><i class="material-icons right">attach_money</i>Calcular</a>
                        </div>
                    </div>

                    <div class="col s12">
                        `<p id="msj" class="center-align"></p>

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
                $("#precio").keypress(function (e) {
                    if (!($.isNumeric(e.key) || e.key == "." || e.key == ",")) {
                        e.preventDefault();
                    }
                });
                $("#bt_calcular").click(function () {
                   
                    var precio = $("#precio").val();
                    var desc = $("#descuento").val();
                    var total_desc = (precio * desc) / 100;
                    var total_final = precio - total_desc;
                    if (precio == "") {
                        $("#msj").text("Ingrese un Precio!");
                        $("#msj").addClass("red white-text");
                    } else {
                        $("#msj").removeClass("red white-text");
                        $("#msj").html("Total a Pagar: $" + total_final+"<br> Descuento: $"+total_desc);
                        $("#msj").addClass("blue white-text");
                    }
                });
            }
            );
        </script>
    </body>
</html>
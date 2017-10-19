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

    <body class="deep-purple lighten-2">

        <ul id="collapsible" class="collapsible" data-collapsible="accordion">

        </ul>






        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
        <script type="text/javascript">
            $(function () {

                $('.collapsible').collapsible();
                var noticias = [{titular: "Noticia 1", contenido: "Contenido 1"},
                    {titular: "Noticia 2", contenido: "Contenido 2"},
                    {titular: "Noticia 3", contenido: "Contenido 3"}];
                cargarNoticias();
                function cargarNoticias() {
                    // 'i' para posicion 'o' para el objeto
                    
                    $.each(noticias, function (i, o) {
                        var fila = "";
                        fila += "<li><div class='collapsible-header deep-purple white-text'><i class='material-icons'>filter_drama</i>" + o.titular + "</div>";
                        fila += "<div class='collapsible-body deep-purple lighten-4'><span>" + o.contenido + "</span></div></li>";
                        $("#collapsible").append(fila);
                     
                    });
                }

            });
        </script>
    </body>
</html>

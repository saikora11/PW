<html>
<head>
        <title>Resultados de examenes</title>
        <style type="text/css">
            *{
                font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
                position: relative;
            }

            p, h2{
                margin: 0;
                padding: 0;
                height: fit-content;
            }

            h2{
                background-color: lightgray;
                padding: 5px;
                padding-left: 10px;
                border-radius: 5px;
            }

            #head{
                height: fit-content;
                display: flex;
                justify-content: space-between;
            }

            #head h3{
                margin: 0;
            }

            #title{
                text-align: center;
                border: 2px solid;
                background-color: #97CAEF;
                font-size: larger;
            }

            body{
                padding: 20px 40px;
                max-width: 800px;
                margin: 0px auto;
            }

            .menu{
                border: 2px solid;
                margin-top: 20px;
                margin-bottom: 10px;
            }

            .menu form{
                margin: 0px;
            }

            .menu button{
                width: 100%;
                height: 3em;
            }

            #cerrar-sesion{
                height: fit-content;
                text-decoration: underline;
                font-size: small;
                cursor: pointer;
                color: blue;
                margin: auto 1px;
            }

            table{
                width: calc(100% - 20px);
                text-align: center;
                border: 2px solid;
                border-collapse: collapse;
                margin: 0 auto;
                margin-top: 10px;
            }

            th, tr, td{
                border: 2px solid black;
            }
            .textbox{
                width:50%;
            }
        </style>
    </head>

    <?php
        $enlace = mysqli_connect("127.0.0.1","root","", "bduca");
        $consula = mqli_query("");
        $nfilas = mysqli_num_rows ($consulta);

        echo "<table>";
        $suspensos = 0;
        $aprobados = 0;
        $notables = 0;
        $sobresalientes = 0;
        $media = 0;
        for ($i=0; $i<$nfilas; $i++)
        {
                $fila = mysqli_fetch_array ($consulta);
                //aqui se saca por pantalla toda la informacion
                if ($nota < 5) $suspensos++;
                if($nota >= 5) $aprobados++;
                if($nota >=7) $notables++;
                if($nota >= 9) $sobresalientes++;
                $media += $nota;
                echo "  <th> $aux </th>";
        }
        echo "<tr>";        
        echo "</table>";
        $media = $media / $nfilas;
        echo "<br> Número de suspensos = $suspensos <br>";
        echo "<br> Número de aprobados = $aprobados <br>";
        echo "<br> Número de notables = $notables <br>";
        echo "<br> Número de sobresalientes = $sobresalientes <br>";
        echo "<br> Media de la clase = $media <br>";

        mysqli_close();

    ?>
<html>




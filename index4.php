<html>
    <head>
        <title>Tipos de Corte</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <style>
            body{
                background-color: rgb(165, 165, 165);
            }
            nav{
                background-color: rgb(0, 0, 0);
                padding-top: 10px;
                padding-bottom: 5px;
            }

            nav ul{
                display: flex;
                list-style: none;
                justify-content:flex-start;
            }

            nav ul li{
                margin-top:10px;
                padding-right: 20px;
                font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
                font-size:18px;
            }
            a{
                color:white;
                text-decoration:none;
            }
            img{
                margin: 16px;
            }
            .card{
                margin: 20px;
                font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            }

            .card-title{
                margin-top: -10px;
            }

            .contenedor{
                display: flex;
            }
        </style>
    
    
    </head>
    <body>
        <header>
            <nav>
                <ul>
                    <li><a href="index.php">Volver</a></li>
                    <li> <a href="index3.php">Mas Info</a> </li>
                </ul>
            </nav>
        </header>

        <div class="contenedor">
        <div class="card text-start" style="width: 22vw; height: 55vh;">
            <img class="card-img-top" src="imagenes/classic.jpg" alt="Title" style="height: 310px; width: 300px;" />
            <div class="card-body">
                <center><h4 class="card-title">Clásico</h4></center>
            </div>
        </div>
        
        <div class="card text-start" style="width: 22vw; height: 55vh;">
            <img class="card-img-top" src="imagenes/lowfade.jpg" alt="Title" style="height: 310px; width: 300px;" />
            <div class="card-body">
                <center><h4 class="card-title">Low Fade</h4></center>
            </div>
        </div>
        
        <div class="card text-start" style="width: 22vw; height: 55vh;">
            <img class="card-img-top" src="imagenes/midfade.png" alt="Title" style="height: 310px; width: 300px;" />
            <div class="card-body">
                <center><h4 class="card-title">Mid Fade</h4></center>
            </div>
        </div>

        <div class="card text-start" style="width: 22vw; height: 55vh;">
            <img class="card-img-top" src="imagenes/highfade.jpg" alt="Title" style="height: 315px; width: 300px;" />
            <div class="card-body">
                <center><h4 class="card-title">High Fade</h4></center>
            </div>
        </div>
        </div> 

        <div class="contenedor">
        <div class="card text-start" style="width: 22vw; height: 55vh;">
            <img class="card-img-top" src="imagenes/mullet.jpg" alt="Title" style="height: 310px; width: 300px;" />
            <div class="card-body">
                <center><h4 class="card-title">Mullet</h4></center>
            </div>
        </div>
        <div class="card text-start" style="width: 22vw; height: 55vh;">
            <img class="card-img-top" src="imagenes/cubata.jpg" alt="Title" style="height: 310px; width: 300px;" />
            <div class="card-body">
                <center><h4 class="card-title">Cubata</h4></center>
            </div>
        </div>
        <div class="card text-start" style="width: 22vw; height: 55vh;">
            <img class="card-img-top" src="imagenes/solotijera.jpg" alt="Title" style="height: 310px; width: 300px;" />
            <div class="card-body">
                <center><h4 class="card-title">Tijera</h4></center>
            </div>
        </div>
        <div class="card text-start" style="width: 22vw; height: 55vh;">
            <img class="card-img-top" src="imagenes/rapado.jpg" alt="Title" style="height: 310px; width: 300px;" />
            <div class="card-body">
                <center><h4 class="card-title">Rapado</h4></center>
            </div>
        </div>
        </div> 

    </body>
</html>
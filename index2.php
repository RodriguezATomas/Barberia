<html>
    <html>
        <title>Reservar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <style>
            body{
                background-color: rgb(165, 165, 165);
            }
            h2{
                text-align:center;
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
                text-decoration:none
            }
            .separador{
                margin-right:10px;
                margin-left:10px;
                
            }
            label{
                margin-left:600px;
            }
        
        </style>

        </html>
    <body>

        <?php include("logica/bd.php"); ?>
        
        <header>
            <nav>
                <ul>
                    <li> <a href="index.php">Volver</a> </li>
                    <li> <a href="index4.php">Tipos de Corte</a> </li>
                    <li> <a href="index3.php">Mas Info</a> </li>
                </ul>
            </nav>
        </header>

        <br><br>
        <div class="separador">
            <h2>Reservar Turno</h2>
            <br>
            
            <form action="logica/reserva.php" method="get">

          
            <div class="mb-3">
            <label for="" class="form-label">Nombre Cliente</label>
            <center>
            <input type="text" class="form-control" name="nombreCliente" id="" aria-describedby="helpId" placeholder="Nombre Cliente" style="width: 300px; height: 40px;"/>
            </div>
            </center>

            
            <div class="mb-3">
            <label for="" class="form-label">Nombre Barbero</label>
            <center>
            <input type="text" class="form-control" name="nombreBarbero" id="" aria-describedby="helpId" placeholder="Nombre Barbero" style="width: 300px; height: 40px;"/>
            </div>
            </center>

            
            <div class="mb-3">
            <label for="" class="form-label">Horario Turno</label>
            <center>
            <input type="time" class="form-control" name="horarioTurno" id="" aria-describedby="helpId" placeholder="" style="width: 300px; height: 40px;"/>
            </div>
            </center>

            
            <div class="mb-3">
            <label for="" class="form-label">Fecha Turno</label>
            <center>
            <input type="date" class="form-control" name="fechaTurno" id="" aria-describedby="helpId" placeholder="" style="width: 300px; height: 40px;"/>
            </div>
            </center>

            
            <div class="mb-3">
            <label for="" class="form-label">Ubicacion Barberia</label>
            <center>
            <input type="varchar" class="form-control" name="ubicacionBarberia" id="" aria-describedby="helpId" placeholder="Ubicacion" style="width: 300px; height: 40px;" />
            </div>
            </center>

            <center>
            <input name="" id="" class="btn btn-dark" type="submit" value="Reservar Turno"/>
            </center>

            </form>

        </div>
    </body>
</html>
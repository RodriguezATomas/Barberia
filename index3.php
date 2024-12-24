<html>
    <head>
        <title>Mas Info</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <style>
             body{
                background-color: rgb(165, 165, 165);
                margin: 0px;  
                height: 100%;
            }
            body h3{
                text-align:center;
                font-size:30px;
            }
            nav{
                background-color: rgb(0, 0, 0);
                padding-top: 1px;
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
            
           
        </style>
    </head>
    <body>
    <header>
            <nav>
                <ul>
                    <li> <a href="index.php">Volver</a> </li>
                    <li> <a href="index4.php">Tipos de Corte</a> </li>
                </ul>
            </nav>
        </header>
        <br>
        <h3>Precios</h3>
       <div class="table-responsive-lg" style="margin: 20px;">
        <table class="table table-secondary">
            <thead>
                <tr>
                    <th scope="col">Precios</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <tr class="">
                    <td scope="row">Corte</td>
                    <td>$4000</td>
                </tr>
                <tr class="">
                    <td scope="row">Corte y Barba</td>
                    <td>$5000</td>
                </tr>
                <tr class="">
                    <td scope="row">Corte y Color</td>
                    <td>$10000</td>
                </tr>
                <tr class="">
                    <td scope="row">Color</td>
                    <td>$6000</td>
                </tr>
                <tr class="">
                    <td scope="row">Corte, Barba y Color</td>
                    <td>$11000</td>
                </tr>
                <tr class="">
                    <td scope="row">(Todos los cortes incluyen perfilado de cejas)</td>
                    <td></td>
                   
                </tr>
            </tbody>
        </table>
       </div>
       
       
        
    </body>
</html>
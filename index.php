<html>
    <head>
        <title>Barberia</title>
       <style>
        body{
            background-color: rgb(165, 165, 165);
            margin: 0px;  
            height: 100%;
        }

        body h1{
            text-align: center;
            font-size: 50px;
            color: rgb(49, 49, 49);
        }

        body h3{
            color:white;
            font-size:28px;
        }

        .link{
        color:  rgb(0, 0, 0);
        }

        body p{
            text-align: center;
            font-size: 18px;
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
            padding-right: 20px;
            font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            font-size:18px;
            
        }

        a{
            text-decoration: none;
            color: rgb(255, 255, 255);
        }

        .imagen{
            
            width: 500px;
            height: 300px;
        }

        footer{
            background-color: rgb(2, 2, 2); 
            padding: 10px;      
        }

        footer p{
            font-size:20px;
        }


        /*Slider*/
        .slider{
            width: 1200px;
            height: 450px;
            overflow:hidden;
        }

        .slider ul{
            display:flex;
            animation: cambio 20s infinite alternate linear;
            width: 290%;
        }
        .slider li{
            width:100%;
            list-style:none;
        }
        .slider img{
            width:70%;
            height: 70%;
            object-fit:contain;
        }

        @keyframes cambio{
            0%{margin-left: 0;}
            20%{margin-left: 0;}

            25%{margin-left: -100%}
            45%{margin-left: -100%;}

            50%{margin-left: -200%};
            70%{margin-left: -200%};

            75%{margin-left: -300%};
            100%{margin-left: -300%};
        }



       </style>
    </head>
    <body>
        <header>
        <nav>
            <ul>
                <li> <a href="index4.php">Tipos de Corte</a> </li>
                <li> <a href="index3.php">Mas Info</a> </li>
            </ul>
        </nav>
        </header>
        
        <h1>Bienvenidos</h1>
        <p>Para reservar turnos click aqui: <a class="link" href="index2.php"><b> TURNOS</b></a></p>
       
    <center> 
        <div class="slider">
         <ul>
           <li><img src="imagenes/th.jpeg"></li>
           <li><img src="imagenes/th (1).jpeg"></li>
           <li><img src="imagenes/th (2).jpeg""></li>   
         </ul>
      
       </div> 
    </center>
        
        <center><footer>
            <h3>Nuestras Redes</h3>
            <p><a href="https://www.instagram.com/barberia_tomir/">Instagram</a></p>
            <p><a href="">Twitter</a></p>
            <p><a href="">Facebook</a></p>
        </footer></center>
    </body>
</html>
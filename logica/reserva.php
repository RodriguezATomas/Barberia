<!doctype html>
<html lang="en">
    <body>
        <?php
        include("bd.php");

        $nombreCliente=$_GET['nombreCliente'];
        $nombreBarbero=$_GET['nombreBarbero'];
        $horarioTurno=$_GET['horarioTurno'];
        $fechaTurno=$_GET['fechaTurno'];
        $ubicacionBarberia=$_GET['ubicacionBarberia'];

        $sql="INSERT INTO reservaturno (nombreCliente, nombreBarbero, horarioTurno, fechaTurno, ubicacionBarberia) VALUES ('".$nombreCliente."', '".$nombreBarbero."', '".$horarioTurno."', '".$fechaTurno."', '".$ubicacionBarberia."')";
        $resultado=mysqli_query($conn, $sql) or die ($sql . mysqli_error($conn));
        
        
        ?>
    </body>
    <script>
        alert("Reserva agendada con exito");
        location.replace("../index.php")
    </script> 

</html>

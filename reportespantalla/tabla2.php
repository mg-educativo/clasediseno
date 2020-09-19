<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diseño de Consultas en Pantalla</title>

    <script src="./js/jquery-3.5.1.min.js"></script>

    <link rel="stylesheet" href="./DataTables/datatables.min.css">
    <script  type="text/javascript" src="./DataTables/datatables.min.js"></script>

    <script type="text/javascript">
        $(document).ready( function () {
            $('#myTable').DataTable();
        } );    
    </script>

</head>
<body>
    <a href="index.php">Volver atrás</a>
    <h1>Creando Reportes en Pantalla</h1>
    <br>
    <h2>Reporte Sencillo</h2>

    <table id="myTable" class="display" style="width: 100%;">        
        <thead>
            <tr>
                <th>Codigo</th>
                <th>Nombre</th>
                <th>Apellido</th>
            </tr>
        </thead>
        
        <tbody>
            <tr>
                <td>0001</td>
                <td>John Anthony</td>
                <td>Garcia Perez</td>
            </tr>
            <tr>
                <td>0002</td>
                <td>Genesis</td>
                <td>Diaz Holguin</td>
            </tr>
            <tr>
                <td>0003</td>
                <td>Hans</td>
                <td>Metellus</td>
            </tr>
            <tr>
                <td>0003</td>
                <td>Hans</td>
                <td>Metellus</td>
            </tr>
            <tr>
                <td>0003</td>
                <td>Hans</td>
                <td>Metellus</td>
            </tr>
            <tr>
                <td>0003</td>
                <td>Hans</td>
                <td>Metellus</td>
            </tr>
            <tr>
                <td>0003</td>
                <td>Hans</td>
                <td>Metellus</td>
            </tr>
            <tr>
                <td>0003</td>
                <td>Hans</td>
                <td>Metellus</td>
            </tr>
            <tr>
                <td>0003</td>
                <td>Hans</td>
                <td>Metellus</td>
            </tr>
            <tr>
                <td>0003</td>
                <td>Hans</td>
                <td>Metellus</td>
            </tr>
            <tr>
                <td>0003</td>
                <td>Hans</td>
                <td>Metellus</td>
            </tr>
            <tr>
                <td>0003</td>
                <td>Hans</td>
                <td>Metellus</td>
            </tr>
            <tr>
                <td>0003</td>
                <td>Hans</td>
                <td>Metellus</td>
            </tr>
            <tr>
                <td>0003</td>
                <td>Hans</td>
                <td>Metellus</td>
            </tr>
            <tr>
                <td>0003</td>
                <td>Hans</td>
                <td>Metellus</td>
            </tr>
        </tbody>
    </table>
    
</body>
</html>
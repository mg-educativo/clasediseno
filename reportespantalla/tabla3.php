<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diseño de Consultas en Pantalla</title>

    <script src="./js/jquery-3.5.1.min.js"></script>

    <link rel="stylesheet" href="./DataTables/datatables.min.css">
    <script  type="text/javascript" src="./DataTables/datatables.min.js"></script>

     <!-- Botones -->
     <link rel="stylesheet" type="text/css" href="./DataTables/DataTables-1.10.21/css/jquery.dataTables.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.dataTables.min.css" />

    <script type="text/javascript" language="javascript" src="./DataTables/DataTables-1.10.21/js/jquery.dataTables.js"></script>
    <script type="text/javascript" language="javascript" src="./DataTables/DataTables-1.10.21/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" language="javascript" src="./DataTables/DataTables-1.10.21/js/buttons.flash.min.js"></script>
    <script type="text/javascript" language="javascript" src="./DataTables/DataTables-1.10.21/js/jszip.min.js"></script>
    <script type="text/javascript" language="javascript" src="./DataTables/DataTables-1.10.21/js/pdfmake.min.js"></script>
    <script type="text/javascript" language="javascript" src="./DataTables/DataTables-1.10.21/js/vfs_fonts.js"></script>
    <script type="text/javascript" language="javascript" src="./DataTables/DataTables-1.10.21/js/buttons.html5.min.js"></script>
    <script type="text/javascript" language="javascript" src="./DataTables/DataTables-1.10.21/js/buttons.print.min.js"></script>


    <script type="text/javascript">
        $(document).ready( function () {
            $('#myTable').DataTable({
                "iDisplayLength": 5,
                dom: 'Bfrtip',
                buttons: [ 'copy', 'csv', 'excel', 'pdf', 'print' ]
            });
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
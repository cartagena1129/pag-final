<?php /*
$serverName = "netv-psql09-13\\replicasd";
//$connectionInfo = array( "Database"=>"MDB");
$connectionInfo = array( "Database"=>"MDB", "UID"=>"usr_operapps", "PWD"=>"usr_operapps0318");
$conn = sqlsrv_connect( $serverName, $connectionInfo);



if( $conn ) {
    echo "Connection established.<br />";
}else{
    echo "Connection could not be established.<br />";
    die( print_r( sqlsrv_errors(), true));
}

$sql = "SELECT REPLACE(REPLACE(REPLACE(ca.resource_name,CHAR(9),''),CHAR(10),''),CHAR(13),'')as 'nombre'

,am.sym as 'ambiente'

,REPLACE(REPLACE(REPLACE(ca2.resource_name,CHAR(9),''),CHAR(10),''),CHAR(13),'') as 'servicio'

,co.first_name + ', ' + co.last_name as 'contacto1'

,co.email_address as 'correo1'

FROM ca_owned_resource ca

LEFT JOIN usp_owned_resource usp ON ca.own_resource_uuid = usp.owned_resource_uuid

LEFT JOIN ca_owned_resource ca2 ON usp.baseline_uuid = ca2.own_resource_uuid

LEFT JOIN ca_resource_class clase ON clase.id = ca.resource_class

LEFT JOIN ca_resource_family familia ON familia.id = ca.resource_family

LEFT JOIN zAmbiente am ON usp.zAmbiente_id = am.id

LEFT JOIN ca_contact co ON ca.resource_contact_uuid = co.contact_uuid

left join ca_organization org on org.organization_uuid = ca.responsible_org_uuid

left join ca_contact AS vinculado ON vinculado.contact_uuid = ca.support_contact1_uuid

WHERE familia.name = 'Hardware.server'  AND ca.inactive <> 1";

$params = array();
$options =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
$stmt = sqlsrv_query( $conn, $sql , $params, $options );
*/
//$row_count = sqlsrv_num_rows( $stmt );

//echo "Total de filas: ".$row_count."<br>";

//while( $row = sqlsrv_fetch_array( $stmt) ) {
//    print json_encode($row);
//    echo "<br >Nombre: ".$row['nombre']."<br />"; 
//    echo "Ambiente: ".$row['ambiente']."<br />";
//    echo "Servicio: ".$row['servicio']."<br />";
//    echo "Contacto 1: ".$row['contacto1']."<br />";
//    echo "Correo 1: ".$row['correo1']."<br />";
   
//}

//sqlsrv_close($conn);

//exit; */
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Conexión entre HTML y PHP</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <meta charset="UTF-8">
        <style>

            body  {
                background: rgb(166, 208, 221);
            }
        </style>
    </head>
    <body>
        <h1 class="text-center my-3"> Pagina Yulieth </h1>
        <div class="container">
            <table class="table">
                <tr>
                    <th>Nombre </th>
                    <th>Ambiente</th>
                    <th>Servicio</th>
                    <th>Contacto</th>
                    <th>Correo</th>
                    <th>Activo / inaptivo</th>
                    <th>Observaciones</th>
                </tr>
                    <?php
                      /*  while( $row = sqlsrv_fetch_array( $stmt) ) { */
                    ?>
                    <tr>
                        <td> Juan <?php /* echo $row['nombre']; */?></td>
                        <td> Sala <?php /* echo $row['ambiente']; */?></td>
                        <td> Tecnico <?php /* echo $row['servicio']; */?></td>
                        <td> 33433434 <?php /* echo $row['Contacto1']; */?></td>
                        <td> juan@gmail.com <?php /* echo $row['Correo1']; */?></td>
                        <td> <input type="radio" name="activo" value="si" class="form-check-input"> Si
                             <input type="radio" name="activo" value="no" class="form-check-input"> No
                            <?php /* echo $row['Correo1']; */?>
                        </td>
                        <td>
                            <input type="text" name="observacion" class="form-control">
                        </td>
                        <td>
                            <button class="btn btn-success"> Actuaizar </button>
                        </td>
                    </tr>
                    <?php
                       /* } */
                    ?>

            </table>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    </body>
</html>

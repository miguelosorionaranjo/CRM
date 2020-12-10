<?php
$oportunidad = $_REQUEST['oportunidad'];

include_once 'database.php';

$db = new Conect_MySql();


$sql = "CALL sp_consultaPersonaUsuario('$oportunidad');";

$arrayDetalle = array();
$array = $db->execute($sql);
foreach ($array as $row) {
    $arrayDetalle[] = $row;
}
?>


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Modal title</h4>
            </div>
            <div class="modal-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Num.</th>
                            <th>Numbre Usuario</th>
                            <th>Cuenta.</th>
                            <th>Estado</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (count($arrayDetalle) > 0) {
                            foreach ($arrayDetalle as $c => $value) {
                                ?>
                                <tr>
                                    <td style="text-align: center"><?php echo ($c + 1); ?></td>
                                    <td><?php echo $value['nombreopor']; ?></td>
                                    <td><?php echo $value['nombreorg']; ?></td>
                                    <td><label class="label <?php echo $value['eo']=='Activa'?'label-primary':'label-success'?>"><?php echo $value['eo']; ?> </label></td>
                                </tr>
                                <?php
                            }
                        } else {
                            ?>
                            <tr>
                                <td colspan="4" style="text-align: center">
                                    <div class="alert alert-danger" role="alert">
                                        <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                                        <span class="sr-only">Error:</span>
                                        No existen Datos
                                    </div>
                                </td>
                            </tr>
                            <?php
                        }
                        ?> 
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
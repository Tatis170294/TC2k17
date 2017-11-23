<div class="col-md-10">
  <?php 
  //si es secretaría académica mostrar este botón
  if($sesion_usuario['Matricula'] == 111111111) {
  ?>
  <p class="btn-agregar">
    <a class="btn btn-primary" href="<?php echo base_url();?>materia/insert"><i class="glyphicon glyphicon-plus"></i> Agregar Materia</a>
  </p>
  <?php }
    if ($materias) {
      //si es secretaría académica mostrar esto
    if($sesion_usuario['Matricula'] == 111111111) { ?>
      <div class="content-box-large">
        <div class="panel-heading">
          <center><div class="panel-title">Lista de Materias</div></center>
        </div>
        <div class="panel-body">
          <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
          <thead>
            <tr>
              <th class="center">NRC</th>
              <th class="center">Nombre</th>
              <th class="center">Acción</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($materias as $item): ?>
              <tr class="odd gradeX">
                <td class="center"> <?php echo $item->NRC; ?> </td>
                <td class="center"> <?php echo $item->Nombre; ?> </td>
                <td>
                  <center>
                    <a href="<?php echo base_url(); ?>materia/insert/<?php echo $item->NRC; ?>"><span class="glyphicon glyphicon-pencil"></span></a>
                    <a class="delete-record" href="<?php echo base_url(); ?>materia/delete/<?php echo $item->NRC; ?>"><span class="glyphicon glyphicon-trash"></span></a>
                  </center>
                </td>
              </tr>
           <?php endforeach;?>
          </tbody>
          </table>
        </div>
      </div>

           <?php
          }
           //si es cualquier otro usuario mostrar esto
           else {
            ?>
            <div class="content-box-large">
            <div class="panel-heading">
              <center><div class="panel-title">Lista de Materias</div></center>
            </div>
            <div class="panel-body">
            <form method="post" action="<?php echo base_url();?>materia/insert_prop">
              <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
              <thead>
                <tr>
                  <th class="center">Selección</th>
                  <th class="center">NRC</th>
                  <th class="center">Nombre</th>
                </tr>
              </thead>
              <tbody>    
            <?php foreach($materias as $item): ?>
              <tr class="odd gradeX">
                <td class="center">
                    <input type="checkbox" name="materias_propuestas[]" value="<?php echo $item->NRC;?>">
                </td>
                <td class="center"> <?php echo $item->NRC; ?> </td>
                <td class="center"> <?php echo $item->Nombre; ?> </td>
              </tr>
           <?php endforeach; ?>
              </tbody>
            </table>
            <div class="row">
                <div class="col-sm-3">
                  <input type="submit" class="btn btn-primary" value="Enviar" style="margin-left:1110px;">
                </div>
              </div>
            </form>
        </div>
      </div>
  <?php
      }
    }
    else {
  ?>
    <h2 class="no-records">No existen materias.</h2>
  <?php
    }
  ?>
</div>
</div>
</div>

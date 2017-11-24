<div class="col-md-10">
  <?php
    if ($propuestas) {
  ?>
      <div class="content-box-large">
        <div class="panel-heading">
          <center><div class="panel-title">Propuestas</div></center>
        </div>
        <div class="panel-body">
          <table class="table table-hover">
          <thead>
            <tr>
              <th class="center">Fecha</th>
              <th class="center">Matrícula</th>
              <th class="center">Nombre</th>
              <th class="center">Correo</th>
              <th class="center">Acción</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($propuestas as $item): ?>
              <tr class="odd gradeX">
                <td class="center"> <?php echo $item->fecha; ?> </td>
                <td class="center"> <?php echo $item->Matricula; ?> </td>
                <td class="center"> <?php echo $item->Nombre; ?> </td>
                <td class="center"> <?php echo $item->Correo; ?> </td>
                <td>
                  <center>
                    <a href="<?php echo base_url(); ?>propuesta_materia/getById/<?php echo $item->idPropuesta; ?>"><span class="glyphicon glyphicon-search"></span></a>
                    <a href="<?php echo base_url(); ?>comentario/insert/<?php echo $item->idPropuesta; ?>"><span class="glyphicon glyphicon-pencil"></span></a>
                  </center>
                </td>
              </tr>
           <?php endforeach; ?>
          </tbody>
        </table>
        </div>
      </div>
  <?php
    }
    else {
  ?>
    <h2 class="no-records">No existen propuestas.</h2>
  <?php
    }
  ?>
</div>
</div>
</div>

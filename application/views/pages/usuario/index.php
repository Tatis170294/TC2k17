<div class="col-md-10">
  <p class="btn-agregar">
    <a class="btn btn-primary" href="<?php echo base_url();?>usuario/insert"><i class="glyphicon glyphicon-plus"></i> Agregar Usuario</a>
  </p>
  <?php
    if ($usuarios) {
  ?>
      <div class="content-box-large">
        <div class="panel-heading">
          <center><div class="panel-title">Lista de Usuarios</div></center>
        </div>
        <div class="panel-body">
          <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
          <thead>
            <tr>
              <th class="center">Matrícula</th>
              <th class="center">Nombre</th>
              <th class="center">Correo</th>
              <th class="center">Acción</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($usuarios as $item): ?>
              <tr class="odd gradeX">
                <td class="center"> <?php echo $item->Matricula; ?> </td>
                <td class="center"> <?php echo $item->Nombre; ?> </td>
                <td class="center"> <?php echo $item->Correo; ?> </td>
                <td>
                  <center>
                    <a href="<?php echo base_url(); ?>usuario/getById/<?php echo $item->Matricula; ?>"><span class="glyphicon glyphicon-search"></span></a>
                    <a href="<?php echo base_url(); ?>usuario/insert/<?php echo $item->Matricula; ?>"><span class="glyphicon glyphicon-pencil"></span></a>
                    <a class="delete-record" href="<?php echo base_url(); ?>usuario/delete/<?php echo $item->Matricula; ?>"><span class="glyphicon glyphicon-trash"></span></a>
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
    <h2 class="no-records">No existen usuarios.</h2>
  <?php
    }
  ?>
</div>
</div>
</div>

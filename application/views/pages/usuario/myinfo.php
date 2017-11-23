    <div class="col-md-10">
      <p class="btn-agregar">
        <a class="btn btn-primary" href="<?php echo base_url();?>usuario/insert/<?php echo $usuario->Matricula;?>"><i class="glyphicon glyphicon-pencil"></i> Editar</a>
      </p>
      <div class="content-box-large">
        <div class="panel-heading">
          <center><div class="panel-title">Mis Datos</div></center>
        </div>
        <div class="panel-body">
          <table class="table table-hover">
          <thead>
            <tr>
              <th class="center">Matrícula</th>
              <th class="center">Nombre</th>
              <th class="center">Correo</th>
              <th class="center">Contraseña</th>
            </tr>
          </thead>
          <tbody>
              <tr>
                <td class="center"> <?php echo $usuario->Matricula; ?> </td>
                <td class="center"> <?php echo $usuario->Nombre; ?> </td>
                <td class="center"> <?php echo $usuario->Correo; ?> </td>
                <td class="center"> <?php echo $usuario->Contrasena; ?> </td>
              </tr>
          </tbody>
        </table>
        </div>
      </div>
    </div>
  </div>
</div>

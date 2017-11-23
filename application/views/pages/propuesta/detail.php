    <div class="col-md-10">
      <div class="content-box-large">
        <div class="panel-heading">
          <center><div class="panel-title">Detalle de Propuesta</div></center>
        </div>
        <div class="panel-body">
          <table class="table table-hover">
          <thead>
            <tr>
              <th class="center">NRC</th>
              <th class="center">Nombre de materia</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($propuesta as $prop) {
              ?>
              <tr>                    
                <td class="center"> <?php echo $prop->Materia_NRC; ?> </td>
                <td class="center"> <?php echo $prop->Nombre; ?> </td>
              </tr>
            <?php }?>
          </tbody>
        </table>
        </div>
      </div>

      <?php 
      //si existen comentarios en la propuesta
      if($comentarios_propuesta) { 
        foreach ($comentarios_propuesta as $comment) {
          ?>
            <div class="row">
              <div class="col-md-12 panel-warning">
                <div class="content-box-header panel-heading">
                  <div class="panel-title "><?php echo $comment->Nombre." - ".$comment->fecha;?></div>
                </div>
                <div class="content-box-large box-with-header">
                  <?php echo $comment->Comentario;?>
                </div>
              </div>
            </div>
        <?php } ?>
      
      <?php } 
      else { ?>
        <h2 class="no-records">Esta propuesta no tiene comentarios.</h2>
        <br>
      <?php }?>

    </div>

        

  </div>
</div>

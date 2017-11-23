    <div class="col-md-10">
      <p class="btn-agregar">
        <a class="btn btn-primary" href="<?php echo base_url();?>materia"><i class="glyphicon glyphicon-list"></i> Materias</a>
      </p>
      <div class="row">
        <div class="col-md-12 panel-info">
          <div class="content-box-header panel-heading">
            <div class="panel-title">Agregar Materia</div>
          </div>
          <div class="content-box-large box-with-header">
            <form method="post" action="<?php echo base_url();?>materia/insert_post/<?php echo $NRC;?>">
              <div class="row">
                <div class="col-sm-3">
                  <label>NRC</label>
                  <input type="text" class="form-control" name="nrc" required="required" value="<?php echo $NRC;?>">
                </div>
                <div class="col-sm-3">
                  <label>Nombre</label>
                  <input type="text" class="form-control" name="nombre" required="required" value="<?php echo $Nombre;?>">
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-sm-3">
                  <input type="submit" class="btn btn-primary" value="Guardar" style="margin-left:1130px;">
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

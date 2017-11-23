    <div class="col-md-10">
      <div class="row">
        <div class="col-md-12 panel-info">
          <div class="content-box-header panel-heading">
            <div class="panel-title">Edición</div>
          </div>
          <div class="content-box-large box-with-header">
            <form method="post" action="<?php echo base_url();?>materia/update_post/<?php echo $Nrc;?>">
              <div class="row">
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

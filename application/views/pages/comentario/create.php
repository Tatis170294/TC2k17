    <div class="col-md-10">
      <div class="row">
        <div class="col-md-12 panel-info">
          <div class="content-box-header panel-heading">
            <div class="panel-title">Agregar Comentario</div>
          </div>
          <div class="content-box-large box-with-header">
            <form method="post" action="<?php echo base_url();?>comentario/insert_post/<?php echo $idPropuesta;?>">
              <div class="row">
                <div class="col-sm-12">
                  <label>Comentario</label>
                  <textarea class="form-control" name="comentario" required="required" rows="5"></textarea>
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

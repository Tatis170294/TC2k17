<div class="page-content">
  <div class="row">
    <div class="col-md-2">
        <div class="sidebar content-box" style="display: block;">
        <?php 
        //si es secretaría académica mostrar el siguiente menú
        if($Matricula == 111111111) {?>
            <ul class="nav">
                  <li><a href="<?php echo base_url();?>usuario"><i class="glyphicon glyphicon-user"></i> Usuarios</a></li>
                  <li><a href="<?php echo base_url();?>materia"><i class="glyphicon glyphicon-list"></i> Materias</a></li>
            </ul>
        <?php }
        //si es cualquier otro usuario mostrar este menú
        else {?>
			<ul class="nav">
                  <li><a href="<?php echo base_url();?>materia"><i class="glyphicon glyphicon-list"></i> Materias</a></li>
            </ul>
        <?php }?>
         </div>
      </div>

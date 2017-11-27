<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="page-content container">
  <div class="row">
    <div class="col-md-4 col-md-offset-4">
      <div class="login-wrapper">
            <div class="box">
                <div class="content-wrap">
                    <h6>Registro</h6>
                    <?php echo validation_errors(); ?>
                      <?php echo form_open('../TC2k17/registro/insert'); ?>
                      <input class="form-control" type="text" placeholder="Matrícula" name="matricula" id="matricula">
                      <input class="form-control" type="text" placeholder="Nombre" name="nombre" id="nombre">
                      <input class="form-control" type="email" placeholder="Correo" name="correo" id="correo" />
                      <input style="margin-top: 10px;" class="form-control" type="password" placeholder="Password" name="contrasena" id="contrasena">
                      <div class="action">
                          <input type="submit" value="Registro" class="btn btn-primary signup">
                      </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>
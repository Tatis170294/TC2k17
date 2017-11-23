<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="page-content container">
  <div class="row">
    <div class="col-md-4 col-md-offset-4">
      <div class="login-wrapper">
            <div class="box">
                <div class="content-wrap">
                    <h6>Iniciar Sesión</h6>
                    <?php echo validation_errors(); ?>
                    <?php echo form_open('../TC2k17/verifylogin'); ?>
                      <input class="form-control" type="text" placeholder="Matrícula" name="matricula" id="matricula">
                      <input class="form-control" type="password" placeholder="Password" name="password" id="password">
                      <div class="action">
                          <input type="submit" value="Login" class="btn btn-primary signup">
                      </div>
                      <br>
                      <div style="text-align: right;">
                          <a href="<?php echo base_url();?>registro">Registrarse</a>
                      </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>

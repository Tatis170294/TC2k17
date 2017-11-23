<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
    <footer>
         <div class="container">
            <div class="copy text-center">
               Copyright 2017 - TC2k17
            </div>
         </div>
    </footer>

    <link href="<?php echo base_url();?>admin_template/vendors/datatables/dataTables.bootstrap.css" rel="stylesheet" media="screen">

    <script src="<?php echo base_url();?>admin_template/bootstrap/js/jquery.js"></script>

    <script src="<?php echo base_url();?>admin_template/bootstrap/js/jquery-ui.js"></script>

    <script src="<?php echo base_url();?>admin_template/bootstrap/js/bootstrap.min.js"></script>

    <script src="<?php echo base_url();?>admin_template/vendors/form-helpers/js/bootstrap-formhelpers.min.js"></script>

    <script src="<?php echo base_url();?>admin_template/vendors/datatables/js/jquery.dataTables.min.js"></script>

    <script src="<?php echo base_url();?>admin_template/vendors/datatables/dataTables.bootstrap.js"></script>

    <script src="<?php echo base_url();?>admin_template/vendors/select/bootstrap-select.min.js"></script>

    <script src="<?php echo base_url();?>admin_template/js/custom.js"></script>

    <script src="<?php echo base_url();?>admin_template/js/forms.js"></script>

    <script src="<?php echo base_url();?>admin_template/js/tables.js"></script>

  </body>
</html>

<script type="text/javascript">
   $(".delete-record").each(function() {
      var href = $(this).attr('href');
      $(this).attr('href', 'javascript:void(0)');
      $(this).click(function() {
         if (confirm("¿Seguro desea eliminar este registro?")) {
            location.href = href;
         }
      });
   });
</script>

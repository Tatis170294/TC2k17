<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<html>
  <head>
    <title>TC2k17</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo base_url();?>admin_template/bootstrap/css/jquery-ui.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="<?php echo base_url();?>admin_template/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="<?php echo base_url();?>admin_template/css/styles.css" rel="stylesheet">

    <link href="<?php echo base_url();?>admin_template/bootstrap/css/font-awesome.css" rel="stylesheet">

    <link href="<?php echo base_url();?>admin_template/vendors/form-helpers/css/bootstrap-formhelpers.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>admin_template/vendors/select/bootstrap-select.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>admin_template/vendors/tags/css/bootstrap-tags.css" rel="stylesheet">

    <link href="<?php echo base_url();?>admin_template/vendors/select/bootstrap-select.min.css" rel="stylesheet">

    <link href="<?php echo base_url();?>admin_template/css/forms.css" rel="stylesheet">

    <link href="<?php echo base_url();?>admin_template/css/estilos.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-5">
	              <!-- Logo -->
	               <div class="logo">
	                 <h1 class="titulo">TC2k17</h1>
	               </div>
	           </div>
	           <div class="col-md-5">
	              <div class="navbar navbar-inverse" role="banner">
	                 <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
	                    <ul class="nav navbar-nav">
	                       <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Cuenta <b class="caret"></b></a>
  	                        <ul class="dropdown-menu animated fadeInUp">
  	                           <li><a href="<?php echo base_url();?>usuario/getMyInfo/<?php echo $Matricula;?>"><i class="glyphicon glyphicon-user"></i> Mi Perfil</a></li>
  	                           <li><a href="<?php echo base_url();?>verifylogin/logout"><i class="glyphicon glyphicon-off"></i> Logout</a></li>
  	                        </ul>
	                      </li>
	                   </ul>
	                 </nav>
	              </div>
	           </div>
	        </div>
	     </div>
    </div>

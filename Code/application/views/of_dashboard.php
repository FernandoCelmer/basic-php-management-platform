<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=1,initial-scale=1,user-scalable=1" />
  <title>IndexOffy</title>

  <!-- CSS -->
  <?php $this->load->view('bp-template/add_default_css'); ?>
  <!-- /.CSS -->
 
</head>
<body class="hold-transition sidebar-mini  layout-fixed">

  <!-- HEADER -->
  <?php $this->load->view('bp-template/header'); ?>
  <!-- /.HEADER -->

<div class="wrapper">

  <!-- MENU -->
      <?php $this->load->view('bp-template/main_menu'); ?>
  <!-- /.MENU -->

  <!-- CONTEUDO -->
  <div class="content-wrapper">
    <!-- CONTEUDO_CABECALHO -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Painel de Controle</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?=base_url()?>index.php/Admin">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <!-- /.CONTEUDO_CABECALHO -->
    
  <!-- DASHBOARD -->
  <section class="content">
      <div class="container-fluid">
   
        <div class="row">
          <div class="col-lg-3 col-6">

            <div class="small-box bg-gray color-palette">
              <div class="inner">
                <h4>Administração</h4>

                <p>Administração</p>
              </div>
              <div class="icon">
                <i class="fas fa-cog"></i>
              </div>
                <a href="#" class="small-box-footer">Visualizar <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
 
          <div class="col-lg-3 col-6">

            <div class="small-box bg-gray color-palette">
              <div class="inner">
                <h4>Serviços</h4>

                <p>Serviços</p>
              </div>
              <div class="icon">
                <i class="fas fa-bars"></i>
              </div>
                <a href="#" class="small-box-footer">Visualizar <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">

          <div class="small-box bg-gray color-palette">
              <div class="inner">
                <h4>Usuário</h4>

                <p>Informações de Usuários</p>
              </div>
              <div class="icon">
              <i class="fas fa-user"></i>
              </div>
                  <a href="<?=base_url()?>index.php/Usuario/criar" class="small-box-footer">Novo Usuário <i class="fa fa-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
  
            <div class="small-box bg-gray color-palette">
              <div class="inner">
                <h4>Cliente</h4>

                <p>Informações de Clientes</p>
              </div>
              <div class="icon">
              <i class="fas fa-user"></i>
              </div>
                  <a href="<?=base_url()?>index.php/Usuario/criar" class="small-box-footer">Novo Cliente <i class="fa fa-plus"></i></a>
            </div>
          </div>

        </div>
        <div class="row">
        </div>
      </div>
    </section>
  <!-- /.DASHBOARD -->

<!-- CONTEUDO_INICIO -->
<section class="content">
  <div class="container-fluid">
      <div class="row">
      <div class="col-12">
      <div class="card">
      <div class="card-header">
       <!-- -->
      <div class="container my-1 z-depth-1">
        <div class="col-lg-6 col-md-8 mx-auto">
        <!-- Form -->
          <form class="" action="">
          <!-- Section heading -->
          <h3 class="font-weight-bold mb-4">Pesquisar Cliente</h3>
          <div class="input-group mb-4 pb-3">
              <input type="text" class="form-control" id="nomeAnimal" placeholder="Nome" aria-label="Enter your email address"aria-describedby="button-addon2">
              <div class="input-group-append">
              <button id="btn-pesquisar-animal" type="button" class="btn btn-dark btn-pesquisar-animal">Pesquisar</button> 
            </div>
          </div>      
          </form>
          
          <div class="card card-light d-none">
              <div class="card-header">
                <h3 class="card-title">Filtro de pesquisa</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-6">
                    <!-- checkbox -->
                    <div class="form-group clearfix">
                      <div class="icheck-primary d-inline">
                        <input type="checkbox" id="checkbox_01"><!-- checked="" -->
                        <label for="checkbox_01">______</label>
                      </div>
                    </div>
                  </div>

                  <div class="col-sm-6">
                    <!-- checkbox -->
                    <div class="form-group clearfix">
                      <div class="icheck-primary d-inline">
                        <input type="checkbox" id="checkbox_02"><!-- checked="" -->
                        <label for="checkbox_02">______</label>
                      </div> 
                    </div>
                  </div>
                </div>
            </div>

        <!-- Form -->
        </div>
      </div>      
       <!-- -->    
    
      </div> 

  </div>
</section>

<!-- /.CONTEUDO_INICIO -->
  </div>
  
  <!-- FOOTER -->
    <?php $this->load->view('bp-template/footer'); ?>
  <!-- /.FOOTER -->
   
  <aside class="control-sidebar control-sidebar-dark">
  </aside>
  
</div>
<!-- /.CONTEUDO -->

  <?php $this->load->view('bp-template/add_default_js'); ?>
  <?php $this->load->view('bp-template/add_notification'); ?>

</body>
</html>

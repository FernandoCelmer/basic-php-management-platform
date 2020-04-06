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
  <?php $this->load->view('of-template/add_default_css'); ?>
  <!-- /.CSS -->
 
</head>
<body class="hold-transition sidebar-mini layout-fixed">

  <!-- HEADER -->
  <?php $this->load->view('of-template/header'); ?>
  <!-- /.HEADER -->

<div class="wrapper">

  <!-- MENU -->
      <?php $this->load->view('of-template/main_menu'); ?>
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

<!-- CONTEUDO_INICIO -->
<section class="content">
  <div class="container-fluid">
      <div class="row">
      <div class="col-12">
      <div class="card">
      <div class="card-header">
 
      <P>
      <h4><span class="badge badge-secondary">echo $item_status["item_status_disabled"];</h4></span> | DESATIVA ITEM DE USUÁRIO NÃO ATIVADO 
      <P>
      <h4><span class="badge badge-secondary">echo $item_status["item_status_none"]</h4></span> | DESATIVA ITEM DE USUÁRIO NÃO ATIVADO 
      <P>
      <h4><span class="badge badge-secondary">echo $item_level["item_disabled"];</h4></span> |  DESATIVA ITEM DE USUÁRIO PADRÃO 
      <P>
      <h4><span class="badge badge-secondary">echo $item_level["item_none"];</h4></span>  | DESATIVA ITEM DE USUÁRIO PADRÃO 
    
        <?php if( $_SESSION['usuarioLogado']->TIP_STATUS==0 ) { ?>
        <?php echo $item_level["item_disabled"];?>
        <?php } ?>

    <?php if( $_SESSION['usuarioLogado']->TIP_STATUS==0 ) { ?>
        <div class="alert alert-warning" role="alert">
            Seu cadastro foi solicitado, aguarde até o administrador do sistema realizar a ativação!
        </div>
    <?php } ?>        


    <p>
    <div class="alert alert-dark" role="alert">
    <?php  echo $item_status["item_disabled"];?> 
    <p>
    <?php  echo $item_status["item_none"];?>  
    <p>
    <?php  echo $item_level["item_disabled"];?> 
    <p>
    <?php  echo $item_level["item_none"];?>  
    <p>
    <?php var_dump($item_level); ?>
    <p>
    <?php var_dump($item_status); ?>
    <p>
    <?php var_dump($_SESSION); ?>
    </div>


      </div>       
      </div> 
  </div>
</section>


<!-- /.CONTEUDO_INICIO -->
  </div>
  
  <!-- FOOTER -->
    <?php $this->load->view('of-template/footer'); ?>
  <!-- /.FOOTER -->
   
  <aside class="control-sidebar control-sidebar-dark">
  </aside>
  
</div>
<!-- /.CONTEUDO -->

<?php $this->load->view('of-template/add_default_js'); ?>
<?php $this->load->view('of-template/add_notification'); ?>

</body>
</html>

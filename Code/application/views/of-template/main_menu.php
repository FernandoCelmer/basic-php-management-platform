<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>

 <aside class="main-sidebar sidebar-dark-primary elevation-4">

    <a href="#" class="brand-link">
      <img src="<?=base_url()?>assets/images/indexoffy-icon.png" alt="BooPixel" class="brand-image img-circle elevation-3">
      <span class="brand-text font-weight-light">IndexOffy</span>
    </a>

    <div class="sidebar">

      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Painel de Controle
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link active">
                  <i class="fa fa-home nav-icon"></i>
                  <p>Inicio</p>
                </a>
              </li>   
              <li class="nav-item"> 
                <a href="#" class="nav-link">
                  <i class="fa fa-user nav-icon"></i>
                  <p>Meu Perfil</p>
                </a>
              </li>       
            </ul>
          </li>                           
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link"><i class="nav-icon fas fa-cog"></i><p>Administração<i class="right fas fa-angle-left"></i></p></a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="#" class="nav-link">
                <i class="far fa-address-card nav-icon"></i>
                  <p>Lista de Usuários</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item"> 
                <a href="#" class="nav-link">
                  <i class="fa fa-times-circle-o nav-icon"></i>
                  <p>Sair do Sistema</p>
                </a>
              </li> 
        </ul>
      </nav>
    </div>
  </aside>
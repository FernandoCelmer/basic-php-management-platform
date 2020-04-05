<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">

    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?=base_url()?>index.php/Admin" class="nav-link">Home</a>
      </li>
    </ul>

    <ul class="navbar-nav ml-auto">
      
      <li class="nav-item dropdown">
        <a class="nav-link" href="<?=base_url()?>index.php/Admin/logout">
          <i class="far fa-window-close"></i>
          <span class="badge badge-warning navbar-badge"></span>
        </a>
       
      </li>

    </ul>
  </nav>
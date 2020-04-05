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
<body class="hold-transition login-page">
<div class="login-box">
  
  <div class="login-logo">
  <a href="#"><img src="<?=base_url()?>assets/images/indexoffy.png" class="img-responsive" alt="" width="129" height="130"/></a>
  </div>

  <div class="card">
    <div class="card-body login-card-body">
    <h4><p class="login-box-msg">IndexOffy</p></h4>

        <form class="form-signin">
        <div class="input-group mb-3">
        <input type="email" id="emailUsuario" name="emailUsuario" class="form-control alert1" placeholder="E-mail">
          <div class="input-group-append">
            <div class="input-group-text alert1">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
        <input type="password" id="senhaUsuario" name="senhaUsuario" class="form-control alert2" placeholder="Senha">
          <div class="input-group-append">
            <div class="input-group-text alert2">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">  
          <div class="col-4">      
          </div>
        </div>
      </form>
      <div class="social-auth-links text-center mb-3">
        <button id="logar" type="button" class="btn btn-block btn-success">
          <i class="mr-2"></i> Entrar
        </a>
       <button id="cadastrar" type="button" class="btn btn-block btn-default">
          <i class="mr-2"></i> Cadastrar-se
        </a>
      </div>
        <p class="mb-1">
      </p>
    </div>
  </div>
</div>

<!-- /.JS -->
<?php $this->load->view('bp-template/add_default_js'); ?>
  <?php $this->load->view('bp-template/add_notification'); ?>
<!-- /.JS -->

<script>
  $(() => {         
    $("#logar").click(function(){
      VerificaCampos();
    });         
  });
</script>

<script>
  $(() => {         
    $("#cadastrar").click(function(){
      window.location.href = "<?=base_url()?>index.php/Conta/Novo";
    });         
  });
</script>
<script>

  function SetMensagem(status,titulo,mensagem){
    toastr.options = {
          "closeButton": true,
          "debug": false,
          "newestOnTop": false,
          "progressBar": false,
          "positionClass": "toast-top-center",
          "preventDuplicates": false,
          "onclick": null,
          "showDuration": "300",
          "hideDuration": "1000",
          "timeOut": "5000",
          "extendedTimeOut": "1000",
          "showEasing": "swing",
          "hideEasing": "linear",
          "showMethod": "fadeIn",
          "hideMethod": "fadeOut"
        }
        toastr[status](mensagem, titulo)
  }
</script>

<script>
  function VerificaCampos(){
    var emailUsuario = $("#emailUsuario").val();
    var senhaUsuario = $("#senhaUsuario").val();

    if(emailUsuario == "") {
      SetCampos("#emailUsuario",".alert1","Preenche o campo por favor!");
      return false;
    }else{
      var emailFilter=/^.+@.+\..{2,}$/;
      var illegalChars= /[\(\)\<\>\,\;\:\\\/\"\[\]]/   
      if(!(emailFilter.test(emailUsuario))||emailUsuario.match(illegalChars)){            
        SetCampos("#emailUsuario",".alert1",3);
        return false;
        }  
    }LimpaCampos();

    if(senhaUsuario == "") {
      SetCampos("#senhaUsuario",".alert2","Preenche o campo por favor!");
      return false;
    }LimpaCampos()
    
    Logar();
  }

  function LimpaCampos(){
    $('.alert1').css({"border": "1px solid #ced4da"});
    $('.alert1').css({"color": "#495057"});

    $('.alert2').css({"border": "1px solid #ced4da"});
    $('.alert2').css({"color": "#495057"});
  }
</script>

<script>
  function SetCampos(nome,alert,mensagem){  
    LimpaCampos();
      $(nome).focus();    
      $(alert).css({"border": "1px solid #ff5555"});
      $(alert).css({"color": "#ff5555"});
      SetMensagem("error","Alerta",mensagem)
    }
</script>

<script>     
  function Logar(){         
      let email = $("#emailUsuario").val();
      let senha = $("#senhaUsuario").val();
          
        $.ajax({
            url: "<?=base_url()?>index.php/Conta/Logar",
            method: "POST",
            data: {
                email: email,
                senha: senha
            },
            beforeSend: function(){
                
            },
            success: function(data){
                console.log(data);
                
                if(data.sucesso){
                  SetMensagem("success","Sucesso","Entrando no Sistema!");
                  window.location.href = "<?=base_url()?>index.php/Admin";                    
                }else{
                  SetCampos("#senhaUsuario",".alert2","E-mail ou Senha inválidos!");                    
                }               
            },
            error: function(data){
                console.log(data);
            },
            complete: function(){              
            }
        });            
      
  }
      
  </script>

</body>
</html>
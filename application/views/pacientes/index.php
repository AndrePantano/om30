<!DOCTYPE html>
<html lang="pt-br">

	<head>    
		<?php $this->load->view("layout/header"); ?>

		<style type="text/css">
			table tbody tr:hover{
				cursor: pointer;
			}
		</style>
    <script type="text/javascript" src="<?=base_url('assets/js/validacpf.js')?>"></script>
    <script type="text/javascript" src="<?=base_url('assets/js/validacns.js')?>"></script>
	</head>

	<body>

	<div class="container">
		<?php 
      $this->load->view("pacientes/modal_inserir"); 
			$this->load->view("layout/flash_message");
			$this->load->view("layout/navbar"); 
		?>

	 <div class="row">
      <div class="col-sm-12">
        <div class="page-header">
          <h1>
            <span class="glyphicon glyphicon-th-list"></span> <?=$page_name?>           
          </h1>
        </div>
      </div>
    </div>

    <div class="col-sm-12">
      <div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading">
          <div class="row">
            <div class="col-sm-6">
              <h4>Lista de <?=$page_name?></h4>
            </div>
            <div class="col-sm-6">
              <a role="button" class="btn btn-primary pull-right" href="#" data-target="#modal_inserir" data-toggle="modal">Adicionar</a>
            </div>            
          </div>
        </div>
        <div class="panel-body">
        <?php if(count($pacientes) > 0 ): ?>
          <table class="table table-striped table-hover" id="table">
            <thead>
              <tr>               
              </tr>
            </thead>
            <tbody>
              <?php foreach ($pacientes as $paciente):?>
                <tr class="tr" data-seq_checkl="<?= $paciente['seq_checkl'] ?>" >                 
              </tr>
              <?php endforeach;?>
            </tbody>
          </table>
        <?php else: ?>
          <?php $this->load->view("layout/jumbotron_no_registers"); ?>
        <?php endif; ?>
        </div>
      </div>
    </div>
    
  </div>

  <?php $this->load->view("layout/footer_datatable"); ?>

  <script type="text/javascript">
    $(document).ready(function(){
       $("#table tbody tr").click(function(){
        window.location.href = base_url + "pacientes/ver/" + $(this).data("seq_checkl");
      });
    });
  </script>
	</body>
</html>
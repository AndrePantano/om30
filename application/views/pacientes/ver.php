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
      $this->load->view("pacientes/modal_update_image"); 
      $this->load->view("pacientes/modal_update_data"); 
      $this->load->view("pacientes/modal_delete"); 
      $this->load->view("pacientes/modal_update_address"); 
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

    <div class="row" style="margin-top: 20px;">
      <div class="col-sm-12">
       <h4>Dados Pessoais</h4>
     </div>
    </div>
           
    <div class="row well well-sm" style="margin-top: 20px;">
      
      <div class="col-sm-2">          
        <img class="thumbnail" src="<?= base_url('upload/avatar_'.$paciente->get_seq_pacien().'.jpg')?>">
        <button type="button" class="btn btn-default btn-sm btn-block" data-target="#modal_update_image" data-toggle="modal"><span class="glyphicon glyphicon-edit"></span> Alterar Foto</button>
      </div>

      <div class="col-sm-10">        
        <div class="col-sm-4" style="margin-top: 20px;">
            <label class="col-sm-12">Nome:</label>
            <span class="col-sm-12"><?= $paciente->get_nom_pacien()?></span>
        </div>

        <div class="col-sm-4" style="margin-top: 20px;">
            <label class="col-sm-12">CPF:</label>
            <span class="col-sm-12"><?= $paciente->get_num_cpf_view()?></span>
        </div>
        
        <div class="col-sm-4" style="margin-top: 20px;">
            <label class="col-sm-12">CNS:</label>
            <span class="col-sm-12"><?= $paciente->get_num_cns()?></span>
        </div>

        <div class="col-sm-4" style="margin-top: 20px;">
            <label class="col-sm-12">Nascimento:</label>
            <span class="col-sm-12"><?= $paciente->get_dat_nascim_view()?></span>
        </div>
        
        <div class="col-sm-4" style="margin-top: 20px;">
            <label class="col-sm-12">Nome da Mãe:</label>
            <span class="col-sm-12"><?= $paciente->get_nom_mae()?></span>
        </div>    
      </div>
  </div>
  
  <div class="row">
    <div class="col-sm-12">
      <button type="button" class="btn btn-danger btn-sm pull-right" style="margin-right: 10px;" data-target="#modal_delete" data-toggle="modal"><span class="glyphicon glyphicon-trash"></span> Excluir Paciente</button>
      <button type="button" class="btn btn-primary btn-sm pull-right" style="margin-right: 10px;" data-target="#modal_update_data" data-toggle="modal"><span class="glyphicon glyphicon-edit"></span> Editar Dados</button>
    </div>
  </div>

  <div class="row" style="margin-top: 20px;">
    <div class="col-sm-12">
       <h4>Endereço</h4>
    </div>
  </div>
           
  <div class="row well" style="margin-top: 20px; margin-bottom: 20px;">
                 
    <div class="col-sm-2" style="margin-top: 20px;">
        <label class="col-sm-12">Logradouro:</label>
        <span class="col-sm-12"><?= $paciente->get_des_lograd()?></span>
    </div>

    <div class="col-sm-2" style="margin-top: 20px;">
        <label class="col-sm-12">Complemento:</label>
        <span class="col-sm-12"><?= $paciente->get_des_comple()?></span>
    </div>
    
    <div class="col-sm-2" style="margin-top: 20px;">
        <label class="col-sm-12">Bairro:</label>
        <span class="col-sm-12"><?= $paciente->get_des_bairro()?></span>
    </div>
    
    <div class="col-sm-2" style="margin-top: 20px;">
        <label class="col-sm-12">Cidade:</label>
        <span class="col-sm-12"><?= $paciente->get_des_cidade()?></span>
    </div>
    
    <div class="col-sm-2" style="margin-top: 20px;">
        <label class="col-sm-12">UF:</label>
        <span class="col-sm-12"><?= $paciente->get_des_uf()?></span>
    </div>

    <div class="col-sm-2" style="margin-top: 20px;">
        <label class="col-sm-12">CEP:</label>
        <span class="col-sm-12"><?= $paciente->get_num_cep_view()?></span>
    </div>    
  </div>
  
  <div class="row">
    <div class="col-sm-12">
      <button type="button" class="btn btn-primary btn-sm pull-right" style="margin-right: 10px;" data-target="#modal_update_address" data-toggle="modal"><span class="glyphicon glyphicon-edit"></span> Editar Endereço</button>
    </div>
  </div>


  <script type="text/javascript">
    $(document).ready(function(){
            
    });
  </script>
	</body>
</html>
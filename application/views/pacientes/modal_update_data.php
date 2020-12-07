<div class="modal fade in" tabindex="-1" id="modal_update_data" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    
    <form class="form-horizontal" method="post" enctype="multipart/form-data" action="<?=base_url('pacientes/action')?>">
      <input type="hidden" name="action" value="update_data">
      <input type="hidden" name="seq_pacien" value="<?=$paciente->get_seq_pacien()?>">
      
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title titulo_modal">Editar Dados Pessoais</h4>
      </div>

      <div class="modal-body">
        <div class="row">
          <div class="col-sm-12">
              
              <div class="form-group">
                <label class="col-sm-4 control-label" for="num_cpf">CPF:</label>  
                <div class="col-sm-4">
                  <input id="num_cpf" name="num_cpf" type="text" onBlur="cpfCheck(this);" maxlength="14" value="<?= $paciente->get_num_cpf_view()?>" onkeydown="fMasc( this, mCPF );" placeholder="000.000.000-00" class="form-control num_cpf input-sm" required>
                  <span class="help-block" id="checkcpf"></span>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-4 control-label" for="num_cns">CNS:</label>  
                <div class="col-sm-4">
                  <input id="num_cns" name="num_cns" type="text" onBlur="cnsCheck(this);" maxlength="15" value="<?= $paciente->get_num_cns()?>"  placeholder="000000000000000" class="form-control input-sm num_cns" required>
                  <span class="help-block" id="checkcns"></span>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-4 control-label" for="nom_pacien">Nome:</label>  
                <div class="col-sm-8">
                  <input id="nom_pacien" name="nom_pacien" type="text" value="<?= $paciente->get_nom_pacien()?>" placeholder="" class="form-control input-sm nom_pacien" required>
                </div>
              </div>


              <div class="form-group">
                <label class="col-sm-4 control-label" for="dat_nascim">Data Nasc.:</label>  
                <div class="col-sm-4">
                  <input id="dat_nascim" name="dat_nascim" type="date" value="<?= $paciente->get_dat_nascim()?>" placeholder="" class="form-control input-sm dat_nascim" required>
                </div>
              </div>


              <div class="form-group">
                <label class="col-sm-4 control-label" for="nom_mae">Nome da Mãe:</label>  
                <div class="col-sm-8">
                  <input id="nom_mae" name="nom_mae" type="text" value="<?= $paciente->get_nom_mae()?>" placeholder="" class="form-control input-sm nom_mae" required>
                </div>
              </div>

            </div>
          </div>
        </div>
      
      <div class="modal-footer">          
        <button class="btn btn-default" type="button" data-dismiss="modal">Cancelar</button>
        <button class="btn btn-primary" type="submit">Cadastrar</button>
      </div>
    
    </form>
    
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
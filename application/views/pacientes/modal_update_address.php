<div class="modal fade in" tabindex="-1" id="modal_update_address" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    
    <form class="form-horizontal" method="post" enctype="multipart/form-data" action="<?=base_url('pacientes/action')?>">
      <input type="hidden" name="action" value="update_address">
      <input type="hidden" name="seq_pacien" value="<?=$paciente->get_seq_pacien()?>">
      
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title titulo_modal">Editar Endereço</h4>
      </div>

      <div class="modal-body">
        <div class="row">
          <div class="col-sm-12">
              
            <div class="form-group">
              <label class="col-sm-4 control-label" for="num_cep">CEP.:</label>  
              <div class="col-sm-4">
                <input id="num_cep" name="num_cep" type="text" placeholder="" class="form-control input-sm num_cep" required value="<?= $paciente->get_num_cep_view()?>">
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-4 control-label" for="des_lograd">Logradouro:</label>  
              <div class="col-sm-8">
                <input id="des_lograd" name="des_lograd"  type="text" placeholder="" class="form-control input-sm des_lograd" required value="<?= $paciente->get_des_lograd()?>">
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-4 control-label" for="des_comple">Nº/Complemento.</label>  
              <div class="col-sm-4">
                <input id="des_comple" name="des_comple" type="text" placeholder="" class="form-control input-sm des_comple" required value="<?= $paciente->get_des_comple()?>">
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-4 control-label" for="des_bairro">Bairro:</label>  
              <div class="col-sm-8">
                <input id="des_bairro" name="des_bairro"  type="text" placeholder="" class="form-control input-sm des_bairro" required value="<?= $paciente->get_des_bairro()?>">
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-4 control-label" for="des_cidade">Cidade:</label>  
              <div class="col-sm-8">
                <input id="des_cidade" name="des_cidade"  type="text" placeholder="" class="form-control input-sm des_cidade" required value="<?= $paciente->get_des_cidade()?>">
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-4 control-label" for="des_uf">UF</label>  
              <div class="col-sm-2">
                <input id="des_uf" name="des_uf"  type="text" placeholder="" maxlength="2" class="form-control input-sm des_uf" required value="<?= $paciente->get_des_uf()?>">
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
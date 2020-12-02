  <div class="modal fade in" tabindex="-1" id="modal_inserir" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
      
      <form class="form-horizontal" method="post" enctype="multipart/form-data" action="<?=base_url('pacientes/action')?>">

        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title titulo_modal">Pacientes - Inserir</h4>
        </div>

        <div class="modal-body">
          <div class="row">
            <div class="col-sm-12">
              <?php $this->load->view("pacientes/form") ?>
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
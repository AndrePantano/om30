 
<?php if($this->session->flashdata("flash_content")): ?>
  <div class="modal fade in" tabindex="-1" id="flash_message" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title"><?= $this->session->flashdata("flash_title") ?></h3>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-sm-12 text-<?=$this->session->flashdata('flash_class')?>">
              <?= $this->session->flashdata("flash_content") ?>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-primary btn_close" type="button" data-dismiss="modal"    >Fechar</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

  <script type="text/javascript">
    $(document).ready(function(){
      $("#flash_message").modal("show");
      

      $('#flash_message').on('shown.bs.modal', function () {
        $(".btn_close").focus();
      }); 
    });
  </script>
<?php endif; ?>

  <input type="hidden" name="action" value="insert">
  <input type="hidden" name="seq_pacien" value="0">

  <h4> Dados Pessoais</h4>

  <div class="well well-sm">

    <div class="form-group">
      <label class="col-sm-4 control-label" for="arquivo">Sua Foto:</label>
      <div class="col-sm-4">
        <input id="arquivo" name="arquivo" class="input-file" type="file" required>
      </div>
    </div>

    <div class="form-group">
      <label class="col-sm-4 control-label" for="num_cpf">CPF:</label>  
      <div class="col-sm-4">
        <input id="num_cpf" name="num_cpf" type="text" onBlur="cpfCheck(this);" maxlength="14" onkeydown="fMasc( this, mCPF );" placeholder="000.000.000-00" class="form-control num_cpf input-sm" required>
        <span class="help-block" id="checkcpf"></span>
      </div>
    </div>

    <div class="form-group">
      <label class="col-sm-4 control-label" for="num_cns">CNS:</label>  
      <div class="col-sm-4">
        <input id="num_cns" name="num_cns" type="text" onBlur="cnsCheck(this);" maxlength="15"  placeholder="000000000000000" class="form-control input-sm num_cns" required>
        <span class="help-block" id="checkcns"></span>
      </div>
    </div>

    <div class="form-group">
      <label class="col-sm-4 control-label" for="des_nome">Nome:</label>  
      <div class="col-sm-8">
        <input id="des_nome" name="des_nome" type="text" placeholder="" class="form-control input-sm des_nome" required>
      </div>
    </div>


    <div class="form-group">
      <label class="col-sm-4 control-label" for="dat_nascim">Data Nasc.:</label>  
      <div class="col-sm-4">
        <input id="dat_nascim" name="dat_nascim" type="text" placeholder="" class="form-control input-sm dat_nascim" required>
      </div>
    </div>


    <div class="form-group">
      <label class="col-sm-4 control-label" for="des_nome_mae">Nome da Mãe:</label>  
      <div class="col-sm-8">
        <input id="des_nome_mae" name="des_nome_mae" type="text" placeholder="" class="form-control input-sm des_nome_mae" required>
      </div>
    </div>

  </div>

  <h4> Endereço</h4>

  <div class="well well-sm">
    
    <div class="form-group">
      <label class="col-sm-4 control-label" for="num_cep">CEP.:</label>  
      <div class="col-sm-4">
        <input id="num_cep" name="num_cep" type="text" placeholder="" class="form-control input-sm num_cep" required>
      </div>
    </div>

    <div class="form-group">
      <label class="col-sm-4 control-label" for="des_lograd">Logradouro:</label>  
      <div class="col-sm-8">
        <input id="des_lograd" name="des_lograd" type="text" placeholder="" class="form-control input-sm des_lograd" required>
      </div>
    </div>

    <div class="form-group">
      <label class="col-sm-4 control-label" for="des_comple">Nº/Complemento.</label>  
      <div class="col-sm-4">
        <input id="des_comple" name="des_comple" type="text" placeholder="" class="form-control input-sm des_comple" required>
      </div>
    </div>

    <div class="form-group">
      <label class="col-sm-4 control-label" for="des_bairro">Bairro:</label>  
      <div class="col-sm-8">
        <input id="des_bairro" name="des_bairro" type="text" placeholder="" class="form-control input-sm des_bairro" required>
      </div>
    </div>

    <div class="form-group">
      <label class="col-sm-4 control-label" for="des_cidade">Cidade:</label>  
      <div class="col-sm-8">
        <input id="des_cidade" name="des_cidade" type="text" placeholder="" class="form-control input-sm des_cidade" required>
      </div>
    </div>

    <div class="form-group">
      <label class="col-sm-4 control-label" for="des_uf">UF</label>  
      <div class="col-sm-2">
        <input id="des_uf" name="des_uf" type="text" placeholder="" class="form-control input-sm des_uf" required>
      </div>
    </div>
  </div>

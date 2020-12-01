<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_paciente extends CI_Migration  {

	public function up()
    {
            $this->dbforge->add_field(
            	array(
                    'seq_pacien' => array(
                            'type' => 'INT',
                            'constraint' => 5,
                            'unsigned' => TRUE,
                            'auto_increment' => TRUE
                    ),
                    'num_cpf' => array(
                            'type' => 'VARCHAR',
                            'constraint' => '11',
                    ),
                    'num_cns' => array(
                            'type' => 'VARCHAR',
                            'constraint' => '15',
                    ),
                    'nom_pacien' => array(
                            'type' => 'VARCHAR',
                            'constraint' => '100',
                    ),                    
                    'nom_mae' => array(
                            'type' => 'VARCHAR',
                            'constraint' => '50',
                    ),
                    'dat_nascim' => array(
                            'type' => 'DATE'                            
                    ),
                    'num_cep' => array(
                            'type' => 'VARCHAR',
                            'constraint' => '8',
                    ),
                    'des_comple' => array(
                            'type' => 'VARCHAR',
                            'constraint' => '50',
                    ),
                    'des_bairro' => array(
                            'type' => 'VARCHAR',
                            'constraint' => '50',
                    ),
                    'des_cidade' => array(
                            'type' => 'VARCHAR',
                            'constraint' => '50',
                    ),
                    'des_lograd' => array(
                            'type' => 'VARCHAR',
                            'constraint' => '100',
                    ),

	            )
	        );
            $this->dbforge->add_key('seq_pacien', TRUE);
            $this->dbforge->create_table('paciente');
    }

    public function down()
    {
            $this->dbforge->drop_table('paciente');
    }
}

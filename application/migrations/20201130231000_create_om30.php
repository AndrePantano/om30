<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_om30 extends CI_Migration  {

    public function up()
    {
           $this->dbforge->create_database('om30')
    }

    public function down()
    {
           $this->dbforge->drop_database('om30')
    }
}

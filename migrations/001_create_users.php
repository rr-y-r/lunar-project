<?php
class migrationCreateUsers extends CI_Migration {
    public function up(){
        $this->dbforge->add_field(array(
            'id' =>array(
                'type' => 'int',
                'contraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'email' => array(
                'type' => 'VARCHAR',
                'contraint' => '128',
                ),
            'name' => array(
                'type' => 'VARCHAR',
                'constraint' => 100,
            ),
        ));
        $this->dbforge->add_key('id',TRUE);
        $this->dbforge->create_table('users');
    }
    
     function down(){
        $this->dbforge->create_table('users');
    }
}

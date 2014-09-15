<?php
class Migration_Create_items extends CI_Migration {

	public function up(){
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			),
                        'title' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),
                        'slug' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),
                        'category' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),
                        'store' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),
                        'image' => array(
                                'type' => 'VARCHAR',
                                 'constraint' => '100',
                        ),
                        'order' => array(
				'type' => 'INT',
				'constraint' => '11',
			),
                ));
                $this->dbforge->add_key('id', TRUE);
                $this->dbforge->create_table('items');
        }

        public function down(){
               $this->dbforge->drop_table('items');
        }
}
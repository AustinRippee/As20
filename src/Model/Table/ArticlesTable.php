<?php

use \Cake\ORM\Table;

class ArticlesTable extends Table{
    public function initialize (array $config) : void {
        $this->addBehavior('Timestamp'); // Automatically populates timestamp (datetime) fields
    }
}
<?php
    namespace App\Core;

    class Controller{
        private $dbc;
        private $data = [];

        final public function __contruct(\App\Core\DatabaseConnection &$dbc){
            $this->dbc = $dbc;
        }

        final public function &getDatabaseConnection(): \App\Core\DatabaseConnection{
            return $this->dbc;
        }

        final protected function set(string $name, $value){

        }

    }
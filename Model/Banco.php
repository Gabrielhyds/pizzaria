<?php

abstract class Banco{

    abstract public function save();

    abstract public function remove($id);

    abstract public function find($id);

    abstract public function listAll();
}
?>
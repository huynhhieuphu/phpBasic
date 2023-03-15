<?php
abstract class BaseRepository implements RepositoryInterface {
    protected $model;

    public function __construct() {
        $this->setModel();
    }

    abstract public function getModel();

    public function setModel() {
        $this->model = $this->getModel();
    }

    public function getAll() {
        return 'Get all';
    }

    public function create($attribute = []) {
        return 'Create record';
    }

    public function find($id) {
        return 'Get one';
    }

    public function update($id, $attribute = []) {
        return 'Update record';
    }

    public function delete($id) {
        return 'Delete record';
    }
}
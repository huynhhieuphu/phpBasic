<?php
interface RepositoryInterface {

    public function getAll();

    public function create($attribute = []);

    public function find($id);

    public function update($id, $attribute = []);

    public function delete($id);
}
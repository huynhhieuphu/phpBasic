<?php
interface CategoryRepositoryInterface {

    public function getCategory();

    public function getDetailCategory($id);

    public function addCategory($data);
}
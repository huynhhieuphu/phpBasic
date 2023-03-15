<?php
// Lớp trung gian
class CategoryRepository extends BaseRepository implements CategoryRepositoryInterface {

    public function getModel() {
        return new Category(); //Khởi tạo model Category
    }

    public function getCategory() {
        return $this->getAll();
    }

    public function getDetailCategory($id) {
        return $this->find($id);
    }

    public function addCategory($data)
    {
        echo 'Add Category: ' . $data;
    }
}
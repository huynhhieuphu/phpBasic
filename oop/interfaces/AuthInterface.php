<?php

interface AuthInterface {

    // Thuộc tính (biến) không được phép định nghĩa
    // HẰNG SỐ thì cho phép định nghĩa
    const _MSG_TEMPLATE = [
        'required' => 'The :attribute field is required',
        'unique'   => ':attribute is already used'
    ];

    // Chỉ khai báo phương thức không code gì thêm
    public function login();

    public function register();

    public function forgotPassword();

    public function resetPassword();

    public function activeAuth();

}
<?php
class Auth implements AuthInterface, RoleInterface, FooInterface {

    public function login() {
        return __METHOD__;
    }

    public function register(){
        return __METHOD__;
    }

    public function forgotPassword(){
        return __METHOD__;
    }

    public function resetPassword(){
        return __METHOD__;
    }

    public function activeAuth(){
        return __METHOD__;
    }

    public function checkRole(){
        return __METHOD__;
    }

    public function foo()
    {
        return __METHOD__;
    }

    public function boo()
    {
        return __METHOD__;
    }

    public function bar()
    {
        return __METHOD__;
    }
}
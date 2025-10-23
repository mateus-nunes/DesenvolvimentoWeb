<?php

interface Autenticavel
{

    public function login($user, $pass);

    public function logout();

}
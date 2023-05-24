<?php


class UserController extends Users
{
    public function createUser($first_name, $last_name, $dob)
    {
        $this->setUser($first_name, $last_name, $dob);
    }
}
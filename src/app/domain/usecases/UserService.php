<?php

interface UserService {

    public function findAll();
    public function createUser($user);
    public function deleteUser($id);
    public function editUser($id);
}

?>
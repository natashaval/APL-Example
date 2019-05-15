<?php

interface UserRepositoryInterface {
   
    public function findAll();
    public function findFirst($parameters = null);

    public function createUser($user);
    public function editUser($id);
    public function deleteUser($id);
}

?>
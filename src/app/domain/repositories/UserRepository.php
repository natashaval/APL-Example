<?php

interface UserRepository {
   
    public function findAll();
    public function findFirst($parameters = null);

    public function createUser($user);
    public function editUser($id);
    public function deleteUser($id);
}

?>
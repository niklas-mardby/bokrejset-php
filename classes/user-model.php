<?php

// bryggan mellan db och controller, Model
// kommunicerar med db CRUD
// ( innan har vi gjort en "Monster" som bara bär data men nu bär db data så... )

class UserModel extends DB {

    protected $table = "users";

    public function getAllUsers(){
        return $this->getAll($this->table);
    }
}

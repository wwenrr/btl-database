<?php

class hospitalRepository extends dataBaseRepository {
    public function getPasswordByUsername($username) {
        $sql = "
            SELECT password FROM user_data
            WHERE username = 'admin'
        ";

        return $this->getDataFromResult($this->queryExecutor($sql));
    }

    public function insertDoter($form) {

    }
}
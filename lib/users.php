<?php

class users
{
    private $connection;

    //connection
    public function __construct()
    {

        $this->connection = new mysqli('localhost', 'root', '', 'event');
    }
    public function getusers($extra = '')
    {
        $result = $this->connection->query("SELECT * FROM `book` $extra ");
        $this->connection->set_charset("utf8");
        if ($result->num_rows > 0) {

            $users = array();
            while ($row = $result->fetch_assoc()) {

                $users[] = $row;
            }
            return $users;
        }
        return null;
    }
}
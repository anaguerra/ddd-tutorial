<?php

namespace DependencyInversion;

class PasswordReminder
{
    /**
     * @var dbConnection
     */
    protected $dbConnection;

    public function __construct(DBConnection $connection)
    {
        $this->dbConnection = $connection;
    }
}
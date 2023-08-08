<?php

namespace App;

use Exception;

class App
{
    public function __construct()
    {
        /*
         * Constantes do sistema
         */
        define('APP_HOST'       , $_SERVER['HTTP_HOST'] . "");
        define('PATH'           , realpath('./'));
        define('TITLE'          , "docker-php-apache-mysql");
        define('DB_HOST'        , "db:3306");
        define('DB_USER'        , "root");
        define('DB_PASSWORD'    , "root");
        define('DB_NAME'        , "dbname");
        define('DB_DRIVER'      , "mysql");

        $this->url();
    }
  }

  // example of function connecting with database

  // class UserDAO extends BaseDAO // this is an Data Access Object -> should be in another file, but for example is here :)
  // {
  //   public function getById(int $idUser)
  //   {
  //     $result = $this->select("SELECT * FROM users WHERE idUser = $idUser");

  //     return $result->fetchObject(User::class); // this one is the call to the entity for user
  //   }
  // }
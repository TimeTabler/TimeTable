<?php
  function db_query($query) {
      $connection = db_connect();
      $result = mysqli_query($connection,$query);
      return $result;
  }


  function db_quote($value) {
      $connection = db_connect();
      return mysqli_real_escape_string($connection,$value);
  }


  function db_connect() {
      static $connection;
      if ( ! isset($connection)) {
          $config = parse_ini_file('config.ini');
          $connection = mysqli_connect($config['host'],$config['username'],$config['password'],$config['dbname']);
      }
      if ($connection === false) {
          echo mysqli_connect_error();
           return mysqli_connect_error(); 
      }
      return $connection;
  }
  ?>
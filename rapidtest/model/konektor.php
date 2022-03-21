<?php
class Konektor {
  public static function getKonektor(){
    $host = 'localhost';
    $dbname = 'covid-19';
    $username = 'root';
    $password = '';
    try {
      return new PDO("mysql:host=$host;dbname=$dbname", 
                     $username, 
                     $password);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
  }
}
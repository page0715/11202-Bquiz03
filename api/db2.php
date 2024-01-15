<?php
date_default_timezone_set("Asia/Taipei");
session_start();

class DB{
protected $dns="mysql:host=localhost;charset=utf8;dbname=db15";
protected $pdo;
protected $table;

public function __construct(){
    $this->$pdo= new PDO();

}









}




?>
<?php

//Class for making a connection
class Connection{

  //Static makes method accessible globally
  public static function make(){

      try{
        return new PDO('mysql:host=127.0.0.1;dbname=gallery', 'root', '');

      } catch(PDOException $e){
          die($e->getMessage());
      }

  }
}

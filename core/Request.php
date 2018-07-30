<?php

//Class for getting request uri

class Request{

  public static function uri(){

    return trim($_SERVER['REQUEST_URI'], '/');

  }

}

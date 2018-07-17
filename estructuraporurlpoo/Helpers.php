<?php

/**
 *
 */
class Helpers
{

  function __construct() {
  }

  public function getUrl($controller=CONTROLLER_DEFAULT,$action=ACTION_DEFAULT){
    $stringUrl = "index.php?pageController=".$controller."&action=".$action;
    return $stringUrl;
  }

}


?>

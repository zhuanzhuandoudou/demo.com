<?php
  /**
   * Created by PhpStorm.
   * User: MeetYou
   * Date: 2018/11/23
   * Time: 15:46
   */
  
  
  $vendorPath =   dirname(__DIR__) . '/vendor';
  require $vendorPath . '/autoload.php';
  
  $a = new \Meiyou\Test();
  $a->get();
  echo $vendorPath;die;

  
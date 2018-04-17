<?php
require_once '../common/defineUtil.php';


  function return_top(){
      return "<a href='".ROOT_URL."'>トップへ戻る</a>";
  }
  function bind_p2s($name){
      if(!empty($_POST[$name])){
          $_SESSION[$name] = $_POST[$name];
          return $_POST[$name];
      }else{
          $_SESSION[$name] = null;
          return null;
      }
  }

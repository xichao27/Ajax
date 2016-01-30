<?php
  header("Content-Type:text/xml;charset=utf-8");
  header("Cache-Control: no-cache");
  $state=$_POST['State'];
  file_put_contents("F:/GitHub/Ajax/mylog.log",$state."\r\n",FILE_APPEND);
  if($state=="AL")
  {
  	$info="<state><captial>Montgomery</captial></state>";
  		
  }else if ($state=="AK")
  {
  	$info="<state><captial>Juneau</captial></state>";
  }else if ($state=="AZ")
  {
  	$info="<state><captial>Phoenix</captial></state>";
  }else if ($state=="AR")
  {
  	$info="<state><captial>Little Rock</captial></state>";
  }else if ($state=="CA")
  {
  	$info="<state><captial>Sacramento</captial></state>";
  }else if ($state=="CO")
  {
  	$info="<state><captial>Denver</captial></state>";
  }else if ($state=="CT")
  {
  	$info="<state><captial>Hartford</captial></state>";
  }else if ($state=="DE")
  {
  	$info="<state><captial>Dover</captial></state>";
  }
  echo $info;
?>
<?php
$arg1=$_REQUEST['arg1'];
$arg2=$_REQUEST['arg2'];
$op=$_REQUEST['op'];
switch($op){
  case 0:
    $result=$arg1+$arg2;
    $operator='+';
  break;
  case 1:
    $result=$arg1-$arg2;
    $operator='-';
  break;
  case 2:
    $result=$arg1*$arg2;
    $operator='*';
  break;
  case 3:
    if($arg2 ==0){
  	$result ="Math error";
		$arg1='';
		$arg2='';
		$operator='';
	  }else{
        $result=$arg1/$arg2;
        $operator='/';
	  }
  break;
}
$lista=array("arg1"=>$arg1,"op"=>$operator,"arg2"=>$arg2,"res"=>$result);
echo json_encode($lista);

<?php
require(dirname(__FILE__).'/include/config.inc.php');
require(dirname(__FILE__).'/proxy.php');

$m_arr = array('index','manager','proxy');

$mode = $_GET['m'];


// if ($mode == 'report'){
// 	pass;
// }else{
//     #pass;
// Checklogin($mode);
// }

if(in_array($mode,$m_arr)){
	$html_str = call_user_func($mode);
	include("html/$mode.html");
}else{
	$html_str = index();
	include('html/index.html');
}

?>
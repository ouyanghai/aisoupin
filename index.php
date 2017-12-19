<?php
header("content-type:text/html;charset=utf-8");
/*****************引流start**********************/
$refer = isset($_GET['refer']) ? $_GET['refer'] : ( isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : "" );
if( strpos($refer, "t.haodianpu") ){
	$durl = "http://i.haodianpu.com/site/shopll";
	$sid = 35418517;
	$iid = file_get_contents($durl);
	if(!empty($iid)){
		$url = "http://item.taobao.com/item.htm?id={$iid}";
	}else{
		$url = "http://shop35418517.taobao.com";
	}
    echo "<html><head><meta http-equiv='refresh' content='5; url={$url}' /></head><body><a id='link' href='{$url}' target='_self'></a><script language='javascript'>if( self != top ){top.location.href=self.location.href;}else{setTimeout(function(){self.location='{$url}';}, 3000);document.getElementById('link').click();}</script></body></html>";
    exit;
}

if(strpos($_SERVER["HTTP_HOST"], "ytx.la")){
	$url = "http://www.aisoupin.com".$_SERVER['REQUEST_URI'];
	echo "<script>window.location='{$url}';</script>";
	//header("Location:http://www.aisoupin.com/".$_SERVER['REQUEST_URI']);
	exit;
}

if(strpos($_SERVER["HTTP_HOST"], "aisoupin.com") && !strpos($_SERVER['REQUEST_URI'], "web/")){
	$req = "";
	if(!empty($_SERVER['REQUEST_URI'])){
		$req = preg_replace("/.php\?/", "?", $_SERVER['REQUEST_URI']);
	}
	//header("Location:http://www.aisoupin.com/web".$req);
	$url = "http://www.aisoupin.com/web".$req;
	echo "<script>window.location='{$url}';</script>";
	exit;
}


/*****************引流end**********************/

// change the following paths if necessary
$yii=dirname(dirname(__FILE__)).'/framework/yii.php';
$config=dirname(__FILE__).'/protected/config/main.php';
// remove the following lines when in production mode
defined('YII_DEBUG') or define('YII_DEBUG',true);
// specify how many levels of call stack should be shown in each log message
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);

require_once($yii);
Yii::createWebApplication($config)->run();


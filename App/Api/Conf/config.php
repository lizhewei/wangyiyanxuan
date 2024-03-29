<?php

header("Content-Type:text/html; charset=utf-8");
error_reporting(0);

define('SELF_ROOT','https://www.ta8.cn');

$urkn= SELF_ROOT."Data/app/";
define('APP_URL',$urkn);

return array(

    'key'         =>   15222,
    'URL_MODEL'   =>0,
    'app_name'   =>'香香社',
    'DB_FIELDS_CACHE'       =>true,
	'base'					=>$urkn.'62/3057c1502ae5a4d514baec129f72948c266e/',
	'TMPL_CACHE_ON' => false,
	'HTML_CACHE_ON' => false,
	'LOG_RECORD'            =>  false,
	'LOG_TYPE'              =>  'File',
	'LOG_LEVEL'             =>  'EMERG,ALERT,CRIT,ERR',
	'LOG_EXCEPTION_RECORD'  =>  false,
	LOAD_EXT_CONFIG => "functions",

	'TMPL_PARSE_STRING'=>array(
		'__DATA__'=>__ROOT__.'/Data'
	),
	'TMPL_ACTION_ERROR'     =>  'Public/error',
	'TMPL_ACTION_SUCCESS'   =>  'Public/success',

    'weixin'=>array(
        'appid' =>'wx7a774cc8ba25af06',//微信小程序appid
        'secret'=>'6a17a4f7612e4fab303a2a7771764215', //微信小程序secret
        'mchid' => '',//小程序支付商户号
        'key' => '',//小程序支付KEY
        'notify_url'=>'https://www.ta8.cn/index.php/Api/Wxpay/notify',
    ),
);
?>
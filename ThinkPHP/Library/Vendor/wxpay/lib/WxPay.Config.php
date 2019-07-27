<?php

class WxPayConfig
{
    const APPID = 'wx7a774cc8ba25af06';//微信小程序ID
    const MCHID = '';//微信小程序支付商户号
    const KEY = '';//微信小程序支付密码
    const APPSECRET = '6a17a4f7612e4fab303a2a7771764215';//微信小程序秘钥
	const SSLCERT_PATH = '../cert/apiclient_cert.pem';
	const SSLKEY_PATH = '../cert/apiclient_key.pem';
	const CURL_PROXY_HOST = "0.0.0.0";
	const CURL_PROXY_PORT = 0;
	const REPORT_LEVENL = 1;
}

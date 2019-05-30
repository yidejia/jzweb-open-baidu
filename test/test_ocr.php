<?php

include "../vendor/autoload.php";

use jzweb\open\baidu\AipOcr;


$appid = '';
$apikey = '';
$apisecret = '';

$idcard_url = "";
$bankcard_url = "http://i3.sinaimg.cn/dy/o/2014-05-15/1400105502_U5u71J.jpg";
$businesslicense_url = "";
$banklicence_url = "";

$client = new AipOcr($appid, $apikey, $apisecret);

//识别身份证
//$content =file_get_contents($idcard_url);
//$data = $client->idcard($content,"front");
//print_r($data);
//exit;
//识别银行卡
//$content =file_get_contents($bankcard_url);
//$data = $client->bankcard($content);
//print_r($data);
//exit;
//识别公司营业执照
//$content =file_get_contents($businesslicense_url);
//$data = $client->businessLicense($content);
//print_r($data);
//exit;
//识别行业经营资质
//$data = $client->basicGeneralUrl($banklicence_url);
//print_r($data);
//exit;
////识别组织机构代码
//$data = $client->basicGeneralUrl($banklicence_url);
//print_r($data);
//exit;
////识别一般纳税人资格证
//$data = $client->basicGeneralUrl($banklicence_url);
//print_r($data);
//exit;
//识别银行开户许可证
$data = $client->basicGeneralUrl($banklicence_url);
print_r($data);
exit;

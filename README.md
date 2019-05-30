## 集成百度AI开放平台文字识别相关服务

- 通用文字识别	识别图片中的文字信息
- 通用文字识别（高精度版）	更高精度地识别图片中的文字信息
- 通用文字识别（含位置信息版）	识别图片中的文字信息（包含文字区域的坐标信息）
- 通用文字识别（高精度含位置版）	更高精度地识别图片中的文字信息（包含文字区域的坐标信息）
- 通用文字识别（含生僻字版）	识别图片中的文字信息（包含对常见字和生僻字的识别）
- 网络图片文字识别	识别一些网络上背景复杂，特殊字体的文字
- 身份证识别	识别身份证正反面的文字信息
- 银行卡识别	识别银行卡的卡号并返回发卡行和卡片性质信息
- 驾驶证识别	识别机动车驾驶证所有关键字段
- 行驶证识别	识别机动车行驶证所有关键字段
- 车牌识别	对小客车的车牌进行识别
- 营业执照识别	对营业执照进行识别
- 表格文字识别	自动识别表格线及表格内容，结构化输出表头、表尾及每个单元格的文字内容
- 通用票据识别	对各类票据图片（医疗票据，保险保单等）进行文字识别，并返回文字在图片中的位置信息
- iOCR自定义模板文字识别	iOCR可以通过自助的模板制作，建立起键值的对应关系，一步完成非结构化到结构化的转换，实现自动化的数据录入


## 安装jzweb/open-baidu
```
composer require jzweb/open-baidu
```


# jzweb/open-baidu  

*  网站应用 百度Ai SDK 使用示例
```
<?php
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

```

------

# 问题（git 提交vendor目录至项目）

* 如果当前开发的项目中包含vender目录，安装后提交代码，发现版本库中并没有jzweb/sdk的代码文件
* 出现这种情况后，马上去服务器查看，发现也没有，是什么问题？
* 仔细查阅了一些文档，发现是因为该安装包包含.git的缘故，于是可这样操作
* 1.vendor目录已经存在

    ```
    如果已经执行了composer update/install，需要先删除vendor目录 执行：rm -rf vendor
    git add -A
    git commit -m "remove vendor"
    composer update --prefer-dist
    git add . -A 
    git commit -m "recover vendor"
    ```
* 2.vendor目录不存在
    
    ```
    composer update --prefer-dist
    git add . -A 
    git commit -m "recover vendor"
    ```
* Notice: composer update --prefer-dist 优先从缓存取，不携带组件内的.git目录。
* 对于稳定版本 compose默认采用--prefer-dist模式安装
* --optimize-autoloader (-o): 转换 PSR-0/4 autoloading 到 classmap 可以获得更快的加载支持。特别是在生产环境下建议这么做，但由于运行需要一些时间，因此并没有作为默认值。



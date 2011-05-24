<?php
/*
    ezEngage token url sample code
	ezEngage (C)2011  http://ezengage.com
    accept token from ezengage service, and fetch profile data via ezengage api
*/

//include the apiclient class, curl is needed.
include_once realpath(dirname(__FILE__)). '/apiclient.php';

//change this to your app key
$eze_app_key = 'YOUR APP KEY';

$ezeApiClient = new EzEngageApiClient($eze_app_key);

/* STEP 1: Extract token POST parameter */
$token = $_POST['token'];

if(empty($token)){
    echo 'bad request';
    exit();
}

//获得用户信息
$profile = $ezeApiClient->getProfile($token);

//注意: token 是一次性，调用getProfile 获得用户信息后,token 就失效了，用同样的token再此调用就失效了。

if(!$profile){
    echo 'fail to fetch user profile, check your api key and token';
    exit();
}

//process the profile
//你可以将profile 保存到数据库
//注意: ezEngage 的API返回的内容编码都是UTF8的。如果你的站点的编码不是UTF8,你可以需要做对应的编码转换。　

var_dump($profile);

//idetity 是用户的唯一标示符，你可以将这个值和你用户数据库的用户ID关联起来。
$identity = $profile['identity'];

echo 'You have loggin as ' . $profile['preferred_username'] . ' @ '  . $profile['provider_name'] . '<br/>';

?>

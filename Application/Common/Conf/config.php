<?php
return array(
    //'配置项'=>'配置值'
    'DB_TYPE' => 'mysql',
    'DB_DSN' => 'mysql:host=localhost:3307;dbname=marx;charset=utf8',
    'DB_uSER' => 'root',
    /*'DB_PWD' => '',*/
    /*tencent dbrootpwd*/
    'DB_PWD' => '',
    'DB_PREFIX' => 'tp_',
    'DB_PARAMS' => array(
        PDO::ATTR_CASE => PDO::CASE_NATURAL
    )
);
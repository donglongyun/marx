<?php
return array(
    //'配置项'=>'配置值'
    'DB_TYPE' => 'mysql',
    //注意修改端口值及连接地址
    'DB_DSN' => 'mysql:host=127.0.0.1:3307;dbname=marx;charset=utf8',
    'DB_uSER' => 'root',
    'DB_PWD' => '',
    'DB_PREFIX' => 'tp_',
    'DB_PARAMS' => array(
        PDO::ATTR_CASE => PDO::CASE_NATURAL
    )
);

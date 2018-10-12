<?php
return array(
    //'配置项'=>'配置值'
    'DB_TYPE' => 'mysql',
    //注意修改端口值及连接地址
    'DB_DSN' => 'mysql:host=111.111.111.111:3306;dbname=***;charset=utf8',
    'DB_uSER' => '',
    'DB_PWD' => '',
    'DB_PREFIX' => '',
    'DB_PARAMS' => array(
        PDO::ATTR_CASE => PDO::CASE_NATURAL
    )
);

<?php

return [
    'database'=>[
        'CONNECTION'=>'mysql:host=localhost',
        'DB_NAME'=> 'secondstorybookstore',
        'USER'=>'root',
        'PASSWORD'=>'',
        'OPTIONS'=>[
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]
    ]
];
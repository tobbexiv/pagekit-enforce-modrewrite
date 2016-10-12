<?php

return [

    'name' => 'tobbe/enforce-modrewrite',

    'type' => 'extension',

    'main' => function ($app) {
        $_SERVER['HTTP_MOD_REWRITE'] = 'On';
    }

];

?>
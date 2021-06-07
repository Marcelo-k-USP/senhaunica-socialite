<?php

return [
    // para rotas
    'routes' => false, // usa rotas e controller internos 
    'prefix' => '', // coloque um prefixo em caso de colisão de rotas (login, callback e logout).
    'middleware' => ['web'], // you probably want to include 'web' here

    'gates' => false, // habilita os gates admin, gerente e user internos
    'admins' => array_map('trim',explode(',', env('SENHAUNICA_ADMINS', ''))), // cadastre os admins separados por virgula
    'gerentes' => array_map('trim',explode(',', env('SENHAUNICA_GERENTES', ''))), // cadastre os gerentes separados por virgula

    'dev' => env('SENHAUNICA_DEV', 'no'),
    'debug' => (bool) env('SENHAUNICA_DEBUG', false),
    'callback_id' => env('SENHAUNICA_CALLBACK_ID'),
];

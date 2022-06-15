<?php

$router->get('', 'ConferenceController@home');
$router->get('create', 'ConferenceController@create');
$router->get('details', 'ConferenceController@details');
$router->get('edit', 'ConferenceController@edit');
$router->post('store', 'ConferenceController@store');
$router->post('update', 'ConferenceController@update');
$router->post('delete', 'ConferenceController@delete');
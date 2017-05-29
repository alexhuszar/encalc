<?php
session_save_path("sessions");
ini_set('display_errors', 1);
error_reporting(~0);

require __DIR__ . '/vendor/autoload.php';
require 'functions.php';

function configure(){
    option('env', ENV_DEVELOPMENT);
    option('base_uri', '/encalc');
    layout('layout.html.php');
}

$ss_id = '1fJJpSuVugXbkNlgNMefpKbLZ5adWt1koMsBhCpyLOLw';

$data = get_public_ss($ss_id, 8);

$options = array('params' => array('data'=>$data));

dispatch('/', 'home', $options);
dispatch('/calc', 'calc', $options);
error(NOT_FOUND, 'not_found');

run();
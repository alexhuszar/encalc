<?php
session_save_path("sessions");
ini_set('display_errors', 1);
error_reporting(E_ALL);

require __DIR__ . '/vendor/autoload.php';
require 'functions.php';

function configure(){
    option('env', ENV_DEVELOPMENT);
    option('base_uri', '/encalc');
    layout('layout.html.php');
}

$ss_id = '1fJJpSuVugXbkNlgNMefpKbLZ5adWt1koMsBhCpyLOLw';

$raw_data = get_public_ss($ss_id, 7);
$structured_data = raw_to_structured($raw_data);

$options = array('params' => array('data'=>$structured_data));

dispatch('/', 'home', $options);
dispatch('/calc', 'calc', $options);
dispatch('/furniz', 'furniz', $options);
error(NOT_FOUND, 'not_found');

run();

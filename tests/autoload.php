<?php
require_once __DIR__ . '/../vendor/autoload.php';

define('OMISE_PUBLIC_KEY', getenv('OMISE_PUBLIC_KEY'));
define('OMISE_SECRET_KEY', getenv('OMISE_SECRET_KEY'));

$_SERVER['SCRIPT_NAME'] = 'TestWithOmiseAPI';

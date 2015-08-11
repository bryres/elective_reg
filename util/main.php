<?php
// Get the document root
$doc_root = filter_input(INPUT_SERVER, 'DOCUMENT_ROOT');

// Get the application path
$uri = filter_input(INPUT_SERVER, 'REQUEST_URI');
$dirs = explode('/', $uri);
//echo $uri;
//echo $dirs[0];
//echo $dirs[1];
//echo $dirs[2];
$app_path = '/' . $dirs[1] . '/';

// Set the include path
set_include_path($doc_root . $app_path);
?>
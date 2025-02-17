<?php

$request = $_SERVER['REQUEST_URI'];

// Remove query parameters, leading/trailing slashes, filter non-alphanumeric characters
$requestPath = preg_replace('/[^a-zA-Z0-9\/_-]/', '', parse_url($request, PHP_URL_PATH));
$requestPath = trim($requestPath, '/');

// Create the template path based on the request
$templateDir = __DIR__ . '/views';
$templateFile = $templateDir . '/' . ($requestPath === '' ? 'index' : $requestPath) . '.php';

include_once __DIR__ . '/functions.php';

// Check if the template file exists
if (file_exists($templateFile)) {
    require $templateFile;
} else {
    // If no matching template, render the 404 page
    http_response_code(404);
    require $templateDir . '/404.php';
}
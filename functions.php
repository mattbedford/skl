<?php

function get_page_title(): string
{
    $request = $_SERVER['REQUEST_URI'];
    // Remove query parameters, leading/trailing slashes, filter non-alphanumeric characters
    $requestPath = preg_replace('/[^a-zA-Z0-9\/_-]/', '', parse_url($request, PHP_URL_PATH));
    $requestPath = trim($requestPath, '/');
    if('' === $requestPath) $requestPath = 'home';
    return ucfirst($requestPath) . " | " . "SKL Construction";
}

function get_page_path(): string
{
    return strtolower(trim($_SERVER['REQUEST_URI'], '/'));
}
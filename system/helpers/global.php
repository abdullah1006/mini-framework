<?php

if (!function_exists("base_path")) {
    function base_path()
    {
        return BASE_PATH;
    }
}

if (!function_exists("base_url")) {
    function base_url()
    {
        return BASE_URL;
    }
}

if (!function_exists("config_path")) {
    function config_path()
    {
        return CONFIG_PATH;
    }
}

if (!function_exists("request")) {
    function request($parameter = "")
    {
        $results = $_REQUEST;
        if (!isset($results[$parameter])) {
            return null;
        }

        return (string) $results[$parameter];
    }
}

if (!function_exists("print_json")) {
    function print_json(array $data)
    {
        echo json_encode($data);
    }
}

if (!function_exists("view")) {
    function view(string $viewName, array $data = [])
    {
        extract($data); // Mengubah key array menjadi variabel
        include_once VIEW_PATH . DIRECTORY_SEPARATOR . $viewName . ".php";
    }
}
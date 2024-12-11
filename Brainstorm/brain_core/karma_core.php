<?php
include 'karma_function.php';

function karma_young_sister() {
    $tipe_device = detek_device();
    $karma_url_process = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $karma_url_process = trim($karma_url_process, '/');
    $karma_parameter = $_GET;

    if (strpos($karma_url_process, '/process') !== false) {
        $karma_url_processing = str_replace('/process', '', $karma_url_process);
        
        $karma_process_path = __DIR__ . "/../../System/process/{$karma_url_processing}-page/{$karma_url_processing}-process.php";
        
        if (file_exists($karma_process_path)) {
            require_once $karma_process_path;
            $process_function = $karma_url_processing . '_process';
            if (function_exists($process_function)) {
                $process_function();
            } else {
                http_response_code(500);
                echo "Error: Function {$process_function} not found.";
            }
        } else {
            http_response_code(404);
            echo "Error: Process file for {$karma_url_processing} not found.";
        }
        return;
    }

    if (array_key_exists('this', $karma_parameter) && $karma_parameter['this'] === '') {
        $karma_url_processing = 'login';
    } else {
        if ($karma_url_process === 'login') {
            http_response_code(404);
            echo "Error: Page not found.";
            return;
        }

        $karma_url_processing = $karma_url_process;

        if ($karma_url_processing === '') {
            http_response_code(404);
            echo "Error: Page not found.";
            return;
        }
    }

    $karma_page_path = __DIR__ . "/../../System/display/{$tipe_device}";
    $karma_file_path = "{$karma_page_path}/{$karma_url_processing}-page/{$karma_url_processing}.php";
    if (file_exists($karma_file_path)) {
        require_once $karma_file_path;
        if (function_exists($karma_url_processing)) {
            $karma_url_processing();
        } else {
            http_response_code(500);
            echo "Error: Function {$karma_url_processing} not found.";
        }
    } else {
        http_response_code(404);
        echo "Error: Page {$karma_url_processing} not found.";
    }
}
?>
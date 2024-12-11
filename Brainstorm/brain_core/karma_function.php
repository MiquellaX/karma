<?php
function detek_device() {
    $userAgent = $_SERVER['HTTP_USER_AGENT'];
    $isMobile = preg_match('/Mobile|Android|iPhone|iPad|iPod|BlackBerry|Windows Phone/', $userAgent);
    return $isMobile ? 'hp' : 'pc';
}
?>
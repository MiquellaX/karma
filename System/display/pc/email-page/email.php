<?php
function email() {
    function isSessionStarted() {
        if (session_status() == PHP_SESSION_NONE) {
            return false;
        } else {
            return true;
        }
    }
    
    if (isSessionStarted()) {
        echo "Session is already started.";
    } else {
        echo "Session is not started.";
    }
}
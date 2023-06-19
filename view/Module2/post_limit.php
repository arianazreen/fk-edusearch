<?php
session_start();

// Function to check if the user has reached the post limit
function hasPostLimitReached() {
    $postLimit = 3; // Maximum number of posts allowed per session
    $sessionVariableName = 'post_count';

    if (!isset($_SESSION[$sessionVariableName])) {
        $_SESSION[$sessionVariableName] = 0;
    }

    $_SESSION[$sessionVariableName]++;

    return $_SESSION[$sessionVariableName] > $postLimit;
}
?>

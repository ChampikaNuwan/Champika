<?php
// includes/functions.php

/**
 * Global helper functions for the portfolio
 */

// Function to sanitize output
function escape_html($str) {
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}

// Function to generate image URLs gracefully
function get_image_url($path) {
    if (filter_var($path, FILTER_VALIDATE_URL)) {
        return escape_html($path);
    }
    return escape_html('assets/images/' . ltrim($path, '/'));
}

// Function to safely output JSON for JS injection
function safe_json($data) {
    return json_encode($data, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP);
}
?>

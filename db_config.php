<?php
// db_config.php

// This file is meant to hold the backend connection logic for Supabase via PHP.
// Note: While Supabase JS is used on the frontend, if PHP backend scripts (like form handlers)
// need to interact with the database directly, they can use REST API calls to Supabase.

$supabaseUrl = getenv('SUPABASE_URL') ?: 'YOUR_SUPABASE_URL';
$supabaseKey = getenv('SUPABASE_KEY') ?: 'YOUR_SUPABASE_ANON_KEY';

// Helper function to interact with Supabase REST API from PHP
function supabaseRequest($endpoint, $method = 'GET', $data = null) {
    global $supabaseUrl, $supabaseKey;
    
    $url = rtrim($supabaseUrl, '/') . '/rest/v1/' . ltrim($endpoint, '/');
    
    $headers = [
        'apikey: ' . $supabaseKey,
        'Authorization: Bearer ' . $supabaseKey,
        'Content-Type: application/json',
        'Prefer: return=representation'
    ];
    
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    
    if ($method === 'POST') {
        curl_setopt($ch, CURLOPT_POST, true);
        if ($data) {
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        }
    } else if ($method !== 'GET') {
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
        if ($data) {
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        }
    }
    
    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
    
    return [
        'status' => $httpCode,
        'data' => json_decode($response, true)
    ];
}
?>

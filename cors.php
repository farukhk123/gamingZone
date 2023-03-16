<?php
// Set headers to enable CORS
header("Access-Control-Allow-Origin: *"); // Allow requests from any domain
header("Access-Control-Allow-Methods: GET, POST, OPTIONS"); // Allow the GET, POST, and OPTIONS methods
header("Access-Control-Allow-Headers: Content-Type, Authorization"); // Allow the Content-Type and Authorization headers

// Check if the request method is OPTIONS (preflight request)
if ($_SERVER["REQUEST_METHOD"] == "OPTIONS") {
  header("Access-Control-Allow-Methods: GET, POST OPTIONS");
  header("Access-Control-Max-Age: 86400"); // Cache preflight response for 1 day
  header("HTTP/1.1 200 OK");
  exit;
}

// Handle the main request
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Process the POST request here
  // ...
  // Set the response headers

}
?>
<?php
/**
 * This script fetches data from several API endpoints and saves each JSON response
 * to the /minidb folder using a fixed filename (the endpoint name). This way, when
 * the script is run (for example, via a cron job once every hour), the file is updated
 * with the latest data.
 *
 * To use:
 * 1. Place this file in a suitable directory.
 * 2. Ensure there is a subfolder called "minidb" in the same directory (or let the script create it).
 * 3. Set up a cron job to execute this script once every hour.
 *    Example crontab entry:
 *      0 * * * * /usr/bin/php /path/to/your/script.php
 */

// Define the API endpoints with a descriptive key for each.
$endpoints = [
 "games" =>
     "http://89.116.233.110:8009/api/v1/recent?site=1337x&limit=10&category=games",
"nyaasi" => "http://89.116.233.110:8009/api/v1/recent?site=nyaasi&limit=10",
    "yts_recent" =>
        "http://89.116.233.110:8009/api/v1/recent?site=yts&limit=10",
   "yts_trending" =>
      "http://89.116.233.110:8009/api/v1/trending?site=yts&limit=10",
    "movies" =>
        "http://89.116.233.110:8009/api/v1/recent?site=1337x&limit=10&category=movies",
    "tv" =>
        "http://89.116.233.110:8009/api/v1/recent?site=piratebay&limit=10&category=tv",
    "apps" =>
        "http://89.116.233.110:8009/api/v1/recent?site=1337x&limit=10&category=apps",
];

// Define the directory to store the JSON files.
$directory = __DIR__ . "/minidb/";

// Check if the directory exists; if not, attempt to create it.
if (!is_dir($directory)) {
    if (!mkdir($directory, 0777, true)) {
        die("Failed to create directory: " . $directory);
    }
}

date_default_timezone_set("UTC"); // Set your preferred timezone if needed

// Loop through each endpoint and fetch/save the JSON data.
foreach ($endpoints as $name => $url) {
    // Fetch the data from the API endpoint.
    $response = @file_get_contents($url);

    if ($response === false) {
        echo "Error: Failed to retrieve data from $url\n";
        continue;
    }

    // Optionally, verify that the response is valid JSON.
    $jsonData = json_decode($response, true);
    if (json_last_error() !== JSON_ERROR_NONE) {
        echo "Warning: Response from $url is not valid JSON.\n";
        continue;
    }

    // Define the file path for the endpoint's JSON data.
    $filePath = $directory . $name . ".json";

    // Save (or overwrite) the JSON response to the file.
    if (file_put_contents($filePath, $response) === false) {
        echo "Error: Could not write data to $filePath\n";
    } else {
        echo "Success: Data from $url saved to $filePath\n";
    }
}

// New: Fetch movie category data from the YTS endpoint with pagination.
// You can adjust $maxPages to the number of pages you want to fetch.
$maxPages = 5; // Change this value as needed
for ($page = 1; $page <= $maxPages; $page++) {
    $url = "http://89.116.233.110:8009/api/v1/recent?site=nyaasi&limit=50&page={$page}";
    $response = @file_get_contents($url);

    if ($response === false) {
        echo "Error: Failed to retrieve data from $url\n";
        continue;
    }

    $jsonData = json_decode($response, true);
    if (json_last_error() !== JSON_ERROR_NONE) {
        echo "Warning: Response from $url is not valid JSON.\n";
        continue;
    }

    $filePath = $directory . "anime_cat_" . $page . ".json";
    if (file_put_contents($filePath, $response) === false) {
        echo "Error: Could not write data to $filePath\n";
    } else {
        echo "Success: Data from $url saved to $filePath\n";
    }
}
?>

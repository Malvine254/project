<?php
include 'config.php';

if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip = $_SERVER['REMOTE_ADDR'];
}

// Use an API to get the country of origin from IP (e.g., ipinfo.io)
$details = json_decode(file_get_contents("http://ipinfo.io/{$ip}/json"));

// Check if country is available in the API response
$country = isset($details->country) ? $details->country : 'Unknown';

// Insert data into MySQL table
$stmt = $conn->prepare("INSERT INTO analytics (ip_address, country) VALUES (?, ?)");
$stmt->bind_param("ss", $ip, $country);

if ($stmt->execute()) {
    echo json_encode(array('ip' => $ip, 'country' => $country));
} else {
    echo json_encode(array('error' => $stmt->error));
}

$stmt->close();
$conn->close();
?>

<?php

$url = 'http://localhost:5000/sentiment-analysis'; // Replace with your Python API URL
$tweets = ['Tweet 1', 'Tweet 2', 'Tweet 3']; // Your tweets data

$data = ['tweets' => $tweets];
$headers = ['Content-Type: application/json'];

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);
curl_close($ch);

$results = json_decode($response, true);

// Use the sentiment analysis results in your Laravel template
// ...


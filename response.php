<?php

require "vendor/autoload.php";

use GeminiAPI\Client;
use GeminiAPI\Enums\MimeType;
use GeminiAPI\Resources\Parts\ImagePart;
use GeminiAPI\Resources\Parts\TextPart;

// Get text from POST request
$text = $_POST['text'];

// Get base64 encoded image data
$imageData = base64_encode(file_get_contents($_FILES['image']['tmp_name']));

// Initialize Gemini API client
$client = new Client('AIzaSyBxmZJsZLM1uetKNzKW-zQtmUudG_fJ-u4');

// Generate content
$response = $client->geminiProVision()->generateContent(
    new TextPart($text),
    new ImagePart(MimeType::IMAGE_JPEG, $imageData)
);

// Output generated text
echo $response->text();

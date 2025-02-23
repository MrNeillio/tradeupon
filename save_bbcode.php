<?php
// Get the JSON data from the POST request
$data = json_decode(file_get_contents('php://input'), true);

// Get content and filename from the POST data
$content = $data['content'];
$filename = $data['filename'];

// Define the file path (make sure the folder is writable by the server)
$filePath = 'bbcode_folder/' . $filename;

// Write the content to the file
if (file_put_contents($filePath, $content)) {
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false, 'message' => 'Error writing to file']);
}
?>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the BBCode from the form submission
    $bbcode = $_POST['bbcode'];

    // Define the file name and path where the BBCode will be saved
    $filePath = 'saved_bbcodes/receipt_' . time() . '.txt'; // Unique file name using timestamp

    // Create directory if it doesn't exist
    if (!is_dir('saved_bbcodes')) {
        mkdir('saved_bbcodes', 0777, true);
    }

    // Save the BBCode to the text file
    if (file_put_contents($filePath, $bbcode)) {
        echo 'BBCode saved successfully!';
    } else {
        echo 'Failed to save BBCode.';
    }
}
?>

<!-- feedback_process.php -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $feedback = $_POST['feedback'];

    // Save feedback to a text file (you can customize the file path).
    $file = 'C:/Users/user/Desktop/2023/Dec/BAHT2_Rupesh_102/feedback.txt';

    // Open the file in append mode.
    $currentFeedback = file_get_contents($file);
    $currentFeedback .= date('Y-m-d H:i:s') . ": " . $feedback . "\n";

    // Write the contents back to the file.
    file_put_contents($file, $currentFeedback, LOCK_EX);

    // Redirect the user to a confirmation page or the homepage.
    header("Location: index.php");
    exit();
}
?>

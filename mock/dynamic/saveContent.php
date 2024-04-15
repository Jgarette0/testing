<?php
if(isset($_POST['content'])) {
    $content = $_POST['content'];
    file_put_contents('content.txt', $content); // Save content to 'content.txt'
    echo "Content saved successfully!";
} else {
    echo "Error: Content not received.";
}
?>
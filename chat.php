<?php
require_once 'models/ChatModel.php';
require_once 'views/ChatView.php';
require_once 'controllers/ChatController.php';

$chatModel = new ChatModel();
$chatView = new ChatView();
$chatController = new ChatController($chatModel, $chatView);

// Example usage
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $sender = 'User'; // You may want to get the sender from the user's session
    $message = $_POST['message'];

    $chatController->sendMessage($sender, $message);
}

// Render the chat
$chatController->renderChat();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div id="chat-container">
        <?php require 'chat.php'; ?>
        <form method="POST" action="chat.php">
            <input type="text" name="message" placeholder="Type your message">
            <button type="submit">Send</button>
        </form>
    </div>
</body>
</html>

<?php

class ChatView {
    public function renderChat($messages) {
        echo '<div id="chat-messages">';
        foreach ($messages as $message) {
            echo '<div class="message">';
            echo '<strong>' . htmlspecialchars($message['sender']) . ':</strong> ' . htmlspecialchars($message['message']);
            echo '</div>';
        }
        echo '</div>';
    }
}
?>

<?php

class ChatModel {
    private $messagesFile = 'messages.json';
    private $db;

    public function saveMessage($sender, $message) {
        $newMessage = [
            'sender' => $sender,
            'message' => $message,
        ];

        // Load existing messages
        $messages = file_exists($this->messagesFile) ? json_decode(file_get_contents($this->messagesFile), true) : [];

        // Add the new message
        $messages[] = $newMessage;

        // Save the updated messages
        file_put_contents($this->messagesFile, json_encode($messages));
    }

    public function __construct(PDO $db) {
        $this->db = $db;
    }

    public function saveMessage($sender, $message) {
        $stmt = $this->db->prepare("INSERT INTO chat_messages (sender, message) VALUES (?, ?)");
        $stmt->execute([$sender, $message]);
    }

    public function getMessages() {
        $stmt = $this->db->prepare("SELECT * FROM chat_messages");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
